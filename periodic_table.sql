-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2025 at 12:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `periodic_table`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `category_id`, `name`) VALUES
(1, 1, 'Computer Engineering'),
(2, 1, 'Mechanical Engineering'),
(3, 1, 'Civil Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `branch_id`, `name`) VALUES
(1, 1, 'B.Tech CSE'),
(2, 1, 'AI & Machine Learning'),
(3, 1, 'Data Science'),
(4, 2, 'Thermal Engineering'),
(5, 2, 'Automobile Engineering'),
(6, 3, 'Structural Engineering'),
(7, 3, 'Environmental Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `elements`
--

CREATE TABLE `elements` (
  `id` int(11) NOT NULL,
  `atomic_number` int(11) NOT NULL,
  `symbol` varchar(5) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `atomic_weight` varchar(20) DEFAULT NULL,
  `group_no` int(11) DEFAULT NULL,
  `period_no` int(11) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `discovered_by` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `strength` text DEFAULT NULL,
  `weakness` text DEFAULT NULL,
  `opportunity` text DEFAULT NULL,
  `threat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `elements`
--

INSERT INTO `elements` (`id`, `atomic_number`, `symbol`, `name`, `atomic_weight`, `group_no`, `period_no`, `category`, `state`, `discovered_by`, `description`, `strength`, `weakness`, `opportunity`, `threat`) VALUES
(1, 1, 'H', 'Hydrogen', '1.008', 1, 1, 'Nonmetal', 'Gas', 'Henry Cavendish', 'Lightest element', 'Lightest element, high energy content, clean fuel', 'Highly flammable, difficult to store', 'Future fuel cells and clean energy', 'Explosion risk and storage challenges'),
(2, 2, 'He', 'Helium', '4.0026', 18, 1, 'Noble Gas', 'Gas', 'Pierre Janssen', 'Used in balloons', NULL, NULL, NULL, NULL),
(3, 3, 'Li', 'Lithium', '6.94', 1, 2, 'Alkali Metal', 'Solid', 'Johan Arfvedson', 'Used in batteries', NULL, NULL, NULL, NULL),
(4, 4, 'Be', 'Beryllium', '9.0122', 2, 2, 'Alkaline Earth Metal', 'Solid', 'Louis Nicolas Vauquelin', 'Hard metal', NULL, NULL, NULL, NULL),
(5, 5, 'B', 'Boron', '10.81', 13, 2, 'Metalloid', 'Solid', 'Joseph Gay-Lussac', 'Used in glass', NULL, NULL, NULL, NULL),
(6, 6, 'C', 'Carbon', '12.011', 14, 2, 'Nonmetal', 'Solid', 'Ancient', 'Basis of life', NULL, NULL, NULL, NULL),
(7, 7, 'N', 'Nitrogen', '14.007', 15, 2, 'Nonmetal', 'Gas', 'Daniel Rutherford', '78% of air', NULL, NULL, NULL, NULL),
(8, 8, 'O', 'Oxygen', '15.999', 16, 2, 'Nonmetal', 'Gas', 'Joseph Priestley', 'Essential for life', 'Essential for respiration and combustion', 'Highly reactive causing oxidation', 'Medical and industrial use', 'Fire hazard when concentrated'),
(9, 9, 'F', 'Fluorine', '18.998', 17, 2, 'Halogen', 'Gas', 'Henri Moissan', 'Highly reactive', NULL, NULL, NULL, NULL),
(10, 10, 'Ne', 'Neon', '20.180', 18, 2, 'Noble Gas', 'Gas', 'William Ramsay', 'Used in lights', NULL, NULL, NULL, NULL),
(11, 11, 'Na', 'Sodium', '22.99', 1, 3, 'Alkali Metal', 'Solid', 'Humphry Davy', 'Used in salt', NULL, NULL, NULL, NULL),
(12, 12, 'Mg', 'Magnesium', '24.305', 2, 3, 'Alkaline Earth Metal', 'Solid', 'Humphry Davy', 'Used in fireworks', NULL, NULL, NULL, NULL),
(13, 13, 'Al', 'Aluminium', '26.982', 13, 3, 'Post-Transition Metal', 'Solid', 'Hans Christian Ørsted', 'Light metal', NULL, NULL, NULL, NULL),
(14, 14, 'Si', 'Silicon', '28.085', 14, 3, 'Metalloid', 'Solid', 'Jöns Jacob Berzelius', 'Used in chips', NULL, NULL, NULL, NULL),
(15, 15, 'P', 'Phosphorus', '30.974', 15, 3, 'Nonmetal', 'Solid', 'Hennig Brand', 'Used in fertilizers', NULL, NULL, NULL, NULL),
(16, 16, 'S', 'Sulfur', '32.06', 16, 3, 'Nonmetal', 'Solid', 'Ancient', 'Used in matches', NULL, NULL, NULL, NULL),
(17, 17, 'Cl', 'Chlorine', '35.45', 17, 3, 'Halogen', 'Gas', 'Carl Wilhelm Scheele', 'Used in water treatment', NULL, NULL, NULL, NULL),
(18, 18, 'Ar', 'Argon', '39.948', 18, 3, 'Noble Gas', 'Gas', 'Lord Rayleigh', 'Used in bulbs', NULL, NULL, NULL, NULL),
(19, 19, 'K', 'Potassium', '39.098', 1, 4, 'Alkali Metal', 'Solid', 'Humphry Davy', 'Highly reactive', NULL, NULL, NULL, NULL),
(20, 20, 'Ca', 'Calcium', '40.078', 2, 4, 'Alkaline Earth Metal', 'Solid', 'Humphry Davy', 'Important for bones', NULL, NULL, NULL, NULL),
(21, 21, 'Sc', 'Scandium', '44.956', 3, 4, 'Transition Metal', 'Solid', 'Lars Nilson', 'Rare metal', NULL, NULL, NULL, NULL),
(22, 22, 'Ti', 'Titanium', '47.867', 4, 4, 'Transition Metal', 'Solid', 'William Gregor', 'Strong metal', NULL, NULL, NULL, NULL),
(23, 23, 'V', 'Vanadium', '50.942', 5, 4, 'Transition Metal', 'Solid', 'Andrés del Río', 'Used in steel', NULL, NULL, NULL, NULL),
(24, 24, 'Cr', 'Chromium', '51.996', 6, 4, 'Transition Metal', 'Solid', 'Louis Nicolas Vauquelin', 'Corrosion resistant', NULL, NULL, NULL, NULL),
(25, 25, 'Mn', 'Manganese', '54.938', 7, 4, 'Transition Metal', 'Solid', 'Johan Gahn', 'Used in steel', NULL, NULL, NULL, NULL),
(26, 26, 'Fe', 'Iron', '55.845', 8, 4, 'Transition Metal', 'Solid', 'Ancient', 'Used in construction', 'Strong, durable, widely available', 'Rusts easily', 'Construction and manufacturing', 'Corrosion and environmental damage'),
(27, 27, 'Co', 'Cobalt', '58.933', 9, 4, 'Transition Metal', 'Solid', 'Georg Brandt', 'Used in batteries', NULL, NULL, NULL, NULL),
(28, 28, 'Ni', 'Nickel', '58.693', 10, 4, 'Transition Metal', 'Solid', 'Axel Cronstedt', 'Used in coins', NULL, NULL, NULL, NULL),
(29, 29, 'Cu', 'Copper', '63.546', 11, 4, 'Transition Metal', 'Solid', 'Ancient', 'Used in wiring', NULL, NULL, NULL, NULL),
(30, 30, 'Zn', 'Zinc', '65.38', 12, 4, 'Transition Metal', 'Solid', 'Andreas Marggraf', 'Used for galvanizing', NULL, NULL, NULL, NULL),
(31, 31, 'Ga', 'Gallium', '69.723', 13, 4, 'Post-Transition Metal', 'Solid', 'Paul Emile Lecoq', 'Melts in hand', NULL, NULL, NULL, NULL),
(32, 32, 'Ge', 'Germanium', '72.63', 14, 4, 'Metalloid', 'Solid', 'Clemens Winkler', 'Semiconductor', NULL, NULL, NULL, NULL),
(33, 33, 'As', 'Arsenic', '74.922', 15, 4, 'Metalloid', 'Solid', 'Albertus Magnus', 'Poisonous', NULL, NULL, NULL, NULL),
(34, 34, 'Se', 'Selenium', '78.971', 16, 4, 'Nonmetal', 'Solid', 'Jöns Jacob Berzelius', 'Used in electronics', NULL, NULL, NULL, NULL),
(35, 35, 'Br', 'Bromine', '79.904', 17, 4, 'Halogen', 'Liquid', 'Antoine Balard', 'Only liquid nonmetal', NULL, NULL, NULL, NULL),
(36, 36, 'Kr', 'Krypton', '83.798', 18, 4, 'Noble Gas', 'Gas', 'William Ramsay', 'Used in lighting', NULL, NULL, NULL, NULL),
(37, 37, 'Rb', 'Rubidium', '85.468', 1, 5, 'Alkali Metal', 'Solid', 'Robert Bunsen', 'Highly reactive metal', NULL, NULL, NULL, NULL),
(38, 38, 'Sr', 'Strontium', '87.62', 2, 5, 'Alkaline Earth Metal', 'Solid', 'William Cruickshank', 'Used in fireworks', NULL, NULL, NULL, NULL),
(39, 39, 'Y', 'Yttrium', '88.906', 3, 5, 'Transition Metal', 'Solid', 'Johan Gadolin', 'Used in LEDs', NULL, NULL, NULL, NULL),
(40, 40, 'Zr', 'Zirconium', '91.224', 4, 5, 'Transition Metal', 'Solid', 'Martin Heinrich Klaproth', 'Corrosion resistant', NULL, NULL, NULL, NULL),
(41, 41, 'Nb', 'Niobium', '92.906', 5, 5, 'Transition Metal', 'Solid', 'Charles Hatchett', 'Used in alloys', NULL, NULL, NULL, NULL),
(42, 42, 'Mo', 'Molybdenum', '95.95', 6, 5, 'Transition Metal', 'Solid', 'Carl Wilhelm Scheele', 'High melting point', NULL, NULL, NULL, NULL),
(43, 43, 'Tc', 'Technetium', '98', 7, 5, 'Transition Metal', 'Solid', 'Emilio Segrè', 'First artificial element', NULL, NULL, NULL, NULL),
(44, 44, 'Ru', 'Ruthenium', '101.07', 8, 5, 'Transition Metal', 'Solid', 'Karl Ernst Claus', 'Rare metal', NULL, NULL, NULL, NULL),
(45, 45, 'Rh', 'Rhodium', '102.91', 9, 5, 'Transition Metal', 'Solid', 'William Hyde Wollaston', 'Used in jewelry', NULL, NULL, NULL, NULL),
(46, 46, 'Pd', 'Palladium', '106.42', 10, 5, 'Transition Metal', 'Solid', 'William Hyde Wollaston', 'Catalyst metal', NULL, NULL, NULL, NULL),
(47, 47, 'Ag', 'Silver', '107.87', 11, 5, 'Transition Metal', 'Solid', 'Ancient', 'Precious metal', NULL, NULL, NULL, NULL),
(48, 48, 'Cd', 'Cadmium', '112.41', 12, 5, 'Transition Metal', 'Solid', 'Karl Samuel Leberecht', 'Toxic metal', NULL, NULL, NULL, NULL),
(49, 49, 'In', 'Indium', '114.82', 13, 5, 'Post-Transition Metal', 'Solid', 'Ferdinand Reich', 'Used in screens', NULL, NULL, NULL, NULL),
(50, 50, 'Sn', 'Tin', '118.71', 14, 5, 'Post-Transition Metal', 'Solid', 'Ancient', 'Used in cans', NULL, NULL, NULL, NULL),
(51, 51, 'Sb', 'Antimony', '121.76', 15, 5, 'Metalloid', 'Solid', 'Ancient', 'Used in alloys', NULL, NULL, NULL, NULL),
(52, 52, 'Te', 'Tellurium', '127.60', 16, 5, 'Metalloid', 'Solid', 'Martin Heinrich Klaproth', 'Rare element', NULL, NULL, NULL, NULL),
(53, 53, 'I', 'Iodine', '126.90', 17, 5, 'Halogen', 'Solid', 'Bernard Courtois', 'Used in medicine', NULL, NULL, NULL, NULL),
(54, 54, 'Xe', 'Xenon', '131.29', 18, 5, 'Noble Gas', 'Gas', 'William Ramsay', 'Used in lamps', NULL, NULL, NULL, NULL),
(55, 55, 'Cs', 'Cesium', '132.91', 1, 6, 'Alkali Metal', 'Solid', 'Robert Bunsen', 'Very reactive', NULL, NULL, NULL, NULL),
(56, 56, 'Ba', 'Barium', '137.33', 2, 6, 'Alkaline Earth Metal', 'Solid', 'Carl Wilhelm Scheele', 'Used in X-rays', NULL, NULL, NULL, NULL),
(57, 57, 'La', 'Lanthanum', '138.91', 3, 6, 'Lanthanide', 'Solid', 'Carl Gustaf Mosander', 'Rare earth', NULL, NULL, NULL, NULL),
(58, 58, 'Ce', 'Cerium', '140.12', NULL, 6, 'Lanthanide', 'Solid', 'Martin Klaproth', 'Used in catalysts', NULL, NULL, NULL, NULL),
(59, 59, 'Pr', 'Praseodymium', '140.91', NULL, 6, 'Lanthanide', 'Solid', 'Carl Auer', 'Rare earth', NULL, NULL, NULL, NULL),
(60, 60, 'Nd', 'Neodymium', '144.24', NULL, 6, 'Lanthanide', 'Solid', 'Carl Auer', 'Used in magnets', NULL, NULL, NULL, NULL),
(61, 61, 'Pm', 'Promethium', '145', NULL, 6, 'Lanthanide', 'Solid', 'Jacob Marinsky', 'Radioactive', NULL, NULL, NULL, NULL),
(62, 62, 'Sm', 'Samarium', '150.36', NULL, 6, 'Lanthanide', 'Solid', 'Paul Émile Lecoq', 'Used in magnets', NULL, NULL, NULL, NULL),
(63, 63, 'Eu', 'Europium', '151.96', NULL, 6, 'Lanthanide', 'Solid', 'Eugène Demarçay', 'Used in LEDs', NULL, NULL, NULL, NULL),
(64, 64, 'Gd', 'Gadolinium', '157.25', NULL, 6, 'Lanthanide', 'Solid', 'Jean de Marignac', 'MRI contrast', NULL, NULL, NULL, NULL),
(65, 65, 'Tb', 'Terbium', '158.93', NULL, 6, 'Lanthanide', 'Solid', 'Carl Gustaf Mosander', 'Green phosphors', NULL, NULL, NULL, NULL),
(66, 66, 'Dy', 'Dysprosium', '162.50', NULL, 6, 'Lanthanide', 'Solid', 'Paul Émile Lecoq', 'Used in magnets', NULL, NULL, NULL, NULL),
(67, 67, 'Ho', 'Holmium', '164.93', NULL, 6, 'Lanthanide', 'Solid', 'Per Teodor Cleve', 'Rare earth', NULL, NULL, NULL, NULL),
(68, 68, 'Er', 'Erbium', '167.26', NULL, 6, 'Lanthanide', 'Solid', 'Carl Gustaf Mosander', 'Fiber optics', NULL, NULL, NULL, NULL),
(69, 69, 'Tm', 'Thulium', '168.93', NULL, 6, 'Lanthanide', 'Solid', 'Per Teodor Cleve', 'Rare metal', NULL, NULL, NULL, NULL),
(70, 70, 'Yb', 'Ytterbium', '173.05', NULL, 6, 'Lanthanide', 'Solid', 'Jean Charles Galissard', 'Laser uses', NULL, NULL, NULL, NULL),
(71, 71, 'Lu', 'Lutetium', '174.97', NULL, 6, 'Lanthanide', 'Solid', 'Georges Urbain', 'Hard rare earth', NULL, NULL, NULL, NULL),
(72, 72, 'Hf', 'Hafnium', '178.49', 4, 6, 'Transition Metal', 'Solid', 'Dirk Coster', 'Nuclear reactors', NULL, NULL, NULL, NULL),
(73, 73, 'Ta', 'Tantalum', '180.95', 5, 6, 'Transition Metal', 'Solid', 'Anders Ekeberg', 'Corrosion resistant', NULL, NULL, NULL, NULL),
(74, 74, 'W', 'Tungsten', '183.84', 6, 6, 'Transition Metal', 'Solid', 'Carl Wilhelm Scheele', 'Highest melting point', NULL, NULL, NULL, NULL),
(75, 75, 'Re', 'Rhenium', '186.21', 7, 6, 'Transition Metal', 'Solid', 'Walter Noddack', 'Jet engines', NULL, NULL, NULL, NULL),
(76, 76, 'Os', 'Osmium', '190.23', 8, 6, 'Transition Metal', 'Solid', 'Smithson Tennant', 'Densest metal', NULL, NULL, NULL, NULL),
(77, 77, 'Ir', 'Iridium', '192.22', 9, 6, 'Transition Metal', 'Solid', 'Smithson Tennant', 'Very corrosion resistant', NULL, NULL, NULL, NULL),
(78, 78, 'Pt', 'Platinum', '195.08', 10, 6, 'Transition Metal', 'Solid', 'Antonio de Ulloa', 'Precious metal', NULL, NULL, NULL, NULL),
(79, 79, 'Au', 'Gold', '196.97', 11, 6, 'Transition Metal', 'Solid', 'Ancient', 'Precious metal', NULL, NULL, NULL, NULL),
(80, 80, 'Hg', 'Mercury', '200.59', 12, 6, 'Transition Metal', 'Liquid', 'Ancient', 'Only liquid metal', NULL, NULL, NULL, NULL),
(81, 81, 'Tl', 'Thallium', '204.38', 13, 6, 'Post-Transition Metal', 'Solid', 'William Crookes', 'Toxic metal', NULL, NULL, NULL, NULL),
(82, 82, 'Pb', 'Lead', '207.2', 14, 6, 'Post-Transition Metal', 'Solid', 'Ancient', 'Heavy metal', NULL, NULL, NULL, NULL),
(83, 83, 'Bi', 'Bismuth', '208.98', 15, 6, 'Post-Transition Metal', 'Solid', 'Claude Geoffroy', 'Low toxicity', NULL, NULL, NULL, NULL),
(84, 84, 'Po', 'Polonium', '209', 16, 6, 'Metalloid', 'Solid', 'Marie Curie', 'Radioactive', NULL, NULL, NULL, NULL),
(85, 85, 'At', 'Astatine', '210', 17, 6, 'Halogen', 'Solid', 'Dale R. Corson', 'Rare radioactive', NULL, NULL, NULL, NULL),
(86, 86, 'Rn', 'Radon', '222', 18, 6, 'Noble Gas', 'Gas', 'Friedrich Dorn', 'Radioactive gas', NULL, NULL, NULL, NULL),
(87, 87, 'Fr', 'Francium', '223', 1, 7, 'Alkali Metal', 'Solid', 'Marguerite Perey', 'Highly radioactive', NULL, NULL, NULL, NULL),
(88, 88, 'Ra', 'Radium', '226', 2, 7, 'Alkaline Earth Metal', 'Solid', 'Marie Curie', 'Radioactive', NULL, NULL, NULL, NULL),
(89, 89, 'Ac', 'Actinium', '227', 3, 7, 'Actinide', 'Solid', 'André-Louis Debierne', 'Radioactive metal', NULL, NULL, NULL, NULL),
(90, 90, 'Th', 'Thorium', '232.04', NULL, 7, 'Actinide', 'Solid', 'Jöns Jakob Berzelius', 'Used in nuclear fuel', NULL, NULL, NULL, NULL),
(91, 91, 'Pa', 'Protactinium', '231.04', NULL, 7, 'Actinide', 'Solid', 'Kasimir Fajans', 'Rare radioactive', NULL, NULL, NULL, NULL),
(92, 92, 'U', 'Uranium', '238.03', NULL, 7, 'Actinide', 'Solid', 'Martin Heinrich Klaproth', 'Nuclear fuel', NULL, NULL, NULL, NULL),
(93, 93, 'Np', 'Neptunium', '237', NULL, 7, 'Actinide', 'Solid', 'Edwin McMillan', 'First transuranium', NULL, NULL, NULL, NULL),
(94, 94, 'Pu', 'Plutonium', '244', NULL, 7, 'Actinide', 'Solid', 'Glenn T. Seaborg', 'Nuclear weapons', NULL, NULL, NULL, NULL),
(95, 95, 'Am', 'Americium', '243', NULL, 7, 'Actinide', 'Solid', 'Glenn T. Seaborg', 'Smoke detectors', NULL, NULL, NULL, NULL),
(96, 96, 'Cm', 'Curium', '247', NULL, 7, 'Actinide', 'Solid', 'Marie Curie', 'Radioactive', NULL, NULL, NULL, NULL),
(97, 97, 'Bk', 'Berkelium', '247', NULL, 7, 'Actinide', 'Solid', 'Lawrence Berkeley Lab', 'Synthetic element', NULL, NULL, NULL, NULL),
(98, 98, 'Cf', 'Californium', '251', NULL, 7, 'Actinide', 'Solid', 'Lawrence Berkeley Lab', 'Neutron source', NULL, NULL, NULL, NULL),
(99, 99, 'Es', 'Einsteinium', '252', NULL, 7, 'Actinide', 'Solid', 'Lawrence Berkeley Lab', 'Named after Einstein', NULL, NULL, NULL, NULL),
(100, 100, 'Fm', 'Fermium', '257', NULL, 7, 'Actinide', 'Solid', 'Lawrence Berkeley Lab', 'Synthetic', NULL, NULL, NULL, NULL),
(101, 101, 'Md', 'Mendelevium', '258', NULL, 7, 'Actinide', 'Solid', 'Lawrence Berkeley Lab', 'Named after Mendeleev', NULL, NULL, NULL, NULL),
(102, 102, 'No', 'Nobelium', '259', NULL, 7, 'Actinide', 'Solid', 'Joint Institute', 'Named after Nobel', NULL, NULL, NULL, NULL),
(103, 103, 'Lr', 'Lawrencium', '266', NULL, 7, 'Actinide', 'Solid', 'Lawrence Berkeley Lab', 'Last actinide', NULL, NULL, NULL, NULL),
(104, 104, 'Rf', 'Rutherfordium', '267', 4, 7, 'Transition Metal', 'Solid', 'Joint Institute', 'Synthetic element', NULL, NULL, NULL, NULL),
(105, 105, 'Db', 'Dubnium', '268', 5, 7, 'Transition Metal', 'Solid', 'Joint Institute', 'Synthetic element', NULL, NULL, NULL, NULL),
(106, 106, 'Sg', 'Seaborgium', '269', 6, 7, 'Transition Metal', 'Solid', 'Lawrence Berkeley Lab', 'Named after Seaborg', NULL, NULL, NULL, NULL),
(107, 107, 'Bh', 'Bohrium', '270', 7, 7, 'Transition Metal', 'Solid', 'GSI Darmstadt', 'Synthetic element', NULL, NULL, NULL, NULL),
(108, 108, 'Hs', 'Hassium', '277', 8, 7, 'Transition Metal', 'Solid', 'GSI Darmstadt', 'Synthetic element', NULL, NULL, NULL, NULL),
(109, 109, 'Mt', 'Meitnerium', '278', 9, 7, 'Transition Metal', 'Solid', 'GSI Darmstadt', 'Named after Meitner', NULL, NULL, NULL, NULL),
(110, 110, 'Ds', 'Darmstadtium', '281', 10, 7, 'Transition Metal', 'Solid', 'GSI Darmstadt', 'Synthetic element', NULL, NULL, NULL, NULL),
(111, 111, 'Rg', 'Roentgenium', '282', 11, 7, 'Transition Metal', 'Solid', 'GSI Darmstadt', 'Named after Röntgen', NULL, NULL, NULL, NULL),
(112, 112, 'Cn', 'Copernicium', '285', 12, 7, 'Post-Transition Metal', 'Solid', 'GSI Darmstadt', 'Named after Copernicus', NULL, NULL, NULL, NULL),
(113, 113, 'Nh', 'Nihonium', '286', 13, 7, 'Post-Transition Metal', 'Solid', 'RIKEN', 'Named after Japan', NULL, NULL, NULL, NULL),
(114, 114, 'Fl', 'Flerovium', '289', 14, 7, 'Post-Transition Metal', 'Solid', 'Joint Institute', 'Superheavy element', NULL, NULL, NULL, NULL),
(115, 115, 'Mc', 'Moscovium', '290', 15, 7, 'Post-Transition Metal', 'Solid', 'Joint Institute', 'Named after Moscow', NULL, NULL, NULL, NULL),
(116, 116, 'Lv', 'Livermorium', '293', 16, 7, 'Post-Transition Metal', 'Solid', 'Joint Institute', 'Synthetic', NULL, NULL, NULL, NULL),
(117, 117, 'Ts', 'Tennessine', '294', 17, 7, 'Halogen', 'Solid', 'Joint Institute', 'Named after Tennessee', NULL, NULL, NULL, NULL),
(118, 118, 'Og', 'Oganesson', '294', 18, 7, 'Noble Gas', 'Gas', 'Joint Institute', 'Heaviest element', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `elements`
--
ALTER TABLE `elements`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `elements`
--
ALTER TABLE `elements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
