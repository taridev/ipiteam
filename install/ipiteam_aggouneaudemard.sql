-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 26 nov. 2017 à 23:25
-- Version du serveur :  5.7.20
-- Version de PHP :  7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ipiteam_aggouneaudemard`
--

-- --------------------------------------------------------

--
-- Structure de la table `assets`
--

CREATE TABLE `assets` (
  `id` int(11) NOT NULL,
  `id_gallery` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(20) DEFAULT NULL,
  `content-type` varchar(20) DEFAULT NULL,
  `path` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `assets`
--

INSERT INTO `assets` (`id`, `id_gallery`, `user_id`, `title`, `content-type`, `path`) VALUES
(1, 1, NULL, NULL, NULL, 'gallery1-00001.jpg'),
(2, 1, NULL, NULL, NULL, 'gallery1-00002.jpg'),
(3, 1, NULL, NULL, NULL, 'gallery1-00003.jpg'),
(4, 1, NULL, NULL, NULL, 'gallery1-00004.jpg'),
(5, 1, NULL, NULL, NULL, 'gallery1-00005.jpg'),
(6, 1, NULL, NULL, NULL, 'gallery1-00006.jpg'),
(7, 1, NULL, NULL, NULL, 'gallery1-00007.jpg'),
(8, 2, 1, NULL, NULL, 'gallery2-00001.jpg'),
(9, 2, 1, NULL, NULL, 'gallery2-00002.jpg'),
(10, 2, 1, NULL, NULL, 'gallery2-00003.jpg'),
(11, 2, 1, NULL, NULL, 'gallery2-00004.jpg'),
(12, 2, 1, NULL, NULL, 'gallery2-00005.jpg'),
(13, 2, 1, NULL, NULL, 'gallery2-00006.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(8) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `user_editor` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `zip_code` int(5) DEFAULT '-1',
  `city` varchar(30) DEFAULT '',
  `street` varchar(50) DEFAULT '',
  `lat` decimal(10,8) NOT NULL,
  `lng` decimal(11,8) NOT NULL,
  `description` text,
  `summary` varchar(250) NOT NULL,
  `img_path` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `name`, `user_editor`, `type_id`, `date`, `zip_code`, `city`, `street`, `lat`, `lng`, `description`, `summary`, `img_path`) VALUES
(1, 'Finale Coupe Davis 2017 : France-Belgique', 1, 1, '2017-11-24 00:00:00', 59656, 'Villeneuve d’Ascq', '261, Boulevard de Tournai', '50.61197010', '3.12829590', 'Discipline sportive plutôt glamour, mais tout aussi exigeante, le tennis fait partie de ces sports qui déchaînent des passions. Il a fait connaître de très grands champions au monde à travers des performances assez relevées. L\'esprit compétitif qu\'il engendre est hors norme. Ceci est tout à fait normal quand on sait tout l\'engouement que donnent des tournois majeurs comme ceux du grand schelem ou encore la coupe Davis. Cette dernière a connu de très grands moments depuis sa création, et rassurez-vous, une autre page de son histoire est sur le point de s\'écrire en 2017 avec sa finale qui s\'annonce historique.', 'COUPE DAVIS – La France est à une marche de sa 10e Coupe Davis. Jo-Wilfried Tsonga peut apporter le point du titre à condition de battre David Goffin, un joueur sur une dynamique supérieure à la sienne et qui vient de prendre une nouvelle dimension.', 'imgs/events/1/2217731-46253830-2560-1440.jpg'),
(2, 'Yoann Riou en Moselle pour une grande soirée inédite !', 1, 1, '2017-12-05 00:00:00', 57100, 'Thionville', '2, cour du Château', '49.35781050', '6.16637480', 'Le 5 décembre prochain, à l’occasion de Bayern Munich – Paris-SG, la chaine L’Équipe crée l’événement : Yoann Riou et Raphaël Sebaoun commenteront le match depuis le salon d’un téléspectateur !\r\n\r\nPendant un mois, les téléspectateurs étaient invités à candidater sur lagrandesoiree.lequipe.fr.\r\nUn mois plus tard, le site a recensé près de 3000 inscriptions émanant de la France entière !\r\n\r\nParmi les candidats, la chaine L’Équipe a sélectionné l’heureux élu : Frédéric accueillera Yoann Riou et Raphaël Sebaoun chez lui, en Moselle, pour commenter le match.', 'Le 5 décembre prochain, à l’occasion de Bayern Munich – Paris-SG, la chaine L’Équipe crée l’événement : Yoann Riou et Raphaël Sebaoun commenteront le match depuis le salon d’un téléspectateur !', 'imgs/events/2/EQ_GRD-SOIREE_CHEZVOUS_MERCI_RS_1000x800.jpg'),
(5, 'Monaco - Paris - Le PSG peut déjà plier l\'affaire', 2, 1, '2017-11-26 20:45:00', 98000, 'Monaco', '7, avenue des Castelans', '43.72750000', '7.41555500', ' Ne pas se fier aux apparences ou à ce qu’il s\'est passé cette semaine en Ligue des champions : Monaco – PSG, c\'est l\'affiche de la saison en Ligue 1. Parce qu\'elle oppose le champion à son dauphin. Parce qu\'elle oppose le leader et son poursuivant. Parce qu\'elle oppose les deux équipes les plus régulières depuis 2013. Parce que Monaco semble être le dernier caillou dans la chaussure du PSG en championnat. Autant dire que cette rencontre peut marquer un tournant et dessiner un peu plus nettement les contours de la saison.\r\n\r\nEn cas de victoire, le PSG compterait neuf points d\'avance sur le premier de ses poursuivants. Après 14 journées, le gouffre serait déjà abyssal et l\'écart déjà très compliqué - pour ne pas dire impossible - à combler. C\'est tout l\'enjeu pour Monaco : rester dans le sillage de Paris, faire illusion le plus longtemps possible. La semaine est déjà rude pour l\'ASM qui a fait une croix sur la Ligue des champions (et même la Ligue Europa) mardi en terminant bon dernier de son groupe. Le coup serait rude de l\'achever en faisant quasiment une croix sur son titre de champion. ', 'En cas de victoire à Monaco, le PSG compterait neuf points d\'avance sur son premier poursuivant en championnat, une marge considérable. C\'est dire tout l\'enjeu du choc entre le champion de France en titre et son dauphin, dimanche soir.', 'imgs/events/5/2217201-46243230-2560-1440.jpg'),
(29, 'C\'est la reprise des sports d\'hiver', 1, 1, '2017-11-15 00:00:00', -1, 'Ostersund', '', '14.64613410', '63.17656210', 'dqdsqdsqdsqdsqdsqdsqsqdqdsqsqdsqdsqdsq', 'Ce weekend marque le grand début des coupes du monde de biathlon, ski alpin et ski nordique.', 'imgs/events/29/1154239-18250547-2560-1440.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `event_types`
--

CREATE TABLE `event_types` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `event_types`
--

INSERT INTO `event_types` (`id`, `name`) VALUES
(1, 'sportif'),
(2, 'collectif');

-- --------------------------------------------------------

--
-- Structure de la table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gallery_creator` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `summary` text,
  `thumbnail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `gallery_creator`, `date`, `summary`, `thumbnail`) VALUES
(1, 'Galerie Numéro 1', 1, '2017-11-15 00:00:00', 'blabla bli blablabla y\'a du soleil et des nanas', 'galleries-img/gallery-1/gallery1-00005.jpg'),
(2, 'Galerie Numéro 2', 1, '2017-11-17 00:00:00', 'Le faux-texte (également appelé lorem ipsum, lipsum, ou bolo bolo1) est, en imprimerie, un texte sans signification, dont le seul objectif est de calibrer le contenu d\'une page par du texte, fût-il non éditorial, pour travailler sur la seule mise en forme de la page. Le texte définitif (qui a une signification) prendra la place du faux-texte, une fois que la mise en forme sera jugée acceptable.\r\n\r\nGénéralement, on utilise un texte en faux latin (le texte ne veut rien dire, il a été modifié), le Lorem ipsum ou Lipsum, qui permet donc de faire office de texte d\'attente. L\'avantage de le mettre en latin est que l\'opérateur sait au premier coup d\'œil que la page contenant ces lignes n\'est pas valide, et surtout l\'attention du client n\'est pas dérangée par le contenu, lui permettant de demeurer concentré sur le seul aspect graphique.', 'galleries-img/gallery-2/gallery2-00001.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE `notes` (
  `id` int(8) NOT NULL,
  `note` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `notes`
--

INSERT INTO `notes` (`id`, `note`) VALUES
(1, 'this is a test'),
(2, 'This is another test...'),
(3, 'And, yet again, another...');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(8) NOT NULL,
  `post_content` text NOT NULL,
  `post_date` datetime NOT NULL,
  `post_topic` int(8) NOT NULL,
  `post_by` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `topics`
--

CREATE TABLE `topics` (
  `topic_id` int(8) NOT NULL,
  `topic_subject` varchar(255) NOT NULL,
  `topic_date` datetime NOT NULL,
  `topic_cat` int(8) NOT NULL,
  `topic_by` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(8) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_date` datetime NOT NULL,
  `user_level` int(8) NOT NULL,
  `user_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_pass`, `user_email`, `user_date`, `user_level`, `user_status`) VALUES
