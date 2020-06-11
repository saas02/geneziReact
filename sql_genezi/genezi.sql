
INSERT INTO `genezi`.`parameters` (`Id`, `name`, `value`, `description`, `status`) VALUES (NULL, 'images', '{"imagesParameter":{"marcas":"/assets/img/marcas/logos-marcas.png","register":"/assets/img/register/img-registration.png"}}', 'Iamgenes parametrizables', '1');


/* tipo de documento */
ALTER TABLE `producto` CHANGE `InPromo` `InPromo` INT(2) NOT NULL DEFAULT '0';
INSERT INTO `genezi`.`parameters` (`Id`, `name`, `value`, `description`, `status`) VALUES (NULL, 'emails', '{"emails":{"dev":{"setTo":"saas02@gmail.com"},"prod":{"setTo":"genezitl@gmail.com"}}}', 'Parametros para envio de emails', '1');

DROP TABLE IF EXISTS `form_subscription`;
CREATE TABLE `form_subscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,  
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,  
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,  
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,  
  `observations` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `creationDate` datetime NOT NULL,
  PRIMARY KEY (`id`)  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



ALTER TABLE `cliente` DROP FOREIGN KEY `cliente_ibfk_1`; ALTER TABLE `cliente` ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`documentType`) REFERENCES `genezi`.`document_type`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;

DROP TABLE venta
DROP TABLE detalle

DROP TABLE IF EXISTS `document_type`;
CREATE TABLE `document_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,  
  `externalCode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `paymentCode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),  
  KEY `externalCode` (`externalCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `document_type` (`id`, `externalCode`, `paymentCode`, `description`) VALUES
(1,	'CC',	'CC',	'Cedula De Ciudadania'),
(2,	'PS',	'PPN',	'Pasaporte'),
(3,	'NT',	'NIT',	'Nit'),
(4,	'RT',	'RUT',	'Rut'),
(5,	'NU',	'',	'Tarjeta de Identidad(Nuip)'),
(6,	'LI',	'LIC',	'Licencia De Conduccion'),
(7,	'NI',	'',	'Nit Internacional'),
(8,	'CE',	'CE',	'Cedula De Extranjeria'),
(9,	'TE',	'',	'Tarjeta De Extranjeria'),
(10,	'RC',	'',	'Registro Civil'),
(11,	'TI',	'TI',	'Tarjeta De Identidad');