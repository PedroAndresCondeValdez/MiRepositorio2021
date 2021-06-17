/** Creamos la tabla professor que sera utilizada en la aplicacion
    MySql Workbench, lo cual nos ayudara a hacer todo el codigo
    Implementando los datos que nos pidio
    */
CREATE TABLE professor
(id INT NOT NULL AUTO_INCREMENT,
 first_name VARCHAR(50),
 last_name VARCHAR(50),
 city VARCHAR(50),
 years_experience INT,
 salary DECIMAL(10, 2),
 PRIMARY KEY(id))
ENGINE InnoDB;
