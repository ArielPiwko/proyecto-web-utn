#-------drop de tables viejas---------
DROP TABLE `imagen`;
DROP TABLE `producto_por_compra`;
DROP TABLE `producto`;
DROP TABLE `compra`;
DROP TABLE `beneficio`;
DROP TABLE `suscripcion`;
DROP TABLE `nivel_de_suscripcion`;
DROP TABLE `ejercicio_por_rutina`;
DROP TABLE `ejercicio`;
DROP TABLE `rutina`;
DROP TABLE `cliente_por_clase`;
DROP TABLE `cliente`;
DROP TABLE `entrenador_personal`;
DROP TABLE `horario`;
DROP TABLE `clase`;
DROP TABLE `profesor`;
DROP TABLE `usuario`;


#-------creacion de tablas---------


CREATE TABLE `gymriachuelo`.`usuario` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `remember_token` VARCHAR(255) NULL DEFAULT NULL,
  `nombre` VARCHAR(45) NULL,
  `apellido` VARCHAR(45) NULL,
  `fecha_de_nacimiento` DATE NULL,
  `email` VARCHAR(90) NULL,
  `telefono` INT NULL,
  `rol` INT NULL,
  PRIMARY KEY (`id`)
  );

CREATE TABLE `gymriachuelo`.`profesor` (
  `idprofesor` INT NOT NULL AUTO_INCREMENT,
  `idusuario` INT NOT NULL,
  `fecha_ingreso` DATE NULL,
  `salario` INT NULL,
  `estado` VARCHAR(45) NULL,
  PRIMARY KEY (`idprofesor`)
  );

CREATE TABLE `gymriachuelo`.`clase` (
  `idclase` INT NOT NULL AUTO_INCREMENT,
  `nombre_clase` VARCHAR(90) NULL,
  `idprofesor` INT NULL,
  `cupos` INT NULL,
  PRIMARY KEY (`idclase`)
  );

CREATE TABLE `gymriachuelo`.`horario` (
  `idhorario` INT NOT NULL AUTO_INCREMENT,
  `dia` VARCHAR(45) NULL,
  `hora_inicio` TIME NULL,
  `hora_fin` TIME NULL,
  `idclase` INT NULL,
  PRIMARY KEY (`idhorario`)
  );

CREATE TABLE `gymriachuelo`.`entrenador_personal` (
  `identrenador_personal` INT NOT NULL AUTO_INCREMENT,
  `idusuario` INT NULL,
  `fecha_ingreso` DATE NULL,
  `salario` INT NULL,
  `estado` VARCHAR(45) NULL,
  PRIMARY KEY (`identrenador_personal`)
  );

CREATE TABLE `gymriachuelo`.`cliente` (
  `idcliente` INT NOT NULL AUTO_INCREMENT,
  `altura` FLOAT NULL,
  `peso` FLOAT NULL,
  `identrenador` INT NULL,
  `idusuario` INT NULL,
  PRIMARY KEY (`idcliente`)
  );
  
  CREATE TABLE `gymriachuelo`.`cliente_por_clase` (
  `idcliente` INT NOT NULL,
  `idclase` INT NOT NULL,
  PRIMARY KEY (`idcliente`, `idclase`)
  );

  CREATE TABLE `gymriachuelo`.`rutina` (
  `idrutina` INT NOT NULL AUTO_INCREMENT,
  `idcliente` INT NULL,
  `rondas` INT NULL,
  `notas` VARCHAR(255) NULL,
  PRIMARY KEY (`idrutina`)
  );

CREATE TABLE `gymriachuelo`.`ejercicio` (
  `idejercicio` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `descripcion` VARCHAR(255) NULL,
  PRIMARY KEY (`idejercicio`)
);

