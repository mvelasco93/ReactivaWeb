-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.2.6-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table reactiva.account: ~7 rows (approximately)
DELETE FROM `account`;
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` (`id_account`, `username`, `email`, `password`, `name`, `lastname`, `last_ip`, `last_login`, `status`, `id_group`) VALUES
	(1, 'mvelasco', 'madelyne@cajanegra.com.ec', '21232f297a57a5a743894a0e4a801fc3', 'Madelyne', 'Velasco', '', '0000-00-00 00:00:00', 1, 1),
	(2, 'forrala', 'fabricio@cajanegra.com.ec', '21232f297a57a5a743894a0e4a801fc3', 'Fabricio', 'Orrala', '127.0.0.1', '0000-00-00 00:00:00', 1, 2),
	(3, 'fndos', 'fndos@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Fernando', 'Sanchez', '', '0000-00-00 00:00:00', 1, 4),
	(4, 'izurita', 'izurita@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Israel', 'Zurita', '', '0000-00-00 00:00:00', 1, 5),
	(5, 'ejrocafuerte', 'ejrocafuerte@espol.edu.ec', '21232f297a57a5a743894a0e4a801fc3', 'Erick', 'Rocafuerte', '', '0000-00-00 00:00:00', 1, 1),
	(6, 'gadacast', 'gadacast@espol.edu.ec', '21232f297a57a5a743894a0e4a801fc3', 'Galo', 'Castillo', '', '0000-00-00 00:00:00', 1, 2),
	(7, 'jcedeno', 'jcedeno@espol.edu.ec', '21232f297a57a5a743894a0e4a801fc3', 'Jorge', 'Cedeno', '', '0000-00-00 00:00:00', 0, 2);
/*!40000 ALTER TABLE `account` ENABLE KEYS */;

-- Dumping data for table reactiva.game_exercise: ~1 rows (approximately)
DELETE FROM `game_exercise`;
/*!40000 ALTER TABLE `game_exercise` DISABLE KEYS */;
INSERT INTO `game_exercise` (`id_exercise`, `name`, `description`, `script_name`, `img`) VALUES
	(1, 'Osa', '<p>\r\n	wer</p>\r\n', 'osa_brazo', NULL);
/*!40000 ALTER TABLE `game_exercise` ENABLE KEYS */;

-- Dumping data for table reactiva.game_exercise_limb: ~0 rows (approximately)
DELETE FROM `game_exercise_limb`;
/*!40000 ALTER TABLE `game_exercise_limb` DISABLE KEYS */;
/*!40000 ALTER TABLE `game_exercise_limb` ENABLE KEYS */;

-- Dumping data for table reactiva.game_limb: ~16 rows (approximately)
DELETE FROM `game_limb`;
/*!40000 ALTER TABLE `game_limb` DISABLE KEYS */;
INSERT INTO `game_limb` (`id_limb`, `name`, `icon`, `description`) VALUES
	(1, 'Brazo derecho', '678ff-cuerpo-brazo-der.png', NULL),
	(2, 'Brazo izquierdo', '9a45f-cuerpo-brazo-izq.png', NULL),
	(3, 'Cadera', 'ed2fa-cuerpo-cadera.png', NULL),
	(5, 'Codo derecho', '4d634-cuerpo-codo-der.png', NULL),
	(6, 'Codo izquierdo', '146d9-cuerpo-codo-izq.png', NULL),
	(7, 'Columna', '7532b-cuerpo-columna.png', NULL),
	(8, 'Cuello cabeza', 'd3709-cuerpo-cuello-cabeza.png', NULL),
	(9, 'Espalda', '9aff4-cuerpo-espalda.png', NULL),
	(10, 'Mano derecha', 'a63ab-cuerpo-mano-der.png', NULL),
	(11, 'Mano izquierda', 'ce2c2-cuerpo-mano-izq.png', NULL),
	(12, 'Pie derecho', '3f5a2-cuerpo-pie-der.png', NULL),
	(13, 'Pie izquierdo', '71ec2-cuerpo-pie-izq.png', NULL),
	(14, 'Pierna derecha', '86478-cuerpo-pierna-der.png', NULL),
	(15, 'Pierna izquierda', 'dd53b-cuerpo-pierna-izq.png', NULL),
	(16, 'Talón derecho', 'a50be-cuerpo-talon-der.png', NULL),
	(17, 'Talón izquierdo', 'b75d3-cuerpo-talon-izq.png', NULL);
/*!40000 ALTER TABLE `game_limb` ENABLE KEYS */;

-- Dumping data for table reactiva.log_actions: ~0 rows (approximately)
DELETE FROM `log_actions`;
/*!40000 ALTER TABLE `log_actions` DISABLE KEYS */;
/*!40000 ALTER TABLE `log_actions` ENABLE KEYS */;

-- Dumping data for table reactiva.patient: ~13 rows (approximately)
DELETE FROM `patient`;
/*!40000 ALTER TABLE `patient` DISABLE KEYS */;
INSERT INTO `patient` (`id_patient`, `ci`, `name`, `lastname`, `born`, `gender`, `phone`, `cellphone`, `emergency_contact`, `emergency_phone`, `address`, `blood`, `rh`, `allergies`, `allergies_med`, `observations`, `illness`, `img`, `deleteInfo_ci`, `email`) VALUES
	(1, '0926803990', 'Made', 'Velasco Mite', '1993-04-12', 0, '123123', '123123', '122123', '456456', 'Km 8.5 Via a Daule Cdla Colinas al Sol, Ave 1ra 317 y calle 3ra', 'A', '+', NULL, NULL, 'No puede doblar el brazo derecho completamente', 'Rinitis alérgica aguda', NULL, NULL, 'm_velasco93@live.com'),
	(2, '0926804006', 'Edgar', 'Moreira', '2017-01-19', 1, '042250902', '7596100742', '', '', 'Gladstone Terrace, 4', '', '+', '', NULL, '', '', '', NULL, 'emoreira@gmail.com'),
	(5, '0909033425', 'Fabriciooo', 'Orrala Parrales', '1989-06-25', 1, '042254895', '042254895', '', '', 'Urdesa Central', 'A', '-', 'A Henry ', NULL, 'Hola mundo', 'Miopia', NULL, NULL, 'fabricio@cajanegra.com.ec'),
	(6, '0907976698', 'Henry', 'Lomas Sanchez', '1985-04-23', 1, '042254895', '042254895', '', '', 'Urdesa Central', 'A', '+', 'A Fabricio y a Edwin', NULL, NULL, 'Por lo general del estomago', '', NULL, 'henry@cajanegra.com.ec'),
	(7, '0907896609', 'Nicole', 'Velasco', '1995-02-28', 0, '07596100742', '07596100742', '', '', 'Guayaquil', 'O', '+', 'Paracetamol', NULL, 'Le duele mucho la rodilla izquierda', 'No', '', NULL, 'nicole@gmail.com'),
	(8, '0909044565', 'Fabricio', 'Layedra Montoya', '1997-07-25', 1, '042254895', '042254895', '', '', 'Sauces', 'A', '+', '', NULL, NULL, '', '', NULL, 'flayedra@espol.edu.ec'),
	(9, '092783557', 'María Belén', 'Guaranda', '1995-06-04', 0, '042254895', '042254895', '', '', 'Sur', 'O', '+', '', NULL, NULL, '', '', NULL, 'mbguaranda@espol.edu.ec'),
	(10, '0980855678', 'Oswaldo', 'Aguilar ', '1996-12-05', 1, '07596100742', '07596100742', '', '', 'Alborada', 'O', '+', '', NULL, NULL, '', '', NULL, 'oaguilar@espol.edu.ec'),
	(11, '0903066789', 'Viviana', 'Laurido Aguirre', '1996-12-12', 0, '07596100742', '07596100742', '', '', 'Samborondón', 'B', '+', '', NULL, NULL, '', '', NULL, 'vlaurido@espol.edu.ec'),
	(13, '0873645775', 'Rodrigo', 'Castro Reyes', '1993-05-30', 1, '042252638', '042252638', '', '', 'Alborada', 'AB', '+', '', NULL, NULL, '', '', NULL, 'rodfcast@espol.edu.ec'),
	(15, '0909033426', 'Madelyne', 'Velasco Mite', '1996-05-25', 0, '07596100742', '07596100742', '', '', 'Guayaquil', 'O', '+', '', NULL, '', '', NULL, NULL, 'mbguaranda@espol.edu.ec'),
	(18, '0873645778', 'Jose Luis', 'Masson ', '1995-12-24', 1, '042254895', '042254895', 'Joxy', '07596100742', 'Alborada', 'O', '+', NULL, 'qqweqwe', 'xzxvzxv', 'vbnvbn', NULL, NULL, 'jlmasson@espol.edu.ec'),
	(19, '0920142049', 'Gustavo Andres', 'Palacios Ross ', '1994-08-20', 1, '042254895', '042254895', '', '07596100742', 'Kennedy Norte', 'A', '-', NULL, 'qqweqwe', 'xzxvzxv', 'vbnvbn', NULL, NULL, 'gross@gmail.com'),
	(20, '0911168680', 'MERCEDES DEL ROCIO', 'AGUILERA MOCHA ', '1995-12-24', 1, '042254895', '042254895', '', '07596100742', 'Alborada', 'O', '+', NULL, 'qqweqwe', 'xzxvzxv', 'vbnvbn', NULL, NULL, 'a@gmail.com'),
	(21, '0915162549', 'OMAR FABRIZIO', 'AGUILERA SALAZAR', '1995-12-24', 1, '042254895', '042254895', '', '07596100742', 'Alborada', 'O', '+', NULL, 'qqweqwe', 'xzxvzxv', 'vbnvbn', NULL, NULL, 'b@gmail.com'),
	(22, '0901752832', 'JORGE ANTONIO', 'ALBORNOZ ROSADO ', '1995-12-24', 1, '042254895', '042254895', '', '07596100742', 'Alborada', 'O', '+', NULL, 'qqweqwe', 'xzxvzxv', 'vbnvbn', NULL, NULL, 'c@gmail.com'),
	(23, '0912474079', 'CARMEN ZULEMA', 'ALCIVAR FERNANDEZ ', '1995-12-24', 1, '042254895', '042254895', '', '07596100742', 'Alborada', 'O', '+', NULL, 'qqweqwe', 'xzxvzxv', 'vbnvbn', NULL, NULL, 'd@gmail.com'),
	(24, '0912474087', 'JONATHAN ANDREW', 'ALLEN LERTORA ', '1995-12-24', 1, '042254895', '042254895', '', '07596100742', 'Alborada', 'O', '+', NULL, 'qqweqwe', 'xzxvzxv', 'vbnvbn', NULL, NULL, 'e@gmail.com'),
	(25, '0908903230', 'JORGE ENRIQUE', 'ALVARADO CHANG ', '1995-12-24', 1, '042254895', '042254895', '', '07596100742', 'Alborada', 'O', '+', NULL, 'qqweqwe', 'xzxvzxv', 'vbnvbn', NULL, NULL, 'f@gmail.com'),
	(26, '0917778581', 'MARIA GABRIELA', 'LARA BRIONES ', '1995-12-24', 1, '042254895', '042254895', '', '07596100742', 'Alborada', 'O', '+', NULL, 'qqweqwe', 'xzxvzxv', 'vbnvbn', NULL, NULL, 'g@gmail.com');
/*!40000 ALTER TABLE `patient` ENABLE KEYS */;

-- Dumping data for table reactiva.patient_consult: ~3 rows (approximately)
DELETE FROM `patient_consult`;
/*!40000 ALTER TABLE `patient_consult` DISABLE KEYS */;
INSERT INTO `patient_consult` (`id_consult`, `id_patient`, `id_doctor_created`, `id_doctor_attended`, `date_created`, `date_planned`, `date_attended`, `status`, `diagnosis`, `observations`) VALUES
	(15, 1, 3, 3, '2017-06-19 22:51:01', '2017-06-19 22:51:01', '2017-06-02 00:00:00', 2, 'Meningitis', 'Enfermedad en la piel'),
	(19, 11, 3, NULL, '2017-08-02 10:35:45', '2017-08-02 19:36:00', NULL, 1, NULL, 'Indica fuerte dolor en la rodilla'),
	(20, 8, 5, NULL, '2017-08-02 14:36:00', '2017-08-02 14:36:00', NULL, 1, NULL, 'El dolor lleva una semana'),
	(21, 6, 3, 3, '2017-08-19 11:15:06', '2017-08-20 11:15:07', NULL, 0, NULL, NULL),
	(22, 13, 5, 5, '2017-08-20 13:28:05', '2017-08-22 13:28:05', NULL, 1, 'Esguince grado 1', 'Le duele cuando respira'),
	(23, 18, 3, 5, '2017-08-22 13:28:05', '2017-08-22 13:28:05', NULL, 1, 'Calambre muscular', 'Generado por la falta de potasio'),
	(24, 11, 3, 5, '2017-08-21 13:28:05', '2017-08-22 13:28:05', NULL, 1, NULL, 'Le duelen las rodillas'),
	(25, 2, 5, 3, '2017-08-21 12:28:05', '2017-08-21 13:28:05', NULL, 1, 'Irritaciòn en la piel', 'Tiene varios dias sin banarse por la irritación');
	
/*!40000 ALTER TABLE `patient_consult` ENABLE KEYS */;

-- Dumping data for table reactiva.patient_consult_limb: ~4 rows (approximately)
DELETE FROM `patient_consult_limb`;
/*!40000 ALTER TABLE `patient_consult_limb` DISABLE KEYS */;
INSERT INTO `patient_consult_limb` (`id_consult`, `id_limb`) VALUES
	(15, 1),
	(15, 2),
	(19, 5),
	(19, 6);
/*!40000 ALTER TABLE `patient_consult_limb` ENABLE KEYS */;

-- Dumping data for table reactiva.patient_therapy: ~3 rows (approximately)
DELETE FROM `patient_therapy`;
/*!40000 ALTER TABLE `patient_therapy` DISABLE KEYS */;
INSERT INTO `patient_therapy` (`id_therapy`, `id_consulta`, `id_patient`, `date_created`, `id_doctor_created`, `id_doctor_attended`, `eta`, `etf`, `comment`, `sendmail`, `status`, `valoration`, `time_elapse`) VALUES
	(4, 15, 1, '2017-08-19 00:33:38', 4, 3, NULL, NULL, 'qwe', 0, 3, NULL, NULL),
	(5, 15, 1, '2017-08-19 00:36:26', 3, 4, NULL, NULL, '<p>\r\n	qwe</p>\r\n', 0, 3, NULL, NULL),
	(6, 19, 1, '2017-08-21 11:20:52', 4, 3, NULL, NULL, NULL, 0, 1, NULL, NULL),
	(7, 25, 18, '2017-08-21 11:20:52', 5, 3, NULL, NULL, 'qwe', 0, 2, NULL, NULL),
	(8, 22, 13, '2017-08-21 11:20:52', 3, 3, NULL, NULL, 'qwe', 0, 2, NULL, '2017-06-23 00:00:00'),
	(9, 20, 10, '2017-08-21 11:20:52', 5, 5, NULL, NULL, 'hola', 0, 2, NULL, NULL),
	(10, 23, 11, '2017-08-21 11:20:52', 5, 3, NULL, NULL, 'adios', 0, 2, NULL, NULL),
	(11, 22, 10, '2017-08-21 11:20:52', 4, 4, NULL, NULL, 'se molestó con la terapia', 0, 2, NULL, NULL);
/*!40000 ALTER TABLE `patient_therapy` ENABLE KEYS */;

-- Dumping data for table reactiva.patient_therapy_comment: ~0 rows (approximately)
DELETE FROM `patient_therapy_comment`;
/*!40000 ALTER TABLE `patient_therapy_comment` DISABLE KEYS */;
INSERT INTO `patient_therapy_comment` (`id_therapy`, `date`, `msg`) VALUES
	(4, '2017-08-18 02:24:09', 'ZZZZZZZZZZZZZZZZzzzz');
/*!40000 ALTER TABLE `patient_therapy_comment` ENABLE KEYS */;

-- Dumping data for table reactiva.patient_therapy_exer: ~0 rows (approximately)
DELETE FROM `patient_therapy_exer`;
/*!40000 ALTER TABLE `patient_therapy_exer` DISABLE KEYS */;
/*!40000 ALTER TABLE `patient_therapy_exer` ENABLE KEYS */;

-- Dumping data for table reactiva.patient_therapy_photo: ~0 rows (approximately)
DELETE FROM `patient_therapy_photo`;
/*!40000 ALTER TABLE `patient_therapy_photo` DISABLE KEYS */;
INSERT INTO `patient_therapy_photo` (`id_therapy`, `date`, `img`, `comment`) VALUES
	(4, '2017-08-18 02:18:41', '8ff84-1016-oreos-addictive.jpg', NULL);
/*!40000 ALTER TABLE `patient_therapy_photo` ENABLE KEYS */;

-- Dumping data for table reactiva.rbac_group: ~5 rows (approximately)
DELETE FROM `rbac_group`;
/*!40000 ALTER TABLE `rbac_group` DISABLE KEYS */;
INSERT INTO `rbac_group` (`id_group`, `name`) VALUES
	(1, 'Super administrador'),
	(2, 'Administrador'),
	(3, 'Staff'),
	(4, 'Doctor'),
	(5, 'Terapista');
/*!40000 ALTER TABLE `rbac_group` ENABLE KEYS */;

-- Dumping data for table reactiva.rbac_group_permission: ~16 rows (approximately)
DELETE FROM `rbac_group_permission`;
/*!40000 ALTER TABLE `rbac_group_permission` DISABLE KEYS */;
INSERT INTO `rbac_group_permission` (`id_group`, `id_permission`) VALUES
	(1, 1),
	(1, 3),
	(1, 4),
	(1, 5),
	(1, 6),
	(1, 7),
	(1, 8),
	(1, 9),
	(1, 10),
	(2, 2),
	(2, 3),
	(2, 4),
	(2, 5),
	(2, 6),
	(2, 7),
	(2, 8),
	(2, 9),
	(2, 10);
/*!40000 ALTER TABLE `rbac_group_permission` ENABLE KEYS */;

-- Dumping data for table reactiva.rbac_permission: ~24 rows (approximately)
DELETE FROM `rbac_permission`;
/*!40000 ALTER TABLE `rbac_permission` DISABLE KEYS */;
INSERT INTO `rbac_permission` (`id_permission`, `name`, `description`) VALUES
	(1, 'CRUD accounts full', 'Incluye super adminsitrador'),
	(2, 'CRUD accounts', 'Solo hasta administrador'),
	(3, 'View Admin Index', 'Ver el index del administrador'),
	(4, 'CRUD game_exercise', NULL),
	(5, 'CRUD game_limb', NULL),
	(6, 'CRUD patient', NULL),
	(7, 'CRUD patient_consult', NULL),
	(8, 'CRUD patient_therapy_exer', NULL),
	(9, 'CRUD patient_therapy_photo', NULL),
	(10, 'CRUD web_contact', 'Ver los contactos a la página'),
	(11, 'Create patient', NULL),
	(12, 'Edit patient', NULL),
	(13, 'View patients', NULL),
	(14, 'Delete patient', NULL),
	(15, 'Create consult', NULL),
	(16, 'Edit consult', NULL),
	(17, 'Delete consult', NULL),
	(18, 'View consult', NULL),
	(19, 'Add therapy', NULL),
	(20, 'Edit therapy', NULL),
	(21, 'View therapy', NULL),
	(22, 'Start therapy', NULL),
	(23, 'End therapy', NULL),
	(24, 'Delete therapy', NULL);
/*!40000 ALTER TABLE `rbac_permission` ENABLE KEYS */;

-- Dumping data for table reactiva.web_contact: ~0 rows (approximately)
DELETE FROM `web_contact`;
/*!40000 ALTER TABLE `web_contact` DISABLE KEYS */;
INSERT INTO `web_contact` (`id`, `date`, `name`, `message`, `email`) VALUES
	(1, '2017-06-18 22:09:27', 'Fernando Sánchez', 'Hola', 'fndos@gmail.com');
/*!40000 ALTER TABLE `web_contact` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
