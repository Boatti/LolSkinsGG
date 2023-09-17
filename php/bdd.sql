CREATE DATABASE fruit;

CREATE TABLE likes
(
    ip CHAR(15) NOT NULL,
    fruit INT UNSIGNED NOT NULL,
    CONSTRAINT PK_likes PRIMARY KEY (ip, fruit)
) ENGINE = InnoDB;