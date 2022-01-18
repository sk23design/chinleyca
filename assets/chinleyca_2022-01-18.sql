# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 192.168.1.93 (MySQL 5.7.32)
# Database: chinleyca
# Generation Time: 2022-01-18 18:29:20 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table action_events
# ------------------------------------------------------------

DROP TABLE IF EXISTS `action_events`;

CREATE TABLE `action_events` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `batch_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actionable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actionable_id` bigint(20) unsigned NOT NULL,
  `target_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned DEFAULT NULL,
  `fields` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'running',
  `exception` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `original` mediumtext COLLATE utf8mb4_unicode_ci,
  `changes` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `action_events_actionable_type_actionable_id_index` (`actionable_type`,`actionable_id`),
  KEY `action_events_batch_id_model_type_model_id_index` (`batch_id`,`model_type`,`model_id`),
  KEY `action_events_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `action_events` WRITE;
/*!40000 ALTER TABLE `action_events` DISABLE KEYS */;

INSERT INTO `action_events` (`id`, `batch_id`, `user_id`, `name`, `actionable_type`, `actionable_id`, `target_type`, `target_id`, `model_type`, `model_id`, `fields`, `status`, `exception`, `created_at`, `updated_at`, `original`, `changes`)
VALUES
	(1,'951c88f1-b396-4633-abad-31ef4e34f7ba',1,'Create','App\\Models\\Venue',1,'App\\Models\\Venue',1,'App\\Models\\Venue',1,'','finished','','2021-12-14 16:04:51','2021-12-14 16:04:51',NULL,'{\"name\":\"Chinley & Buxworth Community Centre\",\"slug\":\"chinley-buxworth-community-centre\",\"intro\":\"The community centre building is located on Lower Lane in Chinley and offers a large hall with music sound system, fully equipped kitchen and small meeting room. There are toilets and changing room facilities within the building and a hard court outside. It is possible to make bookings for one-off events as well as ongoing activities\",\"updated_at\":\"2021-12-14T16:04:51.000000Z\",\"created_at\":\"2021-12-14T16:04:51.000000Z\",\"id\":1}'),
	(2,'951c8a73-1c61-4313-bc1e-26d094fe1f35',1,'Update','App\\Models\\Venue',1,'App\\Models\\Venue',1,'App\\Models\\Venue',1,'','finished','','2021-12-14 16:09:04','2021-12-14 16:09:04','{\"cover_image\":null}','{\"cover_image\":\"IfF5HCmAZgqn0j2xhIAMcjKCcOW8dpxBXugn5uEW.jpg\"}'),
	(3,'951c92ae-dc24-41f8-961c-69eb29262724',1,'Create','App\\Models\\Venue',2,'App\\Models\\Venue',2,'App\\Models\\Venue',2,'','finished','','2021-12-14 16:32:05','2021-12-14 16:32:05',NULL,'{\"name\":\"Chinley WI Hall\",\"slug\":\"chinley-wi-hall\",\"intro\":\"The building offers a large hall with maximum capacity for 120 people. The hall has a stage and is large enough to accommodate a small bouncy castle for children\\u2019s parties.\",\"cover_image\":\"aGkFP0avtfmPUsEQpEe3fbtCCcXzKoJfeMCAME7C.jpg\",\"updated_at\":\"2021-12-14T16:32:05.000000Z\",\"created_at\":\"2021-12-14T16:32:05.000000Z\",\"id\":2}'),
	(4,'951cf833-eaf1-4b71-befb-0d5e7075e8f3',1,'Create','App\\Models\\Venue',1,'App\\Models\\Venue',1,'App\\Models\\Venue',1,'','finished','','2021-12-14 21:15:57','2021-12-14 21:15:57',NULL,'{\"name\":\"Chinley & Buxworth Community Centre\",\"slug\":\"chinley-buxworth-community-centre\",\"intro\":\"The community centre building is located on Lower Lane in Chinley and offers a large hall with music sound system, fully equipped kitchen and small meeting room. There are toilets and changing room facilities within the building and a hard court outside. It is possible to make bookings for one-off events as well as ongoing activities (block bookings).\",\"cover_image\":\"7lpm7LWfTmxfZs0fJUX4HljBQ94GQhaXF8zEvODM.jpg\",\"updated_at\":\"2021-12-14T21:15:57.000000Z\",\"created_at\":\"2021-12-14T21:15:57.000000Z\",\"id\":1}'),
	(5,'951cf865-4c6d-4842-8e52-d7d799ae622d',1,'Create','App\\Models\\Venue',2,'App\\Models\\Venue',2,'App\\Models\\Venue',2,'','finished','','2021-12-14 21:16:30','2021-12-14 21:16:30',NULL,'{\"name\":\"Chinley W.I. Hall\",\"slug\":\"chinley-w-i-hall\",\"intro\":\"Chinley W.I. Hall is located on Lower Lane in Chinley.  The building offers a large hall with maximum capacity for 120 people. The hall has a stage and is large enough to accommodate a small bouncy castle for children\\u2019s parties.  There is a fully equipped kitchen, disabled access and toilet facilities.\",\"cover_image\":\"9c3W4m1c9VKZr7ndfqWwFzYgUr2od5yw52kY3DGM.jpg\",\"updated_at\":\"2021-12-14T21:16:30.000000Z\",\"created_at\":\"2021-12-14T21:16:30.000000Z\",\"id\":2}'),
	(6,'951d0a0b-20be-4c96-b248-801fd713757b',1,'Create','App\\Models\\Event',1,'App\\Models\\Event',1,'App\\Models\\Event',1,'','finished','','2021-12-14 22:05:50','2021-12-14 22:05:50',NULL,'{\"name\":\"Table Tennis\",\"venue_id\":null,\"updated_at\":\"2021-12-14T22:05:50.000000Z\",\"created_at\":\"2021-12-14T22:05:50.000000Z\",\"id\":1}'),
	(7,'951d0b17-fdcf-442f-8368-9d369206d0a9',1,'Update','App\\Models\\Event',1,'App\\Models\\Event',1,'App\\Models\\Event',1,'','finished','','2021-12-14 22:08:47','2021-12-14 22:08:47','[]','[]'),
	(8,'951d10f9-7405-489a-bafa-819cf91cae54',1,'Create','App\\Models\\Event',2,'App\\Models\\Event',2,'App\\Models\\Event',2,'','finished','','2021-12-14 22:25:13','2021-12-14 22:25:13',NULL,'{\"name\":\"wewqerqer\",\"venue_id\":null,\"updated_at\":\"2021-12-14T22:25:13.000000Z\",\"created_at\":\"2021-12-14T22:25:13.000000Z\",\"id\":2}'),
	(10,'951d19ca-f1e4-4f52-8e0d-6cb0938a1593',1,'Update','App\\Models\\Event',1,'App\\Models\\Event',1,'App\\Models\\Event',1,'','finished','','2021-12-14 22:49:53','2021-12-14 22:49:53','{\"venue_id\":2}','{\"venue_id\":1}'),
	(11,'95465efd-57e3-427d-8f24-20a311ed0d09',1,'Update','App\\Models\\Venue',2,'App\\Models\\Venue',2,'App\\Models\\Venue',2,'','finished','','2022-01-04 11:12:19','2022-01-04 11:12:19','{\"cover_image\":\"9c3W4m1c9VKZr7ndfqWwFzYgUr2od5yw52kY3DGM.jpg\"}','{\"cover_image\":\"sNCUhnUPQTlcJ0NRg7K9UrNcPqRGcDaaA9FXGdQq\"}'),
	(12,'95465f2e-285f-480c-accb-b245221e8a49',1,'Update','App\\Models\\Venue',1,'App\\Models\\Venue',1,'App\\Models\\Venue',1,'','finished','','2022-01-04 11:12:51','2022-01-04 11:12:51','{\"cover_image\":\"7lpm7LWfTmxfZs0fJUX4HljBQ94GQhaXF8zEvODM.jpg\"}','{\"cover_image\":\"IeEPRF3dD1Z4dKs69vmTi6zgAxAcd9LXDaWTHMZX\"}'),
	(13,'954663f6-6c4b-4035-9c81-3b84c5066147',1,'Update','App\\Models\\Venue',1,'App\\Models\\Venue',1,'App\\Models\\Venue',1,'','finished','','2022-01-04 11:26:13','2022-01-04 11:26:13','{\"cover_image\":\"IeEPRF3dD1Z4dKs69vmTi6zgAxAcd9LXDaWTHMZX\"}','{\"cover_image\":\"images\\/venues\\/\\/hdNmQXfktWDaQ9rnsxYpUUGedbE6jXX0nB6Ai7tO.jpg\"}'),
	(14,'95466418-e587-4174-90a6-52e0d34060fb',1,'Update','App\\Models\\Venue',2,'App\\Models\\Venue',2,'App\\Models\\Venue',2,'','finished','','2022-01-04 11:26:36','2022-01-04 11:26:36','{\"cover_image\":\"sNCUhnUPQTlcJ0NRg7K9UrNcPqRGcDaaA9FXGdQq\"}','{\"cover_image\":\"images\\/venues\\/\\/H91iT3dM2sRBLv4LRK1abYlc46AhLToLRncAuSGy.jpg\"}'),
	(15,'95466e8f-65fa-4330-80ca-7b0e66f914a8',1,'Create','App\\Models\\Venue',3,'App\\Models\\Venue',3,'App\\Models\\Venue',3,'','finished','','2022-01-04 11:55:51','2022-01-04 11:55:51',NULL,'{\"cover_image\":\"images\\/venues\\/\\/VxJOXTYI5dsnIVKUafFwlrToTg4F802XoeqvXodH.jpg\",\"name\":\"Buxworth War Memorial Club\",\"slug\":\"buxworth-war-memorial-club\",\"intro\":\"Buxworth Club is in the heart of the High Peak. We hold regular events throughout the year, all events will be posted on this page so keep an eye out!\",\"updated_at\":\"2022-01-04T11:55:51.000000Z\",\"created_at\":\"2022-01-04T11:55:51.000000Z\",\"id\":3}'),
	(16,'9546738a-1e45-47c7-a289-6a0ae70f7063',1,'Create','App\\Models\\Venue',4,'App\\Models\\Venue',4,'App\\Models\\Venue',4,'','finished','','2022-01-04 12:09:46','2022-01-04 12:09:46',NULL,'{\"name\":\"Chinley Independent Chapel\",\"slug\":\"chinley-independent-chapel\",\"intro\":\"We are a Congregational Church. We believe in and respect the spiritual equality of all believers. Congregationalism is an ideal, supremely biblical and simple way of being church.\",\"updated_at\":\"2022-01-04T12:09:46.000000Z\",\"created_at\":\"2022-01-04T12:09:46.000000Z\",\"id\":4}'),
	(17,'95467454-5c6d-446b-82a8-81426aa70f10',1,'Update','App\\Models\\Venue',4,'App\\Models\\Venue',4,'App\\Models\\Venue',4,'','finished','','2022-01-04 12:11:59','2022-01-04 12:11:59','{\"cover_image\":null}','{\"cover_image\":\"images\\/venues\\/\\/cqRqDcUCurmZhj1BUJeJO9LHVcDcPnsTqxxmOdQz.jpg\"}'),
	(18,'954c7eef-ce00-43ee-8985-ca70ce2e6251',1,'Update','App\\Models\\Event',2,'App\\Models\\Event',2,'App\\Models\\Event',2,'','finished','','2022-01-07 12:16:36','2022-01-07 12:16:36','{\"start\":null,\"end\":null,\"active\":1,\"recurring\":0}','{\"start\":\"2022-01-01 12:00:00\",\"end\":\"2022-01-01 13:00:00\",\"active\":true,\"recurring\":false}'),
	(19,'954c8eb2-d8e1-41a0-98c2-3d3a0fe857e5',1,'Create','App\\Models\\Category',1,'App\\Models\\Category',1,'App\\Models\\Category',1,'','finished','','2022-01-07 13:00:41','2022-01-07 13:00:41',NULL,'{\"name\":\"Children & Young Adults\",\"updated_at\":\"2022-01-07T13:00:41.000000Z\",\"created_at\":\"2022-01-07T13:00:41.000000Z\",\"id\":1}'),
	(20,'954c8ebf-7e3e-4f03-bb69-6354b06957ed',1,'Create','App\\Models\\Category',2,'App\\Models\\Category',2,'App\\Models\\Category',2,'','finished','','2022-01-07 13:00:49','2022-01-07 13:00:49',NULL,'{\"name\":\"Social, Books & Crafts\",\"updated_at\":\"2022-01-07T13:00:49.000000Z\",\"created_at\":\"2022-01-07T13:00:49.000000Z\",\"id\":2}'),
	(21,'954c8ec9-a8ea-45af-ba98-043bfbf8439e',1,'Create','App\\Models\\Category',3,'App\\Models\\Category',3,'App\\Models\\Category',3,'','finished','','2022-01-07 13:00:56','2022-01-07 13:00:56',NULL,'{\"name\":\"Health & Help\",\"updated_at\":\"2022-01-07T13:00:56.000000Z\",\"created_at\":\"2022-01-07T13:00:56.000000Z\",\"id\":3}'),
	(22,'954c8ed1-f413-433b-ae4c-dc2cc6569baa',1,'Create','App\\Models\\Category',4,'App\\Models\\Category',4,'App\\Models\\Category',4,'','finished','','2022-01-07 13:01:01','2022-01-07 13:01:01',NULL,'{\"name\":\"Cinema\",\"updated_at\":\"2022-01-07T13:01:01.000000Z\",\"created_at\":\"2022-01-07T13:01:01.000000Z\",\"id\":4}'),
	(23,'954c8eda-7cdc-40d7-97d6-7a4398fd0f7b',1,'Create','App\\Models\\Category',5,'App\\Models\\Category',5,'App\\Models\\Category',5,'','finished','','2022-01-07 13:01:07','2022-01-07 13:01:07',NULL,'{\"name\":\"Exercise & Dance\",\"updated_at\":\"2022-01-07T13:01:07.000000Z\",\"created_at\":\"2022-01-07T13:01:07.000000Z\",\"id\":5}'),
	(24,'954c8ee2-227d-49ae-bbe9-eca92ea3cac5',1,'Create','App\\Models\\Category',6,'App\\Models\\Category',6,'App\\Models\\Category',6,'','finished','','2022-01-07 13:01:12','2022-01-07 13:01:12',NULL,'{\"name\":\"Sport\",\"updated_at\":\"2022-01-07T13:01:12.000000Z\",\"created_at\":\"2022-01-07T13:01:12.000000Z\",\"id\":6}'),
	(25,'954c8eea-6beb-4211-990b-f2d33ec7c44d',1,'Create','App\\Models\\Category',7,'App\\Models\\Category',7,'App\\Models\\Category',7,'','finished','','2022-01-07 13:01:17','2022-01-07 13:01:17',NULL,'{\"name\":\"Other\",\"updated_at\":\"2022-01-07T13:01:17.000000Z\",\"created_at\":\"2022-01-07T13:01:17.000000Z\",\"id\":7}'),
	(26,'954c910f-3695-4663-a7f9-287c25e069a8',1,'Update','App\\Models\\Event',2,'App\\Models\\Event',2,'App\\Models\\Event',2,'','finished','','2022-01-07 13:07:17','2022-01-07 13:07:17','{\"name\":\"wewqerqer\",\"active\":1,\"recurring\":0,\"categories\":null}','{\"name\":\"Yoga With Sarah\",\"active\":true,\"recurring\":false,\"categories\":[\"3\"]}'),
	(27,'954c9128-80e8-49e7-9226-161687f7f0cc',1,'Update','App\\Models\\Event',2,'App\\Models\\Event',2,'App\\Models\\Event',2,'','finished','','2022-01-07 13:07:34','2022-01-07 13:07:34','{\"active\":1,\"recurring\":0,\"categories\":\"[\\\"3\\\"]\"}','{\"active\":true,\"recurring\":false,\"categories\":[\"[\\\"3\\\"]\"]}'),
	(28,'954c9292-85d5-4b49-ac59-46bd082a7377',1,'Update','App\\Models\\Event',1,'App\\Models\\Event',1,'App\\Models\\Event',1,'','finished','','2022-01-07 13:11:31','2022-01-07 13:11:31','{\"start\":null,\"end\":null,\"active\":1,\"recurring\":0,\"categories\":null}','{\"start\":\"2022-01-11 12:00:00\",\"end\":\"2022-01-12 14:00:00\",\"active\":true,\"recurring\":false,\"categories\":[\"6\"]}'),
	(29,'954ca2ec-2784-4493-8186-7e9d3bacfff0',1,'Update','App\\Models\\Event',2,'App\\Models\\Event',2,'App\\Models\\Event',2,'','finished','','2022-01-07 13:57:14','2022-01-07 13:57:14','{\"type\":null,\"active\":1,\"recurring\":0,\"days\":null,\"every\":null,\"categories\":\"[\\\"[\\\\\\\"3\\\\\\\"]\\\"]\"}','{\"type\":\"0\",\"active\":true,\"recurring\":false,\"days\":[],\"every\":[],\"categories\":[\"[\\\"[\\\\\\\"3\\\\\\\"]\\\"]\"]}'),
	(30,'954ce7b2-7a54-4e0c-87eb-6c6b1870bc3c',1,'Create','App\\Models\\Event',3,'App\\Models\\Event',3,'App\\Models\\Event',3,'','finished','','2022-01-07 17:09:32','2022-01-07 17:09:32',NULL,'{\"title\":\"Sed nostrum rerum ve\",\"venue_id\":3,\"type\":\"1\",\"description\":\"<div>Eos, excepturi saepe.<\\/div>\",\"start\":null,\"end\":null,\"active\":true,\"recurring\":true,\"updated_at\":\"2022-01-07T17:09:32.000000Z\",\"created_at\":\"2022-01-07T17:09:32.000000Z\",\"id\":3}'),
	(31,'954cebf3-66de-4499-b03b-544360f1b230',1,'Create','App\\Models\\Event',4,'App\\Models\\Event',4,'App\\Models\\Event',4,'','finished','','2022-01-07 17:21:26','2022-01-07 17:21:26',NULL,'{\"title\":\"Pariatur Est iure a\",\"venue_id\":1,\"type\":\"4\",\"description\":\"<div>Cupiditate ut magnam.<\\/div>\",\"start\":null,\"end\":null,\"active\":true,\"recurring\":true,\"categories\":[1,2,3,4,5,6,7],\"days\":[1,2,3,4,5,6,7],\"every\":[1,2,3],\"updated_at\":\"2022-01-07T17:21:26.000000Z\",\"created_at\":\"2022-01-07T17:21:26.000000Z\",\"id\":4}'),
	(32,'954cec58-efb7-419c-841a-acc7a9966d96',1,'Update','App\\Models\\Event',4,'App\\Models\\Event',4,'App\\Models\\Event',4,'','finished','','2022-01-07 17:22:33','2022-01-07 17:22:33','{\"active\":1,\"recurring\":1,\"days\":\"[1,2,3,4,5,6,7]\",\"categories\":\"[1,2,3,4,5,6,7]\"}','{\"active\":true,\"recurring\":true,\"days\":\"[\\\"1\\\",\\\"2\\\",\\\"3\\\",\\\"4\\\",\\\"5\\\",\\\"6\\\",\\\"7\\\"]\",\"categories\":\"[1,2,3,4,5,6,7,1]\"}'),
	(33,'954cec7f-5fdc-40ab-822e-f44787f03bd5',1,'Update','App\\Models\\Event',4,'App\\Models\\Event',4,'App\\Models\\Event',4,'','finished','','2022-01-07 17:22:58','2022-01-07 17:22:58','{\"active\":1,\"recurring\":1,\"every\":\"[1,2,3]\",\"categories\":\"[1,2,3,4,5,6,7,1]\"}','{\"active\":true,\"recurring\":true,\"every\":\"[\\\"1\\\",\\\"2\\\",\\\"3\\\",\\\"1\\\"]\",\"categories\":\"[\\\"1\\\",\\\"2\\\",\\\"3\\\",\\\"4\\\",\\\"5\\\",\\\"6\\\",\\\"7\\\",\\\"1\\\"]\"}'),
	(34,'954cec86-59e4-4b5e-b03c-8f4c26fffa11',1,'Update','App\\Models\\Event',4,'App\\Models\\Event',4,'App\\Models\\Event',4,'','finished','','2022-01-07 17:23:02','2022-01-07 17:23:02','{\"active\":1,\"recurring\":1,\"every\":\"[\\\"1\\\",\\\"2\\\",\\\"3\\\",\\\"1\\\"]\"}','{\"active\":true,\"recurring\":true,\"every\":\"[\\\"1\\\",\\\"1\\\"]\"}'),
	(35,'954cec9d-3298-4c50-b7da-c8c3dc6679c7',1,'Delete','App\\Models\\Event',4,'App\\Models\\Event',4,'App\\Models\\Event',4,'','finished','','2022-01-07 17:23:17','2022-01-07 17:23:17',NULL,NULL),
	(36,'954ceca4-6054-4a87-86a5-34012a799e41',1,'Delete','App\\Models\\Event',3,'App\\Models\\Event',3,'App\\Models\\Event',3,'','finished','','2022-01-07 17:23:22','2022-01-07 17:23:22',NULL,NULL),
	(37,'954ced1b-77ad-473b-8e64-b4c27f4a0bf0',1,'Create','App\\Models\\Event',5,'App\\Models\\Event',5,'App\\Models\\Event',5,'','finished','','2022-01-07 17:24:40','2022-01-07 17:24:40',NULL,'{\"title\":\"FootyTotz\",\"venue_id\":1,\"type\":null,\"description\":\"<ul><li>Structured play for children aged 18 months to 5 years<\\/li><li>Sundays, 10.00am am \\u2013 12:00 pm, Community Centre<\\/li><li>Contact Chris on <a href=\\\"mailto:glossop@footytotz.co.uk\\\">glossop@footytotz.co.uk<\\/a> or 07837 597267, or see <a href=\\\"http:\\/\\/footytotz.co.uk\\/high-peak\\/\\\">footytotz.co.uk\\/high-peak<\\/a><\\/li><\\/ul><div><br><\\/div>\",\"start\":\"2022-01-09T10:00:00.000000Z\",\"end\":\"2022-01-09T12:00:00.000000Z\",\"active\":true,\"recurring\":true,\"categories\":[\"1\",\"6\"],\"days\":[\"7\"],\"every\":[\"1\"],\"updated_at\":\"2022-01-07T17:24:40.000000Z\",\"created_at\":\"2022-01-07T17:24:40.000000Z\",\"id\":5}'),
	(40,'95627cc0-607a-4263-bbcc-9748ff459a5d',1,'Update','App\\Models\\Event',2,'App\\Models\\Event',2,'App\\Models\\Event',2,'','finished','','2022-01-18 10:38:43','2022-01-18 10:38:43','{\"start\":\"2022-01-01 12:00:00\",\"end\":\"2022-01-01 13:00:00\",\"active\":1,\"recurring\":0,\"days\":\"[]\"}','{\"start\":\"2022-01-18 12:00:00\",\"end\":\"2022-01-18 13:00:00\",\"active\":true,\"recurring\":false,\"days\":\"[\\\"1\\\"]\"}'),
	(41,'95627d4c-5c73-40a4-8a0b-6392c04d6e27',1,'Update','App\\Models\\Event',2,'App\\Models\\Event',2,'App\\Models\\Event',2,'','finished','','2022-01-18 10:40:14','2022-01-18 10:40:14','{\"active\":1,\"recurring\":0,\"categories\":\"[\\\"[\\\\\\\"[\\\\\\\\\\\\\\\"3\\\\\\\\\\\\\\\"]\\\\\\\"]\\\"]\"}','{\"active\":true,\"recurring\":false,\"categories\":\"[\\\"[\\\\\\\"[\\\\\\\\\\\\\\\"3\\\\\\\\\\\\\\\"]\\\\\\\"]\\\",\\\"6\\\"]\"}'),
	(42,'95627d9b-97c1-4e0f-94bb-2db46469311c',1,'Update','App\\Models\\Event',2,'App\\Models\\Event',2,'App\\Models\\Event',2,'','finished','','2022-01-18 10:41:06','2022-01-18 10:41:06','{\"active\":1,\"recurring\":0,\"every\":\"[]\"}','{\"active\":true,\"recurring\":false,\"every\":\"[\\\"1\\\"]\"}'),
	(43,'95627dab-3bc7-4d45-8b95-e127ec00c49e',1,'Update','App\\Models\\Event',2,'App\\Models\\Event',2,'App\\Models\\Event',2,'','finished','','2022-01-18 10:41:17','2022-01-18 10:41:17','{\"active\":1,\"recurring\":0}','{\"active\":true,\"recurring\":true}'),
	(44,'95627dce-4c4b-4d81-81f7-37af9b7f930e',1,'Update','App\\Models\\Event',2,'App\\Models\\Event',2,'App\\Models\\Event',2,'','finished','','2022-01-18 10:41:40','2022-01-18 10:41:40','{\"active\":1,\"recurring\":1,\"slug\":null}','{\"active\":true,\"recurring\":true,\"slug\":\"yoga-with-sarah\"}'),
	(45,'95628068-d8f3-412c-b242-bc2df26b1473',1,'Update','App\\Models\\Event',2,'App\\Models\\Event',2,'App\\Models\\Event',2,'','finished','','2022-01-18 10:48:56','2022-01-18 10:48:56','{\"active\":1,\"recurring\":1,\"categories\":\"\"}','{\"active\":true,\"recurring\":true,\"categories\":\"[\\\"5\\\"]\"}'),
	(46,'95629780-b146-4ba6-a784-2c895198afa3',1,'Update','App\\Models\\Event',5,'App\\Models\\Event',5,'App\\Models\\Event',5,'','finished','','2022-01-18 11:53:31','2022-01-18 11:53:31','{\"active\":1,\"recurring\":1,\"description\":\"<ul><li>Structured play for children aged 18 months to 5 years<\\/li><li>Sundays, 10.00am am \\u2013 12:00 pm, Community Centre<\\/li><li>Contact Chris on <a href=\\\"mailto:glossop@footytotz.co.uk\\\">glossop@footytotz.co.uk<\\/a> or 07837 597267, or see <a href=\\\"http:\\/\\/footytotz.co.uk\\/high-peak\\/\\\">footytotz.co.uk\\/high-peak<\\/a><\\/li><\\/ul><div><br><\\/div>\",\"days\":\"[\\\"7\\\"]\",\"every\":\"[\\\"1\\\"]\",\"categories\":\"1,6\",\"slug\":null}','{\"active\":true,\"recurring\":true,\"description\":\"<ul><li>Structured play for children aged 18 months to 5 years<\\/li><li>Sundays, 10.00am am \\u2013 12:00 pm, Community Centre<\\/li><li>Contact Chris on <a href=\\\"mailto:glossop@footytotz.co.uk\\\">glossop@footytotz.co.uk<\\/a> or 07837 597267, or see <a href=\\\"http:\\/\\/footytotz.co.uk\\/high-peak\\/\\\">footytotz.co.uk\\/high-peak<\\/a><\\/li><\\/ul><div><br><\\/div><div><br><\\/div>\",\"days\":\"[7]\",\"every\":\"[1]\",\"categories\":\"[]\",\"slug\":\"footy-totz\"}'),
	(47,'956297a4-cba5-44b1-b42a-916fe815128a',1,'Update','App\\Models\\Event',5,'App\\Models\\Event',5,'App\\Models\\Event',5,'','finished','','2022-01-18 11:53:54','2022-01-18 11:53:54','{\"active\":1,\"recurring\":1,\"description\":\"<ul><li>Structured play for children aged 18 months to 5 years<\\/li><li>Sundays, 10.00am am \\u2013 12:00 pm, Community Centre<\\/li><li>Contact Chris on <a href=\\\"mailto:glossop@footytotz.co.uk\\\">glossop@footytotz.co.uk<\\/a> or 07837 597267, or see <a href=\\\"http:\\/\\/footytotz.co.uk\\/high-peak\\/\\\">footytotz.co.uk\\/high-peak<\\/a><\\/li><\\/ul><div><br><\\/div><div><br><\\/div>\",\"days\":\"[7]\",\"every\":\"[1]\"}','{\"active\":true,\"recurring\":true,\"description\":\"<ul><li>Structured play for children aged 18 months to 5 years<\\/li><li>Sundays, 10.00am am \\u2013 12:00 pm, Community Centre<\\/li><li>Contact Chris on <a href=\\\"mailto:glossop@footytotz.co.uk\\\">glossop@footytotz.co.uk<\\/a> or 07837 597267, or see <a href=\\\"http:\\/\\/footytotz.co.uk\\/high-peak\\/\\\">footytotz.co.uk\\/high-peak<\\/a><\\/li><\\/ul><div><br><\\/div><div><br><\\/div><div><br><\\/div>\",\"days\":\"[7,7]\",\"every\":\"[1,1]\"}'),
	(48,'95629af8-2c59-41cb-bc1f-582c55049192',1,'Update','App\\Models\\Event',5,'App\\Models\\Event',5,'App\\Models\\Event',5,'','finished','','2022-01-18 12:03:12','2022-01-18 12:03:12','{\"active\":1,\"recurring\":1,\"description\":\"<ul><li>Structured play for children aged 18 months to 5 years<\\/li><li>Sundays, 10.00am am \\u2013 12:00 pm, Community Centre<\\/li><li>Contact Chris on <a href=\\\"mailto:glossop@footytotz.co.uk\\\">glossop@footytotz.co.uk<\\/a> or 07837 597267, or see <a href=\\\"http:\\/\\/footytotz.co.uk\\/high-peak\\/\\\">footytotz.co.uk\\/high-peak<\\/a><\\/li><\\/ul><div><br><\\/div><div><br><\\/div><div><br><\\/div>\",\"categories\":\"[]\"}','{\"active\":true,\"recurring\":true,\"description\":\"<ul><li>Structured play for children aged 18 months to 5 years<\\/li><li>Sundays, 10.00am am \\u2013 12:00 pm, Community Centre<\\/li><li>Contact Chris on <a href=\\\"mailto:glossop@footytotz.co.uk\\\">glossop@footytotz.co.uk<\\/a> or 07837 597267, or see <a href=\\\"http:\\/\\/footytotz.co.uk\\/high-peak\\/\\\">footytotz.co.uk\\/high-peak<\\/a><\\/li><\\/ul><div><br><\\/div><div><br><\\/div><div><br><\\/div><div><br><\\/div>\",\"categories\":\"[1,6]\"}'),
	(49,'95629b27-5f6e-4366-b0f9-7bcbc6175b03',1,'Update','App\\Models\\Event',5,'App\\Models\\Event',5,'App\\Models\\Event',5,'','finished','','2022-01-18 12:03:43','2022-01-18 12:03:43','{\"active\":1,\"recurring\":1,\"description\":\"<ul><li>Structured play for children aged 18 months to 5 years<\\/li><li>Sundays, 10.00am am \\u2013 12:00 pm, Community Centre<\\/li><li>Contact Chris on <a href=\\\"mailto:glossop@footytotz.co.uk\\\">glossop@footytotz.co.uk<\\/a> or 07837 597267, or see <a href=\\\"http:\\/\\/footytotz.co.uk\\/high-peak\\/\\\">footytotz.co.uk\\/high-peak<\\/a><\\/li><\\/ul><div><br><\\/div><div><br><\\/div><div><br><\\/div><div><br><\\/div>\",\"days\":\"[7,7]\",\"every\":\"[1,1]\",\"categories\":\"[1,6]\"}','{\"active\":true,\"recurring\":true,\"description\":\"<ul><li>Structured play for children aged 18 months to 5 years<\\/li><li>Sundays, 10.00am am \\u2013 12:00 pm, Community Centre<\\/li><li>Contact Chris on <a href=\\\"mailto:glossop@footytotz.co.uk\\\">glossop@footytotz.co.uk<\\/a> or 07837 597267, or see <a href=\\\"http:\\/\\/footytotz.co.uk\\/high-peak\\/\\\">footytotz.co.uk\\/high-peak<\\/a><\\/li><\\/ul><div><br><\\/div><div><br><\\/div><div><br><\\/div><div><br><\\/div><div><br><\\/div>\",\"days\":\"[\\\"7\\\",\\\"7\\\"]\",\"every\":\"[\\\"1\\\",\\\"1\\\"]\",\"categories\":\"[\\\"1\\\",\\\"6\\\",\\\"1\\\",\\\"6\\\"]\"}'),
	(50,'95629c2b-7e81-49af-a52c-83db0927fb68',1,'Create','App\\Models\\Event',6,'App\\Models\\Event',6,'App\\Models\\Event',6,'','finished','','2022-01-18 12:06:34','2022-01-18 12:06:34',NULL,'{\"title\":\"Craft Club\",\"slug\":\"craft-club\",\"venue_id\":1,\"type\":\"1\",\"description\":\"<div>Contact Linda on <a href=\\\"mailto:lpage999@gmail.com\\\">lpage999@gmail.com<\\/a> or 01663 750448<\\/div><div><br><\\/div>\",\"start\":\"2022-01-18T14:00:00.000000Z\",\"end\":\"2022-01-18T16:00:00.000000Z\",\"active\":false,\"recurring\":false,\"categories\":[\"2\"],\"days\":[\"2\"],\"every\":[\"1\"],\"updated_at\":\"2022-01-18T12:06:34.000000Z\",\"created_at\":\"2022-01-18T12:06:34.000000Z\",\"id\":6}'),
	(51,'95629cad-d880-4a7a-b8ec-3dd27067fd8a',1,'Update','App\\Models\\Event',6,'App\\Models\\Event',6,'App\\Models\\Event',6,'','finished','','2022-01-18 12:07:59','2022-01-18 12:07:59','{\"active\":0,\"recurring\":0}','{\"active\":true,\"recurring\":true}'),
	(52,'95629d97-e35c-4561-963c-ec1af42d65e7',1,'Create','App\\Models\\Event',7,'App\\Models\\Event',7,'App\\Models\\Event',7,'','finished','','2022-01-18 12:10:33','2022-01-18 12:10:33',NULL,'{\"title\":\"Book Group\",\"slug\":\"book-group\",\"venue_id\":1,\"type\":\"1\",\"description\":\"<div>Contact Liz on <a href=\\\"mailto:lizstillo@gmail.com\\\">lizstillo@gmail.com<\\/a> or 01663 750640<\\/div><div><br><\\/div>\",\"start\":null,\"end\":null,\"active\":true,\"recurring\":true,\"categories\":[\"2\"],\"days\":[\"2\"],\"every\":[\"2\"],\"updated_at\":\"2022-01-18T12:10:33.000000Z\",\"created_at\":\"2022-01-18T12:10:33.000000Z\",\"id\":7}'),
	(53,'95629e7b-2f15-4f97-bea9-3967dcbfd57f',1,'Update','App\\Models\\Event',1,'App\\Models\\Event',1,'App\\Models\\Event',1,'','finished','','2022-01-18 12:13:02','2022-01-18 12:13:02','{\"type\":null,\"active\":1,\"recurring\":0,\"days\":null,\"every\":null,\"categories\":\"6\",\"slug\":null}','{\"type\":\"1\",\"active\":true,\"recurring\":false,\"days\":\"[\\\"1\\\"]\",\"every\":\"[]\",\"categories\":\"[\\\"6\\\"]\",\"slug\":\"table-tennis\"}'),
	(54,'9562b315-2870-4881-9e40-b6831f949f89',1,'Update','App\\Models\\Event',5,'App\\Models\\Event',5,'App\\Models\\Event',5,'','finished','','2022-01-18 13:10:38','2022-01-18 13:10:38','{\"active\":1,\"recurring\":1,\"description\":\"<ul><li>Structured play for children aged 18 months to 5 years<\\/li><li>Sundays, 10.00am am \\u2013 12:00 pm, Community Centre<\\/li><li>Contact Chris on <a href=\\\"mailto:glossop@footytotz.co.uk\\\">glossop@footytotz.co.uk<\\/a> or 07837 597267, or see <a href=\\\"http:\\/\\/footytotz.co.uk\\/high-peak\\/\\\">footytotz.co.uk\\/high-peak<\\/a><\\/li><\\/ul><div><br><\\/div><div><br><\\/div><div><br><\\/div><div><br><\\/div><div><br><\\/div>\"}','{\"active\":true,\"recurring\":true,\"description\":\"<div>Structured play for children aged 18 months to 5 years<\\/div><div><br>Sundays, 10.00am am \\u2013 12:00 pm, Community Centre<\\/div><div><br>Contact Chris on <a href=\\\"mailto:glossop@footytotz.co.uk\\\">glossop@footytotz.co.uk<\\/a> or 07837 597267, or see <a href=\\\"http:\\/\\/footytotz.co.uk\\/high-peak\\/\\\">footytotz.co.uk\\/high-peak<\\/a><\\/div><div><br><\\/div><div><br><\\/div><div><br><\\/div><div><br><\\/div><div><br><\\/div><div><br><\\/div>\"}'),
	(55,'9562bd77-238f-40f5-93d6-4d20fe8ce31a',1,'Create','App\\Models\\Room',1,'App\\Models\\Room',1,'App\\Models\\Room',1,'','finished','','2022-01-18 13:39:40','2022-01-18 13:39:40',NULL,'{\"name\":\"Main Room\",\"venue_id\":4,\"updated_at\":\"2022-01-18T13:39:40.000000Z\",\"created_at\":\"2022-01-18T13:39:40.000000Z\",\"id\":1}'),
	(56,'9562beb6-33dc-4532-be47-e9d7f0ec77a9',1,'Update','App\\Models\\Venue',4,'App\\Models\\Venue',4,'App\\Models\\Venue',4,'','finished','','2022-01-18 13:43:09','2022-01-18 13:43:09','[]','[]'),
	(57,'9562ca8f-8bde-4253-875e-544f81d8cfda',1,'Update','App\\Models\\Room',1,'App\\Models\\Room',1,'App\\Models\\Room',1,'','finished','','2022-01-18 14:16:17','2022-01-18 14:16:17','{\"capacity\":0,\"price\":\"0.00\",\"active\":1}','{\"capacity\":\"120\",\"price\":\"12\",\"active\":true}'),
	(58,'9562fae6-afc7-45e4-9335-0ac2d9652227',1,'Update','App\\Models\\Event',5,'App\\Models\\Event',5,'App\\Models\\Event',5,'','finished','','2022-01-18 16:31:27','2022-01-18 16:31:27','{\"active\":1,\"recurring\":1,\"thumbnail\":null}','{\"active\":true,\"recurring\":true,\"thumbnail\":\"JFtgr2SHHHeWxGlf6etEduLySBQJjlNBfb54De8d.png\"}'),
	(59,'95630093-fca6-4b9f-9ec3-d1f445743add',1,'Update','App\\Models\\Event',1,'App\\Models\\Event',1,'App\\Models\\Event',1,'','finished','','2022-01-18 16:47:19','2022-01-18 16:47:19','{\"active\":1,\"recurring\":0,\"cover_image\":null}','{\"active\":true,\"recurring\":false,\"cover_image\":\"WD4yfTLIkIs5B2S4F12Bqcb6T3h1WY5iWskvMn8v.jpg\"}'),
	(60,'95630201-4a7f-4715-95d7-f6c3956505c0',1,'Update','App\\Models\\Event',2,'App\\Models\\Event',2,'App\\Models\\Event',2,'','finished','','2022-01-18 16:51:19','2022-01-18 16:51:19','{\"active\":1,\"recurring\":1,\"thumbnail\":null,\"categories\":\"5\"}','{\"active\":true,\"recurring\":true,\"thumbnail\":\"Ms4VTC26sL3Srpj41yWlTSBbclSMuFpy0aLH8wc3.jpg\",\"categories\":\"[\\\"5\\\"]\"}'),
	(61,'9563022b-f1ed-4414-9800-9ab479f9de34',1,'Update','App\\Models\\Event',1,'App\\Models\\Event',1,'App\\Models\\Event',1,'','finished','','2022-01-18 16:51:47','2022-01-18 16:51:47','{\"active\":1,\"recurring\":0,\"thumbnail\":null}','{\"active\":true,\"recurring\":false,\"thumbnail\":\"XiaQUe6vfcg0011RSaG8S2v2yivC5QHDvVrKrA8i.jpg\"}'),
	(62,'956302e2-afdc-456c-b671-9a0a7d026323',1,'Update','App\\Models\\Event',6,'App\\Models\\Event',6,'App\\Models\\Event',6,'','finished','','2022-01-18 16:53:47','2022-01-18 16:53:47','{\"active\":1,\"recurring\":1,\"thumbnail\":null}','{\"active\":true,\"recurring\":true,\"thumbnail\":\"cu1dh18ACaapzMr2PmuyZKCE15depNJsGrW86hIy.jpg\"}'),
	(63,'956302f3-628e-4836-996b-255697175b11',1,'Update','App\\Models\\Event',7,'App\\Models\\Event',7,'App\\Models\\Event',7,'','finished','','2022-01-18 16:53:58','2022-01-18 16:53:58','{\"active\":1,\"recurring\":1,\"thumbnail\":null}','{\"active\":true,\"recurring\":true,\"thumbnail\":\"I8gVd46fKCwwamsr9XnMRD1LOBiahFLMu4SyLTcL.jpg\"}'),
	(64,'956305be-3a28-4800-9a31-6f3b6d1ef2fe',1,'Create','App\\Models\\Event',8,'App\\Models\\Event',8,'App\\Models\\Event',8,'','finished','','2022-01-18 17:01:46','2022-01-18 17:01:46',NULL,'{\"title\":\"Coffee Morning and Book Swap & Drop\",\"slug\":\"coffee-morning-and-book-swap-drop\",\"venue_id\":1,\"type\":\"1\",\"description\":\"<div>Everybody Welcome!<br><br><\\/div><div>Wednesdays, 10.00am \\u2013 12:30 am (hot drinks, bacon sandwiches and cakes served)<\\/div>\",\"start\":null,\"end\":null,\"active\":true,\"recurring\":true,\"categories\":[\"2\"],\"days\":[\"3\"],\"every\":[],\"updated_at\":\"2022-01-18T17:01:46.000000Z\",\"created_at\":\"2022-01-18T17:01:46.000000Z\",\"id\":8}'),
	(65,'956305cc-da4a-4a6a-85a1-b0e358f598cc',1,'Update','App\\Models\\Event',8,'App\\Models\\Event',8,'App\\Models\\Event',8,'','finished','','2022-01-18 17:01:56','2022-01-18 17:01:56','{\"active\":1,\"recurring\":1,\"every\":\"[]\"}','{\"active\":true,\"recurring\":true,\"every\":\"[\\\"1\\\"]\"}'),
	(66,'956306b5-107a-458e-a277-b73fb126be7d',1,'Update','App\\Models\\Event',8,'App\\Models\\Event',8,'App\\Models\\Event',8,'','finished','','2022-01-18 17:04:28','2022-01-18 17:04:28','{\"active\":1,\"recurring\":1,\"thumbnail\":null}','{\"active\":true,\"recurring\":true,\"thumbnail\":\"qfkMj9hglqB1negEtxWBbWc2LIpdY96Bc1TuNQb3.jpg\"}'),
	(67,'9563076a-7c15-41c9-acdb-111d27d109d3',1,'Update','App\\Models\\Event',8,'App\\Models\\Event',8,'App\\Models\\Event',8,'','finished','','2022-01-18 17:06:27','2022-01-18 17:06:27','{\"active\":1,\"recurring\":1,\"thumbnail\":\"qfkMj9hglqB1negEtxWBbWc2LIpdY96Bc1TuNQb3.jpg\"}','{\"active\":true,\"recurring\":true,\"thumbnail\":\"WITaLRCYkPI03AmBg5NKeDLaI7ObgXSD8jb0Erxg.jpg\"}'),
	(68,'9563082b-11d0-4148-a5a7-5f7083f3b7b8',1,'Create','App\\Models\\Event',9,'App\\Models\\Event',9,'App\\Models\\Event',9,'','finished','','2022-01-18 17:08:33','2022-01-18 17:08:33',NULL,'{\"thumbnail\":\"liMBkjX658NNoOVXBzdPq071dxoY5XzAjnOchpzs.jpg\",\"title\":\"Coffee and Chat\",\"slug\":\"coffee-and-chat\",\"venue_id\":2,\"type\":\"1\",\"description\":\"<div>Everyone welcome<br><br><\\/div><div>Phone the Joan on <strong>01663 746000<\\/strong><\\/div><div><br><\\/div>\",\"start\":null,\"end\":null,\"active\":true,\"recurring\":true,\"categories\":[\"2\"],\"days\":[\"2\"],\"every\":[],\"updated_at\":\"2022-01-18T17:08:33.000000Z\",\"created_at\":\"2022-01-18T17:08:33.000000Z\",\"id\":9}'),
	(69,'956308de-4fea-44d0-879c-5a1723e57132',1,'Create','App\\Models\\Event',10,'App\\Models\\Event',10,'App\\Models\\Event',10,'','finished','','2022-01-18 17:10:30','2022-01-18 17:10:30',NULL,'{\"title\":\"Women\\u2019s Institute Evening Meeting\",\"slug\":\"womens-institute-evening-meeting\",\"venue_id\":2,\"type\":\"1\",\"description\":\"<div>Visitors and new members always welcome.<br><br><\\/div><div>7:30 pm (1st Tuesday of the month), April till Sept 7.30pm Oct to March 1.30 to 3.30 W.I. Hall<\\/div><div><br>Phone Gerri on 07940774111 or Judith on 01663 751275 or email gerri.ross@btinternet.com<\\/div><div><br><\\/div>\",\"start\":null,\"end\":null,\"active\":true,\"recurring\":true,\"categories\":[\"2\"],\"days\":[\"2\"],\"every\":[\"2\"],\"updated_at\":\"2022-01-18T17:10:30.000000Z\",\"created_at\":\"2022-01-18T17:10:30.000000Z\",\"id\":10}'),
	(70,'95630f9d-8375-45f9-a65e-5f56159a3b56',1,'Update','App\\Models\\Event',5,'App\\Models\\Event',5,'App\\Models\\Event',5,'','finished','','2022-01-18 17:29:22','2022-01-18 17:29:22','{\"active\":1,\"recurring\":1,\"website\":null,\"contact_name\":null,\"contact_email\":null,\"contact_number\":null}','{\"active\":true,\"recurring\":true,\"website\":\"https:\\/\\/footytotz.co.uk\\/high-peak\\/\",\"contact_name\":\"Chris\",\"contact_email\":\"Glossop@footytotz.co.uk\",\"contact_number\":\"07837 597 267\"}'),
	(71,'956310d8-6937-4e89-a2b1-188d62929442',1,'Update','App\\Models\\Event',10,'App\\Models\\Event',10,'App\\Models\\Event',10,'','finished','','2022-01-18 17:32:49','2022-01-18 17:32:49','{\"active\":1,\"recurring\":1,\"contact_name\":null,\"contact_email\":null,\"contact_number\":null}','{\"active\":true,\"recurring\":true,\"contact_name\":\"Gerri Rosss\",\"contact_email\":\"gerri.ross@btinternet.com\",\"contact_number\":\"07940774111\"}'),
	(72,'956310ea-7208-4720-af56-228adbc3e8fb',1,'Update','App\\Models\\Event',10,'App\\Models\\Event',10,'App\\Models\\Event',10,'','finished','','2022-01-18 17:33:01','2022-01-18 17:33:01','{\"active\":1,\"recurring\":1,\"contact_name\":\"Gerri Rosss\"}','{\"active\":true,\"recurring\":true,\"contact_name\":\"Gerri Ross\"}'),
	(73,'95631133-0760-4eff-af13-e2658f21f84b',1,'Update','App\\Models\\Event',9,'App\\Models\\Event',9,'App\\Models\\Event',9,'','finished','','2022-01-18 17:33:48','2022-01-18 17:33:48','{\"active\":1,\"recurring\":1,\"contact_name\":null,\"contact_number\":null}','{\"active\":true,\"recurring\":true,\"contact_name\":\"Joan\",\"contact_number\":\"01663 746000\"}'),
	(74,'95631183-fa37-49e5-8ecc-57315b6ef452',1,'Update','App\\Models\\Event',6,'App\\Models\\Event',6,'App\\Models\\Event',6,'','finished','','2022-01-18 17:34:41','2022-01-18 17:34:41','{\"active\":1,\"recurring\":1,\"contact_name\":null,\"contact_email\":null,\"contact_number\":null}','{\"active\":true,\"recurring\":true,\"contact_name\":\"Linda\",\"contact_email\":\"lpage999@gmail.com\",\"contact_number\":\"01663 750448\"}'),
	(75,'956311ab-8638-420f-bb08-e469bc32ef5b',1,'Update','App\\Models\\Event',7,'App\\Models\\Event',7,'App\\Models\\Event',7,'','finished','','2022-01-18 17:35:07','2022-01-18 17:35:07','{\"active\":1,\"recurring\":1,\"contact_name\":null,\"contact_email\":null,\"contact_number\":null}','{\"active\":true,\"recurring\":true,\"contact_name\":\"Contact Liz\",\"contact_email\":\"lizstillo@gmail.com\",\"contact_number\":\"01663 750640\"}'),
	(76,'95631211-8c49-4c53-92af-6c062984fc1f',1,'Create','App\\Models\\Event',11,'App\\Models\\Event',11,'App\\Models\\Event',11,'','finished','','2022-01-18 17:36:14','2022-01-18 17:36:14',NULL,'{\"title\":\"Youth Club\",\"slug\":\"youth-club\",\"venue_id\":1,\"type\":null,\"description\":\"<div>Currently Closed<\\/div>\",\"start\":null,\"end\":null,\"active\":false,\"recurring\":true,\"categories\":[\"1\"],\"days\":[\"1\"],\"every\":[],\"website\":null,\"contact_name\":null,\"contact_email\":null,\"contact_number\":null,\"updated_at\":\"2022-01-18T17:36:14.000000Z\",\"created_at\":\"2022-01-18T17:36:14.000000Z\",\"id\":11}'),
	(77,'9563128b-eb40-466d-b7b3-9dd17c3c3499',1,'Create','App\\Models\\Event',12,'App\\Models\\Event',12,'App\\Models\\Event',12,'','finished','','2022-01-18 17:37:34','2022-01-18 17:37:34',NULL,'{\"title\":\"Parent & Toddler Group\",\"slug\":\"parent-toddler-group\",\"venue_id\":1,\"type\":\"1\",\"description\":null,\"start\":null,\"end\":null,\"active\":false,\"recurring\":true,\"categories\":[\"1\"],\"days\":[\"2\"],\"every\":[\"1\"],\"website\":\"https:\\/\\/www.facebook.com\\/chinleytoddlergroup\\/\",\"contact_name\":\"Liz\",\"contact_email\":\"lizroberts@outlook.com\",\"contact_number\":null,\"updated_at\":\"2022-01-18T17:37:34.000000Z\",\"created_at\":\"2022-01-18T17:37:34.000000Z\",\"id\":12}'),
	(78,'956312f8-e349-4853-b00f-93977ccf3e0e',1,'Create','App\\Models\\Event',13,'App\\Models\\Event',13,'App\\Models\\Event',13,'','finished','','2022-01-18 17:38:46','2022-01-18 17:38:46',NULL,'{\"title\":\"Samantha Wood Theatre Academy\",\"slug\":\"samantha-wood-theatre-academy\",\"venue_id\":2,\"type\":null,\"description\":null,\"start\":null,\"end\":null,\"active\":false,\"recurring\":false,\"categories\":[],\"days\":[],\"every\":[],\"website\":\"www.swtheatreacademy.co.uk\",\"contact_name\":\"Sue Wood\",\"contact_email\":\"admin@swtheatreacademy.co.uk\",\"contact_number\":\"07785 787771\",\"updated_at\":\"2022-01-18T17:38:46.000000Z\",\"created_at\":\"2022-01-18T17:38:46.000000Z\",\"id\":13}'),
	(79,'9563139e-e8c0-4c10-abe7-88a94d4c91ae',1,'Update','App\\Models\\Event',13,'App\\Models\\Event',13,'App\\Models\\Event',13,'','finished','','2022-01-18 17:40:34','2022-01-18 17:40:34','{\"active\":0,\"recurring\":0,\"categories\":\"[]\"}','{\"active\":false,\"recurring\":false,\"categories\":\"[\\\"1\\\"]\"}'),
	(80,'956313ac-0ad9-40f7-8035-6252b345a1b4',1,'Update','App\\Models\\Event',13,'App\\Models\\Event',13,'App\\Models\\Event',13,'','finished','','2022-01-18 17:40:43','2022-01-18 17:40:43','{\"active\":0,\"recurring\":0}','{\"active\":true,\"recurring\":false}'),
	(81,'9563144f-f777-4a36-947e-c349f8a3984b',1,'Create','App\\Models\\Event',14,'App\\Models\\Event',14,'App\\Models\\Event',14,'','finished','','2022-01-18 17:42:30','2022-01-18 17:42:30',NULL,'{\"title\":\"Brownies\",\"slug\":\"brownies\",\"venue_id\":1,\"type\":null,\"description\":null,\"start\":null,\"end\":null,\"active\":true,\"recurring\":false,\"categories\":[\"1\"],\"days\":[\"2\"],\"every\":[\"1\"],\"website\":null,\"contact_name\":\"Judith\",\"contact_email\":\"judith_hargreaves@yahoo.com\",\"contact_number\":null,\"updated_at\":\"2022-01-18T17:42:30.000000Z\",\"created_at\":\"2022-01-18T17:42:30.000000Z\",\"id\":14}'),
	(82,'95631460-b0ff-4768-9419-dcb674d42ad5',1,'Update','App\\Models\\Event',14,'App\\Models\\Event',14,'App\\Models\\Event',14,'','finished','','2022-01-18 17:42:41','2022-01-18 17:42:41','{\"type\":null,\"active\":1,\"recurring\":0}','{\"type\":\"0\",\"active\":true,\"recurring\":false}'),
	(83,'95631874-d3fa-49a3-8794-284ebd731093',1,'Update','App\\Models\\Event',12,'App\\Models\\Event',12,'App\\Models\\Event',12,'','finished','','2022-01-18 17:54:06','2022-01-18 17:54:06','{\"active\":0,\"recurring\":1,\"thumbnail\":null}','{\"active\":true,\"recurring\":true,\"thumbnail\":\"gj4hVxRRLxXG94WqcxjdsntBex7hqPJZAoAnVZeL.jpg\"}'),
	(84,'95631d4c-36cd-4684-8cd5-886231c566c8',1,'Create','App\\Models\\Event',15,'App\\Models\\Event',15,'App\\Models\\Event',15,'','finished','','2022-01-18 18:07:38','2022-01-18 18:07:38',NULL,'{\"thumbnail\":\"Y7qLGlrVtbqn7uUbAjHe9UP1eEhGDWpvaKtcbQyi.jpg\",\"title\":\"Toddlers & Carers\",\"slug\":\"toddlers-carers\",\"venue_id\":4,\"type\":\"1\",\"description\":null,\"start\":null,\"end\":null,\"active\":true,\"recurring\":false,\"categories\":[],\"days\":[\"1\"],\"every\":[\"1\"],\"website\":null,\"contact_name\":\"Gary & Di\",\"contact_email\":null,\"contact_number\":\"01298 813606 or 07806 709163\",\"updated_at\":\"2022-01-18T18:07:38.000000Z\",\"created_at\":\"2022-01-18T18:07:38.000000Z\",\"id\":15}'),
	(85,'95631dac-9467-4642-b62f-6ba0b184047e',1,'Create','App\\Models\\Event',16,'App\\Models\\Event',16,'App\\Models\\Event',16,'','finished','','2022-01-18 18:08:41','2022-01-18 18:08:41',NULL,'{\"title\":\"1st Chinley Scouts\",\"slug\":\"1st-chinley-scouts\",\"venue_id\":3,\"type\":null,\"description\":null,\"start\":null,\"end\":null,\"active\":true,\"recurring\":false,\"categories\":[\"1\"],\"days\":[],\"every\":[],\"website\":\"www.chinleyscouts.org.uk\",\"contact_name\":\"Martin\",\"contact_email\":\"gsl@chinleyscouts.org.uk\",\"contact_number\":\"07913 802260\",\"updated_at\":\"2022-01-18T18:08:41.000000Z\",\"created_at\":\"2022-01-18T18:08:41.000000Z\",\"id\":16}'),
	(86,'95631e20-66c6-4b8a-b266-1d3761785614',1,'Create','App\\Models\\Venue',5,'App\\Models\\Venue',5,'App\\Models\\Venue',5,'','finished','','2022-01-18 18:09:57','2022-01-18 18:09:57',NULL,'{\"cover_image\":\"images\\/venues\\/\\/QitGwENfQ1ELQKJeXLHWDhVuWmAhAxXFWTpJkloU.jpg\",\"name\":\"Scout Hut\",\"town\":\"Chinley\",\"slug\":\"scout-hut\",\"website\":\"http:\\/\\/www.chinleyscouts.org.uk\\/victory-hall\\/\",\"updated_at\":\"2022-01-18T18:09:57.000000Z\",\"created_at\":\"2022-01-18T18:09:57.000000Z\",\"id\":5}'),
	(87,'95631e38-92dd-409b-9d76-d83ff6887f17',1,'Update','App\\Models\\Event',16,'App\\Models\\Event',16,'App\\Models\\Event',16,'','finished','','2022-01-18 18:10:13','2022-01-18 18:10:13','{\"active\":1,\"recurring\":0,\"venue_id\":3}','{\"active\":true,\"recurring\":false,\"venue_id\":5}'),
	(88,'95631f1b-0326-4eec-983d-83fb9a317703',1,'Update','App\\Models\\Event',16,'App\\Models\\Event',16,'App\\Models\\Event',16,'','finished','','2022-01-18 18:12:41','2022-01-18 18:12:41','{\"active\":1,\"recurring\":0,\"description\":null,\"thumbnail\":null}','{\"active\":true,\"recurring\":false,\"description\":\"<p><\\/p>\",\"thumbnail\":\"oY8dRdYkjwj308rWu3btHU5D7rfbKyq6bvwOyNzS.jpg\"}'),
	(89,'95631f53-47ea-49d8-83bf-5cb2320bbe9a',1,'Update','App\\Models\\Event',16,'App\\Models\\Event',16,'App\\Models\\Event',16,'','finished','','2022-01-18 18:13:18','2022-01-18 18:13:18','[]','[]'),
	(90,'95631f60-a3c3-43e8-8ec7-bd3c802571db',1,'Update','App\\Models\\Event',16,'App\\Models\\Event',16,'App\\Models\\Event',16,'','finished','','2022-01-18 18:13:27','2022-01-18 18:13:27','{\"active\":1,\"recurring\":0,\"days\":\"[]\",\"thumbnail\":null}','{\"active\":true,\"recurring\":false,\"days\":\"[\\\"4\\\"]\",\"thumbnail\":\"O2bckeYeWL9V5KM6MA8Cd4P1iISReV3dOaGPa4dj.jpg\"}'),
	(91,'95631f83-971a-4df7-ba6f-a0989b8edd71',1,'Update','App\\Models\\Event',16,'App\\Models\\Event',16,'App\\Models\\Event',16,'','finished','','2022-01-18 18:13:50','2022-01-18 18:13:50','[]','[]'),
	(92,'95631f8e-fd41-4327-81f3-ef3fe3e0697c',1,'Update','App\\Models\\Event',16,'App\\Models\\Event',16,'App\\Models\\Event',16,'','finished','','2022-01-18 18:13:57','2022-01-18 18:13:57','{\"active\":1,\"recurring\":0,\"thumbnail\":null}','{\"active\":true,\"recurring\":false,\"thumbnail\":\"6xJi05PBDXZNKNpa72C3zaLAVp1I92xlWGiMnlBm.jpg\"}'),
	(93,'95632074-e43e-4fac-bd79-4349eec97dc6',1,'Update','App\\Models\\Event',16,'App\\Models\\Event',16,'App\\Models\\Event',16,'','finished','','2022-01-18 18:16:28','2022-01-18 18:16:28','{\"active\":1,\"recurring\":0,\"thumbnail\":\"6xJi05PBDXZNKNpa72C3zaLAVp1I92xlWGiMnlBm.jpg\"}','{\"active\":true,\"recurring\":false,\"thumbnail\":\"Yh5wf5jbcTPUyOLixL8YEdgGOuOz99DgSIklgBss.jpg\"}'),
	(94,'956321c3-0980-4e61-8e29-b14e57577917',1,'Create','App\\Models\\Event',17,'App\\Models\\Event',17,'App\\Models\\Event',17,'','finished','','2022-01-18 18:20:07','2022-01-18 18:20:07',NULL,'{\"title\":\"Guides\",\"slug\":\"guides\",\"venue_id\":1,\"type\":\"0\",\"description\":null,\"start\":null,\"end\":null,\"active\":true,\"recurring\":false,\"categories\":[],\"days\":[\"7\"],\"every\":[\"1\"],\"website\":null,\"contact_name\":\"Kate\",\"contact_email\":\"chinleyguides@gmail.com\",\"contact_number\":null,\"updated_at\":\"2022-01-18T18:20:07.000000Z\",\"created_at\":\"2022-01-18T18:20:07.000000Z\",\"id\":17}'),
	(95,'95632252-b72a-4a14-bcfb-b0f025bd3253',1,'Update','App\\Models\\Event',17,'App\\Models\\Event',17,'App\\Models\\Event',17,'','finished','','2022-01-18 18:21:41','2022-01-18 18:21:41','{\"active\":1,\"recurring\":0,\"categories\":\"[]\"}','{\"active\":true,\"recurring\":false,\"categories\":\"[\\\"1\\\"]\"}'),
	(96,'95632487-6082-491d-80a8-8ea72ed1a168',1,'Create','App\\Models\\Event',18,'App\\Models\\Event',18,'App\\Models\\Event',18,'','finished','','2022-01-18 18:27:51','2022-01-18 18:27:51',NULL,'{\"thumbnail\":\"t9Muubwa2SQI2BrUuR1sJvl0a5fr58FZzf9Iuo8O.jpg\",\"title\":\"Citizen\\u2019s Advice drop-in\",\"slug\":\"citizens-advice-drop-in\",\"venue_id\":1,\"type\":\"1\",\"description\":\"<p><span>1st Wednesday of the month<\\/span><\\/p><p><span>For urgent Advice, call Citizens Advice on 0300 4568390.<\\/span><\\/p>\",\"start\":null,\"end\":null,\"active\":true,\"recurring\":false,\"categories\":[\"3\"],\"days\":[\"3\"],\"every\":[\"1\"],\"website\":null,\"contact_name\":\"Linda\",\"contact_email\":\"lpage999@gmail.com\",\"contact_number\":\"01663 750448.\",\"updated_at\":\"2022-01-18T18:27:51.000000Z\",\"created_at\":\"2022-01-18T18:27:51.000000Z\",\"id\":18}');

