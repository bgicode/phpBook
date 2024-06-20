CREATE TABLE catalogs (
catalog_id int(11) NOT NULL AUTO_INCREMENT,
name tinytext NOT NULL,
PRIMARY KEY (catalog_id)
);
INSERT INTO catalogs VALUES (NULL, 'Процессоры'),
(NULL, 'Материнские платы'),
(NULL, 'Видеоадаптеры'),
(NULL, 'Жесткие диски'),
(NULL, 'Оперативная память');