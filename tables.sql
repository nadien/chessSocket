--
-- Data base: `chesssocket`
--

-- --------------------------------------------------------

--
-- table `player`
--


CREATE TABLE IF NOT EXISTS `player` (
  `id` int(15) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL,
  `private_key` varchar(60) NOT NULL,
  `ranking` int(5) unsigned NOT NULL DEFAULT 100,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- table `chessmatch`
--

CREATE TABLE IF NOT EXISTS `chessmatch` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `white_player_key` int(15) unsigned DEFAULT NULL,
  `black_player_key` int(15) unsigned DEFAULT NULL,
  `fen_position` char(85) NOT NULL,
  `game_start` timestamp NOT NULL DEFAULT 0,
  `game_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `game_end` timestamp NULL DEFAULT 0,
  `status_code` int(3) unsigned NOT NULL DEFAULT 10,
  FOREIGN KEY (white_player_key) 
    REFERENCES player(id)
    ON UPDATE CASCADE ON DELETE SET NULL,
  FOREIGN KEY (black_player_key) 
    REFERENCES player(id)
    ON UPDATE CASCADE ON DELETE SET NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