/*!40000 ALTER TABLE `action_events` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumnail_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`id`, `name`, `active`, `created_at`, `updated_at`, `cover_image`, `thumnail_image`)
VALUES
	(1,'Children & Young Adults',1,'2022-01-07 13:00:41','2022-01-07 13:00:41',NULL,NULL),
	(2,'Social, Books & Crafts',1,'2022-01-07 13:00:49','2022-01-07 13:00:49',NULL,NULL),
	(3,'Health & Help',1,'2022-01-07 13:00:56','2022-01-07 13:00:56',NULL,NULL),
	(4,'Cinema',1,'2022-01-07 13:01:01','2022-01-07 13:01:01',NULL,NULL),
	(5,'Exercise & Dance',1,'2022-01-07 13:01:07','2022-01-07 13:01:07',NULL,NULL),
	(6,'Sport',1,'2022-01-07 13:01:12','2022-01-07 13:01:12',NULL,NULL),
	(7,'Other',1,'2022-01-07 13:01:17','2022-01-07 13:01:17',NULL,NULL);

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table events
# ------------------------------------------------------------

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'event',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` int(11) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `recurring` int(11) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `venue_id` int(11) DEFAULT NULL,
  `days` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `every` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recurring_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rrevent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categories` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;

INSERT INTO `events` (`id`, `title`, `type`, `location`, `start`, `end`, `active`, `recurring`, `description`, `created_at`, `updated_at`, `venue_id`, `days`, `every`, `recurring_description`, `rrevent`, `cover_image`, `thumbnail`, `categories`, `slug`, `website`, `contact_name`, `contact_email`, `contact_number`)
VALUES
	(1,'Table Tennis','1',NULL,'2022-01-11 12:00:00','2022-01-11 14:00:00',1,0,NULL,'2021-12-14 22:05:50','2022-01-18 16:51:47',1,'[\"1\"]','[]',NULL,NULL,'WD4yfTLIkIs5B2S4F12Bqcb6T3h1WY5iWskvMn8v.jpg','XiaQUe6vfcg0011RSaG8S2v2yivC5QHDvVrKrA8i.jpg','[\"6\"]','table-tennis',NULL,NULL,NULL,NULL),
	(2,'Yoga With Sarah','0',NULL,'2022-01-18 12:00:00','2022-01-18 13:00:00',1,1,NULL,'2021-12-14 22:25:13','2022-01-18 16:51:19',1,'[\"1\"]','[\"1\"]',NULL,NULL,NULL,'Ms4VTC26sL3Srpj41yWlTSBbclSMuFpy0aLH8wc3.jpg','[\"5\"]','yoga-with-sarah',NULL,NULL,NULL,NULL),
	(5,'FootyTotz',NULL,NULL,'2022-01-09 10:00:00','2022-01-09 12:00:00',1,1,'<div>Structured play for children aged 18 months to 5 years</div><div><br>Sundays, 10.00am am – 12:00 pm, Community Centre</div><div><br>Contact Chris on <a href=\"mailto:glossop@footytotz.co.uk\">glossop@footytotz.co.uk</a> or 07837 597267, or see <a href=\"http://footytotz.co.uk/high-peak/\">footytotz.co.uk/high-peak</a></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div>','2022-01-07 17:24:40','2022-01-18 17:29:22',1,'[\"7\",\"7\"]','[\"1\",\"1\"]',NULL,NULL,NULL,'JFtgr2SHHHeWxGlf6etEduLySBQJjlNBfb54De8d.png','[\"1\",\"6\",\"1\",\"6\"]','footy-totz','https://footytotz.co.uk/high-peak/','Chris','Glossop@footytotz.co.uk','07837 597 267'),
	(6,'Craft Club','1',NULL,'2022-01-18 14:00:00','2022-01-18 16:00:00',1,1,'<div>Contact Linda on <a href=\"mailto:lpage999@gmail.com\">lpage999@gmail.com</a> or 01663 750448</div><div><br></div>','2022-01-18 12:06:34','2022-01-18 17:34:41',1,'[\"2\"]','[\"1\"]',NULL,NULL,NULL,'cu1dh18ACaapzMr2PmuyZKCE15depNJsGrW86hIy.jpg','[\"2\"]','craft-club',NULL,'Linda','lpage999@gmail.com','01663 750448'),
	(7,'Book Group','1',NULL,NULL,NULL,1,1,'<div>Contact Liz on <a href=\"mailto:lizstillo@gmail.com\">lizstillo@gmail.com</a> or 01663 750640</div><div><br></div>','2022-01-18 12:10:33','2022-01-18 17:35:07',1,'[\"2\"]','[\"2\"]',NULL,NULL,NULL,'I8gVd46fKCwwamsr9XnMRD1LOBiahFLMu4SyLTcL.jpg','[\"2\"]','book-group',NULL,'Contact Liz','lizstillo@gmail.com','01663 750640'),
	(8,'Coffee Morning and Book Swap & Drop','1',NULL,NULL,NULL,1,1,'<div>Everybody Welcome!<br><br></div><div>Wednesdays, 10.00am – 12:30 am (hot drinks, bacon sandwiches and cakes served)</div>','2022-01-18 17:01:46','2022-01-18 17:06:27',1,'[\"3\"]','[\"1\"]',NULL,NULL,NULL,'WITaLRCYkPI03AmBg5NKeDLaI7ObgXSD8jb0Erxg.jpg','[\"2\"]','coffee-morning-and-book-swap-drop',NULL,NULL,NULL,NULL),
	(9,'Coffee and Chat','1',NULL,NULL,NULL,1,1,'<div>Everyone welcome<br><br></div><div>Phone the Joan on <strong>01663 746000</strong></div><div><br></div>','2022-01-18 17:08:33','2022-01-18 17:33:48',2,'[\"2\"]','[]',NULL,NULL,NULL,'liMBkjX658NNoOVXBzdPq071dxoY5XzAjnOchpzs.jpg','[\"2\"]','coffee-and-chat',NULL,'Joan',NULL,'01663 746000'),
	(10,'Women’s Institute Evening Meeting','1',NULL,NULL,NULL,1,1,'<div>Visitors and new members always welcome.<br><br></div><div>7:30 pm (1st Tuesday of the month), April till Sept 7.30pm Oct to March 1.30 to 3.30 W.I. Hall</div><div><br>Phone Gerri on 07940774111 or Judith on 01663 751275 or email gerri.ross@btinternet.com</div><div><br></div>','2022-01-18 17:10:30','2022-01-18 17:33:01',2,'[\"2\"]','[\"2\"]',NULL,NULL,NULL,NULL,'[\"2\"]','womens-institute-evening-meeting',NULL,'Gerri Ross','gerri.ross@btinternet.com','07940774111'),
	(11,'Youth Club',NULL,NULL,NULL,NULL,0,1,'<div>Currently Closed</div>','2022-01-18 17:36:14','2022-01-18 17:36:14',1,'[\"1\"]','[]',NULL,NULL,NULL,NULL,'[\"1\"]','youth-club',NULL,NULL,NULL,NULL),
	(12,'Parent & Toddler Group','1',NULL,NULL,NULL,1,1,NULL,'2022-01-18 17:37:34','2022-01-18 17:54:06',1,'[\"2\"]','[\"1\"]',NULL,NULL,NULL,'gj4hVxRRLxXG94WqcxjdsntBex7hqPJZAoAnVZeL.jpg','[\"1\"]','parent-toddler-group','https://www.facebook.com/chinleytoddlergroup/','Liz','lizroberts@outlook.com',NULL),
	(13,'Samantha Wood Theatre Academy',NULL,NULL,NULL,NULL,1,0,NULL,'2022-01-18 17:38:46','2022-01-18 17:40:43',2,'[]','[]',NULL,NULL,NULL,NULL,'[\"1\"]','samantha-wood-theatre-academy','www.swtheatreacademy.co.uk','Sue Wood','admin@swtheatreacademy.co.uk','07785 787771'),
	(14,'Brownies','0',NULL,NULL,NULL,1,0,NULL,'2022-01-18 17:42:30','2022-01-18 17:42:41',1,'[\"2\"]','[\"1\"]',NULL,NULL,NULL,NULL,'[\"1\"]','brownies',NULL,'Judith','judith_hargreaves@yahoo.com',NULL),
	(15,'Toddlers & Carers','1',NULL,NULL,NULL,1,0,NULL,'2022-01-18 18:07:38','2022-01-18 18:07:38',4,'[\"1\"]','[\"1\"]',NULL,NULL,NULL,'Y7qLGlrVtbqn7uUbAjHe9UP1eEhGDWpvaKtcbQyi.jpg','[]','toddlers-carers',NULL,'Gary & Di',NULL,'01298 813606 or 07806 709163'),
	(16,'1st Chinley Scouts',NULL,NULL,NULL,NULL,1,0,'<p></p>','2022-01-18 18:08:41','2022-01-18 18:16:28',5,'[\"4\"]','[]',NULL,NULL,NULL,'Yh5wf5jbcTPUyOLixL8YEdgGOuOz99DgSIklgBss.jpg','[\"1\"]','1st-chinley-scouts','www.chinleyscouts.org.uk','Martin','gsl@chinleyscouts.org.uk','07913 802260'),
	(17,'Guides','0',NULL,NULL,NULL,1,0,NULL,'2022-01-18 18:20:07','2022-01-18 18:21:41',1,'[\"7\"]','[\"1\"]',NULL,NULL,NULL,NULL,'[\"1\"]','guides',NULL,'Kate','chinleyguides@gmail.com',NULL),
	(18,'Citizen’s Advice drop-in','1',NULL,NULL,NULL,1,0,'<p><span>1st Wednesday of the month</span></p><p><span>For urgent Advice, call Citizens Advice on 0300 4568390.</span></p>','2022-01-18 18:27:51','2022-01-18 18:27:51',1,'[\"3\"]','[\"1\"]',NULL,NULL,NULL,'t9Muubwa2SQI2BrUuR1sJvl0a5fr58FZzf9Iuo8O.jpg','[\"3\"]','citizens-advice-drop-in',NULL,'Linda','lpage999@gmail.com','01663 750448.');

/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table failed_jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2018_01_01_000000_create_action_events_table',1),
	(4,'2019_05_10_000000_add_fields_to_action_events_table',1),
	(5,'2019_08_19_000000_create_failed_jobs_table',1),
	(6,'2019_12_14_000001_create_personal_access_tokens_table',1),
	(7,'2021_11_01_174456_create_events_table',2),
	(12,'2021_12_14_151222_create_venues_table',3),
	(13,'2021_12_14_220047_add_venue_to_events_table',4),
	(14,'2022_01_07_115653_add_recurrence_to_events_table',5),
	(15,'2022_01_07_121117_add_images_to_events_table',6),
	(16,'2022_01_07_124358_create_categories_table',7),
	(17,'2022_01_07_125140_add_category_id_to_events_table',7),
	(18,'2022_01_17_152206_add_town_to_venues_table',8),
	(19,'2022_01_17_220824_add_slug_to_events_table',8),
	(20,'2022_01_18_095257_add_website_to_venues_table',8),
	(21,'2022_01_18_101027_add_images_to_categories_table',8),
	(22,'2022_01_18_131817_create_rooms_table',9),
	(23,'2022_01_18_171405_add_contact_details_to_events_table',10);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table personal_access_tokens
# ------------------------------------------------------------

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table rooms
# ------------------------------------------------------------

DROP TABLE IF EXISTS `rooms`;

CREATE TABLE `rooms` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` text COLLATE utf8mb4_unicode_ci,
  `thumbnail` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `venue_id` int(11) DEFAULT NULL,
  `contact_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capacity` int(11) NOT NULL DEFAULT '0',
  `price` decimal(8,2) NOT NULL DEFAULT '0.00',
  `minimum_booking` decimal(8,2) NOT NULL DEFAULT '1.00',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;

INSERT INTO `rooms` (`id`, `name`, `cover_image`, `thumbnail`, `description`, `venue_id`, `contact_name`, `phone`, `email`, `capacity`, `price`, `minimum_booking`, `active`, `created_at`, `updated_at`)
VALUES
	(1,'Main Room',NULL,NULL,NULL,4,NULL,NULL,NULL,120,12.00,1.00,1,'2022-01-18 13:39:40','2022-01-18 14:16:17');

/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Martin','martin@sk23.co.uk',NULL,'$2y$10$Ex8YhTr2KjUBjXYhRLCbaeYECbuk5Uwhwz1VvHOUJvJzZteV4rHr2','dlb9BwlyNoMn1LZW9HlqQZnYw0SKKseQHkpksqJ1VP5sE21v5xkdED9n466i','2021-11-01 17:38:38','2021-11-01 17:38:38');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table venues
# ------------------------------------------------------------

DROP TABLE IF EXISTS `venues`;

CREATE TABLE `venues` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `features` text COLLATE utf8mb4_unicode_ci,
  `address1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `county` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capacity` int(11) NOT NULL DEFAULT '0',
  `price` decimal(8,2) NOT NULL DEFAULT '0.00',
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `long` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `use_external_website` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `venues` WRITE;
/*!40000 ALTER TABLE `venues` DISABLE KEYS */;

