CREATE TABLE tbl (
id INT(11) NOT NULL,
name TINYTEXT NOT NULL,
PRIMARY KEY (id)
);
INSERT INTO tbl VALUES (1, 'Видеоадаптеры');
INSERT INTO tbl VALUES (1, 'Видеоадаптеры');
----ERROR 1062 (23000): Duplicate entry '1' for key 1 