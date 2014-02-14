--
-- Data base: `chesssocket`
--

-- --------------------------------------------------------

--
-- table `chessmatch`
--

CREATE TABLE IF NOT EXISTS `chessmatch` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `white_player_key` int(15) DEFAULT NULL,
  `black_player_key` int(15) DEFAULT NULL,
  `fen_position` char(85) NOT NULL,
  `last_move` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `game_start` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `game_end` timestamp NULL DEFAULT NULL,
  `status_code` int(3) unsigned NOT NULL DEFAULT 10,
  FOREIGN KEY (white_player_key) 
    REFERENCES chesser(id) 
    ON DELETE UPDATE,
  FOREIGN KEY (black_player_key) 
    REFERENCES chesser(id) 
    ON DELETE UPDATE,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- table `player`
--


CREATE TABLE IF NOT EXISTS `player` (
  `id` int(15) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(60) unsigned NOT NULL,
  `private_key` varchar(60) unsigned NOT NULL,
  `ranking` int(5) unsigned NOT NULL DEFAULT 100,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