INSERT INTO `venues` (`id`, `name`, `slug`, `cover_image`, `thumbnail`, `intro`, `description`, `features`, `address1`, `address2`, `town`, `county`, `contact_name`, `phone`, `email`, `capacity`, `price`, `enabled`, `created_at`, `updated_at`, `long`, `lat`, `website`, `use_external_website`)
VALUES
	(1,'Chinley & Buxworth Community Centre','chinley-buxworth-community-centre','images/venues//hdNmQXfktWDaQ9rnsxYpUUGedbE6jXX0nB6Ai7tO.jpg',NULL,'The community centre building is located on Lower Lane in Chinley and offers a large hall with music sound system, fully equipped kitchen and small meeting room. There are toilets and changing room facilities within the building and a hard court outside. It is possible to make bookings for one-off events as well as ongoing activities (block bookings).',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0.00,1,'2021-12-14 21:15:57','2022-01-04 11:26:13',NULL,NULL,NULL,0),
	(2,'Chinley W.I. Hall','chinley-w-i-hall','images/venues//H91iT3dM2sRBLv4LRK1abYlc46AhLToLRncAuSGy.jpg',NULL,'Chinley W.I. Hall is located on Lower Lane in Chinley.  The building offers a large hall with maximum capacity for 120 people. The hall has a stage and is large enough to accommodate a small bouncy castle for children’s parties.  There is a fully equipped kitchen, disabled access and toilet facilities.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0.00,1,'2021-12-14 21:16:30','2022-01-04 11:26:36',NULL,NULL,NULL,0),
	(3,'Buxworth War Memorial Club','buxworth-war-memorial-club','images/venues//VxJOXTYI5dsnIVKUafFwlrToTg4F802XoeqvXodH.jpg',NULL,'Buxworth Club is in the heart of the High Peak. We hold regular events throughout the year, all events will be posted on this page so keep an eye out!',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0.00,1,'2022-01-04 11:55:51','2022-01-04 11:55:51',NULL,NULL,NULL,0),
	(4,'Chinley Independent Chapel','chinley-independent-chapel','images/venues//cqRqDcUCurmZhj1BUJeJO9LHVcDcPnsTqxxmOdQz.jpg',NULL,'We are a Congregational Church. We believe in and respect the spiritual equality of all believers. Congregationalism is an ideal, supremely biblical and simple way of being church.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0.00,1,'2022-01-04 12:09:46','2022-01-04 12:11:59',NULL,NULL,NULL,0),
	(5,'Scout Hut','scout-hut','images/venues//QitGwENfQ1ELQKJeXLHWDhVuWmAhAxXFWTpJkloU.jpg',NULL,NULL,NULL,NULL,NULL,NULL,'Chinley',NULL,NULL,NULL,NULL,0,0.00,1,'2022-01-18 18:09:57','2022-01-18 18:09:57',NULL,NULL,'http://www.chinleyscouts.org.uk/victory-hall/',0);

/*!40000 ALTER TABLE `venues` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
