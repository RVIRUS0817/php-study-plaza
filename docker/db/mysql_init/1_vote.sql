CREATE DATABASE vote CHARACTER SET utf8mb4;
use vote;

CREATE TABLE vote_counts (
    id INT(11) AUTO_INCREMENT NOT NULL,
    yes_count INT(11) NOT NULL,
    no_count INT(11) NOT NULL,
    PRIMARY KEY (id)
) DEFAULT CHARSET=utf8mb4;
