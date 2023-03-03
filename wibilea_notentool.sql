-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 02. Mrz 2023 um 10:25
-- Server-Version: 10.4.27-MariaDB
-- PHP-Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `wibilea_notentool`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tblausbilder`
--

CREATE TABLE `tblausbilder` (
  `pkAusbilder` int(11) NOT NULL,
  `fldBenutzername` varchar(30) NOT NULL,
  `fkLehrberufA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `tblausbilder`
--

INSERT INTO `tblausbilder` (`pkAusbilder`, `fldBenutzername`, `fkLehrberufA`) VALUES
(1, 'Ausbilder_Informatik', 8);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tblfach`
--

CREATE TABLE `tblfach` (
  `pkFach` int(11) NOT NULL,
  `fldFachname` varchar(30) NOT NULL,
  `fldEnabledB` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `tblfach`
--

INSERT INTO `tblfach` (`pkFach`, `fldFachname`, `fldEnabledB`) VALUES
(24, 'Französisch', 1),
(25, 'Deutsch', 1),
(26, 'Englisch', 1),
(27, 'Mathematik', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tblfachlehrberuf`
--

CREATE TABLE `tblfachlehrberuf` (
  `pkFachLehrberuf` int(11) NOT NULL,
  `fkLehrberufC` int(11) NOT NULL,
  `fkFachB` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `tblfachlehrberuf`
--

INSERT INTO `tblfachlehrberuf` (`pkFachLehrberuf`, `fkLehrberufC`, `fkFachB`) VALUES
(18, 8, 24),
(19, 9, 24),
(20, 8, 25),
(21, 9, 26),
(22, 8, 27);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbllehrberuf`
--

CREATE TABLE `tbllehrberuf` (
  `pkLehrberuf` int(11) NOT NULL,
  `fldBerufsbezeichnung` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `tbllehrberuf`
--

INSERT INTO `tbllehrberuf` (`pkLehrberuf`, `fldBerufsbezeichnung`) VALUES
(8, 'Informatiker'),
(9, 'Mediamatiker'),
(10, 'Polymechaniker'),
(11, 'Koch');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbllernende`
--

CREATE TABLE `tbllernende` (
  `pkLernende` int(11) NOT NULL,
  `fldVorname` varchar(40) NOT NULL,
  `fldNachname` varchar(40) NOT NULL,
  `fldEmail` varchar(40) NOT NULL,
  `fldLehrjahr` year(4) NOT NULL,
  `fkLehrberufB` int(11) NOT NULL,
  `fldEnabledA` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `tbllernende`
--

INSERT INTO `tbllernende` (`pkLernende`, `fldVorname`, `fldNachname`, `fldEmail`, `fldLehrjahr`, `fkLehrberufB`, `fldEnabledA`) VALUES
(1, 'Noel', 'Wangler', 'noel.wangler@wibilea.ch', 2019, 8, 1),
(2, 'Andri', 'Kummer', 'andri.kummer@wibilea.ch', 2019, 9, 1),
(3, 'Elijah', 'Reuter', 'elijah.reuter@wibilea.ch', 2021, 8, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tblnoten`
--

CREATE TABLE `tblnoten` (
  `pkNoten` int(11) NOT NULL,
  `fkLernende` int(11) NOT NULL,
  `fkFachA` int(11) NOT NULL,
  `fldThema` varchar(40) NOT NULL,
  `fldDatum` date DEFAULT NULL,
  `fldTimestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fldNote` int(11) NOT NULL,
  `fldBegruendung` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `tblnoten`
--

INSERT INTO `tblnoten` (`pkNoten`, `fkLernende`, `fkFachA`, `fldThema`, `fldDatum`, `fldTimestamp`, `fldNote`, `fldBegruendung`) VALUES
(14, 1, 24, 'Aufsatz', '2023-03-01', '2023-03-01 14:05:23', 4, NULL),
(16, 1, 24, 'Voci', '2023-02-12', '2023-03-01 14:19:24', 6, NULL),
(17, 1, 24, 'Voci', '2023-02-12', '2023-03-01 14:22:04', 6, NULL),
(18, 1, 24, 'Voci', '2023-02-12', '2023-03-01 14:23:11', 6, NULL),
(19, 1, 24, 'Test', '2023-03-01', '2023-03-01 14:24:32', 3, NULL),
(20, 1, 27, 'Analysis', '2023-03-02', '2023-03-02 06:48:59', 3, NULL),
(21, 1, 25, 'Erörterung', '2023-03-02', '2023-03-02 06:51:29', 5, NULL),
(22, 1, 27, 'Geometrie', '2023-03-02', '2023-03-02 09:19:59', 6, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tblsuperadmin`
--

CREATE TABLE `tblsuperadmin` (
  `pkSuperadmin` int(11) NOT NULL,
  `fldBenutzername` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `tblsuperadmin`
--

INSERT INTO `tblsuperadmin` (`pkSuperadmin`, `fldBenutzername`) VALUES
(1, 'TestAdmin');

-- --------------------------------------------------------

--
-- Stellvertreter-Struktur des Views `viewausbilderberuf`
-- (Siehe unten für die tatsächliche Ansicht)
--
CREATE TABLE `viewausbilderberuf` (
`pkAusbilder` int(11)
,`fldBenutzername` varchar(30)
,`fkLehrberufA` int(11)
,`pkLehrberuf` int(11)
,`fldBerufsbezeichnung` varchar(40)
);

-- --------------------------------------------------------

--
-- Stellvertreter-Struktur des Views `viewfachlehrberuf`
-- (Siehe unten für die tatsächliche Ansicht)
--
CREATE TABLE `viewfachlehrberuf` (
`pkFach` int(11)
,`fldFachname` varchar(30)
,`fldEnabledB` tinyint(1)
,`pkFachLehrberuf` int(11)
,`fkLehrberufC` int(11)
,`fkFachB` int(11)
,`pkLehrberuf` int(11)
,`fldBerufsbezeichnung` varchar(40)
);

-- --------------------------------------------------------

--
-- Stellvertreter-Struktur des Views `viewfachnote`
-- (Siehe unten für die tatsächliche Ansicht)
--
CREATE TABLE `viewfachnote` (
`pkNoten` int(11)
,`fkLernende` int(11)
,`fkFachA` int(11)
,`fldThema` varchar(40)
,`fldDatum` date
,`fldTimestamp` timestamp
,`fldNote` int(11)
,`fldBegruendung` varchar(100)
,`pkFach` int(11)
,`fldFachname` varchar(30)
,`fldEnabledB` tinyint(1)
);

-- --------------------------------------------------------

--
-- Stellvertreter-Struktur des Views `viewlernendeberuf`
-- (Siehe unten für die tatsächliche Ansicht)
--
CREATE TABLE `viewlernendeberuf` (
`pkLernende` int(11)
,`fldVorname` varchar(40)
,`fldNachname` varchar(40)
,`fldEmail` varchar(40)
,`fldLehrjahr` year(4)
,`fkLehrberufB` int(11)
,`fldEnabledA` tinyint(1)
,`pkLehrberuf` int(11)
,`fldBerufsbezeichnung` varchar(40)
);

-- --------------------------------------------------------

--
-- Stellvertreter-Struktur des Views `viewlernendefachlehrberuf`
-- (Siehe unten für die tatsächliche Ansicht)
--
CREATE TABLE `viewlernendefachlehrberuf` (
`pkLernende` int(11)
,`fldVorname` varchar(40)
,`fldNachname` varchar(40)
,`fldEmail` varchar(40)
,`fldLehrjahr` year(4)
,`fkLehrberufB` int(11)
,`fldEnabledA` tinyint(1)
,`pkFach` int(11)
,`fldFachname` varchar(30)
,`fldEnabledB` tinyint(1)
,`pkFachLehrberuf` int(11)
,`fkLehrberufC` int(11)
,`fkFachB` int(11)
,`pkLehrberuf` int(11)
,`fldBerufsbezeichnung` varchar(40)
);

-- --------------------------------------------------------

--
-- Struktur des Views `viewausbilderberuf`
--
DROP TABLE IF EXISTS `viewausbilderberuf`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewausbilderberuf`  AS SELECT `tblausbilder`.`pkAusbilder` AS `pkAusbilder`, `tblausbilder`.`fldBenutzername` AS `fldBenutzername`, `tblausbilder`.`fkLehrberufA` AS `fkLehrberufA`, `tbllehrberuf`.`pkLehrberuf` AS `pkLehrberuf`, `tbllehrberuf`.`fldBerufsbezeichnung` AS `fldBerufsbezeichnung` FROM (`tblausbilder` join `tbllehrberuf` on(`tblausbilder`.`fkLehrberufA` = `tbllehrberuf`.`pkLehrberuf`))  ;

-- --------------------------------------------------------

--
-- Struktur des Views `viewfachlehrberuf`
--
DROP TABLE IF EXISTS `viewfachlehrberuf`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewfachlehrberuf`  AS SELECT `tblfach`.`pkFach` AS `pkFach`, `tblfach`.`fldFachname` AS `fldFachname`, `tblfach`.`fldEnabledB` AS `fldEnabledB`, `tblfachlehrberuf`.`pkFachLehrberuf` AS `pkFachLehrberuf`, `tblfachlehrberuf`.`fkLehrberufC` AS `fkLehrberufC`, `tblfachlehrberuf`.`fkFachB` AS `fkFachB`, `tbllehrberuf`.`pkLehrberuf` AS `pkLehrberuf`, `tbllehrberuf`.`fldBerufsbezeichnung` AS `fldBerufsbezeichnung` FROM ((`tblfach` join `tblfachlehrberuf` on(`tblfach`.`pkFach` = `tblfachlehrberuf`.`fkFachB`)) join `tbllehrberuf` on(`tblfachlehrberuf`.`fkLehrberufC` = `tbllehrberuf`.`pkLehrberuf`))  ;

-- --------------------------------------------------------

--
-- Struktur des Views `viewfachnote`
--
DROP TABLE IF EXISTS `viewfachnote`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewfachnote`  AS SELECT `tblnoten`.`pkNoten` AS `pkNoten`, `tblnoten`.`fkLernende` AS `fkLernende`, `tblnoten`.`fkFachA` AS `fkFachA`, `tblnoten`.`fldThema` AS `fldThema`, `tblnoten`.`fldDatum` AS `fldDatum`, `tblnoten`.`fldTimestamp` AS `fldTimestamp`, `tblnoten`.`fldNote` AS `fldNote`, `tblnoten`.`fldBegruendung` AS `fldBegruendung`, `tblfach`.`pkFach` AS `pkFach`, `tblfach`.`fldFachname` AS `fldFachname`, `tblfach`.`fldEnabledB` AS `fldEnabledB` FROM (`tblnoten` join `tblfach` on(`tblnoten`.`fkFachA` = `tblfach`.`pkFach`))  ;

-- --------------------------------------------------------

--
-- Struktur des Views `viewlernendeberuf`
--
DROP TABLE IF EXISTS `viewlernendeberuf`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewlernendeberuf`  AS SELECT `tbllernende`.`pkLernende` AS `pkLernende`, `tbllernende`.`fldVorname` AS `fldVorname`, `tbllernende`.`fldNachname` AS `fldNachname`, `tbllernende`.`fldEmail` AS `fldEmail`, `tbllernende`.`fldLehrjahr` AS `fldLehrjahr`, `tbllernende`.`fkLehrberufB` AS `fkLehrberufB`, `tbllernende`.`fldEnabledA` AS `fldEnabledA`, `tbllehrberuf`.`pkLehrberuf` AS `pkLehrberuf`, `tbllehrberuf`.`fldBerufsbezeichnung` AS `fldBerufsbezeichnung` FROM (`tbllernende` join `tbllehrberuf` on(`tbllernende`.`fkLehrberufB` = `tbllehrberuf`.`pkLehrberuf`))  ;

-- --------------------------------------------------------

--
-- Struktur des Views `viewlernendefachlehrberuf`
--
DROP TABLE IF EXISTS `viewlernendefachlehrberuf`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewlernendefachlehrberuf`  AS SELECT `tbllernende`.`pkLernende` AS `pkLernende`, `tbllernende`.`fldVorname` AS `fldVorname`, `tbllernende`.`fldNachname` AS `fldNachname`, `tbllernende`.`fldEmail` AS `fldEmail`, `tbllernende`.`fldLehrjahr` AS `fldLehrjahr`, `tbllernende`.`fkLehrberufB` AS `fkLehrberufB`, `tbllernende`.`fldEnabledA` AS `fldEnabledA`, `viewfachlehrberuf`.`pkFach` AS `pkFach`, `viewfachlehrberuf`.`fldFachname` AS `fldFachname`, `viewfachlehrberuf`.`fldEnabledB` AS `fldEnabledB`, `viewfachlehrberuf`.`pkFachLehrberuf` AS `pkFachLehrberuf`, `viewfachlehrberuf`.`fkLehrberufC` AS `fkLehrberufC`, `viewfachlehrberuf`.`fkFachB` AS `fkFachB`, `viewfachlehrberuf`.`pkLehrberuf` AS `pkLehrberuf`, `viewfachlehrberuf`.`fldBerufsbezeichnung` AS `fldBerufsbezeichnung` FROM (`tbllernende` join `viewfachlehrberuf` on(`tbllernende`.`fkLehrberufB` = `viewfachlehrberuf`.`pkLehrberuf`))  ;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `tblausbilder`
--
ALTER TABLE `tblausbilder`
  ADD PRIMARY KEY (`pkAusbilder`),
  ADD KEY `fkLehrberuf` (`fkLehrberufA`);

--
-- Indizes für die Tabelle `tblfach`
--
ALTER TABLE `tblfach`
  ADD PRIMARY KEY (`pkFach`);

--
-- Indizes für die Tabelle `tblfachlehrberuf`
--
ALTER TABLE `tblfachlehrberuf`
  ADD PRIMARY KEY (`pkFachLehrberuf`),
  ADD KEY `fkLehrberuf` (`fkLehrberufC`),
  ADD KEY `fkFach` (`fkFachB`);

--
-- Indizes für die Tabelle `tbllehrberuf`
--
ALTER TABLE `tbllehrberuf`
  ADD PRIMARY KEY (`pkLehrberuf`);

--
-- Indizes für die Tabelle `tbllernende`
--
ALTER TABLE `tbllernende`
  ADD PRIMARY KEY (`pkLernende`),
  ADD KEY `fkLehrberuf` (`fkLehrberufB`);

--
-- Indizes für die Tabelle `tblnoten`
--
ALTER TABLE `tblnoten`
  ADD PRIMARY KEY (`pkNoten`),
  ADD KEY `fkFach` (`fkFachA`),
  ADD KEY `fkLernende` (`fkLernende`);

--
-- Indizes für die Tabelle `tblsuperadmin`
--
ALTER TABLE `tblsuperadmin`
  ADD PRIMARY KEY (`pkSuperadmin`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `tblausbilder`
--
ALTER TABLE `tblausbilder`
  MODIFY `pkAusbilder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `tblfach`
--
ALTER TABLE `tblfach`
  MODIFY `pkFach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT für Tabelle `tblfachlehrberuf`
--
ALTER TABLE `tblfachlehrberuf`
  MODIFY `pkFachLehrberuf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT für Tabelle `tbllehrberuf`
--
ALTER TABLE `tbllehrberuf`
  MODIFY `pkLehrberuf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT für Tabelle `tbllernende`
--
ALTER TABLE `tbllernende`
  MODIFY `pkLernende` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `tblnoten`
--
ALTER TABLE `tblnoten`
  MODIFY `pkNoten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT für Tabelle `tblsuperadmin`
--
ALTER TABLE `tblsuperadmin`
  MODIFY `pkSuperadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `tblausbilder`
--
ALTER TABLE `tblausbilder`
  ADD CONSTRAINT `tblausbilder_ibfk_1` FOREIGN KEY (`fkLehrberufA`) REFERENCES `tbllehrberuf` (`pkLehrberuf`) ON UPDATE CASCADE;

--
-- Constraints der Tabelle `tblfachlehrberuf`
--
ALTER TABLE `tblfachlehrberuf`
  ADD CONSTRAINT `tblfachlehrberuf_ibfk_1` FOREIGN KEY (`fkLehrberufC`) REFERENCES `tbllehrberuf` (`pkLehrberuf`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tblfachlehrberuf_ibfk_2` FOREIGN KEY (`fkFachB`) REFERENCES `tblfach` (`pkFach`) ON UPDATE CASCADE;

--
-- Constraints der Tabelle `tbllernende`
--
ALTER TABLE `tbllernende`
  ADD CONSTRAINT `tbllernende_ibfk_1` FOREIGN KEY (`fkLehrberufB`) REFERENCES `tbllehrberuf` (`pkLehrberuf`) ON UPDATE CASCADE;

--
-- Constraints der Tabelle `tblnoten`
--
ALTER TABLE `tblnoten`
  ADD CONSTRAINT `tblnoten_ibfk_1` FOREIGN KEY (`fkFachA`) REFERENCES `tblfach` (`pkFach`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tblnoten_ibfk_2` FOREIGN KEY (`fkLernende`) REFERENCES `tbllernende` (`pkLernende`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
