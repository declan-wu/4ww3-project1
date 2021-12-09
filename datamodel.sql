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