(1, 'administrator', '$2y$10$SJ31XkqYKgp/raJzWoCuUeVHJYeRdyDYkyfnCt8NqqYS5CD0C0l4u', '', '2017-04-12 00:00:00', 1, ''),
(7, 'matthieu', '$2y$10$WfeYf23OfaxW8HmoiR7MkO1kG7B13VKsAv0slinOk5Z.lsIaYaNxS)', 'matthieu.audemard@gmail.com', '2017-11-26 00:00:00', 3, '4');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asset_gallery_fk1` (`id_gallery`),
  ADD KEY `asset_gallery_user_fk1` (`user_id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `cat_name_unique` (`cat_name`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_editor_fk1` (`user_editor`),
  ADD KEY `events_type_fk2` (`type_id`);

--
-- Index pour la table `event_types`
--
ALTER TABLE `event_types`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_gallery_creator` (`gallery_creator`);

--
-- Index pour la table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `post_topic` (`post_topic`),
  ADD KEY `post_by` (`post_by`);

--
-- Index pour la table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topic_id`),
  ADD KEY `topic_cat` (`topic_cat`),
  ADD KEY `topic_by` (`topic_by`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name_unique` (`user_name`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `event_types`
--
ALTER TABLE `event_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `topics`
--
ALTER TABLE `topics`
  MODIFY `topic_id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `FK_gallery_creator` FOREIGN KEY (`gallery_creator`) REFERENCES `users` (`user_id`);

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`post_topic`) REFERENCES `topics` (`topic_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`post_by`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_ibfk_1` FOREIGN KEY (`topic_cat`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `topics_ibfk_2` FOREIGN KEY (`topic_by`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
