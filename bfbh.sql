-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 28, 2021 at 10:54 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bfbh`
--

-- --------------------------------------------------------

--
-- Table structure for table `Dieta`
--

CREATE TABLE `Dieta` (
  `idDieta` int(11) NOT NULL,
  `kalorie` int(11) NOT NULL,
  `poniedzialek` int(11) NOT NULL,
  `wtorek` int(11) NOT NULL,
  `sroda` int(11) NOT NULL,
  `czwartek` int(11) NOT NULL,
  `piatek` int(11) NOT NULL,
  `sobota` int(11) NOT NULL,
  `niedziela` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `Dieta`
--

INSERT INTO `Dieta` (`idDieta`, `kalorie`, `poniedzialek`, `wtorek`, `sroda`, `czwartek`, `piatek`, `sobota`, `niedziela`) VALUES
(1, 1600, 1, 2, 3, 4, 5, 6, 7);

-- --------------------------------------------------------

--
-- Table structure for table `DietaDzien`
--

CREATE TABLE `DietaDzien` (
  `idDzien` int(11) NOT NULL,
  `sniadanie` int(11) NOT NULL,
  `lunch` int(11) NOT NULL,
  `obiad` int(11) NOT NULL,
  `kolacja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `DietaDzien`
--

INSERT INTO `DietaDzien` (`idDzien`, `sniadanie`, `lunch`, `obiad`, `kolacja`) VALUES
(1, 1, 2, 3, 4),
(2, 5, 6, 7, 8),
(3, 9, 10, 11, 12),
(4, 9, 2, 7, 8),
(5, 1, 2, 3, 4),
(6, 5, 6, 7, 8),
(7, 9, 10, 11, 12);

-- --------------------------------------------------------

--
-- Table structure for table `Posilek`
--

