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
        INSERT INTO objects(objectName, latitude, longitude, rating, description, pictureUrl, videoUrl) VALUES ('McMaster', 43.257998968, -79.917996328, 5, 'this is a good place', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Funsplash.com%2Fimages%2Ffood&psig=AOvVaw3TO6HYVoszthZ-wn8sG7e4&ust=1639100297854000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCOiw2MrK1fQCFQAAAAAdAAAAABAD', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Ftenor.com%2Fsearch%2Ffood-gifs&psig=AOvVaw3gyCT_c2SCFkUEyQDgnF83&ust=1639100476800000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCIjczKDL1fQCFQAAAAAdAAAAABAP');
        INSERT INTO objects(objectName, latitude, longitude, rating, description, pictureUrl) VALUES ('McDonals', 43.257998968, -79.917996328, 4, 'this is a good place', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.helpguide.org%2Farticles%2Fhealthy-eating%2Fhealthy-eating.htm&psig=AOvVaw3TO6HYVoszthZ-wn8sG7e4&ust=1639100297854000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCOiw2MrK1fQCFQAAAAAdAAAAABAY');
        INSERT INTO objects(objectName, latitude, longitude, rating, description, pictureUrl, videoUrl) VALUES ('Tims', 43.257998968, -79.917996328, 3, 'this is a good place', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.helpguide.org%2Farticles%2Fhealthy-eating%2Fhealthy-eating.htm&psig=AOvVaw3TO6HYVoszthZ-wn8sG7e4&ust=1639100297854000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCOiw2MrK1fQCFQAAAAAdAAAAABAY', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Ftenor.com%2Fsearch%2Ffood-gifs&psig=AOvVaw3gyCT_c2SCFkUEyQDgnF83&ust=1639100476800000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCIjczKDL1fQCFQAAAAAdAAAAABAP');
        INSERT INTO objects(objectName, latitude, longitude, rating, description, pictureUrl) VALUES ('Subway', 43.257998968, -79.917996328, 2, 'this is a good place', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.helpguide.org%2Farticles%2Fhealthy-eating%2Fhealthy-eating.htm&psig=AOvVaw3TO6HYVoszthZ-wn8sG7e4&ust=1639100297854000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCOiw2MrK1fQCFQAAAAAdAAAAABAY');
        INSERT INTO objects(objectName, latitude, longitude, rating, description, pictureUrl) VALUES ('Pinks', 43.257998968, -79.917996328, 1, 'this is a good place', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.helpguide.org%2Farticles%2Fhealthy-eating%2Fhealthy-eating.htm&psig=AOvVaw3TO6HYVoszthZ-wn8sG7e4&ust=1639100297854000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCOiw2MrK1fQCFQAAAAAdAAAAABAY');
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
