USE exampledb;

CREATE TABLE IF NOT EXISTS board(
    id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(45) NOT NULL,
    body TEXT,
    created DATETIME NOT NULL,
    user_id INT NOT NULL,
    PRIMARY KEY(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS userinfo(
    id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    userpw VARCHAR(60) NOT NULL,
    PRIMARY KEY(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO userinfo(username, userpw)
VALUES ('root','sudo')