<?php
  // from: https://www.tutsmake.com/upload-file-to-aws-s3-bucket-in-php/
  // with slight modifications
  
  require 'vendor/autoload.php';
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

  // Check if the form was submitted
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["object-picture"]) && $_FILES["object-picture"]["error"] == 0){

      $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
      $filename = $_FILES["object-picture"]["name"];
      $filetype = $_FILES["object-picture"]["type"];
      $filesize = $_FILES["object-picture"]["size"];
      // Validate file extension
      $ext = pathinfo($filename, PATHINFO_EXTENSION);

      if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
      // Validate file size - 10MB maximum
      $maxsize = 10 * 1024 * 1024;

      if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
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
          echo "Image uploaded successfully. Image path is: ". $result->get('ObjectURL');
        } catch (Aws\S3\Exception\S3Exception $e) {
          echo "There was an error uploading the file.\n";
          echo $e->getMessage();
        }
        echo "Your file was uploaded successfully.";
      } else {
        echo "Error: There was a problem uploading your file. Please try again."; 
      }
    } else {
      echo "Error: " . $_FILES["object-picture"]["error"];
    }
  }
?>