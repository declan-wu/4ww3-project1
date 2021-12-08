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