-- Creating a 'reservations' table to store reservation details

CREATE TABLE reservations (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    date DATE NOT NULL,
    time TIME NOT NULL,
    people INT NOT NULL,
    requests TEXT
);
