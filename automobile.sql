
DROP DATABASE IF EXISTS automobile;
CREATE DATABASE IF NOT EXISTS automobile;
USE automobile;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone ="+00:00";
CREATE TABLE IF NOT EXISTS `utilisateurs` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `nom` varchar(40) NOT NULL ,
 `prenom` varchar(40) NOT NULL ,
 `login` varchar(40) NOT NULL ,
 `pass` varchar(40) NOT NULL ,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `login`,`pass`) VALUES
(1, 'Benali', 'Mohamed', 'admin','21232f297a57a5a743894a0e4a801fc3'),
(2, 'Kebir', 'amir', 'amir31','6ae126f51de61fc3006deb56ef955797'),
(3, 'Yahia', 'Mohammed', 'med','6473584131d0279a6c20a0ac9b1a2a00'),
(4, 'Tahri', 'Rania', 'rania','aecdbf3d675bd0f0c4bf21155fab5b44'),
(5, 'Omari', 'Issam', 'issamDz','0360f275c2c5363482c0dc54fd98a33f'),
(6, 'Houssine', 'Amine', 'amin22','d6e8490197147131dfcdf38c5303d59e'),
(7,'Hssain','Sara','sara','ae1ac13978369f2cf3ff7e9bd65a66f9');

CREATE TABLE IF NOT EXISTS `annonces` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `utilisateur` varchar(30) NOT NULL ,
 `modele` varchar(30) NOT NULL ,
 `description` varchar(5000) NOT NULL ,
 `numTel` varchar(50) NOT NULL ,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `annonces` (`id`, `utilisateur`, `modele`, `description`,`numTel`) VALUES
(1, 'amin22', 'Sylbol', 'Année: 2019, couleur: blanche','0663 56 43 12'),
(2, 'sara', '107', 'Année 2010, Couleur noir','0773 62 43 10'),
(3, 'amir31', '208', 'Année: 2014, couleur: grise','0663 08 10 76'),
(4, 'med', 'Captiva', 'Année 2016, Couleur noir','0667 00 43 02'),
(5, 'rania', 'Yaris', 'Année: 2018, couleur rouge','0790 16 12 00'),
(6, 'issamdz', 'Sonic', 'Année: 2019, Couleur: grise','0771 00 13 55'),
(7, 'amin22', 'Clio 4', 'Année: 2015, couleur: blanche','0788 56 03 99');