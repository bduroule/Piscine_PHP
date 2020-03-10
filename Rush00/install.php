<?php
include 'database.php';

mysqli_query($conn,'SET NAMES utf8');

mysqli_query($conn,
"CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `product` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;");

mysqli_query($conn,
"INSERT INTO `article` (`id`, `product`, `description`, `price`, `picture`) VALUES
(3, 'Pull - Vacation', 'Pull motif Vacation été', 29, './pics/pull01.jpg'),
(4, 'Vest Beige Automne', 'Veste Automne Beige Hipster', 149, './pics/vest01.jpg'),
(5, 'Pyjama Noel Fantaisie', 'Mega pyjama de noël pour Papi', 9.99, './pics/pyjama01.jpg'),
(6, 'Veste Ellesse Creme', 'Veste Automne qui passe Crème même en hiver en vrai', 12, './pics/vest02.jpg'),
(8, 'Ensemble Pyjama Vert', 'Super pyjama avec du vert comme couleur, mega bien pour dormir', 29.9, './pics/pyjama02.jpg'),
(10, 'Fille Très Bonne santé', 'Fait tout ce que vous lui demandez (attention assez fragile)', 1.99, './pics/fille01.jpg'),
(14, 'Pull noir Diamond', 'Pull noir imprimé jaguar, tiens chaud, mais inutile en pleine savane africaine', 175.7, './pics/pull02.jpg'),
(15, 'Pyjama Bisounours', 'Toi dans un Bisounours quoi de mieux ?', 666, './pics/pyjama03.jpg'),
(16, 'Pull un peu kikoo', 'Pull pour vraiment pas pecho, si tu le mets', 4.99, './pics/pull03.jpg'),
(17, 'Veste Noir Laine Super Longue', 'Veste Noir Laine Super Longue qui se porte très bien pas des hommes de type sans style', 69.9, './pics/vest03.jpg'),
(19, 'Veste Noir K-way', 'K-way qui résiste à l\'eau, c\'est super en temps de pluie', 19.99, './pics/vest04.jpg'),
(21, 'Strip-teaser Péruvien', 'Offre son corps pour quelques pesos, merci de nous le renvoyer sous 5 jours maximum', 0.99, './pics/strip01.jpg'),
(22, 'Robe été blanche', 'Super pour sortir oklm avec 2-3 copines en buvant un mojito', 77.77, './pics/robe03.jpg'),
(23, 'Veste laine rose', 'Veste rose super pour boire thé au chaud devant netflix', 69.9, './pics/laine01.jpg'),
(27, 'Jean Bleu Clair', 'C\'est un jean, tu le mets t\'es habillé', 45.99, './pics/jean01.jpg'),
(28, 'Pull Nike', 'Pulle Nike noir pour le sport', 85.88, './pics/pull04.jpg');");

mysqli_query($conn,
"CREATE TABLE `users` (
  `user_id` int(100) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_uid` varchar(250) NOT NULL,
  `user_passwd` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;");

mysqli_query($conn,
"INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_uid`, `user_passwd`) VALUES
(1, 'asaba', 'pomme@gmail.com', 'Admin', 'test123'),
(11, 'a', 'a@hotmail.fr', 'Client', 'b0e869f9707a0ceb019795aa8b2c2b06fbee8dc4207da822828b1a1348e9eeb9b38eb12517c150cbce3cd653c09d3314c7dfbf53a54358b97f1d4c0f6b68103f');");

mysqli_query($conn,
"ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);");

mysqli_query($conn,
"ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);");

mysqli_query($conn,
"ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;");

mysqli_query($conn,
"ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;");
mysqli_query($conn,
"COMMIT;");
?>