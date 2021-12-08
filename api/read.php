<?php 
    // required headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include_once '../config/Database.php';
    include_once '../models/Object.php';

    // Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();

    // Instantiate blog object object
    $object = new Object($db);

    // individual object query
    $result = $object->read();
    // Get row count
    $num = $result->rowCount();

    // Check if any objects
    if($num > 0) {
        // object array
        $objects_arr = array();

        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            extract($row);

            $object_item = array(
                'objectId' => $objectId,
                'objectName' => $objectName,
                'description' => $description
            );

            // Push to "data"
            array_push($objects_arr, $object_item);
        }

        // Turn to JSON & output
        echo json_encode($objects_arr);

    } else {
        // No objects
        echo json_encode(
        array('message' => 'No objects Found')
        );
    }

?>