<?php
  
  session_start();
  include 'pdo_connect.php';

  // Check if the form was submitted
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $objectId = $_POST['review-objectid'];
    $userId = $_POST['review-userid'];
    $rating = $_POST['submit-rating'];
    $desc = $_POST['review-description'];

    // Insert into DB
    $query = 'INSERT INTO `reviews` (`rating`, `review`, `userId`, `objectId`) VALUES (?,?,?,?)';
    $params = array($rating, $desc, $userId, $objectId);
    $results = dataQuery($query, $params);

    echo '<script>
      alert("Review submitted successfully!!");
      window.location.href="../individual_object_page.php?objectId='.$objectId.'";
    </script>';
  }
  
?>