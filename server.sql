-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 30 Eyl 2019, 12:37:31
-- Sunucu sürümü: 10.4.6-MariaDB
-- PHP Sürümü: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `server`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `chat_permissions`
--

CREATE TABLE `chat_permissions` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Tablo döküm verisi `chat_permissions`
--

INSERT INTO `chat_permissions` (`id`, `userId`, `type`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `log_account`
--

CREATE TABLE `log_account` (
  `LogID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `IP` varchar(16) COLLATE utf8_bin NOT NULL,
  `Content` text COLLATE utf8_bin NOT NULL,
  `Amount` int(11) NOT NULL DEFAULT 0,
  `Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Tablo döküm verisi `log_account`
--

INSERT INTO `log_account` (`LogID`, `UserID`, `IP`, `Content`, `Amount`, `Date`) VALUES
(1, 1, '127.0.0.1', '1', 0, '2019-09-29 16:39:55'),
(2, 1, '127.0.0.1', '1', 0, '2019-09-29 18:33:16'),
(3, 1, '127.0.0.1', '1', 0, '2019-09-30 10:00:14');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `log_event_jpb`
--

CREATE TABLE `log_event_jpb` (
  `id` int(11) NOT NULL,
  `players` text COLLATE utf8_bin NOT NULL,
  `finalists` text COLLATE utf8_bin NOT NULL,
  `winner_id` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `log_player_kills`
--

CREATE TABLE `log_player_kills` (
  `id` int(11) NOT NULL,
  `killer_id` int(11) NOT NULL,
  `target_id` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `player_accounts`
--

CREATE TABLE `player_accounts` (
  `userID` int(11) NOT NULL,
  `sessionID` varchar(32) COLLATE utf8_bin NOT NULL,
  `Data` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '{"uridium":0,"credits":0,"honor":0,"experience":0,"jackpot":0}',
  `Info` varchar(255) COLLATE utf8_bin NOT NULL,
  `username` varchar(20) COLLATE utf8_bin NOT NULL,
  `shipName` varchar(20) COLLATE utf8_bin NOT NULL,
  `petName` varchar(20) COLLATE utf8_bin NOT NULL DEFAULT 'P.E.T 15',
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `level` tinyint(3) NOT NULL DEFAULT 1,
  `shipID` int(3) NOT NULL DEFAULT 10,
  `premium` tinyint(1) NOT NULL DEFAULT 0,
  `title` varchar(128) COLLATE utf8_bin NOT NULL,
  `profileID` varchar(6) COLLATE utf8_bin NOT NULL,
  `factionID` int(1) NOT NULL DEFAULT 0,
  `clanID` int(11) NOT NULL DEFAULT 0,
  `rankID` int(2) NOT NULL DEFAULT 1,
  `rankPoints` bigint(16) NOT NULL DEFAULT 100,
  `rank` int(11) NOT NULL DEFAULT 0,
  `pilotProfile` varchar(2500) COLLATE utf8_bin NOT NULL DEFAULT '{"Info":0,"Clan":0,"Equipment":0,"SkillTree":0,"title":"","statusMessage":"","friendRequest":true,"friends":{}}',
  `extraEnergy` int(11) NOT NULL,
  `nanohull` int(11) NOT NULL,
  `verified` int(1) NOT NULL DEFAULT 0,
  `oldShipNames` text COLLATE utf8_bin NOT NULL DEFAULT '[]',
  `Version` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Tablo döküm verisi `player_accounts`
--

INSERT INTO `player_accounts` (`userID`, `sessionID`, `Data`, `Info`, `username`, `shipName`, `petName`, `password`, `email`, `level`, `shipID`, `premium`, `title`, `profileID`, `factionID`, `clanID`, `rankID`, `rankPoints`, `rank`, `pilotProfile`, `extraEnergy`, `nanohull`, `verified`, `oldShipNames`, `Version`) VALUES
(1, 'iPTFrKb0mig0kqh1yAu0OAd8aEJ9eOda', '{\"uridium\":0,\"credits\":0,\"honor\":0,\"experience\":0,\"jackpot\":0}', '{\"LastLoginIP\":\"127.0.0.1\",\"RegisterIP\":\"127.0.0.1\",\"MapID\":1,\"CreatedDate\":\"29.09.2019 19:39:03\",\"Profile\":\"Avatar.png\"}', 'Legionary', 'Legionary', 'P.E.T 15', '$2y$10$2oRcOpPa/sFpH1.Z7jac4OnXoWsxDAaYdAUM6DuAo4mXVyKammWvC', 'yusufsahinhamza@gmail.com', 1, 495, 0, '', 'QNjtBZ', 3, 0, 1, 100, 0, '{\"Info\":0,\"Clan\":0,\"Equipment\":0,\"SkillTree\":0,\"title\":\"\",\"statusMessage\":\"\",\"friendRequest\":true,\"friends\":{}}', 0, 0, 0, '[]', 1),
(2, 'K4ToEsJvqGIn8gGHwU7hY2ERMPIWuzqF', '{\"uridium\":0,\"credits\":0,\"honor\":0,\"experience\":0,\"jackpot\":0}', '{\"LastLoginIP\": \"127.0.0.1\", \"RegisterIP\": \"127.0.0.1\", \"MapID\":0, \"CreatedDate\": \"29.09.2019 19:39:20\",\"Profile\": \"Avatar.png\"}', 'Legionary1', 'Legionary1', 'P.E.T 15', '$2y$10$rOTnrmPdHnQ1hnrOs3AH6e.lV3OEduy/aHnj6G8tGNJvNI.XFvd/6', 'yusufsahinhamza1@gmail.com', 1, 10, 0, '', 'CpxkEu', 0, 0, 1, 100, 0, '{\"Info\":0,\"Clan\":0,\"Equipment\":0,\"SkillTree\":0,\"title\":\"\",\"statusMessage\":\"\",\"friendRequest\":true,\"friends\":{}}', 0, 0, 0, '[]', 1),
(3, 'NNJqs789eBZR3RYxEdCMTwvblzS3nhsG', '{\"uridium\":0,\"credits\":0,\"honor\":0,\"experience\":0,\"jackpot\":0}', '{\"LastLoginIP\": \"127.0.0.1\", \"RegisterIP\": \"127.0.0.1\", \"MapID\":0, \"CreatedDate\": \"29.09.2019 19:39:28\",\"Profile\": \"Avatar.png\"}', 'Legionary12', 'Legionary12', 'P.E.T 15', '$2y$10$0HKWCBsuwwhsxf4kM5P99uJ.lqh3Z4DsD9Fil6pmmndMC.C08WBvq', 'yusufsahinhamza12@gmail.com', 1, 10, 0, '', 'OIFoT4', 0, 0, 1, 100, 0, '{\"Info\":0,\"Clan\":0,\"Equipment\":0,\"SkillTree\":0,\"title\":\"\",\"statusMessage\":\"\",\"friendRequest\":true,\"friends\":{}}', 0, 0, 0, '[]', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `player_equipment`
--

CREATE TABLE `player_equipment` (
  `userId` int(11) NOT NULL,
  `config1_lasers` text COLLATE utf8_bin NOT NULL DEFAULT '[]',
  `config1_generators` text COLLATE utf8_bin NOT NULL DEFAULT '[]',
  `config1_drones` text COLLATE utf8_bin NOT NULL DEFAULT '[{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]}]',
  `config2_lasers` text COLLATE utf8_bin NOT NULL DEFAULT '[]',
  `config2_generators` text COLLATE utf8_bin NOT NULL DEFAULT '[]',
  `config2_drones` text COLLATE utf8_bin NOT NULL DEFAULT '[{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]}]',
  `items` text COLLATE utf8_bin NOT NULL DEFAULT '\'{"lf4Count":0,"havocCount":0,"herculesCount":0,"apis":false,"zeus":false, "pet": false, "ships": []}\'',
  `modules` longtext COLLATE utf8_bin NOT NULL DEFAULT '[]',
  `boosters` longtext COLLATE utf8_bin NOT NULL DEFAULT '{}',
  `configs` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Tablo döküm verisi `player_equipment`
--

INSERT INTO `player_equipment` (`userId`, `config1_lasers`, `config1_generators`, `config1_drones`, `config2_lasers`, `config2_generators`, `config2_drones`, `items`, `modules`, `boosters`, `configs`) VALUES
(1, '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '{\"lf4Count\":0,\"havocCount\":0,\"herculesCount\":0,\"apis\":false,\"zeus\":false, \"pet\": false, \"ships\": [49,69,70],\"designs\":{\"10\":[495]}}', '[]', '{\"2\":[{\"Type\":0,\"Seconds\":36000}]}', '{\"Config1Hitpoints\":316000,\"Config1Damage\":0,\"Config1Shield\":0,\"Config1Speed\":360,\"Config2Hitpoints\":316000,\"Config2Damage\":0,\"Config2Shield\":0,\"Config2Speed\":360}'),
(2, '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '\'{\"lf4Count\":0,\"havocCount\":0,\"herculesCount\":0,\"apis\":false,\"zeus\":false, \"pet\": false, \"ships\": []}\'', '[]', '{}', ''),
(3, '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '\'{\"lf4Count\":0,\"havocCount\":0,\"herculesCount\":0,\"apis\":false,\"zeus\":false, \"pet\": false, \"ships\": []}\'', '[]', '{}', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `player_galaxygates`
--

CREATE TABLE `player_galaxygates` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `gateId` int(11) NOT NULL,
  `parts` longtext COLLATE utf8_bin NOT NULL DEFAULT '[]',
  `multiplier` int(11) NOT NULL DEFAULT 0,
  `lives` int(11) NOT NULL DEFAULT -1,
  `prepared` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `player_settings`
--

CREATE TABLE `player_settings` (
  `userId` int(11) NOT NULL,
  `audio` text COLLATE utf8_bin NOT NULL,
  `quality` text COLLATE utf8_bin NOT NULL,
  `classY2T` text COLLATE utf8_bin NOT NULL,
  `display` text COLLATE utf8_bin NOT NULL,
  `gameplay` text COLLATE utf8_bin NOT NULL,
  `window` text COLLATE utf8_bin NOT NULL,
  `boundKeys` text COLLATE utf8_bin NOT NULL,
  `inGameSettings` text COLLATE utf8_bin NOT NULL,
  `cooldowns` text COLLATE utf8_bin NOT NULL,
  `slotbarItems` text COLLATE utf8_bin NOT NULL,
  `premiumSlotbarItems` text COLLATE utf8_bin NOT NULL,
  `proActionBarItems` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Tablo döküm verisi `player_settings`
--

INSERT INTO `player_settings` (`userId`, `audio`, `quality`, `classY2T`, `display`, `gameplay`, `window`, `boundKeys`, `inGameSettings`, `cooldowns`, `slotbarItems`, `premiumSlotbarItems`, `proActionBarItems`) VALUES
(1, '{\"notSet\":false,\"playCombatMusic\":false,\"music\":1,\"sound\":1,\"voice\":1}', '{\"notSet\":false,\"qualityAttack\":0,\"qualityBackground\":0,\"qualityPresetting\":2,\"qualityCustomized\":true,\"qualityPoizone\":2,\"qualityShip\":0,\"qualityEngine\":0,\"qualityExplosion\":0,\"qualityCollectable\":0,\"qualityEffect\":0}', '{\"questsAvailableFilter\":false,\"questsUnavailableFilter\":false,\"questsCompletedFilter\":false,\"var_1151\":false,\"var_2239\":false,\"questsLevelOrderDescending\":false}', '{\"notSet\":false,\"displayPlayerNames\":true,\"displayResources\":true,\"showPremiumQuickslotBar\":true,\"allowAutoQuality\":true,\"preloadUserShips\":true,\"displayHitpointBubbles\":true,\"showNotOwnedItems\":true,\"displayChat\":true,\"displayWindowsBackground\":true,\"displayNotFreeCargoBoxes\":true,\"dragWindowsAlways\":true,\"displayNotifications\":true,\"hoverShips\":true,\"displayDrones\":true,\"displayBonusBoxes\":true,\"displayFreeCargoBoxes\":true,\"var12P\":true,\"varb3N\":false,\"displaySetting3DqualityAntialias\":3,\"varp3M\":1,\"displaySetting3DqualityEffects\":3,\"displaySetting3DqualityLights\":3,\"displaySetting3DqualityTextures\":3,\"var03r\":3,\"displaySetting3DsizeTextures\":3,\"displaySetting3DtextureFiltering\":-1,\"proActionBarEnabled\":true,\"proActionBarKeyboardInputEnabled\":true,\"proActionBarAutohideEnabled\":true,\"proActionBarOpened\":false}', '{\"notSet\":false,\"autoRefinement\":false,\"quickSlotStopAttack\":true,\"autoBoost\":false,\"autoBuyBootyKeys\":false,\"doubleclickAttackEnabled\":true,\"autochangeAmmo\":true,\"autoStartEnabled\":true,\"varE3N\":true}', '{\"hideAllWindows\":false,\"scale\":6,\"barState\":\"24,1|23,1|100,1|25,1|35,0|34,0|39,0|\",\"gameFeatureBarPosition\":\"0.062421972534332085,0\",\"gameFeatureBarLayoutType\":\"0\",\"genericFeatureBarPosition\":\"98.29931972789116,0\",\"genericFeatureBarLayoutType\":\"0\",\"categoryBarPosition\":\"50,85\",\"standartSlotBarPosition\":\"50,85|0,40\",\"standartSlotBarLayoutType\":\"0\",\"premiumSlotBarPosition\":\"50,85|0,80\",\"premiumSlotBarLayoutType\":\"0\",\"proActionBarPosition\":\"\",\"proActionBarLayoutType\":\"\",\"windows\":{\"user\":{\"x\":30,\"y\":30,\"width\":212,\"height\":88,\"maximixed\":false},\"ship\":{\"x\":30,\"y\":30,\"width\":212,\"height\":88,\"maximixed\":false},\"ship_warp\":{\"x\":50,\"y\":50,\"width\":300,\"height\":210,\"maximixed\":false},\"chat\":{\"x\":10,\"y\":9,\"width\":300,\"height\":150,\"maximixed\":false},\"group\":{\"x\":50,\"y\":50,\"width\":196,\"height\":200,\"maximixed\":false},\"minimap\":{\"x\":21,\"y\":45,\"width\":375,\"height\":263,\"maximixed\":true},\"spacemap\":{\"x\":10,\"y\":10,\"width\":650,\"height\":475,\"maximixed\":false},\"log\":{\"x\":30,\"y\":30,\"width\":240,\"height\":150,\"maximixed\":false},\"pet\":{\"x\":50,\"y\":50,\"width\":260,\"height\":130,\"maximixed\":false},\"spaceball\":{\"x\":10,\"y\":10,\"width\":170,\"height\":70,\"maximixed\":false},\"booster\":{\"x\":10,\"y\":10,\"width\":110,\"height\":150,\"maximixed\":false},\"traininggrounds\":{\"x\":10,\"y\":10,\"width\":320,\"height\":320,\"maximixed\":false},\"settings\":{\"x\":73,\"y\":41,\"width\":400,\"height\":470,\"maximixed\":false},\"help\":{\"x\":10,\"y\":10,\"width\":219,\"height\":121,\"maximixed\":false},\"logout\":{\"x\":50,\"y\":50,\"width\":200,\"height\":200,\"maximixed\":false}}}', '[{\"actionType\":7,\"charCode\":0,\"parameter\":0,\"keyCodes\":[49]},{\"actionType\":7,\"charCode\":0,\"parameter\":1,\"keyCodes\":[50]},{\"actionType\":7,\"charCode\":0,\"parameter\":2,\"keyCodes\":[51]},{\"actionType\":7,\"charCode\":0,\"parameter\":3,\"keyCodes\":[52]},{\"actionType\":7,\"charCode\":0,\"parameter\":4,\"keyCodes\":[53]},{\"actionType\":7,\"charCode\":0,\"parameter\":5,\"keyCodes\":[54]},{\"actionType\":7,\"charCode\":0,\"parameter\":6,\"keyCodes\":[55]},{\"actionType\":7,\"charCode\":0,\"parameter\":7,\"keyCodes\":[56]},{\"actionType\":7,\"charCode\":0,\"parameter\":8,\"keyCodes\":[57]},{\"actionType\":7,\"charCode\":0,\"parameter\":9,\"keyCodes\":[48]},{\"actionType\":8,\"charCode\":0,\"parameter\":0,\"keyCodes\":[112]},{\"actionType\":8,\"charCode\":0,\"parameter\":1,\"keyCodes\":[113]},{\"actionType\":8,\"charCode\":0,\"parameter\":2,\"keyCodes\":[114]},{\"actionType\":8,\"charCode\":0,\"parameter\":3,\"keyCodes\":[115]},{\"actionType\":8,\"charCode\":0,\"parameter\":4,\"keyCodes\":[116]},{\"actionType\":8,\"charCode\":0,\"parameter\":5,\"keyCodes\":[117]},{\"actionType\":8,\"charCode\":0,\"parameter\":6,\"keyCodes\":[118]},{\"actionType\":8,\"charCode\":0,\"parameter\":7,\"keyCodes\":[119]},{\"actionType\":8,\"charCode\":0,\"parameter\":8,\"keyCodes\":[120]},{\"actionType\":0,\"charCode\":0,\"parameter\":0,\"keyCodes\":[74]},{\"actionType\":1,\"charCode\":0,\"parameter\":0,\"keyCodes\":[67]},{\"actionType\":2,\"charCode\":0,\"parameter\":0,\"keyCodes\":[17]},{\"actionType\":3,\"charCode\":0,\"parameter\":0,\"keyCodes\":[32]},{\"actionType\":4,\"charCode\":0,\"parameter\":0,\"keyCodes\":[69]},{\"actionType\":5,\"charCode\":0,\"parameter\":0,\"keyCodes\":[82]},{\"actionType\":13,\"charCode\":0,\"parameter\":0,\"keyCodes\":[68]},{\"actionType\":6,\"charCode\":0,\"parameter\":0,\"keyCodes\":[76]},{\"actionType\":9,\"charCode\":0,\"parameter\":0,\"keyCodes\":[72]},{\"actionType\":10,\"charCode\":0,\"parameter\":0,\"keyCodes\":[70]},{\"actionType\":11,\"charCode\":0,\"parameter\":0,\"keyCodes\":[107]},{\"actionType\":12,\"charCode\":0,\"parameter\":0,\"keyCodes\":[109]},{\"actionType\":14,\"charCode\":0,\"parameter\":0,\"keyCodes\":[13]},{\"actionType\":15,\"charCode\":0,\"parameter\":0,\"keyCodes\":[9]},{\"actionType\":8,\"charCode\":0,\"parameter\":9,\"keyCodes\":[121]},{\"actionType\":16,\"charCode\":0,\"parameter\":0,\"keyCodes\":[16]}]', '{\"blockedGroupInvites\":false,\"selectedLaser\":\"ammunition_laser_lcb-10\",\"selectedRocket\":\"ammunition_rocket_r-310\",\"selectedRocketLauncher\":\"ammunition_rocketlauncher_hstrm-01\",\"selectedFormation\":\"drone_formation_default\",\"currentConfig\":1,\"selectedCpus\":[\"equipment_extra_cpu_arol-x\",\"equipment_extra_cpu_rllb-x\"]}', '{\"ammunition_mine_smb-01\":\"1.01.0001 00:00:00\",\"equipment_extra_cpu_ish-01\":\"1.01.0001 00:00:00\",\"ammunition_specialammo_emp-01\":\"1.01.0001 00:00:00\",\"ammunition_mine\":\"1.01.0001 00:00:00\",\"ammunition_specialammo_dcr-250\":\"1.01.0001 00:00:00\",\"ammunition_specialammo_pld-8\":\"1.01.0001 00:00:00\",\"ammunition_specialammo_r-ic3\":\"1.01.0001 00:00:00\",\"tech_energy-leech\":\"\",\"tech_chain-impulse\":\"\",\"tech_precision-targeter\":\"\",\"tech_backup-shields\":\"\",\"tech_battle-repair-bot\":\"\",\"ability_lightning\":\"1.01.0001 00:00:00\"}', '{\"1\":\"ammunition_laser_ucb-100\"}', '{\"1\":\"drone_formation_default\"}', '{}'),
(2, '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `player_skilltree`
--

CREATE TABLE `player_skilltree` (
  `userID` int(11) NOT NULL,
  `logDisk` int(11) NOT NULL DEFAULT 0,
  `currentRp` int(11) NOT NULL DEFAULT 0,
  `usedRp` int(11) NOT NULL DEFAULT 0,
  `skill_1` int(11) NOT NULL,
  `skill_13` int(2) NOT NULL DEFAULT 0,
  `skill_5a` int(2) NOT NULL DEFAULT 0,
  `skill_20` int(2) NOT NULL DEFAULT 0,
  `skill_6` int(2) NOT NULL DEFAULT 0,
  `skill_23a` int(2) NOT NULL DEFAULT 0,
  `skill_21a` int(2) NOT NULL DEFAULT 0,
  `skill_5b` int(2) NOT NULL DEFAULT 0,
  `skill_21b` int(2) NOT NULL DEFAULT 0,
  `skill_23b` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `player_titles`
--

CREATE TABLE `player_titles` (
  `userID` int(11) NOT NULL,
  `titles` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '[]'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `server_bans`
--

CREATE TABLE `server_bans` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `modId` int(11) NOT NULL,
  `reason` text COLLATE utf8_bin NOT NULL,
  `typeId` tinyint(1) NOT NULL,
  `until_date` datetime NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `server_battlestations`
--

CREATE TABLE `server_battlestations` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `mapId` int(11) NOT NULL,
  `clanId` int(11) NOT NULL,
  `positionX` int(11) NOT NULL,
  `positionY` int(11) NOT NULL,
  `inBuildingState` tinyint(4) NOT NULL,
  `buildTimeInMinutes` int(11) NOT NULL,
  `buildTime` datetime NOT NULL,
  `deflectorActive` tinyint(4) NOT NULL,
  `deflectorSecondsLeft` int(11) NOT NULL,
  `deflectorTime` datetime NOT NULL,
  `visualModifiers` text COLLATE utf8_bin NOT NULL,
  `modules` longtext COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Tablo döküm verisi `server_battlestations`
--

INSERT INTO `server_battlestations` (`id`, `name`, `mapId`, `clanId`, `positionX`, `positionY`, `inBuildingState`, `buildTimeInMinutes`, `buildTime`, `deflectorActive`, `deflectorSecondsLeft`, `deflectorTime`, `visualModifiers`, `modules`) VALUES
(1, 'Julius', 15, 0, 16400, 11400, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '[]', '[]');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `server_blog`
--

CREATE TABLE `server_blog` (
  `BlogID` int(11) NOT NULL,
  `Url` varchar(60) COLLATE utf8_bin NOT NULL,
  `Type` int(1) NOT NULL DEFAULT 1,
  `Title` varchar(60) COLLATE utf8_bin NOT NULL,
  `Image` varchar(125) COLLATE utf8_bin NOT NULL,
  `Content` text COLLATE utf8_bin NOT NULL,
  `Author` varchar(25) COLLATE utf8_bin NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `server_clan`
--

CREATE TABLE `server_clan` (
  `clanID` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `tag` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `description` varchar(2048) COLLATE utf8_bin NOT NULL DEFAULT '',
  `factionID` int(1) NOT NULL DEFAULT 0,
  `recruiting` tinyint(2) NOT NULL DEFAULT 1,
  `leaderID` int(11) NOT NULL DEFAULT 0,
  `news` varchar(2048) COLLATE utf8_bin NOT NULL DEFAULT '[]',
  `members` varchar(2048) COLLATE utf8_bin NOT NULL DEFAULT '[]',
  `rankPoints` int(11) NOT NULL,
  `rank` int(11) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `profile` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT 'default.jpg',
  `randomID` varchar(6) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `server_clan_applications`
--

CREATE TABLE `server_clan_applications` (
  `applicationID` int(11) NOT NULL,
  `clanID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `message` varchar(255) COLLATE utf8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `server_clan_diplomacy`
--

CREATE TABLE `server_clan_diplomacy` (
  `ID` int(11) NOT NULL,
  `senderClan` int(11) NOT NULL,
  `toClan` int(11) NOT NULL,
  `diplomacyType` int(1) NOT NULL,
  `Date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `server_clan_diplomacy_applications`
--

CREATE TABLE `server_clan_diplomacy_applications` (
  `ID` int(11) NOT NULL,
  `appID` int(11) NOT NULL DEFAULT 0,
  `senderClan` int(11) NOT NULL,
  `toClan` int(11) NOT NULL,
  `diplomacyType` tinyint(1) NOT NULL,
  `Description` varchar(255) COLLATE utf8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `server_dsc`
--

CREATE TABLE `server_dsc` (
  `ID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `server_evoucher`
--

CREATE TABLE `server_evoucher` (
  `ID` int(11) NOT NULL,
  `Code` varchar(32) COLLATE utf8_bin NOT NULL,
  `Available` int(1) NOT NULL DEFAULT 1,
  `Max` int(11) NOT NULL,
  `Used` int(11) NOT NULL,
  `Reward` varchar(128) COLLATE utf8_bin NOT NULL,
  `User` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `server_maps`
--

CREATE TABLE `server_maps` (
  `mapID` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `stations` longtext COLLATE utf8_bin NOT NULL,
  `portals` longtext COLLATE utf8_bin NOT NULL,
  `collectables` longtext COLLATE utf8_bin NOT NULL,
  `options` varchar(512) COLLATE utf8_bin NOT NULL DEFAULT '{"StarterMap":false,"PvpMap":false,"RangeDisabled":false,"CloakBlocked":false,"LogoutBlocked":false,"DeathLocationRepair":true}',
  `factionID` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Tablo döküm verisi `server_maps`
--

INSERT INTO `server_maps` (`mapID`, `name`, `stations`, `portals`, `collectables`, `options`, `factionID`) VALUES
(1, '1-1', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(2, '1-2', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(3, '1-3', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(4, '1-4', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(5, '2-1', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(6, '2-2', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(7, '2-3', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(8, '2-4', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(9, '3-1', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(10, '3-2', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(11, '3-3', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(12, '3-4', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(13, '4-1', '[{   \"TypeId\": 46,   \"FactionId\": 1,   \"Position\": [1600,1600] }]', '[{   \"TargetSpaceMapId\": 16,   \"Position\": [10000, 6200],   \"TargetPosition\": [19200,13400],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true },{   \"TargetSpaceMapId\": 14,   \"Position\": [18900, 1900],   \"TargetPosition\": [2500,10900],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true },{   \"TargetSpaceMapId\": 15,   \"Position\": [18900, 11300],   \"TargetPosition\": [2000,11200],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true }]', '[{   \"TypeId\": 2,   \"Amount\": 100,   \"TopLeft\": [18300,1100], \"BottomRight\": [18300,1100], \"Respawnable\":true }]', '{\"StarterMap\":false,\"PvpMap\":true,\"RangeDisabled\":true,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(14, '4-2', '[{   \"TypeId\": 46,   \"FactionId\": 2,   \"Position\": [19500,1500] }]', '[{   \"TargetSpaceMapId\": 16,   \"Position\": [10400, 6300],   \"TargetPosition\": [21900,11900],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true }, {   \"TargetSpaceMapId\": 13,   \"Position\": [2500, 10900],   \"TargetPosition\": [18900,1900],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true }, {   \"TargetSpaceMapId\": 15,   \"Position\": [18900, 10900],   \"TargetPosition\": [2000,1900],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true }]', '[{   \"TypeId\": 2,   \"Amount\": 100,   \"TopLeft\": [18300,1100], \"BottomRight\": [18300,1100], \"Respawnable\":true }]', '{\"StarterMap\":false,\"PvpMap\":true,\"RangeDisabled\":true,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(15, '4-3', '[{   \"TypeId\": 46,   \"FactionId\": 3,   \"Position\": [19500,11600] }]', '[{   \"TargetSpaceMapId\": 16,   \"Position\": [10300, 6600],   \"TargetPosition\": [21900,14500],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true },  {   \"TargetSpaceMapId\": 13,   \"Position\": [2000,11200],   \"TargetPosition\": [18900,11300],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true },  {   \"TargetSpaceMapId\": 14,   \"Position\": [2000,1900],   \"TargetPosition\": [18700,10900],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true }]', '[{   \"TypeId\": 2,   \"Amount\": 100,   \"TopLeft\": [18300,1100], \"BottomRight\": [18300,1100], \"Respawnable\":true }]', '{\"StarterMap\":false,\"PvpMap\":true,\"RangeDisabled\":true,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(16, '4-4', '', '[{   \"TargetSpaceMapId\": 13,   \"Position\": [19200,13400],   \"TargetPosition\": [10000,6200],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true },  {   \"TargetSpaceMapId\": 14,   \"Position\": [21900,11900],   \"TargetPosition\": [10400,6300],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true },  {   \"TargetSpaceMapId\": 15,   \"Position\": [21900,14500],   \"TargetPosition\": [10300,6600],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true }]', '', '{\"StarterMap\":false,\"PvpMap\":true,\"RangeDisabled\":true,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(17, '1-5', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(18, '1-6', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(19, '1-7', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(20, '1-8', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(21, '2-5', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(22, '2-6', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(23, '2-7', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(24, '2-8', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(25, '3-5', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(26, '3-6', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(27, '3-7', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(28, '3-8', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(42, '???', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":true,\"CloakBlocked\":true,\"LogoutBlocked\":true,\"DeathLocationRepair\":false}', 0),
(71, 'GG Zeta', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(74, 'GG Kappa', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(101, 'JP', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":true,\"CloakBlocked\":true,\"LogoutBlocked\":true,\"DeathLocationRepair\":false}', 0),
(102, 'JP', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(103, 'JP', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(104, 'JP', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(105, 'JP', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(106, 'JP', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(107, 'JP', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(108, 'JP', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(109, 'JP', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(110, 'JP', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(111, 'JP', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(121, 'TA', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":true,\"CloakBlocked\":true,\"LogoutBlocked\":true,\"DeathLocationRepair\":false}', 0),
(200, 'LoW', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(224, 'Custom Tournament', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `server_ships`
--

CREATE TABLE `server_ships` (
  `id` int(11) NOT NULL,
  `shipID` int(11) NOT NULL,
  `baseShipId` int(11) NOT NULL,
  `lootID` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `health` int(11) NOT NULL DEFAULT 0,
  `shield` int(11) NOT NULL DEFAULT 0,
  `speed` int(11) NOT NULL DEFAULT 300,
  `lasers` int(11) NOT NULL DEFAULT 1,
  `generators` int(11) NOT NULL DEFAULT 1,
  `cargo` int(11) NOT NULL DEFAULT 100,
  `damage` int(11) NOT NULL DEFAULT 20,
  `reward` varchar(2048) COLLATE utf8_bin NOT NULL DEFAULT '[{   "Experience": 0,   "Honor": 0,   "Credits": 0,   "Uridium": 0 }]'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Tablo döküm verisi `server_ships`
--

INSERT INTO `server_ships` (`id`, `shipID`, `baseShipId`, `lootID`, `name`, `health`, `shield`, `speed`, `lasers`, `generators`, `cargo`, `damage`, `reward`) VALUES
(1, 1, 0, 'ship_phoenix', 'Phoenix', 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(2, 2, 0, 'ship_yamato', 'Yamato', 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(3, 3, 0, 'ship_leonov', 'Leonov', 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(4, 4, 0, 'ship_defcom', 'Defcom', 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(5, 5, 0, 'ship_liberator', 'Liberator', 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(6, 6, 0, 'ship_piranha', 'Piranha', 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(7, 7, 0, 'ship_nostromo', 'Nostromo', 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(8, 8, 8, 'ship_vengeance', 'Vengeance', 180000, 0, 380, 10, 10, 0, 0, '{\"Experience\":25600,\"Honor\":256,\"Credits\":0,\"Uridium\":256}'),
(9, 9, 0, 'ship_bigboy', 'Bigboy', 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(10, 10, 10, 'ship_goliath', 'Goliath', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(11, 12, 0, 'pet', 'P.E.T. Level 1-3', 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(12, 13, 0, 'pet', 'P.E.T. Red', 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(13, 14, 0, 'pet', 'P.E.T. Green', 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(14, 15, 0, 'pet', 'P.E.T. Frozen', 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(15, 16, 8, 'ship_vengeance_design_adept', 'Adept', 180000, 0, 380, 10, 10, 0, 0, '{\"Experience\":25600,\"Honor\":256,\"Credits\":0,\"Uridium\":256}'),
(16, 17, 8, 'ship_vengeance_design_corsair', 'Corsair', 180000, 0, 380, 10, 10, 0, 0, '{\"Experience\":25600,\"Honor\":256,\"Credits\":0,\"Uridium\":256}'),
(17, 18, 8, 'ship_vengeance_design_lightning', 'Lightning', 180000, 0, 380, 10, 10, 0, 0, '{\"Experience\":25600,\"Honor\":256,\"Credits\":0,\"Uridium\":256}'),
(18, 19, 10, 'ship_goliath_design_jade', 'Jade', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(19, 20, 0, 'ship_admin', 'Ufo', 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(20, 22, 0, 'pet', 'P.E.T. Normal', 0, 50000, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(21, 49, 49, 'ship_aegis', 'Aegis', 275000, 0, 300, 10, 15, 0, 0, '{\"Experience\":25000,\"Honor\":250,\"Credits\":0,\"Uridium\":250}'),
(22, 52, 10, 'ship_goliath_design_amber', 'Amber', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(23, 53, 10, 'ship_goliath_design_crimson', 'Crimson', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(24, 54, 10, 'ship_goliath_design_sapphire', 'Sapphire', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(25, 56, 10, 'ship_goliath_design_enforcer', 'Enforcer', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(26, 57, 10, 'ship_goliath_design_independence', 'Independence', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(27, 58, 8, 'ship_vengeance_design_revenge', 'Revenge', 180000, 0, 380, 10, 10, 0, 0, '{\"Experience\":25600,\"Honor\":256,\"Credits\":0,\"Uridium\":256}'),
(28, 59, 10, 'ship_goliath_design_bastion', 'Bastion', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(29, 60, 8, 'ship_vengeance_design_avenger', 'Avenger', 180000, 0, 380, 10, 10, 0, 0, '{\"Experience\":25600,\"Honor\":256,\"Credits\":0,\"Uridium\":256}'),
(30, 61, 10, 'ship_goliath_design_veteran', 'Veteran', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(31, 62, 10, 'ship_goliath_design_exalted', 'Exalted', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(32, 63, 10, 'ship_goliath_design_solace', 'Solace', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(33, 64, 10, 'ship_goliath_design_diminisher', 'Diminisher', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(34, 65, 10, 'ship_goliath_design_spectrum', 'Spectrum', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(35, 66, 10, 'ship_goliath_design_sentinel', 'Sentinel', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(36, 67, 10, 'ship_goliath_design_venom', 'Venom', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(37, 68, 10, 'ship_goliath_design_ignite', 'Ignite', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(38, 69, 69, 'ship_citadel', 'Citadel', 550000, 0, 240, 7, 20, 0, 0, '{\"Experience\":120000,\"Honor\":1200,\"Credits\":0,\"Uridium\":1200}'),
(39, 70, 70, 'ship_spearhead', 'Spearhead', 100000, 0, 370, 5, 12, 0, 0, '{\"Experience\":7500,\"Honor\":75,\"Credits\":0,\"Uridium\":75}'),
(40, 81, 81, 'ship_vengeance_design_pusat', 'Pusat', 125000, 0, 370, 16, 12, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(41, 86, 10, 'ship_goliath_design_kick', 'Kick', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(42, 87, 10, 'ship_goliath_design_referee', 'Referee', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(43, 88, 10, 'ship_goliath_design_goal', 'Goal', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(44, 98, 0, 'ship_police', 'PoliceShip', 0, 0, 0, 35, 35, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(45, 109, 10, 'ship_goliath_design_saturn', 'Saturn', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(46, 110, 10, 'ship_goliath_design_centaur', 'Centaur', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(47, 120, 10, 'ship_goliath_design_turkish', 'Hezarfen', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(48, 140, 10, 'ship_goliath_design_vanquisher', 'Vanquisher', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(49, 141, 10, 'ship_goliath_design_sovereign', 'Sovereign', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(50, 142, 10, 'ship_goliath_design_peacemaker', 'Peacemaker', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(51, 150, 0, 'ship_nostromo_design_diplomat', 'Nostromo Diplomat', 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(52, 151, 0, 'ship_nostromo_design_envoy', 'Nostromo Envoy', 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(53, 152, 0, 'ship_nostromo_design_ambassador', 'Nostromo Ambassador', 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(54, 153, 10, 'ship_goliath_design_goliath-razer', 'Razer', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(55, 154, 0, 'ship_nostromo_design_nostromo-razer', 'Nostromo Razer', 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(56, 155, 10, 'ship_goliath_design_turkish', 'Hezarfen', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(57, 156, 156, 'ship_g-surgeon', 'Surgeon', 256000, 0, 300, 15, 16, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(58, 157, 49, 'ship_aegis_design_aegis-elite', 'Aegis Veteran', 275000, 0, 300, 10, 15, 0, 0, '{\"Experience\":25000,\"Honor\":250,\"Credits\":0,\"Uridium\":250}'),
(59, 158, 49, 'ship_aegis_design_aegis-superelite', 'Aegis Super Elite', 275000, 0, 300, 10, 15, 0, 0, '{\"Experience\":25000,\"Honor\":250,\"Credits\":0,\"Uridium\":250}'),
(60, 159, 69, 'ship_citadel_design_citadel-elite', 'Citadel Veteran', 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(61, 160, 69, 'ship_citadel_design_citadel-superelite', 'Citadel Super Elite', 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(62, 161, 70, 'ship_spearhead_design_spearhead-elite', 'Spearhead Veteran', 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(63, 162, 70, 'ship_spearhead_design_spearhead-superelite', 'Spearhead Super Elite', 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(64, 442, 0, 'spaceball_summer', '..::{Spaceball}::..', 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(65, 443, 0, 'spaceball_winter', '..::{Spaceball}::..', 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(66, 444, 0, 'spaceball_soccer', '..::{Spaceball}::..', 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(67, 445, 445, 'ship_g-champion', 'G-Champion', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(68, 446, 445, 'ship_g-champion_design_g-champion_argon', 'Argon', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(69, 447, 445, 'ship_g-champion_design_g-champion_dusklight', 'Dusklight', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(70, 448, 445, 'ship_g-champion_design_g-champion_lava', 'Lava', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(71, 449, 445, 'ship_g-champion_design_g-champion_legend', 'Legend', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(72, 450, 445, 'ship_g-champion_design_g-champion_albania', 'Albania', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(73, 451, 445, 'ship_g-champion_design_g-champion_austria', 'Austria', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(74, 452, 445, 'ship_g-champion_design_g-champion_belgium', 'Belgium', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(75, 453, 445, 'ship_g-champion_design_g-champion_croatia', 'Croatia', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(76, 454, 445, 'ship_g-champion_design_g-champion_czech_republic', 'Czech Republic', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(77, 455, 445, 'ship_g-champion_design_g-champion_england', 'England', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(78, 456, 445, 'ship_g-champion_design_g-champion_france', 'France', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(79, 457, 445, 'ship_g-champion_design_g-champion_germany', 'Germany', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(80, 458, 445, 'ship_g-champion_design_g-champion_hungary', 'Hungary', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(81, 459, 445, 'ship_g-champion_design_g-champion_iceland', 'Iceland', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(82, 460, 445, 'ship_g-champion_design_g-champion_italy', 'Italy', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(83, 461, 445, 'ship_g-champion_design_g-champion_northern_ireland', 'Northern Ireland', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(84, 462, 445, 'ship_g-champion_design_g-champion_poland', 'Poland', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(85, 463, 445, 'ship_g-champion_design_g-champion_portugal', 'Portugal', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(86, 464, 445, 'ship_g-champion_design_g-champion_republic_of_ireland', 'Republic Of Ireland', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(87, 465, 445, 'ship_g-champion_design_g-champion_romania', 'Romania', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(88, 466, 445, 'ship_g-champion_design_g-champion_russia', 'Russia', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(89, 467, 445, 'ship_g-champion_design_g-champion_slovakia', 'Slovakia', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(90, 468, 445, 'ship_g-champion_design_g-champion_spain', 'Spain', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(91, 469, 445, 'ship_g-champion_design_g-champion_sweden', 'Sweden', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(92, 470, 445, 'ship_g-champion_design_g-champion_switzerland', 'Switzerland', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(93, 471, 445, 'ship_g-champion_design_g-champion_ukraine', 'Ukraine', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(94, 472, 445, 'ship_g-champion_design_g-champion_wales', 'Wales', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(95, 473, 156, 'ship_g-surgeon_design_g-surgeon-cicada', 'Cicada', 256000, 0, 300, 15, 16, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(96, 474, 156, 'ship_g-surgeon_design_g-surgeon-locust', 'Locust', 256000, 0, 300, 15, 16, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(97, 475, 49, 'ship_a_elite_design_a_elite_poison', 'Aegis Elite', 275000, 0, 300, 10, 15, 0, 0, '{\"Experience\":25000,\"Honor\":250,\"Credits\":0,\"Uridium\":250}'),
(98, 476, 49, 'ship_a-elite_design_a_elite_sandstorm', 'Aegis Sandstorm', 275000, 0, 300, 10, 15, 0, 0, '{\"Experience\":25000,\"Honor\":250,\"Credits\":0,\"Uridium\":250}'),
(99, 477, 49, 'ship_a-elite_design_a_elite_lava', 'Aegis Lava', 275000, 0, 300, 10, 15, 0, 0, '{\"Experience\":25000,\"Honor\":250,\"Credits\":0,\"Uridium\":250}'),
(100, 478, 49, 'ship_a-elite_design_a_elite_ocean', 'Aegis Ocean', 275000, 0, 300, 10, 15, 0, 0, '{\"Experience\":25000,\"Honor\":250,\"Credits\":0,\"Uridium\":250}'),
(101, 479, 49, 'ship_a-elite_design_a_elite_blaze', 'Aegis Blaze', 275000, 0, 300, 10, 15, 0, 0, '{\"Experience\":25000,\"Honor\":250,\"Credits\":0,\"Uridium\":250}'),
(102, 480, 480, 'ship_cyborg_design_cyborg-carbonite', 'Cyborg Carbonite', 265000, 0, 300, 16, 16, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(103, 481, 481, 'ship_cyborg_design_cyborg-blaze', 'Cyborg Blaze', 265000, 0, 300, 16, 16, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(104, 482, 482, 'ship_cyborg_design_cyborg-lava', 'Cyborg Lava', 265000, 0, 300, 16, 16, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(105, 483, 10, 'ship_sentinel_design_sentinel-lava', 'sentinel-lava', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(106, 484, 10, 'ship_sentinel_design_sentinel-argon', 'sentinel-argon', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(107, 485, 10, 'ship_sentinel_design_sentinel-legend', 'sentinel-legend', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(108, 486, 10, 'ship_spectrum_design_spectrum-poison', 'spectrum-poison', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(109, 487, 10, 'ship_spectrum_design_spectrum-lava', 'spectrum-lava', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(110, 488, 10, 'ship_spectrum_design_spectrum-sandstorm', 'spectrum-sandstorm', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(111, 489, 10, 'ship_spectrum_design_spectrum-ocean', 'spectrum-ocean', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(112, 490, 10, 'ship_spectrum_design_spectrum-legend', 'spectrum-legend', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(113, 491, 10, 'ship_spectrum_design_spectrum-blaze', 'spectrum-blaze', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(114, 492, 10, 'ship_spectrum_design_spectrum-dusklight', 'spectrum-dusklight', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(115, 493, 10, 'ship_diminisher_design_diminisher-lava', 'diminisher-lava', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(116, 494, 10, 'ship_diminisher_design_diminisher-argon', 'diminisher-argon', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(117, 495, 10, 'ship_diminisher_design_diminisher-legend', 'diminisher-legend', 256000, 0, 300, 15, 15, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `server_shop`
--

CREATE TABLE `server_shop` (
  `ItemID` int(11) NOT NULL,
  `Category` varchar(32) COLLATE utf8_bin NOT NULL,
  `Item` varchar(32) COLLATE utf8_bin NOT NULL,
  `ItemHash` varchar(128) COLLATE utf8_bin NOT NULL,
  `Cost` int(11) NOT NULL,
  `Type` int(1) NOT NULL DEFAULT 1,
  `Enabled` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Tablo döküm verisi `server_shop`
--

INSERT INTO `server_shop` (`ItemID`, `Category`, `Item`, `ItemHash`, `Cost`, `Type`, `Enabled`) VALUES
(1, 'Drone', 'Apis', 'VlZab1EyTkhUak5RVkRBOQ==', 250000, 1, 1),
(2, 'Drone', 'Zeus', 'VmpJeFYwMVhUak5RVkRBOQ==', 250000, 1, 1),
(3, 'Ship', 'Vengeance', 'Vm0weFYyUldiM2xXYldocFlsVTFjdz09', 30000, 1, 0),
(4, 'Ship', 'Goliath', 'VldwSk5XTXlSbGhTYWtKb1VWUXdPUT09', 80000, 1, 0),
(5, 'Ship', 'Champion', 'VlZSS2IyRkhTbGxSYmtKcFRXcFJPUT09', 500000, 1, 0),
(7, 'Ship', 'Hammerclaw', 'VlRCa1IyUkhTbGhXYm14YVRXNW9iMXBJWXpsUVVUMDk=', 500000, 1, 0),
(12, 'Pet', 'Pet', 'VmxWa1YwMUJQVDA9', 0, 1, 1),
(13, 'Design', 'Peacemaker', 'VmxWa1YyRkdhM2xXYmxKYVZqTlNjMWt5WXpsUVVUMDk=', 0, 1, 1),
(14, 'Design', 'Sovereign', 'VmxSSk5VMXNjRmxUYlhob1ZqSlNNUT09', 0, 1, 1),
(15, 'Design', 'Vanquisher', 'Vm0weFIyUlhUbGxXYmtKcVRXMW9jMWt5WXpsUVVUMDk=', 0, 1, 1),
(16, 'Design', 'Kick', 'VlhwS2MyRnRSak5RVkRBOQ==', 0, 1, 1),
(17, 'Design', 'Goal', 'VldwSk5XRkhTa0pRVkRBOQ==', 0, 1, 1),
(18, 'Design', 'Referee', 'VmxjeFYySldjRmxUYlhoaFZWUXdPUT09', 0, 1, 1),
(19, 'Design', 'Crimson', 'VlZST1MyTkhTbGxVYmxwcFdub3dPUT09', 0, 1, 1),
(20, 'Design', 'Centaur', 'VlZSS1YyUlhVa2hTYWtacVdub3dPUT09', 0, 1, 1),
(21, 'Design', 'Saturn', 'VmxSS1IwMUhVbGxUYmxVOQ==', 0, 1, 0),
(22, 'Design', 'Ignite', 'VlRGa2EyUlhSbGxWYlhjOQ==', 0, 1, 1),
(31, 'Design', 'Spearhead_Veteran', 'VmxST1EySkdiRmxUYlRsaFZqQmFjbGRFUm1GaVIxSklWbTVzV2xaNlVUaz0=', 0, 1, 0),
(32, 'Design', 'Aegis_Veteran', 'VlZaa1YySnRSbGxVYlZwWFlsWlpkMWRzYUV0aFIwcHVVRlF3UFE9PQ==', 0, 1, 0),
(33, 'Design', 'Citadel_Veteran', 'VlZSS2MwMUdiRmhWYlhocFVtcHNXRmRzYUZOaVIwNTBVbTVWUFE9PQ==', 0, 1, 0),
(34, 'Design', 'Spearhead_Elite', 'VmxST1EySkdiRmxUYlRsaFZqQmFjbGRFUWxkak1rWlpWVzEzUFE9PQ==', 0, 1, 0),
(35, 'Design', 'Aegis_Elite', 'VlZaa1YySnRSbGxVYlZwVFZqTm9kMXBGWkZaUVVUMDk=', 0, 1, 0),
(36, 'Design', 'Citadel_Elite', 'VlZSS2MwMUdiRmhWYlhocFVtcHNSMWxyWkhOTlJuQlNVRlF3UFE9PQ==', 0, 1, 0),
(37, 'Booster', 'cd-b01', 'VjFSS1VtUkdiSEZSV0djOQ==', 10000, 1, 0),
(38, 'Booster', 'cd-b02', 'VjFSS1VtUkdiSEZSV0dzOQ==', 10000, 1, 0),
(39, 'Booster', 'dmg-b01', 'VjJ0amVHSnJlRmhUV0dST1ZWUXdPUT09', 10000, 1, 1),
(40, 'Booster', 'dmg-b02', 'VjJ0amVHSnJlRmhUV0dST1dub3dPUT09', 10000, 1, 1),
(41, 'Booster', 'ep-b01', 'VjJ4b1FtUkdiSEZSV0djOQ==', 10000, 1, 1),
(42, 'Booster', 'ep-b02', 'VjJ4b1FtUkdiSEZSV0dzOQ==', 10000, 1, 1),
(43, 'Booster', 'hon-b01', 'V1ZWak5XUlZlRmhUV0dST1ZWUXdPUT09', 10000, 1, 1),
(44, 'Booster', 'hon-b02', 'V1ZWak5XUlZlRmhUV0dST1dub3dPUT09', 10000, 1, 1),
(45, 'Booster', 'hp-b01', 'V1ZWb1FtUkdiSEZSV0djOQ==', 10000, 1, 1),
(46, 'Booster', 'hp-b02', 'V1ZWb1FtUkdiSEZSV0dzOQ==', 10000, 1, 1),
(47, 'Booster', 'rep-b01', 'V1RJeFYyUXdlRmhUV0dST1ZWUXdPUT09', 10000, 1, 1),
(48, 'Booster', 'rep-b02', 'V1RJeFYyUXdlRmhUV0dST1dub3dPUT09', 10000, 1, 1),
(49, 'Ship', 'Aegis', 'VlZaa1YySnRSbGxVVkRBOQ==', 300000, 1, 1),
(50, 'Booster', 'rep-s01', 'V1RJeFYyUXdlRmxVV0dST1ZWUXdPUT09', 10000, 1, 0),
(51, 'Booster', 'res-b01', 'V1RJeFYyVnJlRmhUV0dST1ZWUXdPUT09', 10000, 1, 0),
(52, 'Booster', 'res-b02', 'V1RJeFYyVnJlRmhUV0dST1dub3dPUT09', 10000, 1, 0),
(53, 'Booster', 'shd-b01', 'V1hwS2IyRXdlRmhUV0dST1ZWUXdPUT09', 10000, 1, 1),
(54, 'Booster', 'shd-b02', 'V1hwS2IyRXdlRmhUV0dST1dub3dPUT09', 10000, 1, 1),
(55, 'Booster', 'sreg-b01', 'V1hwT1MySkdjRFZOVjJ4T1VrVlZPUT09', 10000, 1, 0),
(56, 'Booster', 'sreg-b02', 'V1hwT1MySkdjRFZOVjJ4T1VrVnJPUT09', 10000, 1, 0),
(69, 'Ship', 'Citadel', 'VlZSS2MwMUdiRmhWYlhocFVWUXdPUT09', 400000, 1, 1),
(70, 'Ship', 'Spearhead', 'VmxST1EySkdiRmxUYlRsaFZqQmFjZz09', 150000, 1, 1),
(81, 'Ship', 'Pusat', 'VmxWb1YyVnNiRmxWVkRBOQ==', 250000, 1, 1),
(156, 'Ship', 'Surgeon', 'VmxST1YyVldiM2xXYmxwcFdub3dPUT09', 250000, 1, 1),
(583, 'Extra', 'LogFile', 'VmtWak5XSnNTblJpU0U1aFZWUXdPUT09', 0, 1, 1),
(584, 'Extra', 'GreenKey', 'VldwT1MySkdjRmhPVlhoaFYwZHpPUT09', 0, 1, 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `chat_permissions`
--
ALTER TABLE `chat_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `log_account`
--
ALTER TABLE `log_account`
  ADD PRIMARY KEY (`LogID`);

--
-- Tablo için indeksler `log_event_jpb`
--
ALTER TABLE `log_event_jpb`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `log_player_kills`
--
ALTER TABLE `log_player_kills`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `player_accounts`
--
ALTER TABLE `player_accounts`
  ADD PRIMARY KEY (`userID`);

--
-- Tablo için indeksler `player_equipment`
--
ALTER TABLE `player_equipment`
  ADD PRIMARY KEY (`userId`);

--
-- Tablo için indeksler `player_galaxygates`
--
ALTER TABLE `player_galaxygates`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `player_settings`
--
ALTER TABLE `player_settings`
  ADD PRIMARY KEY (`userId`);

--
-- Tablo için indeksler `player_skilltree`
--
ALTER TABLE `player_skilltree`
  ADD UNIQUE KEY `userID` (`userID`);

--
-- Tablo için indeksler `server_bans`
--
ALTER TABLE `server_bans`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `server_battlestations`
--
ALTER TABLE `server_battlestations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `server_blog`
--
ALTER TABLE `server_blog`
  ADD PRIMARY KEY (`BlogID`);

--
-- Tablo için indeksler `server_clan`
--
ALTER TABLE `server_clan`
  ADD PRIMARY KEY (`clanID`);

--
-- Tablo için indeksler `server_clan_applications`
--
ALTER TABLE `server_clan_applications`
  ADD PRIMARY KEY (`applicationID`);

--
-- Tablo için indeksler `server_clan_diplomacy`
--
ALTER TABLE `server_clan_diplomacy`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `server_clan_diplomacy_applications`
--
ALTER TABLE `server_clan_diplomacy_applications`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `server_dsc`
--
ALTER TABLE `server_dsc`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `server_evoucher`
--
ALTER TABLE `server_evoucher`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `server_maps`
--
ALTER TABLE `server_maps`
  ADD PRIMARY KEY (`mapID`);

--
-- Tablo için indeksler `server_ships`
--
ALTER TABLE `server_ships`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shipID` (`shipID`);

--
-- Tablo için indeksler `server_shop`
--
ALTER TABLE `server_shop`
  ADD PRIMARY KEY (`ItemID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `chat_permissions`
--
ALTER TABLE `chat_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `log_account`
--
ALTER TABLE `log_account`
  MODIFY `LogID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `log_event_jpb`
--
ALTER TABLE `log_event_jpb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `log_player_kills`
--
ALTER TABLE `log_player_kills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `player_accounts`
--
ALTER TABLE `player_accounts`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `player_equipment`
--
ALTER TABLE `player_equipment`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `player_galaxygates`
--
ALTER TABLE `player_galaxygates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `server_bans`
--
ALTER TABLE `server_bans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `server_battlestations`
--
ALTER TABLE `server_battlestations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `server_blog`
--
ALTER TABLE `server_blog`
  MODIFY `BlogID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `server_clan`
--
ALTER TABLE `server_clan`
  MODIFY `clanID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `server_clan_applications`
--
ALTER TABLE `server_clan_applications`
  MODIFY `applicationID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `server_clan_diplomacy`
--
ALTER TABLE `server_clan_diplomacy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `server_clan_diplomacy_applications`
--
ALTER TABLE `server_clan_diplomacy_applications`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `server_dsc`
--
ALTER TABLE `server_dsc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `server_evoucher`
--
ALTER TABLE `server_evoucher`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `server_maps`
--
ALTER TABLE `server_maps`
  MODIFY `mapID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- Tablo için AUTO_INCREMENT değeri `server_ships`
--
ALTER TABLE `server_ships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- Tablo için AUTO_INCREMENT değeri `server_shop`
--
ALTER TABLE `server_shop`
  MODIFY `ItemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=585;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
