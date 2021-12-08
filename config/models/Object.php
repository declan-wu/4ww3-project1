<?php 
class Object {
    // DB stuff
    private $conn;
    private $table = 'Objects';

    // Object Properties
    public $objectId;
    public $objectName;
    public $latitude;
    public $longitude;
    public $description;
    public $image;
    public $video;
    public $ratingSum; # to calculate ratings
    public $reviews; # array holds list of reviews for a specific object

    // Constructor with DB
    public function __construct($db) {
        $this->conn = $db;
    }

    // Get All Objects
    public function read() {
        // Create query
        $query = 'SELECT objectId, objectName, description FROM ' . $this->table;
        // $query = 'SELECT objectId, objectName, description FROM Objects';

        // Prepare statement
        $stmt = $this->conn->prepare($query);

        // Execute query
        $stmt->execute();

        return $stmt;
    }

    // // Get Single Object
    // public function read_single_object() {
    //     // Create query
    //     $query = 'SELECT objectName, longitude, latitude, image, video
    //             FROM ' . $this->table . ' WHERE p.id = ?';

    //     // Prepare statement
    //     $stmt = $this->conn->prepare($query);

    //     // Bind ID
    //     $stmt->bindParam(1, $this->id);

    //     // Execute query
    //     $stmt->execute();

    //     $row = $stmt->fetch(PDO::FETCH_ASSOC);

    //     // Set properties
    //     $this->objectName = $row['objectName'];
    //     $this->longitude = $row['longitude'];
    //     $this->latitude = $row['latitude'];
    //     $this->image = $row['image'];
    //     $this->video = $row['video'];
    //     $this->reviews = array();

    // }

    // // Create Object
    // public function create() {
    //     // Create query
    //     $query = 'INSERT INTO ' . $this->table . ' SET objectName = :objectName, latitude = :latitude, longitude = :longitude, image = :image, video = :video'; 

    //     // Prepare statement
    //     $stmt = $this->conn->prepare($query);

    //     // Clean data
    //     $this->title = htmlspecialchars(strip_tags($this->title));
    //     $this->body = htmlspecialchars(strip_tags($this->body));
    //     $this->author = htmlspecialchars(strip_tags($this->author));
    //     $this->category_id = htmlspecialchars(strip_tags($this->category_id));

    //     // Bind data
    //     $stmt->bindParam(':title', $this->title);
    //     $stmt->bindParam(':body', $this->body);
    //     $stmt->bindParam(':author', $this->author);
    //     $stmt->bindParam(':category_id', $this->category_id);

    //     // Execute query
    //     if($stmt->execute()) {
    //         return true;
    //     }

    //     // Print error if something goes wrong
    //     printf("Error: %s.\n", $stmt->error);
    //     return false;
    // }

}