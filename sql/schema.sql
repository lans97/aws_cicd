CREATE TABLE IF NOT EXISTS `Usuario` (
  `ID_Usuario` int NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `A_Paterno` varchar(20) NOT NULL,
  `A_Materno` varchar(20) DEFAULT NULL,
  `Correo` varchar(200) NOT NULL,
  `Tipo` int(11) NOT NULL,
  PRIMARY KEY (`ID_Usuario`)
);

CREATE TABLE IF NOT EXISTS `Marca` (
    `ID_Marca` int NOT NULL AUTO_INCREMENT,
    `Nombre` varchar(20) NOT NULL,
    PRIMARY KEY (`ID_Marca`)
);

CREATE TABLE IF NOT EXISTS `Equipo` (
    `ID_Equipo` int NOT NULL AUTO_INCREMENT,
    `ID_Marca` int,
    `Procesador` varchar(30) NOT NULL,
    `RAM` varchar(20) NOT NULL,
    `Disco_Duro` varchar(20) NOT NULL,
    `Existencia` int not null,
    PRIMARY KEY (`ID_Equipo`),
    FOREIGN KEY (`ID_Marca`) REFERENCES `Marca`(`ID_Marca`)
);

CREATE TABLE IF NOT EXISTS `Cliente` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(20) NOT NULL,
    `correo` VARCHAR(255) NOT NULL UNIQUE,
    PRIMARY KEY (`id`)
);