DROP DATABASE IF EXISTS biblio;
CREATE DATABASE biblio CHARACTER SET 'utf8';
USE biblio;

DROP USER IF EXISTS 'admin' @'Localhost';

CREATE USER 'admin' @'Localhost';

GRANT ALL PRIVILEGES ON biblio.* To 'admin' @'Localhost' IDENTIFIED BY 'admin';

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `biblio`
--

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `author` text NOT NULL,
  `release_date` date NOT NULL,
  `category` text NOT NULL,
  `availablity` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `release_date`, `category`, `availablity`) VALUES
(1, 'Dom Quichotte', 'Miguel Cervantes', '1605-01-01', 'Roman', 1),
(2, 'Voyage au bout de la nuit', 'Louis-Ferdinand Céline', '1932-01-01', 'Roman', 0),
(3, 'Le Petit Prince', 'Antoine de Saint-Exupéry', '1943-01-01', 'Littérature jeunesse', 1),
(4, 'Les Fleurs du mal', 'Charles Baudelaire', '1857-01-01', 'Littérature Classique', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
