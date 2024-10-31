-- Select the database
USE ChanelPartyDB;

-- Create the names table with an auto-incrementing ID
CREATE TABLE names (
                       nameId INT AUTO_INCREMENT PRIMARY KEY,
                       name VARCHAR(255) NOT NULL
);
