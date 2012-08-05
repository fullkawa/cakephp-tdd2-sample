CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `username`, `password`) VALUES (NULL, 'testuser', '4a0d808a74120b57308efa3b65f3300815360f95');
-- password: "ffff"
