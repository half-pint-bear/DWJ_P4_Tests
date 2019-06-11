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
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
  `flags` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `post_id` (`post_id`),
  CONSTRAINT `mvc_comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `mvc_posts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `mvc_comments` (`id`, `post_id`, `author`, `comment`, `comment_date`, `flags`) VALUES
(1,	1,	'Jean_Lucas',	'Batnae municipium in Anthemusia conditum Macedonum manu priscorum ab Euphrate flumine brevi spatio disparatur, refertum mercatoribus opulentis, ubi annua sollemnitate prope Septembris initium mensis ad nundinas magna promiscuae fortunae convenit multitudo ad commercanda quae Indi mittunt et Seres aliaque plurima vehi terra marique consueta.',	'0000-00-00 00:00:00',	NULL),
(2,	2,	'Francis',	'Batnae municipium in Anthemusia conditum Macedonum manu priscorum ab Euphrate flumine brevi spatio disparatur, refertum mercatoribus opulentis, ubi annua sollemnitate prope Septembris initium mensis ad nundinas magna promiscuae fortunae convenit multitudo ad commercanda quae Indi mittunt et Seres aliaque plurima vehi terra marique consueta.',	'2019-03-11 10:32:24',	NULL),
(3,	3,	'Gérard',	'Batnae municipium in Anthemusia conditum Macedonum manu priscorum ab Euphrate flumine brevi spatio disparatur, refertum mercatoribus opulentis, ubi annua sollemnitate prope Septembris initium mensis ad nundinas magna promiscuae fortunae convenit multitudo ad commercanda quae Indi mittunt et Seres aliaque plurima vehi terra marique consueta.',	'0000-00-00 00:00:00',	NULL),
(4,	4,	'Marcel',	'Batnae municipium in Anthemusia conditum Macedonum manu priscorum ab Euphrate flumine brevi spatio disparatur, refertum mercatoribus opulentis, ubi annua sollemnitate prope Septembris initium mensis ad nundinas magna promiscuae fortunae convenit multitudo ad commercanda quae Indi mittunt et Seres aliaque plurima vehi terra marique consueta.',	'2019-03-11 10:32:43',	NULL),
(5,	5,	'Piotr',	'Batnae municipium in Anthemusia conditum Macedonum manu priscorum ab Euphrate flumine brevi spatio disparatur, refertum mercatoribus opulentis, ubi annua sollemnitate prope Septembris initium mensis ad nundinas magna promiscuae fortunae convenit multitudo ad commercanda quae Indi mittunt et Seres aliaque plurima vehi terra marique consueta.',	'2019-03-11 10:32:53',	NULL),
(6,	5,	'Maurice',	'Letatatum temporis...',	'2019-03-11 12:09:48',	NULL),
(7,	5,	'Hugo',	'Maxi-galette pour tous!',	'2019-03-11 16:19:47',	NULL),
(9,	4,	'Yam Pôl',	'Tu parles à qui là?',	'2019-03-11 16:29:22',	NULL),
(10,	3,	'Marcel',	'Il fait beau aujourd\'hui',	'2019-03-12 10:45:08',	NULL),
(11,	5,	'Popak',	'Loren ipsum et tout le tralala',	'2019-03-19 10:09:50',	NULL),
(12,	4,	'Bouli',	'Bouli?',	'2019-03-19 11:31:17',	NULL),
(14,	3,	'Dozo',	'Corne de bouc!',	'2019-04-08 14:37:01',	NULL),
(21,	5,	'jojo',	'pas jojo!',	'2019-05-06 12:04:38',	NULL),
(22,	2,	'marco',	'polo!',	'0000-00-00 00:00:00',	NULL),
(23,	2,	'marco',	'test d\'affichage du bouton modifier',	'0000-00-00 00:00:00',	NULL);

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

INSERT INTO `mvc_users` (`id`, `login`, `password`, `email`, `registration_date`) VALUES
(1,	'marco',	'marco',	'',	'2019-05-01 12:38:49'),
(2,	'momo',	'momo',	'',	'2019-05-01 18:41:05'),
(3,	'dozo',	'dozo',	'',	'2019-05-04 12:30:27'),
(4,	'pohl',	'pohl',	'',	'2019-05-04 12:32:51');

DROP TABLE IF EXISTS `reported_comments`;
CREATE TABLE `reported_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `flags` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `reported_comments` (`id`, `flags`, `comment_id`) VALUES
(1,	2,	1),
(2,	2,	23);

-- 2019-06-11 08:32:39

