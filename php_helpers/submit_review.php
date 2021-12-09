<?php
  
  session_start();
  include 'pdo_connect.php';

  // Check if the form was submitted
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $objectId = str_replace("/", "", $_POST['review-objectid']);
    $userId = str_replace("/", "", $_POST['review-userid']);
    $rating = $_POST['submit-rating'];
    $desc = $_POST['review-description'];

    // Insert into DB
    $query = 'INSERT INTO `reviews` (`rating`, `review`, `userId`, `objectId`) VALUES (?,?,?,?)';
    $params = array($rating, $desc, $userId, $objectId);
    $results = dataQuery($query, $params);

    // For some reason this code doesn't work in PHP script but works in phpmyadmin, not sure why?
    // Update our objects DB after inserting new review
    // $query = "SELECT AVG(rating), objectId AS averageRating FROM reviews WHERE objectId = ? GROUP BY objectId;";
    // echo $objectId;
    // $params = array($objectId);
    // $results = dataQuery($query, $params); 
    // $new_rating = $results[0]['averageRating']; 

    // // and update that in our database:
    // $query = "UPDATE objects SET rating = ? WHERE objectId = ?";
    // $params = array($new_rating, $objectId);


    echo '<script>
      alert("Review submitted successfully!!");
      window.location.href="../individual_object_page.php?objectId='.$objectId.'";
    </script>';
  }
  
?>