CREATE TABLE `Posilek` (
  `idPosilek` int(11) NOT NULL,
  `nazwa` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `poraDnia` varchar(32) COLLATE utf8_polish_ci NOT NULL,
  `produkty` varchar(512) COLLATE utf8_polish_ci NOT NULL,
  `kalorie` int(11) NOT NULL,
  `bialko` int(11) NOT NULL,
  `tluszcze` int(11) NOT NULL,
  `weglowodany` int(11) NOT NULL,
  `przepis` varchar(1512) COLLATE utf8_polish_ci NOT NULL,
  `czas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `Posilek`
--

INSERT INTO `Posilek` (`idPosilek`, `nazwa`, `poraDnia`, `produkty`, `kalorie`, `bialko`, `tluszcze`, `weglowodany`, `przepis`, `czas`) VALUES
(1, 'Owsianka Chia', 'Śniadanie', '1 szklanka płatków owsianych,</br>\r\n1 łyżka nasion chia,</br>\r\nłyżeczka syropu klonowego,</br>\r\nmleko,</br>\r\n1-2 owoce (jabłko, śliwka, gruszka).', 495, 20, 16, 50, 'Wszystkie składniki wymieszać i odstawić. Umyte i pokrojone na kawałki jabłko posypać cynamonem i polać drugą łyżeczką . Smażyć na rozgrzanej patelni bez dodatku tłuszczu, mieszając co jakiś czas, aż jabłka zmiękną (można też ugotować w rondelku z małą ilością wody)Do owsianki przełożyć jabłka i całość umieścić w lodówce na noc.', 15),
(2, 'Wiosenna kanapka', 'Lunch', '2 kromki chleba razowego,</br>\r\nsałata rzymska,</br>\r\n2 opakowanie sera (biały/wiejski),</br>\r\npomidory koktajlowe,</br>\r\npapryka, rzodkiewka,</br>\r\nmasło (opcjonalnie),</br>\r\nsól i pieprz.', 237, 20, 16, 50, 'Wymieszaj serek z drobno pokrojonymi warzywami i połóż na kanapce.', 5),
(3, 'Kotlecik z indyka', 'Obiad', '500g mięsa z indyka,</br>\r\nprzyprawy (sól, pieprz czarny, pieprz biały),</br>\r\n1 cukinia,</br>\r\n1 słoik suszonych pomidorów,</br>\r\n2 szklanki wody, pół cebuli,</br>\r\n3 ząbki czosnku, oliwa, pietruszka.', 530, 40, 23, 38, 'Filet z indyka zmielić (można kupić gotowe zmielone chude mięso), dodać odrobinę soli, wlać dwie łyżki bardzo zimnej wody i wyrobić mięso. Cebulę i czosnek obrać, posiekać. Cukinię zetrzeć na tarce o grubych oczkach. Na patelni rozgrzać oliwę, zeszklić cebulę z czosnkiem (ale nie przypalać), po 2-3 minutach dodać cukinię, całość poddusić 3 minuty, zdjąć z ognia, wystudzić, dodać do mięsa razem z pokrojonymi drobno suszonymi pomidorami, dodać posiekaną natkę, doprawić pieprzem do smaku, ponownie masę wyrobić. Dłonie zwilżyć i formować kotleciki. Patelnię posmarować oliwą, rozgrzać. Smażyć na wolnym ogniu z każdej strony po kilka minut, przed spożyciem upewnić się, że kotlety wewnątrz nie są surowe. Można podawać z ziemniakami lub ryżem.', 50),
(4, 'Jajecznica', 'Kolacja', '2 jajka,</br>\r\nszczypiorek,</br>\r\nsól,</br>\r\npieprz,</br>\r\nmasło.', 320, 20, 9, 20, 'Szczypiorek posiekać. Jajka wbić do miseczki i wymieszać z solą, pieprzem i ewentualnie suszonymi ziołami.Na patelni rozpuścić masło, wlać masę jajeczną i smażyć do uzyskania ulubionej konsystencji.', 15),
(5, 'Placuszki z owocami', 'Śniadanie', 'Mąka pszenna pełnoziarnista 60g,</br>\r\nmleko 1,5% 100g,</br>\r\njajko 1 szt.</br>\r\nkakao 10g,</br>\r\nproszek do pieczenia 2g,</br>\r\noliwa 5g,</br>\r\nowoce jagodowe 150g.', 469, 20, 16, 50, 'Zmiksować jajko, mleko, mąkę i proszek. Odstawić na 15 minut. Sprawdzić konsystencję ciasta, w razie potrzeby rozrzedzić wodą. Smażyć niewielkie placuszki na oliwie. Podawać z owocami.', 45),
(6, 'Twaróg z owocami', 'Lunch', 'Twaróg chudy 100g,</br>\r\npomarańcza,</br>\r\nowoce jagodowe 250g.', 274, 23, 2, 27, 'Wymieszać wszystkie składniki.', 3),
(7, 'Makaron z kurczakiem, bobem i pomidorkami', 'Obiad', 'Makaron 50g,</br>\r\nbób 100g,</br>\r\npierś z kurczaka 100g,</br>\r\npomidorki koktajlowe 200g,</br>\r\nczosnek 1 ząbek,</br>\r\nskórka z połowy cytryny,</br>\r\noliwa 5g,</br>\r\npłatki drożdżowe 10g.', 588, 41, 9, 61, 'Makaron ugotować al dente. Posiekać czosnek i podsmażyć na oliwie ze skórką cytrynową. Dodać bób oraz pokrojone pomidorki. Mięso przyprawić i podsmażyć pokrojone w kawałki. Wymieszać wszystkie składniki. Posypać płatkami i ponownie wymieszać.', 60),
(8, 'Krem ze świeżych pomidorów', 'Kolacja', 'Pomidory świeże 400g,</br>\r\ncebula 50g,</br>\r\nczosnek 1 ząbek,</br>\r\noliwa 10g,</br>\r\nmozzarella light 60g,</br>\r\nchleb żytni 30g (1 kromka),</br>\r\nnatka pietruszki 15g (opcjonalnie).', 360, 19, 17, 30, 'Pomidory przekroić i z cebulą polać oliwą-piec piekarniku przez ok. 15 min. Pod koniec dołożyć czosnek. Po wyjęciu warzyw – zblendować całość na gładki krem. Doprawić pieprzem, odrobiną soli oraz ostrą papryką. Przełożyć do miseczki, na wierzchu ułożyć plastry mozzarelli oraz bazylię lub natkę pietruszki.', 35),
(9, 'Owsianka z jagodami', 'Śniadanie', 'Woda 1 szklanka Owoce 50g,</br>\r\nwiórki kokosowe łyżeczka,</br>\r\npłatki owsiane  5 łyżek.', 420, 10, 12, 52, '1. Płatki owsiane zalej wodą. Dodaj wiórki kokosowe i wymieszaj.</br>\r\n2. Owsiankę wylej do miseczki, posyp owocami. ', 15),
(10, 'Czerwone smoothie', 'Lunch', 'Truskawki, mrożone - 100g,</br>\r\nmaliny, mrożone - 60g,</br>\r\nbanan 1 sztuka,</br>\r\norzechy nerkowca 15g,</br>\r\nwoda 1/2 szklanki.', 380, 10, 12, 52, 'Zblenduj składniki. Posyp ulubionymi owocami.', 10),
(11, 'Makaron penne z awokado i indykiem', 'Obiad', 'Makaron penne 1 szklanka,</br>\r\nawokado połowa,</br>\r\npolędwiczka z indyka,</br>\r\nbazylia,</br>\r\npietruszka', 530, 27, 47, 92, '1. Rozdrobnij dojrzałe awokado widelcem na gładką masę. Dopraw solą i przyprawami wg uznania.</br>\r\n2. Ugotuj makaron.</br>\r\n3. Pokrojone mięso obtocz w przyprawie curry i usmaż na patelni grillowej.</br>\r\n4. Makaron wymieszaj z awokado, mięsem. Posyp posiekaną pietruszką.</br>\r\n5. Udekoruj bazylią. ', 60),
(12, 'Bakłażan zapiekany z pomidorem', 'Kolacja', 'Pomidory z puszki (krojone) - 200g,</br>\r\noliwa z oliwek łyżka,</br>\r\nbakłażan,</br>\r\npomidor 2 sztuki.', 588, 41, 9, 61, '1. Warzywa pokrój w plastry.</br>\r\n2. Ułóż wieżyczki z warzyw w naczyniu żaroodpornym.</br>\r\n3. Pomidory z puszki zmiksuj i zalej nimi wieżyczki.</br>\r\n4. Piecz w piekarniku około 20-30 minut w 180 stopniach C. ', 45);

-- --------------------------------------------------------

--
-- Table structure for table `Trening`
--

CREATE TABLE `Trening` (
  `idTrening` int(11) NOT NULL,
  `cel` tinyint(1) NOT NULL COMMENT '1: +, 0: -',
  `poniedzialek` varchar(512) COLLATE utf8_polish_ci NOT NULL,
  `wtorek` varchar(512) COLLATE utf8_polish_ci NOT NULL,
  `sroda` varchar(512) COLLATE utf8_polish_ci NOT NULL,
  `czwartek` varchar(512) COLLATE utf8_polish_ci NOT NULL,
  `piatek` varchar(512) COLLATE utf8_polish_ci NOT NULL,
  `sobota` varchar(512) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `Trening`
--

INSERT INTO `Trening` (`idTrening`, `cel`, `poniedzialek`, `wtorek`, `sroda`, `czwartek`, `piatek`, `sobota`) VALUES
(1, 1, '3x6 Standing biceps curl,</br>\r\n3x6 Standing hammer curl,</br>\r\n3x6 Incline dumbbell press,</br>\r\n3x6 Dip.\r\n', '6x10 Lateral raises,</br>\r\n6x10 Shrug,</br>\r\n3x8 Forearm curls,</br>\r\n3x8 Squat,</br>\r\n3x8 Calf raises', '6x8 Dumbbell rows,</br>\r\n3x8 Pullups,</br>\r\n6x8 Skull crushers', '6x10 Lateral raises,</br>\r\n6x10 Shrug,</br>\r\n3x8 Forearm curls,</br>\r\n3x8 Squat,</br>\r\n3x8 Calf raises,</br>', '3x6 Standing biceps curl,</br>\r\n3x6 Standing hammer curl,</br>\r\n3x6 Incline dumbbell press,</br>\r\n3x6 Dip\r\n', '6x8 Dumbbell rows,</br>\r\n3x8 Pullups,</br>\r\n6x8 Skull crushers');

-- --------------------------------------------------------

--
-- Table structure for table `Uzytkownik`
--

CREATE TABLE `Uzytkownik` (
  `idUzytkownik` int(11) NOT NULL,
  `imieNazwisko` varchar(128) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(32) COLLATE utf8_polish_ci NOT NULL,
  `haslo` varchar(256) COLLATE utf8_polish_ci NOT NULL,
  `waga` int(11) NOT NULL,
  `wzrost` int(11) NOT NULL,
  `bmi` int(11) NOT NULL,
  `dieta` int(3) NOT NULL COMMENT '1/2/3',
  `trening` int(11) NOT NULL COMMENT '1: +, 0: -'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `Uzytkownik`
--

INSERT INTO `Uzytkownik` (`idUzytkownik`, `imieNazwisko`, `email`, `haslo`, `waga`, `wzrost`, `bmi`, `dieta`, `trening`) VALUES
(1, 'Jan Kowalski', 'jan@mail.com', '$2y$10$6534zquCLww6tBSHLk9uWuIvoEUG2dWwzCMQqp4YbAf6OIyh7u9qq', 52, 156, 21, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Dieta`
--
ALTER TABLE `Dieta`
  ADD PRIMARY KEY (`idDieta`),
  ADD KEY `poniedzialek` (`poniedzialek`),
  ADD KEY `wtorek` (`wtorek`),
  ADD KEY `sroda` (`sroda`),
  ADD KEY `czwartek` (`czwartek`),
  ADD KEY `piatek` (`piatek`),
  ADD KEY `sobota` (`sobota`),
  ADD KEY `niedziela` (`niedziela`);

--
-- Indexes for table `DietaDzien`
--
ALTER TABLE `DietaDzien`
  ADD PRIMARY KEY (`idDzien`),
  ADD KEY `kolacja` (`kolacja`),
  ADD KEY `lunch` (`lunch`),
  ADD KEY `obiad` (`obiad`),
  ADD KEY `sniadanie` (`sniadanie`);

--
-- Indexes for table `Posilek`
--
ALTER TABLE `Posilek`
  ADD PRIMARY KEY (`idPosilek`);

--
-- Indexes for table `Trening`
--
ALTER TABLE `Trening`
  ADD PRIMARY KEY (`idTrening`);

--
-- Indexes for table `Uzytkownik`
--
ALTER TABLE `Uzytkownik`
  ADD PRIMARY KEY (`idUzytkownik`),
  ADD KEY `dieta` (`dieta`),
  ADD KEY `trening` (`trening`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Dieta`
--
ALTER TABLE `Dieta`
  MODIFY `idDieta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `DietaDzien`
--
ALTER TABLE `DietaDzien`
  MODIFY `idDzien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Posilek`
--
ALTER TABLE `Posilek`
  MODIFY `idPosilek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `Trening`
--
ALTER TABLE `Trening`
  MODIFY `idTrening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Uzytkownik`
--
ALTER TABLE `Uzytkownik`
  MODIFY `idUzytkownik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Dieta`
--
ALTER TABLE `Dieta`
  ADD CONSTRAINT `Dieta_ibfk_1` FOREIGN KEY (`poniedzialek`) REFERENCES `DietaDzien` (`idDzien`),
  ADD CONSTRAINT `Dieta_ibfk_2` FOREIGN KEY (`wtorek`) REFERENCES `DietaDzien` (`idDzien`),
  ADD CONSTRAINT `Dieta_ibfk_3` FOREIGN KEY (`sroda`) REFERENCES `DietaDzien` (`idDzien`),
  ADD CONSTRAINT `Dieta_ibfk_4` FOREIGN KEY (`czwartek`) REFERENCES `DietaDzien` (`idDzien`),
  ADD CONSTRAINT `Dieta_ibfk_5` FOREIGN KEY (`piatek`) REFERENCES `DietaDzien` (`idDzien`),
  ADD CONSTRAINT `Dieta_ibfk_6` FOREIGN KEY (`sobota`) REFERENCES `DietaDzien` (`idDzien`),
  ADD CONSTRAINT `Dieta_ibfk_7` FOREIGN KEY (`niedziela`) REFERENCES `DietaDzien` (`idDzien`);

--
-- Constraints for table `DietaDzien`
--
ALTER TABLE `DietaDzien`
  ADD CONSTRAINT `DietaDzien_ibfk_1` FOREIGN KEY (`kolacja`) REFERENCES `Posilek` (`idPosilek`),
  ADD CONSTRAINT `DietaDzien_ibfk_2` FOREIGN KEY (`lunch`) REFERENCES `Posilek` (`idPosilek`),
  ADD CONSTRAINT `DietaDzien_ibfk_3` FOREIGN KEY (`obiad`) REFERENCES `Posilek` (`idPosilek`),
  ADD CONSTRAINT `DietaDzien_ibfk_4` FOREIGN KEY (`sniadanie`) REFERENCES `Posilek` (`idPosilek`);

--
-- Constraints for table `Uzytkownik`
--
ALTER TABLE `Uzytkownik`
  ADD CONSTRAINT `Uzytkownik_ibfk_1` FOREIGN KEY (`dieta`) REFERENCES `Dieta` (`idDieta`),
  ADD CONSTRAINT `Uzytkownik_ibfk_2` FOREIGN KEY (`trening`) REFERENCES `Trening` (`idTrening`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
