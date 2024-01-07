

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `espace_admin`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `prix` int(11) NOT NULL,
  `categorie` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `description`, `image`, `prix`, `categorie`) VALUES
(7, 'PSG', 'Ce maillot  polyester au design sobre convient pour vos entraînements de football.\n\nC\'est un Tee-shirt de sport agréable à porter et qui favorise la transpiration.\n\nAvec ou sans technologie Dri-Fit, ce maillot de sport est d\'une coupe ajustée. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.    <br />\n  Ut enim ad minim veniam, quis nostrud ', 'https://media.intersport.fr/is/image/intersportfr/DM1844_CZW_Q1?$produit_l$', 1000, 'Homme'),
(11, 'england', 'Ce maillot polyester au design sobre convient pour vos entraînements de football. C&#039;est un Tee-shirt de sport agréable à porter et qui favorise la transpiration. Avec ou sans technologie Dri-Fit', 'https://espacefoot.fr/38992-large_default/DN0687100MaillotAngleterreDomicile2023.jpg', 1100, 'Homme'),
(26, 'real madrid', '  Ut enim ad minim veniam, quis nostrud \nC\'est un Tee-shirt de sport agréable à porter et qui favorise la transpiration.\n\nAvec ou sans technologie Dri-Fit, ce maillot de sport est d\'une coupe ajustée.\n', 'https://adidas.co.ma/15627-large_default/maillot-domicile-real-madrid-21-22.jpg', 1200, 'Homme'),
(27, 'olympique lyonnais', 'Ce maillot polyester au design sobre convient pour vos entraînements de football. C&#039;est un Tee-shirt de sport agréable à porter et qui favorise la transpiration. Avec ou sans technologie Dri-Fit', 'data:image/jpeg;base64,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', 1200, 'Homme'),
(28, 'Juventus', 'Ce maillot polyester au design sobre convient pour vos entraînements de football. C&#039;est un Tee-shirt de sport agréable à porter et qui favorise la transpiration. Avec ou sans technologie Dri-Fit', 'https://media.gqmagazine.fr/photos/62d806431b0213cb3ab1d673/master/w_934,h_926,c_limit/Capture%20d%E2%80%99e%CC%81cran%202022-07-20%20a%CC%80%2012.36.04.png', 1200, 'Femme'),
(29, 'Man united', 'Ce maillot polyester au design sobre convient pour vos entraînements de football. C&#039;est un Tee-shirt de sport agréable à porter et qui favorise la transpiration. Avec ou sans technologie Dri-Fit', 'https://media.gqmagazine.fr/photos/62d806451b0213cb3ab1d675/1:1/w_1920%2Cc_limit/Capture%2520d%25E2%2580%2599e%25CC%2581cran%25202022-07-20%2520a%25CC%2580%252015.32.27.png', 1500, 'Femme'),
(30, 'Man city', 'Ce maillot polyester au design sobre convient pour vos entraînements de football. C&#039;est un Tee-shirt de sport agréable à porter et qui favorise la transpiration. Avec ou sans technologie Dri-Fit', 'https://media.gqmagazine.fr/photos/62d806471b0213cb3ab1d677/1:1/w_1920%2Cc_limit/Capture%2520d%25E2%2580%2599e%25CC%2581cran%25202022-07-20%2520a%25CC%2580%252013.03.16.png', 1300, 'Femme'),
(31, 'Celtic', 'Ce maillot polyester au design sobre convient pour vos entraînements de football. C&#039;est un Tee-shirt de sport agréable à porter et qui favorise la transpiration. Avec ou sans technologie Dri-Fit', 'https://media.gqmagazine.fr/photos/62d806459c4eaa7f6be90d4d/1:1/w_1920%2Cc_limit/Capture%2520d%25E2%2580%2599e%25CC%2581cran%25202022-07-20%2520a%25CC%2580%252015.19.01.png', 1100, 'Femme'),
(32, 'Arsenal', 'Ce maillot polyester au design sobre convient pour vos entraînements de football. C&#039;est un Tee-shirt de sport agréable à porter et qui favorise la transpiration. Avec ou sans technologie Dri-Fit', 'https://contents.mediadecathlon.com/p2059280/k$769f02730687532fb763e006ac49d637/sq/maillots-de-foot-adidas.jpg?format=auto&amp;f=800x0', 1300, 'Solde'),
(33, 'marseille', 'Ce maillot polyester au design sobre convient pour vos entraînements de football. C&#039;est un Tee-shirt de sport agréable à porter et qui favorise la transpiration. Avec ou sans technologie Dri-Fit', 'https://i.ebayimg.com/images/g/B9oAAOSwE9BjEOQC/s-l500.png', 1000, 'Solde'),
(34, 'Atletico Madrid', 'Ce maillot polyester au design sobre convient pour vos entraînements de football. C&#039;est un Tee-shirt de sport agréable à porter et qui favorise la transpiration. Avec ou sans technologie Dri-Fit', 'https://media.gqmagazine.fr/photos/62d806403a5500ded9072a38/1:1/w_1920%2Cc_limit/Capture%2520d%25E2%2580%2599e%25CC%2581cran%25202022-07-20%2520a%25CC%2580%252012.57.45.png', 1200, 'Solde'),
(35, 'OGC NICE', 'Ce maillot polyester au design sobre convient pour vos entraînements de football. C&#039;est un Tee-shirt de sport agréable à porter et qui favorise la transpiration. Avec ou sans technologie Dri-Fit', 'https://media.gqmagazine.fr/photos/62d806403a5500ded9072a39/1:1/w_1920%2Cc_limit/Capture%2520d%25E2%2580%2599e%25CC%2581cran%25202022-07-20%2520a%25CC%2580%252015.29.42.png', 1000, 'solde'),
(36, 'Inter Milan', 'Ce maillot polyester au design sobre convient pour vos entraînements de football. C&#039;est un Tee-shirt de sport agréable à porter et qui favorise la transpiration. Avec ou sans technologie Dri-Fit', 'https://www.maillotfactory.com/images/2018-2019/Serie-A/Maillot-Inter-Milan/Maillot_Foot_Inter_Milan_Third_2018_2019.jpg', 1000, 'Solde'),
(37, 'Ac Milan', 'Ce maillot polyester au design sobre convient pour vos entraînements de football. C&#039;est un Tee-shirt de sport agréable à porter et qui favorise la transpiration. Avec ou sans technologie Dri-Fit', 'https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_450,h_450/global/774719/01/fv/fnd/EEA/fmt/png', 1200, 'Solde');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id` int(11) NOT NULL,
  `pseudo` text NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Telephone` int(20) NOT NULL,
  `Adresse` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `membres`
--



--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
