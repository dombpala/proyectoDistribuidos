DROP DATABASE IF EXISTS gestion_mascotas;
CREATE DATABASE gestion_mascotas;
USE gestion_mascotas;

CREATE TABLE `gestion_mascotas`.`persona` (
  `cedula` VARCHAR(10) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `fechaNacimiento` DATE NOT NULL,
  `tipo` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`cedula`));

CREATE TABLE `gestion_mascotas`.`voluntario` (
  `id_persona` VARCHAR(10) NOT NULL,
  `tipo` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`id_persona`),
  CONSTRAINT `id_persona`
    FOREIGN KEY (`id_persona`)
    REFERENCES `gestion_mascotas`.`persona` (`cedula`)
);

CREATE TABLE `gestion_mascotas`.`donacion` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fecha` DATE NOT NULL,
  `id_donante` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `id_donante_idx` (`id_donante` ASC) VISIBLE,
  CONSTRAINT `id_donante`
    FOREIGN KEY (`id_donante`)
    REFERENCES `gestion_mascotas`.`persona` (`cedula`)
);

CREATE TABLE `gestion_mascotas`.`donacion_item` (
  `id_donacion` INT NOT NULL,
  `id` INT NOT NULL,
  `descripcion` VARCHAR(120) NOT NULL,
  `cantidad` INT NOT NULL,
  PRIMARY KEY (`id_donacion`, `id`),
  CONSTRAINT `id_donacion`
    FOREIGN KEY (`id_donacion`)
    REFERENCES `gestion_mascotas`.`donacion` (`id`)
);

CREATE TABLE `gestion_mascotas`.`mascota` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `edad` INT NOT NULL,
  `especie` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`id`)
);
  
CREATE TABLE `gestion_mascotas`.`adopcion` (
  `id_duenio` VARCHAR(10) NOT NULL,
  `id_mascota` INT NOT NULL,
  `fecha` DATE NOT NULL,
  PRIMARY KEY (`id_duenio`, `id_mascota`),
  INDEX `id_mascota_idx` (`id_mascota` ASC) VISIBLE,
  CONSTRAINT `id_duenio`
    FOREIGN KEY (`id_duenio`)
    REFERENCES `gestion_mascotas`.`persona` (`cedula`),
  CONSTRAINT `id_mascota`
    FOREIGN KEY (`id_mascota`)
    REFERENCES `gestion_mascotas`.`mascota` (`id`)
);


