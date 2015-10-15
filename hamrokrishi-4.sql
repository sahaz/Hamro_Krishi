-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2015 at 05:27 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hamrokrishi`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_data`
--

CREATE TABLE IF NOT EXISTS `all_data` (
`id` int(11) NOT NULL,
  `data_of` varchar(100) NOT NULL,
  `data_image` varchar(255) NOT NULL,
  `data_description` longtext NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `all_data`
--

INSERT INTO `all_data` (`id`, `data_of`, `data_image`, `data_description`) VALUES
(2, 'disease', 'user.jpg', 'Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice'),
(3, 'soil', 'soil map nepal.gif', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque euLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu'),
(4, 'fertilizer', 'apertureworld.jpg', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque euLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque euLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque euLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque euLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu'),
(5, 'expert', '10071.png', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.'),
(6, 'maps', 'medicinal palnts.jpg', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque euLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu');

-- --------------------------------------------------------

--
-- Table structure for table `crops`
--

CREATE TABLE IF NOT EXISTS `crops` (
`id` int(11) NOT NULL,
  `crop_name` varchar(255) NOT NULL,
  `crop_sname` varchar(255) NOT NULL,
  `crop_image` varchar(255) NOT NULL,
  `seo_keyword` varchar(255) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `metadata` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `crops`
--

INSERT INTO `crops` (`id`, `crop_name`, `crop_sname`, `crop_image`, `seo_keyword`, `seo_title`, `metadata`) VALUES
(8, '&#2343;&#2366;&#2344; ', '&#2323;&#2352;&#2367;&#2395;&#2366; &#2360;&#2366;&#2340;&#2367;&#2349;&#2366; ', 'oryza-sativa.jpg', '&#2343;&#2366;&#2344; | &#2323;&#2352;&#2367;&#2395;&#2366; &#2360;&#2366;&#2340;&#2367;&#2349;&#2366; ', '&#2343;&#2366;&#2344;&#2325;&#2379; &#2348;&#2366;&#2352;&#2375; &#2325;&#2375;&#2361;&#2367; &#2332;&#2366;&#2344;&#2325;&#2366;&#2352;&#2368; ', '&#2343;&#2366;&#2344;&#2325;&#2379; &#2357;&#2376;&#2332;&#2381;&#2334;&#2366;&#2344;&#2367;&#2325; &#2344;&#2366;&#2350; &#2323;&#2352;&#2367;&#2395;&#2366; &#2360;&#2366;&#2340;&#2367;&#2349;&#2366; &#2361;&#2379; | '),
(9, '&#2313;&#2326;&#2369;', '&#2360;&#2366;&#2325;&#2352;&#2369;&#2350; &#2309;&#2347;&#2367;&#2360;&#2367;&#2344;&#2366;&#2352;&#2369;&#2350; ', 'sugarcane.jpg', '&#2313;&#2326;&#2369;, &#2360;&#2366;&#2325;&#2352;&#2369;&#2350; &#2309;&#2347;&#2367;&#2360;&#2367;&#2344;&#2366;&#2352;&#2369;&#2350;, &#2313;&#2326;&#2369; &#2326;&#2375;&#2340;&#2368;', '&#2313;&#2326;&#2369; | &#2360;&#2366;&#2325;&#2352;&#2369;&#2350; &#2309;&#2347;&#2367;&#2360;&#2367;&#2344;&#2366;&#2352;&#2369;&#2350;  | &#2313;&#2326;&#2369; &#2326;&#2375;&#2340;&#2368; | ', '&#2313;&#2326;&#2369;, &#2360;&#2366;&#2325;&#2352;&#2369;&#2350; &#2309;&#2347;&#2367;&#2360;&#2367;&#2344;&#2366;&#2352;&#2369;&#2350;, &#2313;&#2326;&#2369; &#2326;&#2375;&#2340;&#2368;'),
(10, 'Wheat', 'Triticum', 'wheat.jpg', 'Triticum', 'Triticum', 'Triticum'),
(11, 'Corn(maize)', 'Zea mays', 'corn.jpg', 'maize ', 'maize ', 'maize ');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE IF NOT EXISTS `disease` (
`id` int(11) NOT NULL,
  `crop_id` int(11) NOT NULL,
  `disease_type` varchar(100) NOT NULL,
  `disease_name` varchar(255) NOT NULL,
  `disease_lname` varchar(255) NOT NULL,
  `disease_image` varchar(255) NOT NULL,
  `disease_symptoms` longtext NOT NULL,
  `disease_causes` longtext NOT NULL,
  `disease_preventive_measures` longtext NOT NULL,
  `seo_title` varchar(100) NOT NULL,
  `seo_keyword` varchar(100) NOT NULL,
  `metadata` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`id`, `crop_id`, `disease_type`, `disease_name`, `disease_lname`, `disease_image`, `disease_symptoms`, `disease_causes`, `disease_preventive_measures`, `seo_title`, `seo_keyword`, `metadata`) VALUES
(5, 8, 'Disease', 'Blast: Magnaporthe grisea', 'Rice Blast ', 'Rice-blast-biggest-disease-of-rice-in-nepal.jpg', '<p style="text-align:justify">The blast fungus attacks all above ground parts of the rice plant. The most&nbsp;conspicuous symptom is leaf spot,elliptical or boat-shaped, with a brown&nbsp;margin and gray center. The number of spots ranges from few to so many that&nbsp;all leaves are killed and the plant dies. After flowering stage, the fungus attacks&nbsp;all parts of the panicle, producing brownish lesions- called neck blast or neck&nbsp;rot. The symptom also appears on the nodes, which turn black and break while&nbsp;drying up.</p>\r\n', '<p style="text-align:justify"><strong>Blast</strong>, caused by <em>Pyriculari grisea Sacc.</em>, is the most&nbsp;destructive disease of rice in&nbsp;Nepal. This was recorded in 1966 in Nepal for the first time. The disease is&nbsp;more&nbsp;devastating in valleys, river basins, foot-hills and hills&nbsp;of Nepal, although it&nbsp;is&nbsp;prevalent throughout the rice&nbsp;growing areas in the country.</p>\r\n', '<h3><strong>Use of resistant varieties:</strong></h3>\r\n\r\n<p style="text-align:justify">Chandannath 1,Chandannath 3, Machhapuchhre 3, Chhomrongdhan and Palung&nbsp;2 for high hills; Khumal 4,Khumal 5, Khumal 7, Khumal 9 and Khumal 11&nbsp;for warmtemperate region (mid-hills); Hardinath 1,Chaite 2, Chaite 4, Chaite 6,&nbsp;Laxmi andBindeswari as early rice in the double croppedrice areas; Hardinath&nbsp;1, Rampur Masuli, Radha 4,Radha 12, Makwanpur 1, Sabitri, Janaki and&nbsp;Laxmi for main season in sub-tropical areas of Nepal.</p>\r\n\r\n<h3><strong>Cultural practices:</strong></h3>\r\n\r\n<p style="text-align:justify">Use of wet seedbed whenever possible, selection of quality and healthy seeds,&nbsp;application of balanced doses of N,P, K fertilizers, practice of&nbsp;recommended plants pacing,timely weed management and application of&nbsp;irrigation water in time reduce blast.</p>\r\n', 'Rice Blast | Rice Disease found in Nepal | Magnaporthe grisea ', 'Rice Blast | Rice Disease | Magnaporthe grisea ', 'Rice Disease, Rice Blast, Pyriculari grisea Sac, Magnaporthe grisea    '),
(6, 8, 'Worm', 'Nilaparvata lugens ', 'Brown planthopper', 'planthopper-brown.jpg', '<h3>How to identify</h3>\r\n\r\n<h3 style="text-align:justify">Check for the presence of insect:</h3>\r\n\r\n<ul>\r\n	<li style="text-align:justify">crescent-shaped white eggs inserted into the midrib or leaf sheath</li>\r\n	<li style="text-align:justify">white to brown nymphs</li>\r\n	<li style="text-align:justify">brown or white adults feeding near the base of tillers</li>\r\n</ul>\r\n\r\n<h3 style="text-align:justify">Check the field for:</h3>\r\n\r\n<ul>\r\n	<li style="text-align:justify">hopperburn or yellowing, browning and drying of plant</li>\r\n	<li style="text-align:justify">ovipositional marks exposing the plant to fungal and bacterial infections</li>\r\n	<li style="text-align:justify">presence of honeydew and sooty molds in the bases of areas&nbsp;infected</li>\r\n	<li style="text-align:justify">plants with ragged stunt or grassy stunt virus disease</li>\r\n</ul>\r\n', '<h3 style="text-align:justify">Why and where it occurs</h3>\r\n\r\n<p style="text-align:justify"><strong>Planthoppers</strong> can be a problem in rainfed and in irrigated wetland environments. It also occurs in areas with&nbsp;continuous submerged conditions in the field, high shade, and humidity.&nbsp;Closed canopy of the rice plants, densely seeded crops, excessive use of nitrogen, and&nbsp;early season insecticide spraying also favors insect development.</p>\r\n\r\n<ul>\r\n</ul>\r\n', '<h3 style="text-align:justify">To control planthoppers:</h3>\r\n\r\n<h3 style="text-align:justify"><em>Mechanical &amp; physical measures</em></h3>\r\n\r\n<ul>\r\n	<li style="text-align:justify">Flood the seedbed, for a day, so that only the tips of seedlings areexposed will control BPH.</li>\r\n	<li style="text-align:justify">Sweep small seedbeds with a net to remove some BPH (but not&nbsp;eggs),particularly&nbsp;from dry seed beds. At high BPH densities,sweeping will not remove sufficient numbers of BPH fromthe base of the plant.</li>\r\n</ul>\r\n\r\n<h3 style="text-align:justify"><em>Biological control</em></h3>\r\n\r\n<ul>\r\n	<li style="text-align:justify">If natural enemies out-number BPH the risk of hopperburn is low.&nbsp;Evenrice already damaged by hopperburn should not be&nbsp;treated with insecticides if natural enemies out-number BPH.&nbsp;Natural enemies ofBPH include water striders, mirid bugs,&nbsp;spiders, and various eggparasitoids.</li>\r\n</ul>\r\n\r\n<h3 style="text-align:justify"><em>Chemical control</em></h3>\r\n\r\n<p style="text-align:justify">Only apply an insecticide to the seedbed for BPH or WBPH if all of these conditions are met:</p>\r\n\r\n<ul>\r\n	<li style="text-align:justify">an average of more than one planthopper per stem,</li>\r\n	<li style="text-align:justify">on average, more planthoppers than natural enemies,</li>\r\n	<li style="text-align:justify">flooding the seedbed is not an option.</li>\r\n</ul>\r\n', 'Brown planthopper | Nilaparvata lugens | ', 'Brown planthopper, Nilaparvata lugens, Pest infection in Rice', 'Pest infection in Rice, Brown planthopper, Nilaparvata lugens '),
(7, 8, 'Disease', 'Xanthomonas oryzae pv. oryzae ', 'Bacterial blight', 'rice-blight0infection-in-rice.JPG', '<h3 style="text-align: justify;">How to identify</h3>\r\n\r\n<p style="text-align:justify">Check for wilting and yellowing of leaves, or wilting of seedlings (also called kresek).&nbsp;On seedlings, infected leaves turn grayish green and roll up. As the disease progresses, the leaves turn yellow to straw-colored and wilt, leading whole seedlings to dry up and die.&nbsp;Kresek on seedlings may sometimes be confused with early rice stem borer damage.</p>\r\n\r\n<p style="text-align:justify">To distinguish kresek symptoms from stem borer damage,squeeze the lower end of infected seedlings between the fingers. Kresek symptoms should show yellowish bacterial ooze coming out of the cut ends.Unlike plants infested with stem borer, rice plants with kresek are not easily pulled out from soil.</p>\r\n\r\n<h3>To quickly diagnose bacterial blight on leaf:</h3>\r\n\r\n<ul>\r\n	<li style="text-align:justify">cut a young lesion across and place in a transparent glass container with clear water</li>\r\n	<li style="text-align:justify">after a few minutes, hold the container against light and observe for thick or turbid liquid coming from the cut end of the leaf</li>\r\n</ul>\r\n', '<h3 style="text-align: justify;">What it does</h3>\r\n\r\n<p style="text-align:justify"><strong>Bacterial blight</strong> is caused by&nbsp;<em>Xanthomonas oryzae&nbsp;</em>pv.&nbsp;<em>oryzae</em>.&nbsp;It causes wilting of&nbsp;seedlings and yellowing and drying of leaves.</p>\r\n\r\n<h3>Why and where it occurs</h3>\r\n\r\n<p style="text-align:justify">The disease is most likely to develop in areas that have weeds and stubbles of infected plants.&nbsp;It can occur in both tropical and temperate environments, particularly in irrigated and rainfed lowland areas. In general, the disease favors temperatures at&nbsp;25&minus;34&deg;C, with relative humidity above 70%.</p>\r\n\r\n<p style="text-align:justify">It is commonly observed when strong winds and continuous heavy rains occur, allowing the disease-causing bacteria to easily spread through ooze droplets on lesions of infected plants.</p>\r\n\r\n<p style="text-align:justify"><strong>Bacterial blight</strong> can be severe in susceptible rice varieties under high nitrogen fertilization.</p>\r\n', '<h3>How to manage</h3>\r\n\r\n<p style="text-align:justify">Planting resistant varieties has been proven to be the most efficient, most reliable, and cheapest way to control bacterial blight.</p>\r\n\r\n<h3>Other disease control options include:</h3>\r\n\r\n<ul>\r\n	<li style="text-align:justify">Use balanced amounts of plant nutrients, especially nitrogen.</li>\r\n	<li style="text-align:justify">Ensure good drainage of fields (in conventionally flooded crops) and nurseries.</li>\r\n	<li style="text-align:justify">Keep fields clean. Remove weed hosts and plow under rice stubble, straw, rice ratoons and volunteer seedlings, which can serve as hosts of bacteria.</li>\r\n	<li style="text-align:justify">Allow fallow fields to dry to suppress disease agents in the soil and plant residues.</li>\r\n</ul>\r\n', ' Common Rice Disease: Bacterial blight | Xanthomonas oryzae pv. oryzae |', 'Xanthomonas oryzae pv. oryzae, Bacterial blight, Common Rice diseases', 'Xanthomonas oryzae pv. oryzae | Bacterial blight | Infection in Rice   '),
(8, 9, 'Disease', 'Glomerella tucumanensis (Colletotrichum falcatum)', 'Red Rot Disease', 'red-rot.jpg', '<h3 style="text-align: justify;">Stalk Symptoms&nbsp;</h3>\r\n\r\n<ul>\r\n	<li style="text-align: justify;">Drying up of the 3<sup>rd</sup>&nbsp;&amp; 4<sup>th</sup>&nbsp;leaf of the crown at margins. Later, the entire crown dries up &amp; drops down.&nbsp;</li>\r\n	<li style="text-align: justify;">Brown or reddish brown stripes appear externally at nodal region. On splitting, the internal tissue becomes red with white transverse bands.</li>\r\n	<li style="text-align: justify;">Tissues emit alcoholic sour smell. &nbsp;</li>\r\n	<li style="text-align: justify;">Tiny acervuli develop on outer surface of shrinkled upper internodes. Cottony gray fungal mass develops in the pith region of the internodes and sporulates abundantly.</li>\r\n</ul>\r\n\r\n<h3 style="text-align: justify;">Leaf Symptoms</h3>\r\n\r\n<ul>\r\n	<li style="text-align: justify;">Tiny reddish lesions on the upper surface of the lamina. These lesions are 2 to 3 mm in length and about 0.5 mm in width.</li>\r\n	<li style="text-align: justify;">Minute red spots on the upper surface of the midrib in both the directions. Later on becomes straw colored in the center with the development of black acervuli and dark reddish brown margins.</li>\r\n</ul>\r\n', '<p style="text-align:justify"><strong>Red rot</strong> is one of the major constraints in the profitable cultivation of sugarcane in&nbsp;Nepal. This disease drastically retards the yield and considerably&nbsp;deteriorates the juice quantity and quality thus hitting both the canegrowers and millers. Many good varieties have gone out of cultivation due to red rot.</p>\r\n\r\n<p style="text-align:justify">Causal organism:&nbsp;<em>Colletotrichum falcatum&nbsp;Went,&nbsp;Glomerella cingulata&nbsp;</em></p>\r\n', '<h3 style="text-align: justify;">Control</h3>\r\n\r\n<ul>\r\n	<li style="text-align: justify;">Cultivation of disease resistant varieties is alone safe control measure.&nbsp;</li>\r\n	<li style="text-align: justify;">Crop rotation for two years should be adopted.</li>\r\n	<li style="text-align: justify;">The seed setts should be disease free or must be treated with suitable fungicides.</li>\r\n	<li style="text-align: justify;">Diseased plant parts should be collected and burnt, in the standing crop as well as after harvesting.</li>\r\n	<li style="text-align: justify;">Ratoon cropping should be discouraged, if first crop is found to be suffered due to disease.</li>\r\n</ul>\r\n', 'Sugarcane Disease: Red Rot Disease | Glomerella tucumanensis', 'Red Rot Disease, Sugarcane, Glomerella tucumanensis, Colletotrichum falcatum', 'Red Rot Disease, Sugarcane, Glomerella tucumanensis, Colletotrichum falcatum,   '),
(9, 9, 'Worm', 'Chilo infuscatellus ', 'Early Shoot Borer', 'Chilo-sacchariphagus-indicus1.jpg', '<ul>\r\n	<li style="text-align:justify">Larvae enter the cane laterally through one or more holes in the stalks (shoot) and bores downwards as well as upwards killing the growing point. Thus, it cuts of the central leaf spindle, which eventually dries forming a &lsquo;dead heart&#39;. The dead heart can be easily pulled out. It emits an offensive odour.</li>\r\n	<li style="text-align:justify">Borer infestation during the germination phase kills the mother shoots resulting in the drying up of the entire clump. This leads to gaps in the field.</li>\r\n	<li style="text-align:justify">&nbsp;Borer infestation in cane stalks reduces both cane yield and quality</li>\r\n</ul>\r\n', '<h3>Causal Organism:&nbsp;<em>Chilo infescatellus</em></h3>\r\n\r\n<ul>\r\n	<li style="text-align:justify">Attacks the crop during the early part of cane growth, before&nbsp;internode formation. It also attacks the cane stalks in the&nbsp;years of scanty rainfall.</li>\r\n	<li style="text-align:justify">Causes heavy yield losses as it affects the plant stand/unit area. It&nbsp;also leads to canes of different age, which will be poor in juice&nbsp;quality, with less cane weight. When borer infects cane stalks,&nbsp;both yield and quality are reduced.</li>\r\n</ul>\r\n', '<h3 style="text-align: justify;">Cultural Method:</h3>\r\n\r\n<p style="text-align: justify;">1. Early plantation (by the middle of February) is helpful in checking serious destruction by this pest.</p>\r\n\r\n<p style="text-align: justify;">2. Light earthing at the early stages of crop growth (during May &amp; June) also reduces the damage by the pest considerably.</p>\r\n\r\n<p style="text-align: justify;">3. By adjusting the time of plantation of the cane and emergence of moth, the two should not coincide with each other.</p>\r\n\r\n<p style="text-align: justify;">4. Use of resistance variety of sugarcane for culture</p>\r\n\r\n<p style="text-align: justify;">5. After harvesting the field should be well ploughed, stubbles should be collected and burn.</p>\r\n\r\n<h3 style="text-align: justify;">Mechanical Method:</h3>\r\n\r\n<p style="text-align: justify;">1. Collection and destruction of egg masses.</p>\r\n\r\n<p style="text-align: justify;">2. Removal of affected plants having dead heart right from the ground level. Care should be taken that the larvae and pupae may not come out from the removed plants.</p>\r\n\r\n<p style="text-align: justify;">3. Spiking the larvae with iron needle.</p>\r\n\r\n<h3 style="text-align: justify;">Chemical Method:</h3>\r\n\r\n<p style="text-align: justify;">1. Spraying of Gamma BHC, Heptachlor or Telodrin emulsion @ 1 to 3 kg/ha mixed with 1500 litres of water. Spraying should be done at the interval of 15 days for the first three months.</p>\r\n\r\n<h3 style="text-align: justify;">Biological Method:</h3>\r\n\r\n<p style="text-align: justify;">1. Release of the egg parasites (Telenomus beneficious, Trichograma spp.) larval parasites (Goniojus indicus, Apanteles flavipes, Bracon spp, Melcha spp. etc.) and pupal parasites (Tetrastichus ayyari) into the field for the biological control of this pest.</p>\r\n', 'Early Shoot Borer | Chilo infuscatellus | Pests Infection in Sugarcane', 'Early Shoot Borer, Chilo infuscatellus, Pests Infection in Sugarcane', 'Early Shoot Borer | Chilo infuscatellus | Pests Infection in Sugarcane     '),
(10, 9, 'Disease', 'Sporisorium scitamineum', 'Sugarcane smut disease', 'sugarcane-smut.jpg', '<ul>\r\n	<li style="text-align:justify">Stunted growth of sugarcane stools</li>\r\n	<li style="text-align:justify">profuse production of tillers&nbsp;</li>\r\n	<li style="text-align:justify">shortened internodes&nbsp;</li>\r\n	<li style="text-align:justify">stems thin with narrow, erect leaves&nbsp;</li>\r\n	<li style="text-align:justify">black whip-like structure emerging from terminal bud</li>\r\n</ul>\r\n', '<h3 style="text-align:justify">Causal organism:&nbsp;<em>Ustilago scitaminae</em></h3>\r\n\r\n<p style="text-align:justify">This is a major fungal disease, caused by the fungus&nbsp;<em>Sporisorium scitamineum</em>&nbsp;and observed on almost all the varieties commercially cultivated in India. High temperature in April&ndash;May, dry weather and acute shortage of water leading to high incidence of smut. Ratoon crops are suffering more than the plant crops. This disease brings down the cane yield substantially.</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n', '<p style="text-align:justify">Adopting one or more of the following measures can minimize the disease incidence.</p>\r\n\r\n<ul>\r\n	<li style="text-align:justify">Planting of healthy disease and pest free set</li>\r\n	<li style="text-align:justify">Inspection and roguing of smutted clumps / stools in the field to be done regularly. Before roguing of smutted clumps / stools, whips of smut should be collected in plastic bags</li>\r\n	<li style="text-align:justify">Discouraging ratooning of diseased crop if incidence is more than 20%</li>\r\n	<li style="text-align:justify">Use of heat therapy for breeder seed production. (Moist hot air treatment (MHAT) at 54<sup>o</sup>C for 150 minutes or Hot water treatment at 50<sup>o</sup>C for 2 hours)</li>\r\n	<li style="text-align:justify">Use of resistant variety</li>\r\n</ul>\r\n', 'Sugarcane smut disease | Sporisorium scitamineum', 'Sugarcane smut disease, Sporisorium scitamineum, sugarcane diseases', 'Sugarcane, Smut disease, Sporisorium scitamineum  '),
(11, 10, 'Disease', 'Erysiphe graminis', 'Powdery mildew', 'Wheat_powdery_mildew.jpg', '<p>Powdery mildew is one of the most&nbsp;<strong>widespread</strong>&nbsp;and easily recognized plant diseases. Powdery mildews are characterized by&nbsp;<strong>spots</strong>&nbsp;or patches of white to grayish, talcum-powder-like growth. Powdery mildews are<strong>severe</strong>&nbsp;in warm, dry climates. Many plants have been developed to be resistant or tolerant to powdery mildew.</p>\r\n', '<p><strong>Powdery mildew</strong>&nbsp;diseases are&nbsp;<strong>caused</strong>&nbsp;by many different species of fungi in the order Erysiphales, with Podosphaera xanthii (a.k.a. Sphaerotheca fuliginea) being the most commonly reported&nbsp;<strong>cause</strong>.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p><strong>Potassium Bicarbonate</strong> can be use to control this disease.<strong>Garlic </strong>is cheap and readily available. This has made it a favourite home-grown pest control, especially among organic gardeners. The volatile antimicrobial substance allicin (diallylthiosulphinate) is produced in garlic when the tissues are damaged during crushing or chopping the garlic. Allicin in garlic juice inhibits the germination of sporangia (in which the spores develop) and thereby acts as a fungicide.</p>\r\n\r\n<ul>\r\n	<li>choose cannabis strains with a high resistance if you live in an area prone to mildew infestation</li>\r\n	<li>ensure a good climate in the greenhouse and indoor (ventilation, electric or gas heating required)</li>\r\n	<li>avoid the use of nitrogen-rich manure (like fresh manure or unripe compost), avoid fertilizers high in ammoniacal nitrogen such as pure guano in powder and pellet form</li>\r\n	<li>prevent white fly and aphid infestations and treat plants thoroughly if diseased, the sticky secretions from these pests cover the leaves and facilitate mildew which in some cases turns greyish-black</li>\r\n	<li>do not grow too close to damp areas (riverside, etc.)</li>\r\n	<li>increase the light intensity indoor if you are growing under low-light (such as CFL, fluorescents, LED lamps, etc.)</li>\r\n	<li>use garlic teas and garlic sprays</li>\r\n	<li>treat plants regularly with lecithin-based sprays</li>\r\n	<li>remove or treat all infested weeds and ornamental plants on your property; cut away infested twigs on fruit trees at the earliest signs of infestation</li>\r\n	<li>spray down leaves with clean, chlorine-free water if they are covered in pollen after pollinating buds for seeds (wait a few days after pollination is completed), stale pollen residues easily turn moldy under high humidity and attract mildew</li>\r\n</ul>\r\n', 'Powdery mildew', 'Powdery mildew', 'Powdery mildew '),
(12, 10, 'Worm', 'Pseudaletia unipuncta (Haworth)', 'Armyworm', 'armyworm.JPG', '<p>Plants stunted or lodges at grain fill. Plants may be bluish-green in colour. Winter wheat mainly.</p>\r\n\r\n<p>Seed is hollowed out,</p>\r\n\r\n<p>&nbsp;Bronze patch in field,&nbsp;</p>\r\n\r\n<p>Gaps in the stand,&nbsp;</p>\r\n\r\n<p>Ragged holes in leaves.</p>\r\n', '<p>Identification can be done but the reaching indepth of the cause of this diseases is almost breathe taking.Dur&shy;ing the veg&shy;e&shy;ta&shy;tive growth phase, plants can tol&shy;er&shy;ate con&shy;sid&shy;er&shy;able leaf feed&shy;ing. Leaves may look tat&shy;tered from the eaten-out leaf mar&shy;gins. Fae&shy;cal pel&shy;lets around the base of plants are another indi&shy;ca&shy;tion of army&shy;worm infes&shy;ta&shy;tion. Army&shy;worm gen&shy;er&shy;ally do not require con&shy;trol dur&shy;ing the veg&shy;e&shy;ta&shy;tive&nbsp;stage.The most seri&shy;ous army&shy;worm dam&shy;age in cereal crops occurs when lar&shy;vae feed on the upper flag leaf and stem node as the crop matures. Lar&shy;vae tar&shy;get the stem node as the leaves become dry and unpalat&shy;able, and the stem is often the last part of the plant to dry. Head cut&shy;ting begins at this&nbsp;time.</p>\r\n\r\n<p>The adult moth is yellowish brown with a chocolate-colored stripe down the length of each forewing. The larvae vary in coloration from greenish to cream-colored, depending on the maturity of the grain they have consumed, but all have longitudinal white and brown lines down each side of the body. Larvae feed on the wheat heads from evening to early morning, typically hanging onto the awns upside down and hollowing out kernels. They rest in the soil at the base of the plant during the day. Damaged kernels appear hollowed out and resemble those damaged by stored grain pests.</p>\r\n', '<p>There are no established management plans for this pest. Infestations are usually concentrated around field margins so scouting efforts for this pest would need to include interior transects to obtain a representative estimate of population levels. In addition, no economic threshold has been determined. There are no materials specifically labeled for this pest, but materials registered for other armyworms in wheat would likely provide control if applied sufficiently early. However unless detected well in advance of crop maturity, treatment would be impractical because the pre-harvest interval requirement of most insecticides would cause even greater losses due to delayed harvest. Larvae arriving in storage bins with harvested wheat either die or emerge as moths, but are not a concern in stored grain.&nbsp;</p>\r\n', 'Armyworm', 'Armyworm', 'Armyworm'),
(13, 11, 'Disease', 'Gray Leaf Spot', 'Gray Leaf Spot', 'corn gray .jpg', '<p>Symptoms seen on corn include leaf lesions, discoloration (chlorosis), and foliar blight. The fungus survives in debris of topsoil and infects healthy crop via asexual spores called conidia. Environmental conditions that best suit infection and growth include moist, humid, and warm climates.</p>\r\n', '<p>Poor airflow, low sunlight, overcrowding, improper soil nutrient and irrigation management, and poor soil drainage can all contribute to the propagation of the disease.</p>\r\n', '<p>Use resistant corn hybrids</p>\r\n\r\n<p>Conventional tillage where appropriate</p>\r\n\r\n<p>Crop rotation</p>\r\n\r\n<p>Foliar fungicides if economically warranted. Typically only used with susceptible inbreds; or a combination of susceptible hybrids, high yield potential, prolonged humid conditions, and evidence of disease development.</p>\r\n', 'Gray Leaf Spot', 'Gray Leaf Spot', 'Gray Leaf Spot'),
(14, 11, 'Disease', 'Helicoverpa', 'corn earworm', 'corn ear worm.jpg', '<p>&nbsp;Corn earworms infest both whorls and panicles of sorghum. Infestation of panicles is considered more serious than infestation of whorls.<br />\r\nLarvae, which hatch from eggs laid on sorghum leaves before panicles are available, migrate to and feed on tender, folded leaves in the whorl. When damaged leaves unfold, they are ragged with &quot;shot holes.&quot; Although this may look dramatic, damage to leaves usually has little effect on yield, and control of larvae during the whorl stage of sorghum growth usually is not justified economically. Chemical control may be justified if larval feeding is reducing leaf area by about 30% or is damaging developing panicles or growing points within the whorls.<br />\r\nCorn earworm infestation of sorghum panicles is of greatest concern because larvae feed on developing grain. Small larvae at first feed on flowering parts of panicle spikelets, then hollow out kernels. Later instar larvae completely destroy maturing grain. About eighty percent of the damage is caused by larvae in the last two instars. Larval excrement or frass is common in infested panicles and may be seen on the tops of upper leaves and on the ground under plants. Under certain conditions, molds also may be common in infested panicles. An insecticide application would be justified at one to two larvae per panicle.</p>\r\n', '<p>&nbsp;Moths of this insect are 19 mm long, with a wing span of 38 mm. They vary in color from dusty yellow to reddish brown. Females are active in the evening and live about 12 days. Each female may deposit 350 to 3,000 eggs. Eggs are flattened spheres, prominently ribbed and 1.2 mm in diameter. When deposited, they are white, but soon darken and hatch in three to five days. White, newly hatched larvae grow rapidly and become variously colored, ranging from pink, green, or yellow, to almost black. Many are conspicuously striped. Down the side is a pale stripe edged above with a dark stripe. Down the middle of the back of larger larvae is a dark stripe divided by a narrow white line that makes the dark line appear doubled. Fully grown larvae are robust and 38 to 50 mm long. Pupation occurs in the soil and is the overwintering stage.</p>\r\n', '<p><strong>Biological control.</strong>&nbsp;The bacterium&nbsp;<em>Bacillus thuringiensis</em>, and steinernematid nematodes provide some suppression. Entomopathogenic nematodes, which are available commercially, provide good suppression of developing larvae if they are applied to corn silk; this has application for home garden production of corn if not commercial production (Purcell et al. 1992). Soil surface and subsurface applications of nematodes also can affect earworm populations because larvae drop to the soil to pupate (Cabanillas and Raulston 1996). This approach may have application for commercial crop protection, but larvae must complete their development before they are killed, so some crop damage ensues.</p>\r\n\r\n<p><strong>Sampling.</strong>&nbsp;Eggs and larvae often are not sampled on corn because eggs are very difficult to detect, and larvae burrow down into the silks, out of the reach of insecticides, soon after hatching</p>\r\n\r\n<p>Moths can be monitored with blacklight and pheromone traps. Both sexes are captured in light traps whereas only males are attracted to the sex pheromone. Both trap types give an estimate of when moths invade or emerge, and relative densities, but pheromone traps are easier to use because they are selective. The pheromone is usually used in conjunction with an inverted cone- type trap. Generally, the presence of five to 10 moths per night is sufficient to stimulate pest control practices.</p>\r\n\r\n<p><strong>Insecticides.</strong>&nbsp;Corn fields with more than 5% of the plants bearing new silk are susceptible to injury if moths are active. Insecticides are usually applied to foliage in a liquid formulation, with particular attention to the ear zone, because it is important to apply insecticide to the silk. Insecticide applications are often made at two to six day intervals, sometimes as frequently as daily in Florida. Because it is treated frequently, and over a wide geographic area, corn earworm has become resistant to many insecticides . Susceptibility to&nbsp;<em>Bacillus thuringiensis</em>&nbsp;also varies, but the basis for this variation in susceptibility is uncertain. Mineral oil, applied to the corn silk soon after pollination, has insecticidal effects. Application of about 0.75 to 1.0 ml of oil five to seven days after silking can provide good control in the home garden.</p>\r\n', 'corn earworm', 'corn earworm', 'corn earworm '),
(15, 11, 'Disease', 'Corn Nematodes', 'Corn Nematodes', 'nematodes.jpg', '<ul>\r\n	<li>Symptoms can look similar to nutrient deficiency, or insect or herbicide damage. Usually in parts of fields, not over the whole field.</li>\r\n	<li>Symptoms and injury vary with type and numbers of nematodes involved.</li>\r\n	<li>Wilting, stunting, small poorly-filled ears, nutrient deficiencies</li>\r\n	<li>Short root systems with reduced number of fine feeder roots (dagger, stunt, and sting nematodes). Similar to grape colaspis injury.</li>\r\n	<li>Short, stubby roots similar to dinitroaniline herbicide damage (needle, stubby root, and sting nematodes).</li>\r\n	<li>Few fine roots and dark lesions on roots (lesion, dagger, lance, and spiral nematodes)</li>\r\n</ul>\r\n', '<p>Nematodes can cause damage by feeding on corn roots.&nbsp; Nematodes feeding on root cells reduce the plant&rsquo;s ability to take up water and nutrients. Damage caused by root feeding can further injure a plant by allowing fungal and bacterial pathogens to enter into the plant. Nematodes are also known to transmit viruses to the plants they feed on.</p>\r\n\r\n<p>&ldquo;Nematodes can make everything else worse,&rdquo; says Clemson University plant pathologist John Mueller. &ldquo;A corn root system infected with nematodes can exhibit additional moisture stress, reduced nutrient uptake and lost yield potential. Without effective management, nematode numbers can increase year-to-year, reducing yield potential of the current corn crop as well as other crops in the rotation.&rdquo;</p>\r\n', '<p>Because there are many nematode species, identification is essential for determining the appropriate control option. For certain nematode populations the best management practice is crop rotation. Corn management practices that reduce crop stress may help the crop overcome nematode attacks. The following agronomic practices may help growers manage potential nematode infestations.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Fertilize according to soil test recommendations. Healthy plants are less susceptible to nematode damage.</li>\r\n	<li>Maintain good weed control, even after harvest. Weeds can be hosts for nematodes and may serve as a food source for the next year&rsquo;s crop.</li>\r\n	<li>Roots protected from corn rootworm are more vigorous and healthy, and may be less prone to nematode damage.&nbsp; Use the most advanced traits for root protection.</li>\r\n	<li>For certain nematode species, rotating to a non-host crop can reduce populations.</li>\r\n	<li>Consider using a corn seed treatment. PONCHO&reg; /VOTiVO&reg; is a novel seed treatment product that introduces a new way to protect corn seedlings and roots against nematodes.&nbsp; It contains a bacteria that lives and grows with young corn roots, creating a living barrier that nematodes cannot break through.&nbsp; PONCHO&reg;/VOTiVO&reg; can be used with the Acceleron&reg; Seed Treatment Products for corn.</li>\r\n	<li>An additional nematicide may be necessary to control high nematode populations. Check university recommendations for specific products.</li>\r\n</ul>\r\n', 'Corn Nematodes', 'Corn Nematodes', 'Corn Nematodes'),
(16, 10, 'Disease', 'Septoria nodorum', 'Glume blotch ', 'septoria.jpg', '<ul>\r\n	<li><em>Phaeosphaeria nodorum</em>&nbsp;infects leaf, stem and causes discoloration of the spike in the symptom known as glume blotch.</li>\r\n	<li><em>P. nodorum</em>&nbsp;lesions are initially red-brown surrounded by a yellow halo. Flecks are lens-shaped lesions 3-6mm by 6-19 mm.</li>\r\n	<li>Early leaf symptoms include yellowing at the site of infection and tip burn of the leaf.</li>\r\n	<li>The chlorotic front expands to form oval-shaped lesions on the leaf, with the majority of hyphae running parallel to the vasculature of the leaf.</li>\r\n	<li>Within the chlorotic areas, small regions of necrosis are often evident. With age they may develop gray-brown centers.</li>\r\n	<li>Pycnidia (spore-producing structures) can form throughout the lesion.</li>\r\n	<li>Pycnidia of&nbsp;<em>S. nodorum</em>&nbsp;are light to dark brown and circlular and three times bigger than pycnidia of M. graminicola.</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Blotched, yellowing and dead leaves evenly distributed across paddock.</li>\r\n	<li>Tan-brown oval or irregular shaped leaf blotches with yellow margins. Tiny brown fruiting&nbsp;bodies can occasionally be seen in lesions but are not easily visible to the naked eye.</li>\r\n	<li>Blotches become grey as they enlarge.</li>\r\n	<li>Badly affected leaves die back from tip as blotches converge. Lower leaves affected on young plants.</li>\r\n	<li>Disease can spread to glumes (known as glume blotch) and stems and heavy infection causes blotching across the entire grain head with shrivelled grain at harvest.</li>\r\n</ul>\r\n', '<p>Generally an application of foliar fungicide to manage septoria diseases or yellow spot&nbsp;is more likely to be economic when:</p>\r\n\r\n<ul>\r\n	<li>The crop&nbsp;has good yield potential</li>\r\n	<li>There is a good chance of 100mm rainfall or more after flag leaf emergence.</li>\r\n	<li>When applied at or around flag emergence (Z39) to protect the flag and flag-1 leaves, which contribute the most to filling grain.</li>\r\n	<li>In high rainfall areas or seasons of above average spring rainfall, it is important to control septoria nodorum blotch&nbsp;if it is moving up the canopy in order to protect the heads from glume blotch infection.</li>\r\n</ul>\r\n\r\n<p><strong>Other treatment options:</strong></p>\r\n\r\n<ul>\r\n	<li>Crop rotation to a non host crop (e.g. barley, canola, lupin, oats, pulses)&nbsp;will help reduce infection.</li>\r\n	<li>Reduce surface wheat stubble before seeding wheat after wheat.</li>\r\n	<li>Sow varieties with higher levels of resistance.</li>\r\n	<li>Ensure soil potassium levels are adequate for healthy plants - low levels can make infections worse.</li>\r\n	<li>If disease is severe early, consider a foliar fungicide spray around first node (Z31), a second spray may be required around flag leaf emergence.</li>\r\n</ul>\r\n', 'Glume blotch ', 'Glume blotch ', 'Glume blotch ');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE IF NOT EXISTS `districts` (
`id` int(11) NOT NULL,
  `district_name` varchar(255) NOT NULL,
  `dev_region` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `district_name`, `dev_region`) VALUES
(1, 'Jhapa', 'EDR'),
(2, 'Morang', 'EDR'),
(3, 'Okhaldhunga', 'EDR'),
(4, 'Sindhuli', 'CDR'),
(5, 'Kathmandu', 'CDR'),
(6, 'Chitwan', 'CDR'),
(7, 'Gorkha', 'WDR'),
(8, 'Kapilvastu', 'WDR'),
(9, 'Palpa', 'WDR'),
(10, 'Dang', 'MWDR'),
(11, 'Jumla', 'MWDR'),
(12, 'Bardiya', 'MWDR'),
(13, 'Doti', 'FWDR'),
(14, 'Dadeldhura', 'FWDR'),
(15, 'Darchula', 'FWDR'),
(16, 'Sunsari', 'EDR');

-- --------------------------------------------------------

--
-- Table structure for table `farmers_pictures`
--

CREATE TABLE IF NOT EXISTS `farmers_pictures` (
`id` int(11) NOT NULL,
  `farmers_id` int(11) NOT NULL,
  `picture_name` varchar(255) NOT NULL,
  `picture_description` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `farmers_pictures`
--

INSERT INTO `farmers_pictures` (`id`, `farmers_id`, `picture_name`, `picture_description`) VALUES
(8, 16, '16_Govinda.jpg', 'govinda'),
(11, 16, '16_worldwildlife.jpg', 'This is my farm\n'),
(12, 16, '16_baltimoresun.jpg', 'my Dhan\n'),
(13, 16, '16_irri org.jpg', 'hamro asra 15'),
(14, 16, '16_soilpng.png', 'this is our soil'),
(22, 16, '16_jhapali.jpg', ''),
(25, 16, '16_internet-web-browser-3.png', ''),
(27, 16, '16_ft photo diary.jpg', ''),
(28, 16, '16_maps 2.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `farmers_profile`
--

CREATE TABLE IF NOT EXISTS `farmers_profile` (
`id` int(11) NOT NULL,
  `farmers_email` varchar(255) NOT NULL,
  `farmers_password` varchar(255) NOT NULL,
  `farmers_name` varchar(255) NOT NULL,
  `farmers_sex` varchar(50) NOT NULL,
  `farmers_address` varchar(255) NOT NULL,
  `farmers_phone` varchar(255) NOT NULL,
  `farmers_image` varchar(255) NOT NULL,
  `farmers_maincrop` longtext NOT NULL,
  `farmers_area` longtext NOT NULL,
  `farmers_experiences` longtext NOT NULL,
  `farmers_training` longtext NOT NULL,
  `date_joined` varchar(255) NOT NULL,
  `access_level` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `farmers_profile`
--

INSERT INTO `farmers_profile` (`id`, `farmers_email`, `farmers_password`, `farmers_name`, `farmers_sex`, `farmers_address`, `farmers_phone`, `farmers_image`, `farmers_maincrop`, `farmers_area`, `farmers_experiences`, `farmers_training`, `date_joined`, `access_level`) VALUES
(15, 'krishak2@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 'krishak2', 'male', 'qwe', '123', 'default_male.jpg', '', '', '', '', '2015/08/25, 03:47 PM', 'farmer'),
(16, 'sahaz@gmail.com', '03c7c0ace395d80182db07ae2c30f034', 'Billu Bajranji Bihari Babuwa', 'female', 'Lalitpur, Nepal', '9841789233', 'sahaz@gmail.com_agro_expert.jpg', 'Alooo \nTamatar \nCauli', 'Sipadole\nWard no 2\n22.5 bigha 2 kathha', '', '', '2015/08/25, 03:52 PM', 'farmer'),
(17, 'krishak1@gmail.com', '7694f4a66316e53c8cdd9d9954bd611d', 'krishak1', 'male', 'q', '12', 'krishak1@gmail.com_one.gif', '', '', '', '', '2015/08/25, 03:53 PM', 'farmer'),
(18, 'krishak4@gmail.com', 'f1290186a5d0b1ceab27f4e77c0c5d68', 'krishak4', 'female', 'w', '123', 'default_female.jpg', '', '', '', '', '2015/08/25, 03:54 PM', 'farmer'),
(19, 'krishak5@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 'First Second third ', 'male', 'a', '1', 'default_male.jpg', '', '', '', '', '2015/09/07, 09:36 PM', 'farmer'),
(20, 'krishak6@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 'Ram raj Khanaayi', 'male', 'RamLkhanpur', '981273981237', 'krishak6@gmail.com_nepalagro_cgiar.jpg', '', '', '', '', '2015/09/07, 09:38 PM', 'farmer'),
(21, '89jiwanbr@gmail.com', 'c637da61da1ac1e5c143c5b980e2dab2', 'Zeewan Bhattarai', 'male', 'tokha', '9843328559', '89jiwanbr@gmail.com_DSCF2921.JPG', '', '', '', '', '2015/09/09, 12:29 AM', 'farmer');

-- --------------------------------------------------------

--
-- Table structure for table `fertilizer`
--

CREATE TABLE IF NOT EXISTS `fertilizer` (
`id` int(11) NOT NULL,
  `fertilizer_name` varchar(255) NOT NULL,
  `fertilizer_image` varchar(255) NOT NULL,
  `fertilizer_description` longtext NOT NULL,
  `seo_title` varchar(100) NOT NULL,
  `seo_keyword` varchar(100) NOT NULL,
  `metadata` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `fertilizer`
--

INSERT INTO `fertilizer` (`id`, `fertilizer_name`, `fertilizer_image`, `fertilizer_description`, `seo_title`, `seo_keyword`, `metadata`) VALUES
(3, 'Urea', 'urea-material-test.jpg', '<p>Urea serves an important role in the&nbsp;metabolism&nbsp;of nitrogen-containing compounds by animals and is the main nitrogen-containing substance in the&nbsp;urine&nbsp;of&nbsp;mammals. It is a colorless, odorless solid, highly soluble in water and practically non-toxic (LD<sub>50</sub>&nbsp;is 15 g/kg for rats). Dissolved in water, it is neither&nbsp;acidic&nbsp;nor&nbsp;alkaline. The body uses it in many processes, the most notable one being nitrogen excretion. Urea is widely used in&nbsp;fertilizers&nbsp;as a convenient source of nitrogen. Urea is also an important&nbsp;raw material&nbsp;for the&nbsp;chemical industry.</p>\r\n', 'Urea | Fertilizer | Hamro Krishi', 'Urea Fertilizer Hamro Krishi', 'Urea Fertilizer Hamro Krishi'),
(4, 'DAP', 'dap.jpg', '<p style="text-align: justify;"><br />\r\n<br />\r\nDAP is used as a&nbsp;fertilizer.&nbsp;When applied as plant food, it temporarily increases the&nbsp;<a href="https://en.wikipedia.org/wiki/Soil" title="Soil">soil</a>&nbsp;<a href="https://en.wikipedia.org/wiki/PH" title="PH">pH</a>, but over a long term the treated ground becomes more&nbsp;acidic&nbsp;than before upon nitrification of the ammonium. It is incompatible with&nbsp;alkaline&nbsp;chemicals because its&nbsp;<a href="https://en.wikipedia.org/wiki/Ammonium" title="Ammonium">ammonium</a>&nbsp;ion is more likely to convert to&nbsp;<a href="https://en.wikipedia.org/wiki/Ammonia" title="Ammonia">ammonia</a>&nbsp;in a high-pH environment. The average pH in solution is 7.5&ndash;8.The typical formulation is 18-46-0 (18% N, 46% P<sub>2</sub>O<sub>5</sub>, 0% K<sub>2</sub>O).<a href="https://en.wikipedia.org/wiki/Diammonium_phosphate#cite_note-IPNI_-_DAP-5"><sup>[5]</sup></a></p>\r\n\r\n<p style="text-align: justify;">DAP is also used as a&nbsp;<a href="https://en.wikipedia.org/wiki/Yeast_assimilable_nitrogen" title="Yeast assimilable nitrogen">yeast nutrient in winemaking</a>&nbsp;and brewing&nbsp;<a href="https://en.wikipedia.org/wiki/Mead" title="Mead">mead</a>; as an additive in some brands of cigarettes purportedly as a<a href="https://en.wikipedia.org/wiki/Nicotine" title="Nicotine">nicotine</a>&nbsp;enhancer; to prevent afterglow in matches, in purifying&nbsp;<a href="https://en.wikipedia.org/wiki/Sugar" title="Sugar">sugar</a>; as a&nbsp;<a href="https://en.wikipedia.org/wiki/Flux_(metallurgy)" title="Flux (metallurgy)">Flux</a>&nbsp;for soldering tin, copper, zinc and brass; and to control&nbsp;<a href="https://en.wikipedia.org/wiki/Precipitation_(chemistry)" title="Precipitation (chemistry)">precipitation</a>&nbsp;of alkali-soluble and acid-insoluble colloidal dyes on&nbsp;<a href="https://en.wikipedia.org/wiki/Wool" title="Wool">wool</a>.</p>\r\n', 'DAP | Fertilizer | Hamro krishi', 'DAP Fertilizer Hamro krishi', 'DAP Fertilizer Hamro krishi'),
(5, 'Muriate of potash (MOP)', 'Red-Muriate-of-Potash-60-Agriculture-Fertilizer.jpg', '<h3 style="text-align: justify;">Muriate of potash (MOP)</h3>\r\n\r\n<p style="text-align: justify;">Muriate of potash (MOP) is most commonly called potash or potassium chloride (KCL).Potassium&#39;s largest application is as fertilizer, where it is the third largest crop nutrient group, next to nitrogen and phosphorous</p>\r\n\r\n<p style="text-align: justify;">Potash has been used for many centuries. Before the large scale production of potash from mineral salts was developed in Germany in the 19th century, potash was made by leaching the ashes of burned wood. Todays major reserves of potash are mined from ancient sea water deposits of evaporated inland oceans. Potash for fertilizer use contains between 60-62% K2O. Most potash deposits contain a mix of various minerals, but mostly sodium chloride (salt) and potassium chloride called sylvinite. The natural potash mineral is called sylvite.</p>\r\n', 'Muriate of potash | MOP | Fertilizer |Hamro Krishi', 'Muriate of potash MOP  Fertilizer Hamro Krishi', 'Muriate of potash MOP  Fertilizer Hamro Krishi'),
(7, 'Ammonium sulphate', 'Ammonium_Sulphate.jpg', '<h3 style="text-align: justify;">Ammonium Sulphate</h3>\r\n\r\n<p style="text-align: justify;">(NH<sub>4</sub>)<sub>2</sub>SO<sub>4</sub>, is an inorganic&nbsp;salt&nbsp;with a number of commercial uses. The most common use is as a soil fertilizer. It contains 21%&nbsp;nitrogen&nbsp;and 24%&nbsp;sulfur.The primary use of ammonium sulfate is as a&nbsp;fertilizer&nbsp;for&nbsp;alkaline soils. In the soil the&nbsp;ammonium&nbsp;ion is released and forms a small amount of acid, lowering the&nbsp;pH&nbsp;balance of the&nbsp;soil, while contributing essential&nbsp;nitrogen&nbsp;for plant growth. The main disadvantage to the use of ammonium sulfate is its low nitrogen content relative to ammonium nitrate, which elevates transportation costs.</p>\r\n\r\n<p style="text-align: justify;">It is also used as an agricultural spray&nbsp;adjuvant&nbsp;for water-soluble&nbsp;insecticides,&nbsp;herbicides, and&nbsp;fungicides. There, it functions to bind iron and calcium cations that are present in both well water and plant cells. It is particularly effective as an adjuvant for 2,4-D (amine),&nbsp;glyphosate, and glufosinate herbicides.</p>\r\n\r\n<p style="text-align: justify;">&nbsp;</p>\r\n\r\n<p style="text-align: justify;"><img src="file:///C:\\Users\\MI5\\AppData\\Local\\Temp\\msohtmlclip1\\01\\clip_image001.jpg" /></p>\r\n', 'Ammonium sulphate | (NH4)2SO4 | Fertilizer | Hamro Krishi', 'Ammonium sulphate (NH4)2SO4 Fertilizer Hamro Krishi', 'Ammonium sulphate (NH4)2SO4 Fertilizer Hamro Krishi'),
(8, 'SSP', 'Super-Phosphate-Fertilizer-Grey-Color-Ssp-Fertilizer.jpg', '<h3>SSP</h3>\r\n\r\n<ul>\r\n	<li>SSP is one of the cheapest forms of phosphate</li>\r\n	<li>Supplies sulphatesulphur and calcium.</li>\r\n	<li>The ratio of phosphorus and sulphur suits many crop and pasture needs.</li>\r\n	<li>Both the phosphorus and sulphur are in readily available forms.</li>\r\n	<li>Can be blended with other fertiliser products (except Urea &amp; DAP)</li>\r\n	<li>Can be stored easily for long periods, without taking up moisture.</li>\r\n	<li>Contains calcium and sulphur (mostly as gypsum) and helps keep soil in good shape by maintaining soil structure.</li>\r\n	<li>SSP provides a balance of P, S and Ca that mimics pasture growth requirements and is the best balanced P, S and Cafertiliser&nbsp;</li>\r\n</ul>\r\n\r\n<h3>Uses</h3>\r\n\r\n<p>The product is a low cost source of phosphorus and sulphur in a wide range of pasture &nbsp;situations. SSP is a traditional product for supplying phosphorus and sulphur to pastures, the main two nutrients required for pasture production. Generally mixed with Sulphate of Ammonia and Muriate of Potash, but can be blended with other fertilisers.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Storage and handling</h3>\r\n\r\n<ul>\r\n	<li>Can be stored for relatively long periods (0 &ndash; 6 months).</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Restrictions</h3>\r\n\r\n<ul>\r\n	<li>Does not take up moisture from the air.</li>\r\n	<li>Can be used in a wide range of spreading and sowing equipment.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Particles may deteriorate in time so long-term storage (&gt; 6 months) is not recommended.</li>\r\n	<li>Do not mix with Urea, DAP or products with a low critical humidity as products will react and become gluggy.</li>\r\n	<li>The portion of finer particles may cause problems such as blockages and uneven flow in some air-seeders designed for high analysis products.</li>\r\n	<li>Do not store in silos.</li>\r\n</ul>\r\n', 'SSP | Super Phosphate | Fertilizer | Hamro krishi', 'SSP Super Phosphate  Fertilizer  Hamro krishi', 'SSP Super Phosphate  Fertilizer  Hamro krishi');

-- --------------------------------------------------------

--
-- Table structure for table `harvest`
--

CREATE TABLE IF NOT EXISTS `harvest` (
`id` int(11) NOT NULL,
  `farmers_id` int(11) NOT NULL,
  `entry_date` varchar(50) NOT NULL,
  `harvest_name` varchar(255) NOT NULL,
  `harvest_description` longtext NOT NULL,
  `harvest_image` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `harvest`
--

INSERT INTO `harvest` (`id`, `farmers_id`, `entry_date`, `harvest_name`, `harvest_description`, `harvest_image`) VALUES
(6, 16, '2015/09/06, 01:38 PM', 'Aloo ko kheti', 'Ram Sharan Kanahiya\n\nSex : male\n\nAddress : Lalitpur, Nepal\n\nPhone : 9841789233\n\nEmail : sahaz@gmail.com\n\nFarming Area : Sipadole Ward no 2 22.5 bigha 2 kathha\n\nMajor Crop : Alooo Tamatar Cauli', 'sahaz@gmail.com_employement.jpg'),
(7, 16, '2015/09/07, 02:00 PM', 'Tamatar ko kheti', 'Tamtar Tamtar Tamtar Tamtar Tamtar Tamtar Tamtar Tamtar Tamtar Tamtar Tamtar Tamtar Tamtar Tamtar Tamtar Tamtar Tamtar Tamtar Tamtar Tamtar Tamtar Tamtar Tamtar Tamtar Tamtar Tamtar Tamtar ', 'sahaz@gmail.com_worldwildlife.jpg'),
(8, 16, '2015/09/08, 11:41 AM', 'Mero Ghark ko Bari Ma Gareko Kheti', 'Hijo ek bari makai ropiyo', 'sahaz@gmail.com_');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE IF NOT EXISTS `help` (
`id` int(11) NOT NULL,
  `help_section` varchar(100) NOT NULL,
  `help_description` longtext NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`id`, `help_section`, `help_description`) VALUES
(1, 'fertilizer', 'kjahsjkdhajksd\nakjkahskjasd\nkadkjahdkjahdk kahskjdha sh kjashd kkjh  h akjsdhkahdskh kahdk hkjdsh khak hkahk hk hkah ka\n\n\nkadkjahdkjahdk kahskjdha sh kjashd kkjh  h akjsdhkahdskh kahdk hkjdsh khak hkahk hk hkah kakadkjahdkjahdk kahskjdha sh kjashd kkjh  h akjsdhkahdskh kahdk hkjdsh khak hkahk hk hkah kakadkjahdkjahdk kahskjdha sh kjashd kkjh  h akjsdhkahdskh kahdk hkjdsh khak hkahk hk hkah kakadkjahdkjahdk kahskjdha sh kjashd kkjh  h akjsdhkahdskh kahdk hkjdsh khak hkahk hk hkah kakadkjahdkjahdk kahskjdha sh kjashd kkjh  h akjsdhkahdskh kahdk hkjdsh khak hkahk hk hkah kakadkjahdkjahdk kahskjdha sh kjashd kkjh  h akjsdhkahdskh kahdk hkjdsh khak hkahk hk hkah ka');

-- --------------------------------------------------------

--
-- Table structure for table `krishi_news`
--

CREATE TABLE IF NOT EXISTS `krishi_news` (
`id` int(11) NOT NULL,
  `news_type` varchar(50) NOT NULL,
  `news_date` varchar(100) NOT NULL,
  `news_location` varchar(255) NOT NULL,
  `news_headline` varchar(255) NOT NULL,
  `news_body` longtext NOT NULL,
  `news_image` varchar(255) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `seo_keyword` varchar(255) NOT NULL,
  `metadata` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `krishi_news`
--

INSERT INTO `krishi_news` (`id`, `news_type`, `news_date`, `news_location`, `news_headline`, `news_body`, `news_image`, `seo_title`, `seo_keyword`, `metadata`) VALUES
(1, 'samachar', '14th Jestha 2000034', 'Lalitpur, kathmandu', 'Koshi people plat a new type of rice ', 'Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice \nKoshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice \nKoshi people plat a new type of rice Koshi people plat a new type of rice Koshi people plat a new type of rice ', 'irri org.jpg', 'Koshi people plat a new type of rice ', 'Koshi people plat a new type of rice ', 'Koshi people plat a new type of rice '),
(2, 'story', '17th August, 2007', 'Lalitpur, Kathmandu', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque euLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque euLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque euLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque euLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus', 'Nepal_Chilies_in_basket E.jpg', 'news 2', 'news 2', 'news 2'),
(3, 'story', '4th July, 2014', 'Palpa', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.', 'AFPGetty-521161002.jpg', 'news 3', 'news 3', 'news 3'),
(4, 'samachar', '5th December, 2008', 'Hattiban, Lalitpur', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.', 'worldwildlife.jpg', 'news 4', 'news 4', 'news 4'),
(5, 'story', '09/09/2015', 'Tokha', 'Francois Driard''s Slice of Heaven', 'Cheese, wine, and a friend must be old to be good. This old Cuban proverb is one of Franois Driards favorites.\r\n\r\n The Himalayan French Cheese co-founder has an interesting take on the issue of cheese and friends. For someone with a cheese obsession as acute as his, you would think perhaps he would have a favorite.\r\n\r\nI dont have a favorite cheese, no. I mean its like asking who is my best friend? I dont have one. I like many cheeses the same for their qualities, much like I like many friends for their qualities.\r\n\r\nLucky friends.\r\nBut, unlike the proverb, cheese doesnt necessarily have to be old to be good as evidenced by the companys bestseller, the Tomme de Savoie, taking just one month to mature. \r\n\r\nWhen you first meet Driard, youre immediately taken with his energy and enthusiasm, particularly impressive given how hard the man works. He has all the charm of a French country boy, the only difference being his country of choice is Nepal, not France.\r\n\r\nIt may come as a surprise, especially after youve become deliciously acquainted with his cheeses, he has only held his knowledge of the tricky process behind cheese-making for a mere few years. In fact, living and working in Nepal on a cheese farm was never part of Driards original plan. I was a city guy, like you! Hailing from the land of fine cheeses the 31-year-old has a background in business studies and journalism, a far cry from the farm life he has settled into now. \r\n\r\nWhen Driard hit Nepal, he immediately fell in love with the country.\r\nI came in Nepal in 1996 for the first time for tourism and was quickly struck by the harmony of the people, the landscape, the nature, and the climate. I loved the monsoon which remains my favorite season. Just the year before, in 1995, I had gone to do volunteering in Mali and had loved it that too, but Kathmandus architecture, and the smiles of people touched me even more. I might still go and build a farm in Mali one day though.   \r\n\r\nBesides the sultry monsoon months, he even liked yak cheese to a certain extent. However, the one thing he missed from his homeland was the range of beautiful cow milk cheeses he wasnt able to find in the Himalayas. One day, during a trip to Bhat-Bhateni supermarket, he noticed some fruit juice from South Africa and wondered why, when Nepal with rich resources of its own, someone hadnt taken it upon themselves to make French produce? \r\n\r\nSo, being the resourceful and driven fellow he is, he thought - why not make his own?\r\n\r\nI want to make meat and cheese because thats all I eat. I dont do veg, he says with a highly contagious grin, which has been his ticket out of many a sticky situation. \r\n\r\nOn December 15, 2007,  Driard produced his first cheese. Exactly one month after maturing in the cave, this cheese was sold. As previously mentioned, one of the many advantages of the cheese is its short maturation time, each disc of Tomme de Savoie being ready for the platter after just one month. But when you taste Himalayan French Cheese, this swiftness is not at all apparent. On the palate, the cheese tastes much more matured. Semi-firm in its texture, the Tomme de Savoie gets its name from its origin in the valley of the Savoie in the French Alps. Driard modestly says it is an easy cheese to make, but when he explains the process it doesnt seem quite so. \r\n\r\nWe have to worry about bacteria. I make this cheese as it only takes an hour or so to make, from milk to mould. So theres no chance for bacteria to invade. First we milk the cows, then we mix with milk from the night before along with the rennet and some curd, leave it for 35 minutes, cut it, mix again, then put it in the mould. We turn it every two hours to expel the whey, salt it once on one side then salt it again on the other 24 hours later.\r\n\r\nFrom this point on, the cheese takes 30 days to mature in the farms moist, temperature-controlled cave. \r\n\r\nThe cave is naturally cold during the winter, but we have to put AC in it during the summer. We will build the next farms cave deeper underground.\r\n\r\n\r\nDue to the careful control of the humidity, a fine fungus forms on each cheese, which is brushed every two days, taking on the tiny caves unique aroma to form a thick, hard rind.\r\n\r\nOf the rind, Driard prefers to eat this along with the cheese. Yeah, some people say to eat the rind takes away the flavor from the cheese, but I like it.\r\n\r\n  He would like to produce good quality Parmigiano Reggiano one day (a hard, aromatic cheese that takes a whopping 16 liters of cows milk to produce one kilo of cheese), yet with each batch taking three years to reach maturation, he believes hes not quite patient enough for that yet.\r\n\r\n\r\nI would also like to try to make the Vacherin Mont dOr one day, he says as he opens one of his many cheese-making books and points out the cheese in question.\r\n\r\nIts so soft, you open the rind and spread it on bread like a fondue. Sounds like the sort of devilishly decadent cheese that would be enough to put a twinkle in the eyes of even those suffering severe lactose-intolerance. \r\n\r\nBut given Nepals electricity shortage and the extended period the cheese takes between milk and mould (compared with the Tomme), he is doubtful it will be possible to avoid exposing the cheese to airborne bacteria at present. But the charismatic Driard has enough Gallic charm to achieve just about anything he sets his mind to.\r\n\r\nDepending on demand, however, Himalayan French Cheese occasionally releases rare Old Reserve Nepali \r\nCheese, matured for a longer period yet priced only slightly higher than its younger counterpart.\r\n\r\n\r\nDriard has also recently returned from a two month sojourn to France to learn more about cheese and sausage and has now expanded his repertoire to include three new cheeses and two sausages.\r\n\r\nThe Saint Marcellin (or petit cheese) is a soft, un-pressed cheese originating from Frances Dauphin region. Another sure triumph-in-the-making is the Saint Nectaire, a hard, semi-pressed cheese which takes on a subtle spice and nutty flavor. Also on the market is a range of spreadable ricottas, as well as wet and dry pork sausages.\r\n\r\n\r\nWhichever cheese you choose, it goes without saying Driards is the only cheese of its kind in Nepal. Though he plans to produce even more varieties of French cheese in the future (maybe even the ubiquitous Parmigiano Reggiano), Himalayan French Cheese is doing  roaring business at the moment, its clientele including the European Bakery (Baluwatar), Chez Caroline (Baber Mahal), Nina & Hager (Jawalakhel), Hermann Helmers (Jhamsikhel), as well as feeding the happy bellies of the French Embassys fortunate staff. Top-end hotels such as Hyatt, Dwarika and Gokarnas former Le Meridien also feature it on their breakfast buffet.\r\n\r\nTo try before you buy, head to the organic market in Summit Hotels idyllic gardens on a Sunday morning, wherein Driard or his super-hospitable partner in cheese, Binod Neupane, will offer you a slice atop freshly-baked bread. Like the way your taste buds react? Buy as little or as much as you like. \r\n\r\nSo how does Driard see the future of Himalayan French Cheese? Like everyone in Nepal, and indeed the world, money has been tight during this stiff global economic crisis. And hes also restricted by a particularly nasty strain of Catch-22 in business, you need to spend money to make money. First, he plans to expand to provide his existing cows with more grassland on which to graze the day away. A happy cow is a productive cow. But with the price of property in Nepal increasing almost as rapidly as the temperature decreases in the lead-up to the chilly winter months, he is having difficulty finding a suitable plot.\r\n\r\nBut where theres a will, theres a way. And if anyone can find a way, its Driard. \r\nIn the meantime, the farm he, his partners and host of workers built from scratch is just beautiful. Home to 90-plus animals, the farm is a menagerie to say the least. Besides cows, geese, ducks, lambs, pigs, dogs, rabbits, chickens and a cat, birds and all manner of creepy-crawlies help make up the harmonious eco-system. A modern day Noahs ark, even those animals whose procreation does not directly affect the running of the farm and its financial gains have at least one counterpart of the opposite sex. In fact, at the time of interview, Driard was currently seeking a girlfriend for his dog  wild, but loyal and loving regardless. He is an animal-lover and strongly belives    that each animal should be paired up, Just like people, you know? That being said, just like a carefully arranged marriage, he wont settle for just any old dog and had interviewed several maybes, waiting for just the right one to come along for his best friend. Once he has shifted to the new plot, control of his existing farm will be turned over to his equally driven sister, Pauline, who plans to host visitors, bed-and-breakfast style, in the magical location overlooking the Kathmandu Valley.Located on a hillside in Tokha, Chandeswhori (north of the Ring Road), the farm is humble, with a country charm that could place it in Nepal or France. Visitors are struck by the tranquility of the place, close, yet a world away from the chaos and traffic of Kathmandu. Finding the farm is a bit tricky and best left to Driard to explain. Visitors are welcome, a tour and tasting costing around Rs 1,000. But be warned, there are no direct roads, and getting there involves a 10-minute climb on a steep and narrow path through dense forest leaping across streams and scaling rocky outcrops.The nimble Driard has made the journey hundreds of times and navigates the path easily. He does so with the aforementioned eternal energy and enthusiasm, also apparent in his love for his Nepalese home - his own slice of heaven.', 'people-Francoise-02.jpg', 'Francois Driard''s Slice of Heaven', 'Francois Driard''s Slice of Heaven', 'Francois Driard''s Slice of Heaven');

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE IF NOT EXISTS `maps` (
`id` int(11) NOT NULL,
  `maps_name` varchar(255) NOT NULL,
  `maps_image` varchar(255) NOT NULL,
  `maps_description` longtext NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `seo_keyword` varchar(255) NOT NULL,
  `metadata` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `maps`
--

INSERT INTO `maps` (`id`, `maps_name`, `maps_image`, `maps_description`, `seo_title`, `seo_keyword`, `metadata`) VALUES
(5, 'Ginger', 'ginger.jpg', '<h3>Ginger</h3>\r\n\r\n<p style="text-align: justify;">Ginger is an agro-based product and an important spice crop, traditionally grown in the mid-hills of Nepal. It is estimated that over 66,000 households in the country cultivate ginger. It has a great impact on smallholder farmers. Ginger is also widely known for its use to treat loss of appetite, nausea and vomiting. Globally, Nepal ranks fifth in ginger production with more than 17,000 tons a year (FAO, 2011). It exports the product mainly to India, mostly in fresh form. It also exports sutho, the traditionally dried form of ginger, in lesser quantity. In recent times, organically certified ginger, though in negligible quantity, is exported to European markets.</p>\r\n', 'Ginger | MAPs | Hamro krishi', 'Ginger MAPs Hamro krishi', 'Ginger MAPs Hamro krishi'),
(6, 'Chiuri', 'Butter Tree.jpg', '<h3 style="text-align: center;">Chiuri</h3>\r\n\r\n<p style="text-align: justify;">Chiuri, also known as Nepali butter tree, has become renowned for its medicinal property as well as its lower adverse environmental impact. Nepal currently has an estimated 5.6 million chiuri trees in fruit-bearing stage. Oil extracted from chiuri seeds is widely used in cooking vegetable curries, making candles for religious purposes and in treating ailments. Chiuri oil is also increasingly used as a substitute for animal fats/ imported oils in locally made soaps. Since the demand for herbal soap is increasing, soap making offers a great income generating opportunity for women and other economically marginalised groups. However, commercial use of chiuri so far is limited to manufacturing a small quantity of herbal soaps for the local market. It still remains an underutilised product in the country</p>\r\n', 'Chiuri | MAPs | Hamro Krishi', 'Chiuri  MAPs Hamro Krishi', 'Chiuri  MAPs Hamro Krishi'),
(7, 'Chamomile', 'Chamomile_(c)_Bob_Gibbons_Plantlife_lo-res.jpg', '<h3>Chamomile</h3>\r\n\r\n<p style="text-align: justify;">As commercial farming in Nepal gradually gains momentum, the demand of chamomile tea is increasing in both the local and international markets. Chamomile tea helps trigger the anti-bacterial activity of the body and is used even by hospitals to boost the immune system. It is commonly used as a sleep inducer and its oil is an effective remedy for inflammation, or skin ailments like acne. It also easily blends with other herbs to cure certain ailments - if mixed with lemongrass, it helps relax nerves, and with menthe, it cures different digestive problems.</p>\r\n', 'Chamomile | MAPs | Hamro Krishi', 'Chamomile MAPs  Hamro Krishi', 'Chamomile MAPs  Hamro Krishi'),
(8, 'Lemongrass', 'lemongrass.jpeg', '<h3>Lemongrass</h3>\r\n\r\n<p>Lemongrass is a perennial and intensely fragrant herb, native to Asia, and widely cultivated in Nepal. It helps to increase perspiration and alleviates fever, and acts as a diuretic to ease urination and to relieve retained water. The plant is well-known for its invigorating and antiseptic properties, to ease indigestion and stomach discomfort, and as an excellent anti-depressant. It helps tone and fortify the nervous system and can be used during bathing to sooth muscular nerves and pain.</p>\r\n', 'Lemongrass | MAPs | Hamro Krishi', 'Lemongrass MAPs Hamro Krishi', 'Lemongrass MAPs  Hamro Krishi'),
(9, 'Mentha', 'Mint_Spearmint.jpg', '<h3>Mentha</h3>\r\n\r\n<p style="text-align: justify;">Mentha, also called peppermint, is used for producing menthol oil. The latter has several industrial uses, as a fragrance component in soaps, detergents, toothpastes, and cosmetics or perfumes. The medicinal plant is used in cough syrups or pills, and herbal teas. It benefits the nervous system and is useful in treating stress-related conditions such as headache, insomnia and nervous tension. Often, it is also used to cure skin problems such as acne, boils and ulcers or to stimulate circulation in order to relieve sore muscles, arthritis, rheumatism and sprains. Peppermint tea enhances the immune system and is used to treat colds, flu and infections.</p>\r\n', 'Mentha | MAPs | Hamro Krishi', 'Mentha MAPs Hamro Krishi', 'Mentha MAPs Hamro Krishi'),
(10, 'Nardostachysjatamansi', 'Nardostachys_grandiflora.jpg', '<h3>Nardostachysjatamansi</h3>\r\n\r\n<p style="text-align: justify;"><em>Nardostachysjatamansi</em>&nbsp;is a&nbsp;flowering plant&nbsp;of the&nbsp;honeysuckle family&nbsp;that grows in&nbsp;the&nbsp;eastern&nbsp;Himalayas,primarily&nbsp;in&nbsp;a&nbsp;belt&nbsp;through&nbsp;Kumaon,&nbsp;Nepal,&nbsp;Sikkim&nbsp;and&nbsp;Bhutan.&nbsp;The plant grows to about 1 m in height and has pink, bell-shaped flowers. It is found in the altitude of about 3000&ndash;5000 meters.&nbsp;Rhizomes&nbsp;(underground stems) can be crushed and distilled into an intensely aromatic amber-coloredessential oil, which is very thick in consistency. Nard oil is used as a&nbsp;perfume, an&nbsp;incense, a&nbsp;sedative, and an&nbsp;herbal medicine&nbsp;said to fight insomnia, birth difficulties, and other minor ailments.</p>\r\n', 'Nardostachysjatamansi | MAPs| Hamro krishi', 'Nardostachysjatamansi MAPs Hamro krishi', 'Nardostachysjatamansi  MAPs Hamro krishi'),
(11, 'Juniperusindica', 'Juniperus_communis_at_Valjala_on_2005-08-11.jpg', '<h3>Juniperusindica</h3>\r\n\r\n<p style="text-align: justify;">Juniperusindica(black juniper) is ajunipernative to high altitudes in theHimalaya, occurringfromthenorthernIndusValleyinKashmireasttowesternYunnaninChina.It is ofinterest as the highest altitudewoody plantknown, reported growing as high as5200 m in southernTibet; the lowest limit being 2600 m.</p>\r\n\r\n<p style="text-align: justify;">It is ashrubgrowing to 50-200cm tall, with largely horizontal branching. Theleavesare dark grey-green, dimorphic, with adult plants having mostly scale-like leaves 1-3mm long, while young plants have mostly needle-like leaves 5-8mm long, but needle-like leaves can also be found on shaded shoots of adult plants. The leaves are borne in whorls of three on strong stout main stem shoots, and opposite pairs on thinner, slower-growing shoots. It isdioecious, with male (pollen) and female (seed)coneson separate plants. The mature seed cones are ovoid,berry-like, 6-10mm long, glossy black, and contain a single seed; the seeds are dispersed bybirdswhich eat the cones, digest the fleshy cone pulp, and excrete the seeds in their droppings.</p>\r\n', 'Juniperusindica| MAPs | Hamro krishi', 'JuniperusindicaMAPs  Hamro krishi', 'JuniperusindicaMAPs  Hamro krishi'),
(12, 'Sugandha', 'sugandha-kokila.jpg', '<h3>Sugandha</h3>\r\n\r\n<p style="text-align: justify;">Sugandha&nbsp;is a Sanskrit name meaning &lsquo;Fragrant&rsquo;. The unique, rich, herbaceous, warm, camphoraceous and spicy aroma of SugandhaKokila essential oil is extracted from the dried berries of this plant, scientifically known as Cinnamomumglaucescens is a member of the Lauraceae family. The ancient Ayurvedic texts recommend the use of this oil as a natural tonic for the digestive system and the central nervous system.</p>\r\n\r\n<p style="text-align: justify;">Benefits:Alleviates pain and inflammation,Relieves stress,Supports the digestive system,Benefitting the chakras</p>\r\n', 'Sugandha | MAPs | Hamro Krishi', 'Sugandha MAPs Hamro Krishi', 'Sugandha MAPs Hamro Krishi'),
(13, 'Lichens', 'Letharia_vulpina_JHollinger_crop.jpg', '<h3 style="text-align: center;">Lichens</h3>\r\n\r\n<p style="text-align: justify;">Lichens occur fromsea levelto highalpineelevations, in a very wide range of environmental conditions, and can grow on almost any surfaceLichens are abundant growing on bark, leaves, mosses, on other lichens,and hanging from branches "living on thin air" (epiphytes) inrain forestsand intemperate woodland. They grow on bare rock, walls, gravestones, roofs, exposed soil surfaces, and in the soil as part of abiological soil crust.</p>\r\n\r\n<p style="text-align: justify;">Historically, lichens have had economic benefit. For many years, over different parts of the world, they have been a source of natural dyes for wool and fabric. These dyes were distinguished by the type of lichens used and the way the color was extracted. Lichen dyes are extracted by the boiling-water method or the fermentation method. Today, they are still used by local artisans as they demonstrate their crafts.</p>\r\n\r\n<p style="text-align: justify;">Some lichens have antibiotic properties that are valuable commercially. The genus<em>Usnea</em>is used in Europe in ointments and other commercial products and is said to aid healing in superficial wounds. Lichens have been used in such preparations as deodorants, laxatives, expectorants, tonics, and healing pastes throughout the years. Research with lichens around the world is suggesting these organisms hold promise in the fight against certain cancers and viral infections, including HIV.</p>\r\n', 'Lichens | MAPs| Hamro Krishi', 'Lichens MAPs Hamro Krishi', 'Lichens MAPs Hamro Krishi');

-- --------------------------------------------------------

--
-- Table structure for table `ourteam`
--

CREATE TABLE IF NOT EXISTS `ourteam` (
`id` int(11) NOT NULL,
  `about_us` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `seo_title` varchar(100) NOT NULL,
  `seo_keyword` varchar(100) NOT NULL,
  `metadata` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ourteam`
--

INSERT INTO `ourteam` (`id`, `about_us`, `image`, `seo_title`, `seo_keyword`, `metadata`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>', 'hamro krishi house.png', 'Hamrikrishi', 'Hamrikrishi', 'HamrikrishiHamrikrishiHamrikrishiHamrikrishi');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
`id` int(11) NOT NULL,
  `slider_image` varchar(100) NOT NULL,
  `image_description` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_image`, `image_description`) VALUES
(18, 'buddha.jpg', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu. Lorem ipsum d'),
(20, 'nature8_0.jpg', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu. Lorem ipsum d');

-- --------------------------------------------------------

--
-- Table structure for table `soil`
--

CREATE TABLE IF NOT EXISTS `soil` (
`id` int(11) NOT NULL,
  `place` varchar(100) NOT NULL,
  `dev_region` varchar(100) NOT NULL,
  `district` varchar(255) NOT NULL,
  `soil_type` int(11) NOT NULL,
  `avg_temp` int(11) NOT NULL,
  `avg_rainfall` int(11) NOT NULL,
  `place_image` varchar(255) NOT NULL,
  `nitrogen` int(11) NOT NULL,
  `phosphorous` int(11) NOT NULL,
  `potassium` int(11) NOT NULL,
  `mineral` longtext NOT NULL,
  `nutrient` longtext NOT NULL,
  `ph_value` varchar(255) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `seo_keyword` varchar(255) NOT NULL,
  `metadata` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `soil`
--

INSERT INTO `soil` (`id`, `place`, `dev_region`, `district`, `soil_type`, `avg_temp`, `avg_rainfall`, `place_image`, `nitrogen`, `phosphorous`, `potassium`, `mineral`, `nutrient`, `ph_value`, `seo_title`, `seo_keyword`, `metadata`) VALUES
(2, 'BAITADI', 'FWDR', 'Dadeldhura', 3, 45, 800, 'snv world.jpg', 45, 63, 34, 'kajsdhfkjasdf\nasdjfkhasdf\njasdhjkasldf           ', 'kajsdhfkjasdf\nasdjfkhasdf\njasdhjkasldf           ', '826387236', 'baitafi', 'kjashdkjash', 'lksjflkjasdljalsdkjaklsd           '),
(3, 'damak', 'EDR', 'Jhapa', 6, 12, 34, 'AFPGetty-521161002.jpg', 34, 23, 12, 'ajsfgd 12    ', 'ajgsdjh16    ', '23', 'asasd', 'asdasd', 'asdasdas    '),
(4, 'Kathmandu', 'CDR', 'Sindhuli', 3, 12, 12, 'ft photo diary.jpg', 12, 12, 12, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.   ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.   ', '12', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.   '),
(5, 'Sarangkot', 'WDR', 'Palpa', 5, 23, 12, 'Govinda.jpg', 78, 98, 86, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.    ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.    ', '12', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.    '),
(6, 'Bardiya', 'MWDR', 'Bardiya', 1, 23, 87, 'worldwildlife.jpg', 86, 7, 76, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.   ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.   ', '56', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.   '),
(15, 'Fertil', 'MWDR', 'Dang', 6, 777, 7, 'soilpng.png', 7, 7, 7, '7 ', '7 ', '7', '77', '7', '7 '),
(16, 'Simikot', 'MWDR', 'Jumla', 2, 5, 5, 'soil type.jpg', 5, 5, 5, '5 ', '5 ', '5', '5', '55', 'as '),
(17, 'Ghorahi', 'MWDR', 'Dang', 3, 67, 67, '10071.png', 67, 67, 67, 'gahsd ', 'asjhgd ', '67', 'jhg', 'jhg', 'jhg ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `access_level` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `address`, `email`, `password`, `access_level`) VALUES
(7, 'Sahaj Bhattarai', 'Dhumbarahi', 'sahaz@hk.com', '2aa5cfe1c46de36959e6aef0314cf663', 'Administrator'),
(9, 'Suman Shrestha', 'Bhaktapur', 'suman@hk.com', '2f78532bd6bd3aebcc37b0f70c9eecb3', 'Moderator'),
(10, 'Jiwan Bhattarai', 'Tokha,Kathmandu', 'jiwan@hk.com', 'fc15f282946c9bc972a318c9f94a6e52', 'Moderator'),
(11, 'Sirish Poudel', 'New Baneshwor, KTM', 'sirish@hk.com', '4265bc12c1f65e6ea1eabebac24a825c', 'Moderator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_data`
--
ALTER TABLE `all_data`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crops`
--
ALTER TABLE `crops`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmers_pictures`
--
ALTER TABLE `farmers_pictures`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmers_profile`
--
ALTER TABLE `farmers_profile`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fertilizer`
--
ALTER TABLE `fertilizer`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `harvest`
--
ALTER TABLE `harvest`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `krishi_news`
--
ALTER TABLE `krishi_news`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourteam`
--
ALTER TABLE `ourteam`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soil`
--
ALTER TABLE `soil`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_data`
--
ALTER TABLE `all_data`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `crops`
--
ALTER TABLE `crops`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `farmers_pictures`
--
ALTER TABLE `farmers_pictures`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `farmers_profile`
--
ALTER TABLE `farmers_profile`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `fertilizer`
--
ALTER TABLE `fertilizer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `harvest`
--
ALTER TABLE `harvest`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `krishi_news`
--
ALTER TABLE `krishi_news`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `ourteam`
--
ALTER TABLE `ourteam`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `soil`
--
ALTER TABLE `soil`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
