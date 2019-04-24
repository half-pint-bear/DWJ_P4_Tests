-- Adminer 4.7.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `mvc_comments`;
CREATE TABLE `mvc_comments` (
	  `id` int(11) NOT NULL AUTO_INCREMENT,
	  `post_id` int(11) NOT NULL,
	  `user_id` int(11) DEFAULT NULL,
	  `author` varchar(255) NOT NULL,
	  `comment` text NOT NULL,
	  `comment_date` datetime NOT NULL,
	  PRIMARY KEY (`id`),
	  KEY `post_id` (`post_id`),
	  KEY `user_id` (`user_id`),
	  CONSTRAINT `mvc_comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `mvc_posts` (`id`),
	  CONSTRAINT `mvc_comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `mvc_users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `mvc_comments` (`id`, `post_id`, `user_id`, `author`, `comment`, `comment_date`) VALUES
(1,	1,	NULL,	'Jean_Lucas',	'Batnae municipium in Anthemusia conditum Macedonum manu priscorum ab Euphrate flumine brevi spatio disparatur, refertum mercatoribus opulentis, ubi annua sollemnitate prope Septembris initium mensis ad nundinas magna promiscuae fortunae convenit multitudo ad commercanda quae Indi mittunt et Seres aliaque plurima vehi terra marique consueta.',	'0000-00-00 00:00:00'),
(2,	2,	NULL,	'Francis',	'Batnae municipium in Anthemusia conditum Macedonum manu priscorum ab Euphrate flumine brevi spatio disparatur, refertum mercatoribus opulentis, ubi annua sollemnitate prope Septembris initium mensis ad nundinas magna promiscuae fortunae convenit multitudo ad commercanda quae Indi mittunt et Seres aliaque plurima vehi terra marique consueta.',	'2019-03-11 10:32:24'),
(3,	3,	NULL,	'Gérard',	'Batnae municipium in Anthemusia conditum Macedonum manu priscorum ab Euphrate flumine brevi spatio disparatur, refertum mercatoribus opulentis, ubi annua sollemnitate prope Septembris initium mensis ad nundinas magna promiscuae fortunae convenit multitudo ad commercanda quae Indi mittunt et Seres aliaque plurima vehi terra marique consueta.',	'0000-00-00 00:00:00'),
(4,	4,	NULL,	'Marcel',	'Batnae municipium in Anthemusia conditum Macedonum manu priscorum ab Euphrate flumine brevi spatio disparatur, refertum mercatoribus opulentis, ubi annua sollemnitate prope Septembris initium mensis ad nundinas magna promiscuae fortunae convenit multitudo ad commercanda quae Indi mittunt et Seres aliaque plurima vehi terra marique consueta.',	'2019-03-11 10:32:43'),
(5,	5,	NULL,	'Piotr',	'Batnae municipium in Anthemusia conditum Macedonum manu priscorum ab Euphrate flumine brevi spatio disparatur, refertum mercatoribus opulentis, ubi annua sollemnitate prope Septembris initium mensis ad nundinas magna promiscuae fortunae convenit multitudo ad commercanda quae Indi mittunt et Seres aliaque plurima vehi terra marique consueta.',	'2019-03-11 10:32:53'),
(6,	5,	NULL,	'Maurice',	'Letatatum temporis...',	'2019-03-11 12:09:48'),
(7,	5,	NULL,	'Hugo',	'Maxi-galette pour tous!',	'2019-03-11 16:19:47'),
(9,	4,	NULL,	'Yam Pôl',	'Tu parles à qui là?',	'2019-03-11 16:29:22'),
(10,	3,	NULL,	'Marcel',	'Il fait beau aujourd\'hui',	'2019-03-12 10:45:08'),
(11,	5,	NULL,	'Popak',	'Loren ipsum et tout le tralala',	'2019-03-19 10:09:50'),
(12,	4,	NULL,	'Bouli',	'Bouli?',	'2019-03-19 11:31:17'),
(14,	3,	NULL,	'Dozo',	'Corne de bouc!',	'2019-04-08 14:37:01');

DROP TABLE IF EXISTS `mvc_posts`;
CREATE TABLE `mvc_posts` (
	  `id` int(11) NOT NULL AUTO_INCREMENT,
	  `title` varchar(255) NOT NULL,
	  `content` text NOT NULL,
	  `creation_date` datetime NOT NULL,
	  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `mvc_posts` (`id`, `title`, `content`, `creation_date`) VALUES
(1,	'Chapitre 1',	'Cum autem commodis intervallata temporibus convivia longa et noxia coeperint apparari vel distributio sollemnium sportularum, anxia deliberatione tractatur an exceptis his quibus vicissitudo debetur, peregrinum invitari conveniet, et si digesto plene consilio id placuerit fieri, is adhibetur qui pro domibus excubat aurigarum aut artem tesserariam profitetur aut secretiora quaedam se nosse confingit.',	'2019-03-11 10:28:51'),
(2,	'Chapitre 2',	'Ideo urbs venerabilis post superbas efferatarum gentium cervices oppressas latasque leges fundamenta libertatis et retinacula sempiterna velut frugi parens et prudens et dives Caesaribus tamquam liberis suis regenda patrimonii iura permisit.',	'2019-03-11 10:29:04'),
(3,	'Chapitre 3',	'Homines enim eruditos et sobrios ut infaustos et inutiles vitant, eo quoque accedente quod et nomenclatores adsueti haec et talia venditare, mercede accepta lucris quosdam et prandiis inserunt subditicios ignobiles et obscuros.',	'2019-03-11 10:29:27'),
(4,	'Chapitre 4',	'Nisi mihi Phaedrum, inquam, tu mentitum aut Zenonem putas, quorum utrumque audivi, cum mihi nihil sane praeter sedulitatem probarent, omnes mihi Epicuri sententiae satis notae sunt. atque eos, quos nominavi, cum Attico nostro frequenter audivi, cum miraretur ille quidem utrumque, Phaedrum autem etiam amaret, cotidieque inter nos ea, quae audiebamus, conferebamus, neque erat umquam controversia, quid ego intellegerem, sed quid probarem.',	'2019-03-11 10:29:42'),
(5,	'Chapitre 5',	'Hoc inmaturo interitu ipse quoque sui pertaesus excessit e vita aetatis nono anno atque vicensimo cum quadriennio imperasset. natus apud Tuscos in Massa Veternensi, patre Constantio Constantini fratre imperatoris, matreque Galla sorore Rufini et Cerealis, quos trabeae consulares nobilitarunt et praefecturae.',	'2019-03-11 10:29:59');

DROP TABLE IF EXISTS `mvc_users`;
CREATE TABLE `mvc_users` (
	  `id` int(11) NOT NULL AUTO_INCREMENT,
	  `login` varchar(255) NOT NULL,
	  `password` varchar(255) NOT NULL,
	  `email` varchar(255) NOT NULL,
	  `registration_date` datetime NOT NULL,
	  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- 2019-04-24 09:58:58

