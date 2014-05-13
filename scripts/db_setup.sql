/* Run with: mysql < db_setup.txt */

CREATE SCHEMA IF NOT EXISTS wedding_db;

USE wedding_db;
SELECT '<Starting DB startup kit...>' AS ' ';

SELECT '<Creating table guest_list...>' AS ' ';
CREATE TABLE guest_list (
    guest_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    guest_name VARCHAR(50) NOT NULL DEFAULT '',
    rsvp TINYINT(1) DEFAULT NULL,
    num_guests INT NOT NULL DEFAULT 0,
    comments VARCHAR(255) DEFAULT NULL 
);

SELECT '<Inserting guest list into table...>' AS ' ';
INSERT INTO guest_list (guest_name) VALUES
('jack nemergut'),
('kathy nemergut');

