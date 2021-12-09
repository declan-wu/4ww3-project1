<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "DROP TABLE IF EXISTS reviews CASCADE;
        DROP TABLE IF EXISTS objects CASCADE;
        DROP TABLE IF EXISTS users CASCADE;
        CREATE TABLE objects (
            objectId INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            objectName VARCHAR(100) UNIQUE,
            latitude DECIMAL(12,10) NOT NULL, 
            longitude DECIMAL(12,10) NOT NULL,
            rating INT,
            description VARCHAR(255),
            pictureUrl VARCHAR(100),
            videoUrl VARCHAR(100)
        );
        CREATE TABLE users (
            userId INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            firstName VARCHAR(30) NOT NULL,
            lastName VARCHAR(30) NOT NULL,
            email VARCHAR(70) NOT NULL UNIQUE,
            password VARCHAR(80),
            gender VARCHAR(10)
        );
        CREATE TABLE reviews (
            reviewId INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            rating INT NOT NULL,
            review VARCHAR(100),
            media VARCHAR(500),
            userId INT,
            objectId INT,
            FOREIGN KEY (userId) REFERENCES users(userId),
            FOREIGN KEY (objectId) REFERENCES objects(objectId)
        );
        INSERT INTO objects(objectName, latitude, longitude, rating) VALUES ('McMaster', 43.257998968, -79.917996328, 5);
        INSERT INTO objects(objectName, latitude, longitude, rating) VALUES ('McDonals', 43.257998968, -79.917996328, 4);
        INSERT INTO objects(objectName, latitude, longitude, rating) VALUES ('Tims', 43.257998968, -79.917996328, 3);
        INSERT INTO objects(objectName, latitude, longitude, rating) VALUES ('Subway', 43.257998968, -79.917996328, 2);
        INSERT INTO objects(objectName, latitude, longitude, rating) VALUES ('Pinks', 43.257998968, -79.917996328, 1);
        INSERT INTO users(firstName, lastName, email) VALUES (\"DREW\", \"HIGGINS\", \"dhiggins@mcmaster.ca\");
        INSERT INTO users(firstName, lastName, email) VALUES (\"VINCE\", \"LEUNG\", \"leungv@mcmaster.ca\");
        INSERT INTO users(firstName, lastName, email) VALUES (\"PAUL\", \"HEEREMA\", \"heeremp@mcmaster.ca\");
        INSERT INTO users(firstName, lastName, email) VALUES (\"JAMES\", \"LEACH\", \"leach@mcmaster.ca\");
        INSERT INTO users(firstName, lastName, email) VALUES (\"GEORGIOS\", \"BALOMENOS\", \"balomeng@mcmaster.ca\");
        INSERT INTO users(firstName, lastName, email) VALUES (\"MOHAMED\", \"HUSSEIN\", \"husseinmo@mcmaster.ca\");
        INSERT INTO users(firstName, lastName, email) VALUES (\"MOATAZ\", \"MOHAMED\", \"mmohame@mcmaster.ca\");
        INSERT INTO users(firstName, lastName, email) VALUES (\"YOUNGGY\", \"KIM\", \"younggy@mcmaster.ca\");
        INSERT INTO users(firstName, lastName, email) VALUES (\"YIPING\", \"GUO\", \"guoy@mcmaster.ca\");
        INSERT INTO users(firstName, lastName, email) VALUES (\"ANDREE\", \"WIEBE\", \"wiebel@mcmaster.ca\");
        INSERT INTO users(firstName, lastName, email) VALUES (\"NICOLA\", \"NICOLICI\", \"nicola@ece.mcmaster.ca\");
        INSERT INTO reviews(rating, review, media, userId, objectId) VALUES (5, \"good\", \"\", (SELECT userId FROM users WHERE email = \"dhiggins@mcmaster.ca\"), (SELECT ObjectId FROM objects WHERE objectName ='McMaster'));
        INSERT INTO reviews(rating, review, media, userId, objectId) VALUES (5, \"good\", \"\", (SELECT userId FROM users WHERE email = \"leungv@mcmaster.ca\"), (SELECT ObjectId FROM objects WHERE objectName ='McMaster'));
        INSERT INTO reviews(rating, review, media, userId, objectId) VALUES (5, \"good\", \"\", (SELECT userId FROM users WHERE email = \"heeremp@mcmaster.ca\"), (SELECT ObjectId FROM objects WHERE objectName ='McMaster'));
";

if ($conn->multi_query($sql) === TRUE) {
    echo "Tables created successfully";
} else {
    echo "Error creating tables: " . $conn->error;
}

$conn->close();
?>