CREATE TABLE `gymriachuelo`.`ejercicio_por_rutina` (
  `idrutina` INT NOT NULL,
  `idejercicio` INT NOT NULL,
  `repeticiones` INT NULL,
  `notas` VARCHAR(255) NULL,
  PRIMARY KEY (`idrutina`, `idejercicio`)
  );

CREATE TABLE `gymriachuelo`.`suscripcion` (
  `idsuscripcion` INT NOT NULL AUTO_INCREMENT,
  `idcliente` INT NULL,
  `idnivel` INT NULL,
  `fecha_de_ingreso` DATE NULL,
  `periodo` INT NULL,
  `estado` VARCHAR(45) NULL,
  PRIMARY KEY (`idsuscripcion`)
  );
  
  CREATE TABLE `gymriachuelo`.`nivel_de_suscripcion` (
  `idnivel_de_suscripcion` INT NOT NULL AUTO_INCREMENT,
  `rango_de_suscripcion` VARCHAR(45) NULL,
  `descuento` INT NULL,
  `costo_mensual` INT NULL,
  PRIMARY KEY (`idnivel_de_suscripcion`)
  );
  
  CREATE TABLE `gymriachuelo`.`beneficio` (
  `idbeneficio` INT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(255) NULL,
  `idnivel` INT NULL,
  PRIMARY KEY (`idbeneficio`)
  );

CREATE TABLE `gymriachuelo`.`compra` (
  `idcompra` INT NOT NULL AUTO_INCREMENT,
  `idcliente` INT NULL,
  `costo_total` FLOAT NULL,
  `tipo_de_pago` VARCHAR(45) NULL,
  `fecha_de_compra` DATETIME NULL,
  `fecha_de_entrega` DATETIME NULL,
  PRIMARY KEY (`idcompra`)
  );

CREATE TABLE `gymriachuelo`.`producto` (
  `idproducto` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(255) NULL,
  `descripcion` VARCHAR(255) NULL,
  `precio` FLOAT NULL,
  `stock` INT NULL,
  PRIMARY KEY (`idproducto`)
  );

CREATE TABLE `gymriachuelo`.`producto_por_compra` (
  `idcompra` INT NOT NULL,
  `idproducto` INT NOT NULL,
  `cantidad` INT NULL,
  PRIMARY KEY (`idcompra`, `idproducto`)
  );

CREATE TABLE `gymriachuelo`.`imagen` (
  `idimagen` INT NOT NULL AUTO_INCREMENT,
  `url` VARCHAR(255) NULL,
  `idproducto` INT NULL,
  PRIMARY KEY (`idimagen`)
  );


#-------creacion de FKS---------


  ALTER TABLE `gymriachuelo`.`profesor` 
ADD CONSTRAINT `tiene_un`
  FOREIGN KEY (`idusuario`)
  REFERENCES `gymriachuelo`.`usuario` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
  
  ALTER TABLE `gymriachuelo`.`clase` 
