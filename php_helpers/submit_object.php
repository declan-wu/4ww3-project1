<?php
  
  session_start();
  include 'pdo_connect.php';

  // s3 upload code from: https://www.tutsmake.com/upload-file-to-aws-s3-bucket-in-php/
  // (with slight modifications)
  
  require '../vendor/autoload.php';
  use Aws\S3\S3Client;

  // Instantiate an Amazon S3 client.
  $s3Client = new S3Client([
    'version' => 'latest',
    'region'  => 'us-east-2',
    'credentials' => [
      'key'    => getenv('AWS_KEY'),
      'secret' => getenv('AWS_SECRET')
    ]
  ]);

  $img_upload_err = false;
  $video_upload_err = false;
  $video_path = '';
  $img_path = '';

  // Check if the form was submitted
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    // ---------------------------------------------------
    // FIRST PART: UPLOAD PICTURE TO S3 BUCKET
    // ---------------------------------------------------
    // Check if file was uploaded & without errors
    if(isset($_FILES["object-picture"]) && $_FILES["object-picture"]["error"] == 0){
      $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
      $filename = $_FILES["object-picture"]["name"];
      $filetype = $_FILES["object-picture"]["type"];
      $filesize = $_FILES["object-picture"]["size"];
      // Validate file extension
      $ext = pathinfo($filename, PATHINFO_EXTENSION);

      if(!array_key_exists($ext, $allowed)) $img_upload_err = true;
      
      // Validate file size - 10MB maximum
      $maxsize = 10 * 1024 * 1024;

      if($filesize > $maxsize) $img_upload_err = true;

      // Validate type of the file
      if(in_array($filetype, $allowed)) {
        $bucket = '4ww3-restaurantfinder';
        $key = $_FILES['object-picture']['name'];
        try {
          $result = $s3Client->putObject([
            'Bucket' => $bucket,
            'Key'    => $key,
            'SourceFile' => $_FILES['object-picture']['tmp_name']
          ]);
          $img_path = $result->get('ObjectURL');
          // echo "Image uploaded successfully. Image path is: ". $result->get('ObjectURL');
        } catch (Aws\S3\Exception\S3Exception $e) {
          $img_upload_err = true;
        }
      } else {
        $img_upload_err = true;
      }
    } else {
      echo "no picture uploaded";
    }
    // ---------------------------------------------------
    // SECOND PART: UPLOAD VIDEO TO S3 BUCKET
    // ---------------------------------------------------
    if(isset($_FILES["object-video"]) && $_FILES["object-video"]["error"] == 0) {

      $video_upload_err = false;

      $allowed = array("mov" => "video/quicktime", "mp4" => "video/mp4", "gif" => "image/gif", "wmv" => "image/x-ms-wmv");
      $filename = $_FILES["object-video"]["name"];
      $filetype = $_FILES["object-video"]["type"];
      $filesize = $_FILES["object-video"]["size"];
      // Validate file extension
      $ext = pathinfo($filename, PATHINFO_EXTENSION);

      if(!array_key_exists($ext, $allowed)) $video_upload_err = true;
      // Validate file size - 100MB maximum
      $maxsize = 100 * 1024 * 1024;

      if($filesize > $maxsize) $video_upload_err = true;
      // Validate type of the file
      echo $filetype;
      if(in_array($filetype, $allowed)) {
        $bucket = '4ww3-restaurantfinder';
        $key = $_FILES['object-video']['name'];
        try {
          $result = $s3Client->putObject([
            'Bucket' => $bucket,
            'Key'    => $key,
            'SourceFile' => $_FILES['object-video']['tmp_name']
          ]);
          $video_path = $result->get('ObjectURL');
          // echo "Image uploaded successfully. Image path is: ". $result->get('ObjectURL');
        } catch (Aws\S3\Exception\S3Exception $e) {
          echo "AWS Exception";
          $video_upload_err = true;
        }
      } else {
        $video_upload_err = true;
      }
    } else {
      echo "no video uploaded";
    }

    // Check that there were no img/video upload errors
    if ($video_upload_err || $img_upload_err) {
      header("Location: ../submission.php?success=false");
    } else {
      // ---------------------------------------------------
      // THIRD PART: ADD TO DB IF NO ERRORS PREVIOUSLY
      // ---------------------------------------------------
      $name = $_POST['object-name'];
      $desc = $_POST['object-description'];
      $lat = $_POST['object-lat'];
      $long = $_POST['object-long'];
      
      // TODO: Verify that the restaurant doesn't already exist

      // Insert into DB
      $query = 'INSERT INTO `objects` (`objectName`, `description`, `latitude`, `longitude`, `pictureUrl`, `videoUrl`) VALUES (?,?,?,?,?,?)';
      $params = array($name, $desc, $lat, $long, $img_path, $video_path);
      $results = dataQuery($query, $params);

      header("Location: ../submission.php?success=true");
    }
  }
  
?>