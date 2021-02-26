create database cruds;
USE cruds;
CREATE TABLE cruds.user_register (
	id_user integer auto_increment NOT null,
	username varchar(20) NOT NULL,
	email varchar(50) NOT NULL,
	passwd varchar(255) NOT NULL,
	creation_date TIMESTAMP DEFAULT current_timestamp() NOT NULL,
	CONSTRAINT user_register_pk PRIMARY KEY (id_user)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8
COLLATE=utf8_general_ci;

INSERT INTO cruds.user_register (username, email, passwd, creation_date) VALUES('', '', '', CURRENT_TIMESTAMP);