ADD CONSTRAINT `dada_por`
  FOREIGN KEY (`idprofesor`)
  REFERENCES `gymriachuelo`.`profesor` (`idprofesor`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `gymriachuelo`.`horario` 
ADD CONSTRAINT `es_de`
  FOREIGN KEY (`idclase`)
  REFERENCES `gymriachuelo`.`clase` (`idclase`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `gymriachuelo`.`cliente_por_clase` 
ADD CONSTRAINT `incluye`
  FOREIGN KEY (`idcliente`)
  REFERENCES `gymriachuelo`.`cliente` (`idcliente`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `en`
  FOREIGN KEY (`idclase`)
  REFERENCES `gymriachuelo`.`clase` (`idclase`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `gymriachuelo`.`entrenador_personal` 
ADD CONSTRAINT `es_un`
  FOREIGN KEY (`idusuario`)
  REFERENCES `gymriachuelo`.`usuario` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
##
ALTER TABLE `gymriachuelo`.`cliente` 
ADD CONSTRAINT `tiene_asignado`
  FOREIGN KEY (`identrenador`)
  REFERENCES `gymriachuelo`.`entrenador_personal` (`identrenador_personal`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `tiene_vinculado`
  FOREIGN KEY (`idusuario`)
  REFERENCES `gymriachuelo`.`usuario` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `gymriachuelo`.`rutina` 
ADD CONSTRAINT `pertenece_a`
  FOREIGN KEY (`idcliente`)
  REFERENCES `gymriachuelo`.`cliente` (`idcliente`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `gymriachuelo`.`ejercicio_por_rutina` 
ADD CONSTRAINT `incluye_un`
  FOREIGN KEY (`idejercicio`)
  REFERENCES `gymriachuelo`.`ejercicio` (`idejercicio`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `es_parte_de`
  FOREIGN KEY (`idrutina`)
  REFERENCES `gymriachuelo`.`rutina` (`idrutina`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `gymriachuelo`.`suscripcion` 
ADD CONSTRAINT `adquirida_por`
  FOREIGN KEY (`idcliente`)
  REFERENCES `gymriachuelo`.`cliente` (`idcliente`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `es_de_un`
  FOREIGN KEY (`idnivel`)
  REFERENCES `gymriachuelo`.`nivel_de_suscripcion` (`idnivel_de_suscripcion`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
  
  ALTER TABLE `gymriachuelo`.`beneficio` 
ADD CONSTRAINT `pertenece_a_un`
  FOREIGN KEY (`idnivel`)
  REFERENCES `gymriachuelo`.`nivel_de_suscripcion` (`idnivel_de_suscripcion`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
  
  ALTER TABLE `gymriachuelo`.`compra` 
ADD CONSTRAINT `hecha_por`
  FOREIGN KEY (`idcliente`)
  REFERENCES `gymriachuelo`.`cliente` (`idcliente`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `gymriachuelo`.`producto_por_compra` 
ADD CONSTRAINT `incluye_a_un`
  FOREIGN KEY (`idproducto`)
  REFERENCES `gymriachuelo`.`producto` (`idproducto`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `es_parte_de_una`
  FOREIGN KEY (`idcompra`)
  REFERENCES `gymriachuelo`.`compra` (`idcompra`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
  
ALTER TABLE `gymriachuelo`.`imagen` 
ADD CONSTRAINT `identifica_un`
  FOREIGN KEY (`idproducto`)
  REFERENCES `gymriachuelo`.`producto` (`idproducto`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;


#-------introduccion de datos---------

INSERT INTO `gymriachuelo`.`usuario` (`id`,`username`, `password`, `nombre`, `apellido`, `fecha_de_nacimiento`, `email`, `telefono`, `rol`) VALUES ('1','janedoe', '$2y$10$o8klHJ5x12tD1mQhGsUCIe78Uhspz4U4wFG.eIb/fUxks00KqeYfm', 'jane', 'doe', '1996-03-20', 'janedoe@gmail.com', '15467482', '1');
INSERT INTO `gymriachuelo`.`usuario` (`id`,`username`, `password`, `nombre`, `apellido`, `fecha_de_nacimiento`, `email`, `telefono`, `rol`) VALUES ('2','franbow', '$2y$10$hTZyRihMfBQzvRJSGNtmr.6d5DVpJd68iYiaXG/dqHSuQia6xPvh2', 'francisco', 'bow', '1990-11-11', 'franbow@gmail.com', '54654880', '1');
INSERT INTO `gymriachuelo`.`usuario` (`id`,`username`, `password`, `nombre`, `apellido`, `fecha_de_nacimiento`, `email`, `telefono`, `rol`) VALUES ('3','jocepeda', '$2y$10$7D/ZsfGGJQ2gvvnJy4nelefar.gP1tlLvtwkScvg41y5jqKor0.CC', 'jose', 'cepeda', '1980-10-30', 'jocepeda@hotmail.com', '27842540', '1');
INSERT INTO `gymriachuelo`.`usuario` (`id`,`username`, `password`, `nombre`, `apellido`, `fecha_de_nacimiento`, `email`, `telefono`, `rol`) VALUES ('4','adarose', '$2y$10$PJejLsMjZsK0WDatNy2OoOPU8ZLfaTXrppO0Df8QZtgbu6H2wbP4m', 'ada', 'rose', '1987-02-15', 'adarose2@hotmail.com', '56546546', '2');
INSERT INTO `gymriachuelo`.`usuario` (`id`,`username`, `password`, `nombre`, `apellido`, `fecha_de_nacimiento`, `email`, `telefono`, `rol`) VALUES ('5','luiscrossfit', '$2y$10$qpdBh.Hc1NFdER/LZTZiwOBa5GgZMn.bAJgQWyDjlJSTOcVawshkO', 'luis', 'crossfit', '1991-08-08', 'luiscrossfit@gmail.com', '15151098', '3');
INSERT INTO `gymriachuelo`.`usuario` (`id`,`username`, `password`, `nombre`, `apellido`, `fecha_de_nacimiento`, `email`, `telefono`, `rol`) VALUES ('6','admin', '$2y$10$s/MLREFEOA0x2Gl4Jbdal.uUQ5z9YBqabfTTTWuC12NFbuYQgVVfO', 'gym', 'owner', '1990-04-04', 'admin@gmail.com', '10000000', '4');
INSERT INTO `gymriachuelo`.`usuario` (`id`,`username`, `password`, `nombre`, `apellido`, `fecha_de_nacimiento`, `email`, `telefono`, `rol`) VALUES ('7','julianasosa', '$2y$10$tkPWf4lwcN9VO5XvNY2GP.Fis3k73JA6r7O.3MyV99.FKFUETJPWG', 'juliana', 'sosa', '1961-06-21', 'jusosa@gmail.com', '5446546', '3');
INSERT INTO `gymriachuelo`.`usuario` (`id`,`username`, `password`, `nombre`, `apellido`, `fecha_de_nacimiento`, `email`, `telefono`, `rol`) VALUES ('8','johnkong', '$2y$10$okalYZJHmB95AULTOwIl7.2lgrU1CFIpBWJWTGHCCxPPOoqScTqXe', 'john', 'kong', '1985-11-10', 'johnkong@gmail.com', '5446489', '3');
INSERT INTO `gymriachuelo`.`usuario` (`id`,`username`, `password`, `nombre`, `apellido`, `fecha_de_nacimiento`, `email`, `telefono`, `rol`) VALUES ('9','liomessi', '$2y$10$1ku912AEd4DoJ8d0dmDZC.IzHeL8kadFYIfxY3P527P2pDHZiP1kS', 'lionel', 'messi', '1987-06-24', 'liomessi@gmail.com', '10101010', '2');
#---passwords sin hash---
#'janedoe', 'janedoe235'
#'franbow', 'franbow777'
#'jocepeda', 'jocep50'
#'adarose', 'ad10ar'
#'luiscrossfit', 'luis2luis'
#'admin', 'admin1'
#'julianasosa', 'jusosa1'
#'johnkong', 'johnkong'
#'liomessi', 'liomessi10'

INSERT INTO `gymriachuelo`.`profesor` (`idprofesor`,`idusuario`, `fecha_ingreso`, `salario`, `estado`) VALUES ('1','5', '2020-03-10', '60000', 'activo');
INSERT INTO `gymriachuelo`.`profesor` (`idprofesor`,`idusuario`, `fecha_ingreso`, `salario`, `estado`) VALUES ('2','7', '2021-10-11', '89000', 'activo');
INSERT INTO `gymriachuelo`.`profesor` (`idprofesor`,`idusuario`, `fecha_ingreso`, `salario`, `estado`) VALUES ('3','8', '2020-09-25', '45700', 'activo');

INSERT INTO `gymriachuelo`.`clase` (`idclase`,`nombre_clase`, `idprofesor`, `cupos`) VALUES ('1','crossfit', '1', '15');
INSERT INTO `gymriachuelo`.`clase` (`idclase`,`nombre_clase`, `idprofesor`, `cupos`) VALUES ('2','crossfit', '1', '15');
INSERT INTO `gymriachuelo`.`clase` (`idclase`,`nombre_clase`, `idprofesor`, `cupos`) VALUES ('3','estiramiento', '1', '25');
INSERT INTO `gymriachuelo`.`clase` (`idclase`,`nombre_clase`, `idprofesor`, `cupos`) VALUES ('4','yoga', '2', '25');
INSERT INTO `gymriachuelo`.`clase` (`idclase`,`nombre_clase`, `idprofesor`, `cupos`) VALUES ('5','kick boxing', '3', '40');
INSERT INTO `gymriachuelo`.`clase` (`idclase`,`nombre_clase`, `idprofesor`, `cupos`) VALUES ('6','boxeo', '3', '18');

INSERT INTO `gymriachuelo`.`horario` (`idhorario`,`dia`, `hora_inicio`, `hora_fin`, `idclase`) VALUES ('1','lunes', '14:00', '16:00', '1');
INSERT INTO `gymriachuelo`.`horario` (`idhorario`,`dia`, `hora_inicio`, `hora_fin`, `idclase`) VALUES ('2','jueves', '14:00', '15:30', '2');
INSERT INTO `gymriachuelo`.`horario` (`idhorario`,`dia`, `hora_inicio`, `hora_fin`, `idclase`) VALUES ('3','jueves', '15:30', '16:00', '3');
INSERT INTO `gymriachuelo`.`horario` (`idhorario`,`dia`, `hora_inicio`, `hora_fin`, `idclase`) VALUES ('4','sabado', '07:00', '08:20', '4');
INSERT INTO `gymriachuelo`.`horario` (`idhorario`,`dia`, `hora_inicio`, `hora_fin`, `idclase`) VALUES ('5','martes', '11:30', '13:00', '5');
INSERT INTO `gymriachuelo`.`horario` (`idhorario`,`dia`, `hora_inicio`, `hora_fin`, `idclase`) VALUES ('6','viernes', '19:00', '21:00', '6');

INSERT INTO `gymriachuelo`.`entrenador_personal` (`identrenador_personal`,`idusuario`, `fecha_ingreso`, `salario`, `estado`) VALUES ('1','4', '2021-11-25', '45500', 'activo');
INSERT INTO `gymriachuelo`.`entrenador_personal` (`identrenador_personal`,`idusuario`, `fecha_ingreso`, `salario`, `estado`) VALUES ('2','9', '2022-10-12', '999999', 'activo');

INSERT INTO `gymriachuelo`.`cliente` (`idcliente`,`altura`, `peso`, `idusuario`) VALUES ('1','1.75', '172', '1');
INSERT INTO `gymriachuelo`.`cliente` (`idcliente`,`altura`, `peso`, `identrenador`, `idusuario`) VALUES ('2','1.80', '175', '1', '2');
INSERT INTO `gymriachuelo`.`cliente` (`idcliente`,`altura`, `peso`, `identrenador`, `idusuario`) VALUES ('3','1.62', '162', '1', '3');

INSERT INTO `gymriachuelo`.`cliente_por_clase` (`idcliente`, `idclase`) VALUES ('1', '1');
INSERT INTO `gymriachuelo`.`cliente_por_clase` (`idcliente`, `idclase`) VALUES ('3', '1');

INSERT INTO `gymriachuelo`.`rutina` (`idrutina`,`idcliente`, `rondas`, `notas`) VALUES ('1','2', '2', 'podes reemplazar la bicicleta por cinta');
INSERT INTO `gymriachuelo`.`rutina` (`idrutina`,`idcliente`, `rondas`) VALUES ('2','3', '1');

INSERT INTO `gymriachuelo`.`nivel_de_suscripcion` (`idnivel_de_suscripcion`, `rango_de_suscripcion`, `descuento`, `costo_mensual`) VALUES ('1', 'classic', '10', '8000');
INSERT INTO `gymriachuelo`.`nivel_de_suscripcion` (`idnivel_de_suscripcion`, `rango_de_suscripcion`, `descuento`, `costo_mensual`) VALUES ('2', 'pro', '25', '10500');
INSERT INTO `gymriachuelo`.`nivel_de_suscripcion` (`idnivel_de_suscripcion`, `rango_de_suscripcion`, `descuento`, `costo_mensual`) VALUES ('3', 'premium', '50', '15000');

INSERT INTO `gymriachuelo`.`suscripcion` (`idsuscripcion`,`idcliente`, `idnivel`, `fecha_de_ingreso`, `periodo`, `estado`) VALUES ('1','1', '1', '2022-11-17', '6', 'activo');
INSERT INTO `gymriachuelo`.`suscripcion` (`idsuscripcion`,`idcliente`, `idnivel`, `fecha_de_ingreso`, `periodo`, `estado`) VALUES ('2','1', '1', '2022-01-03', '6', 'inactivo');
INSERT INTO `gymriachuelo`.`suscripcion` (`idsuscripcion`,`idcliente`, `idnivel`, `fecha_de_ingreso`, `periodo`, `estado`) VALUES ('3','2', '3', '2022-05-05', '12', 'activo');
INSERT INTO `gymriachuelo`.`suscripcion` (`idsuscripcion`,`idcliente`, `idnivel`, `fecha_de_ingreso`, `periodo`, `estado`) VALUES ('4','3', '2', '2021-12-19', '12', 'activo');

INSERT INTO `gymriachuelo`.`beneficio` (`idbeneficio`, `descripcion`, `idnivel`) VALUES ('1', 'tarjeta con descuentos en perfumeria Las Rosas', '2');
INSERT INTO `gymriachuelo`.`beneficio` (`idbeneficio`, `descripcion`, `idnivel`) VALUES ('2', 'tarjeta con descuentos en perfumeria Las Rosas', '3');
INSERT INTO `gymriachuelo`.`beneficio` (`idbeneficio`, `descripcion`, `idnivel`) VALUES ('3', 'estacionamiento sin cargo en Estacionamiento Juan', '3');

INSERT INTO `gymriachuelo`.`ejercicio` (`idejercicio`,`nombre`, `descripcion`) VALUES ('1','flexiones', 'Con los brazos estirados boca abajo, subir y bajar el cuerpo');
INSERT INTO `gymriachuelo`.`ejercicio` (`idejercicio`,`nombre`, `descripcion`) VALUES ('2','abdominales', 'Boca arriba subir y bajar el cuerpo');
INSERT INTO `gymriachuelo`.`ejercicio` (`idejercicio`,`nombre`, `descripcion`) VALUES ('3','burpee', 'Flexionar saltar y volver a hacer flexion');

INSERT INTO `gymriachuelo`.`ejercicio_por_rutina` (`idrutina`, `idejercicio`, `repeticiones`) VALUES ('1', '1', '20');
INSERT INTO `gymriachuelo`.`ejercicio_por_rutina` (`idrutina`, `idejercicio`, `repeticiones`, `notas`) VALUES ('1', '2', '20', 'Asegurate de no forzar el cuello');
INSERT INTO `gymriachuelo`.`ejercicio_por_rutina` (`idrutina`, `idejercicio`, `repeticiones`) VALUES ('2', '1', '50');
INSERT INTO `gymriachuelo`.`ejercicio_por_rutina` (`idrutina`, `idejercicio`, `repeticiones`) VALUES ('2', '2', '30');
INSERT INTO `gymriachuelo`.`ejercicio_por_rutina` (`idrutina`, `idejercicio`, `repeticiones`, `notas`) VALUES ('2', '3', '50', 'Si no podes, hace 25 y descansa y otros 25');

INSERT INTO `gymriachuelo`.`producto` (`idproducto`,`nombre`, `descripcion`, `precio`, `stock`) VALUES ('1','botella 750ml','Botella de plastico de 750ml marca TomarAwa.', '2100.50', '200');
INSERT INTO `gymriachuelo`.`producto` (`idproducto`,`nombre`, `descripcion`, `precio`, `stock`) VALUES ('2','guantes gym', 'Guantes de ejercicio marca Gilbert Internacional. Agarres laterales. Dedos recortados para mejorar la comodidad.', '1250.00', '85');
INSERT INTO `gymriachuelo`.`producto` (`idproducto`,`nombre`, `descripcion`, `precio`, `stock`) VALUES ('3','pesa rusa 2kg', 'Fortalece tus m??sculos con las Pesas Merco Rusas 2 Kg. Sirven para todo tipo de entrenamiento, sin necesidad de salir de tu casa.', '999.99', '20');
INSERT INTO `gymriachuelo`.`producto` (`idproducto`,`nombre`, `descripcion`, `precio`, `stock`) VALUES ('4','Proteina','Proteina para consumo personal.', '5000', '100');
INSERT INTO `gymriachuelo`.`producto` (`idproducto`,`nombre`, `descripcion`, `precio`, `stock`) VALUES ('5','Camiseta seleccion 2022','
No dejes de alentar a la selecci??n ni un solo momento. Su construcci??n en poli??ster, cuello en V y pu??os acanalados te dan un estilo deportivo que evoca las jugadas memorables de aquel juego. Adem??s, las tres tiras y el escudo de argentina tejido te dan un look para lucir con orgullo a donde a vayas.', '10000', '50');
INSERT INTO `gymriachuelo`.`producto` (`idproducto`,`nombre`, `descripcion`, `precio`, `stock`) VALUES ('6','Casco de proteccion Venum','??Soporta todos los golpes sin lastimarte gracias al casco barra Ringhorns Nitro! Proteger?? tus mejillas, barbilla y nariz sin bloquear tu campo de visi??n gracias a la barra de protecci??n met??lica.', '4500', '20');

INSERT INTO `gymriachuelo`.`imagen` (`idimagen`, `url`, `idproducto`) VALUES ('1', '/Imagenes/productos/botella_750ml_1.png', '1');
INSERT INTO `gymriachuelo`.`imagen` (`idimagen`, `url`, `idproducto`) VALUES ('2', '/Imagenes/productos/guantes_gym.jpg', '2');
INSERT INTO `gymriachuelo`.`imagen` (`idimagen`, `url`, `idproducto`) VALUES ('3', '/Imagenes/productos/pesa_rusa_2kg.jpg', '3');
INSERT INTO `gymriachuelo`.`imagen` (`idimagen`, `url`, `idproducto`) VALUES ('4', '/Imagenes/productos/proteina.jpg', '4');
INSERT INTO `gymriachuelo`.`imagen` (`idimagen`, `url`, `idproducto`) VALUES ('5', '/Imagenes/productos/camiseta.jpg', '5');
INSERT INTO `gymriachuelo`.`imagen` (`idimagen`, `url`, `idproducto`) VALUES ('6', '/Imagenes/productos/casco.jpg', '6');

INSERT INTO `gymriachuelo`.`compra` (`idcompra`, `idcliente`, `tipo_de_pago`, `fecha_de_compra`, `fecha_de_entrega`) VALUES ('1', '1', 'efectivo', '2022-11-17 09:30:25', '2022-11-17 09:32:06');

INSERT INTO `gymriachuelo`.`producto_por_compra` (`idcompra`, `idproducto`, `cantidad`) VALUES ('1', '3', '3');
 
