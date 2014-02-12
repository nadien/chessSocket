--
-- Data base: `chesssocket`
--

-- --------------------------------------------------------

--
-- table `match`
--

CREATE TABLE IF NOT EXISTS `match` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `level` ENUM('BEGGINNER','INTERMEDIATE','ADVANCED') NOT NULL,
  `white_player_key` char(12) DEFAULT NULL,
  `black_player_key` char(12) DEFAULT NULL,
  `fen_position` char(85) NOT NULL,
  `last_move` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `game_start` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `game_end` timestamp NULL DEFAULT NULL,
  `status_code` int(3) unsigned NOT NULL DEFAULT 10, 
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
