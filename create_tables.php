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
$sql = "DROP TABLE IF EXISTS Reviews CASCADE;
        DROP TABLE IF EXISTS Objects CASCADE;
        DROP TABLE IF EXISTS Users CASCADE;
        CREATE TABLE Objects (
            objectId INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            objectName VARCHAR(100) UNIQUE,
            latitude DECIMAL(12,10) NOT NULL, 
            longitude DECIMAL(12,10) NOT NULL
        );
        CREATE TABLE Users (
            userId INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            firstName VARCHAR(30) NOT NULL,
            lastName VARCHAR(30) NOT NULL,
            email VARCHAR(70) NOT NULL UNIQUE
        );
        CREATE TABLE Reviews (
            reviewId INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            rating INT NOT NULL,
            review VARCHAR(100),
            media VARCHAR(500),
            userId INT,
            objectId INT,
            FOREIGN KEY (userId) REFERENCES Users(userId),
            FOREIGN KEY (objectId) REFERENCES Objects(objectId)
        );
        INSERT INTO Objects(objectName, latitude, longitude) VALUES (\"McMaster\", 43.257998968, -79.917996328);
        INSERT INTO Users(firstName, lastName, email) VALUES (\"DREW\", \"HIGGINS\", \"dhiggins@mcmaster.ca\");
        INSERT INTO Users(firstName, lastName, email) VALUES (\"VINCE\", \"LEUNG\", \"leungv@mcmaster.ca\");
        INSERT INTO Users(firstName, lastName, email) VALUES (\"PAUL\", \"HEEREMA\", \"heeremp@mcmaster.ca\");
        INSERT INTO Users(firstName, lastName, email) VALUES (\"JAMES\", \"LEACH\", \"leach@mcmaster.ca\");
        INSERT INTO Users(firstName, lastName, email) VALUES (\"GEORGIOS\", \"BALOMENOS\", \"balomeng@mcmaster.ca\");
        INSERT INTO Users(firstName, lastName, email) VALUES (\"MOHAMED\", \"HUSSEIN\", \"husseinmo@mcmaster.ca\");
        INSERT INTO Users(firstName, lastName, email) VALUES (\"MOATAZ\", \"MOHAMED\", \"mmohame@mcmaster.ca\");
        INSERT INTO Users(firstName, lastName, email) VALUES (\"YOUNGGY\", \"KIM\", \"younggy@mcmaster.ca\");
        INSERT INTO Users(firstName, lastName, email) VALUES (\"YIPING\", \"GUO\", \"guoy@mcmaster.ca\");
        INSERT INTO Users(firstName, lastName, email) VALUES (\"ANDREE\", \"WIEBE\", \"wiebel@mcmaster.ca\");
        INSERT INTO Users(firstName, lastName, email) VALUES (\"NICOLA\", \"NICOLICI\", \"nicola@ece.mcmaster.ca\");
        INSERT INTO Reviews(rating, review, media, userId, objectId) VALUES (5, \"good\", \"\", (SELECT userId FROM Users WHERE email = \"dhiggins@mcmaster.ca\"), (SELECT ObjectId FROM Objects WHERE objectName ='McMaster'));
        INSERT INTO Reviews(rating, review, media, userId, objectId) VALUES (5, \"good\", \"\", (SELECT userId FROM Users WHERE email = \"leungv@mcmaster.ca\"), (SELECT ObjectId FROM Objects WHERE objectName ='McMaster'));
        INSERT INTO Reviews(rating, review, media, userId, objectId) VALUES (5, \"good\", \"\", (SELECT userId FROM Users WHERE email = \"heeremp@mcmaster.ca\"), (SELECT ObjectId FROM Objects WHERE objectName ='McMaster'));
";

if ($conn->multi_query($sql) === TRUE) {
    echo "Tables created successfully";
} else {
    echo "Error creating tables: " . $conn->error;
}

$conn->close();
?>
