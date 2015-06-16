-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: sql303.byethost16.com
-- Generation Time: Mar 04, 2013 at 07:42 AM
-- Server version: 5.5.27-28.0
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `b16_12511303_advitiya`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `subtitle` mediumtext NOT NULL,
  `rules` longtext NOT NULL,
  `event` varchar(200) NOT NULL,
  `sor` mediumtext NOT NULL,
  `cor` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `subtitle`, `rules`, `event`, `sor`, `cor`) VALUES
(1, 'Project Exhibition and Competition', 'A platform to exhibit the innovative ideas of students in making hobby projects and win exciting prizes', '<ol>\r\n<li>Project can be of hardware/software.</li>\r\n<li>Maximum of two members per team is permitted. </li>\r\n<li>Synopsis template can be found <a href=SynopsisTemplate.doc>here</a>, filled template should be mailed to inspirekle@gmail.com on or before 10th of March. Confirmation will be sent of your project acceptance.</li>\r\n       <li> Equipmentâ€™s required for demonstration should be brought by the participants themselves.</li>\r\n       <li> One 5amps, 3 pin plugs will be provided to each model. Participants have to make their own arrangement for addition plug point [bring your own extension cord if required].</li>\r\n      <li> Project exhibition is going to be held for two days.</li>\r\n     <li> At the end of the second day winners will be declared.<li>\r\n\r\n</ol>\r\n', 'main', 'Mr.Chandan P<br>Miss. Nivedita S', 'Keshav<br/>9538650838<br/>keshav.katwe@gmail.com'),
(2, 'IT Treasure Hunts', 'Treasure Hunt is a brain game designed to strengthen visual memory.', '<ol>\r\n<li>Time limit will be set.</li>\r\n<li>Maximum of 3 members per team.</li>\r\n<li>Each team shall be provided with Clues which shall lead them to various â€œhidden checkpointsâ€ spread through-out the collegeâ€¦</li>\r\n<li>The location of each checkpoint shall be in the form of a riddle or a clue which will lead the team to the next checkpoint, the teams shall search for these Riddles/Clues at the previous checkpoint. </li>\r\n<li>At each Checkpoint the number of clues provided shall be 1 less than the number of teams, thus eliminating the last team to arrive that checkpoint.</li>\r\n<li>The team that successfully manages to decipher all the clues & reach the last checkpoint wins.</li>\r\n</ol>', 'main', 'Mr.Naveen NM<br>Mr.Nagaraj Gadagin', 'Vinay Walvekar<br/>9738348060<br/>vinay.walvekar@gmail.com'),
(3, 'Real Angry Birds', 'Play your favorite app game in real life with the Angry Birds: Knock on Wood Game! The age-old battle between Angry Birds and the egg-stealing pigs continues, and the birds will have their revenge.', '<ol>\r\n<li> The survival of the Angry Birds is at stake. </li>\r\n<li> Dish out revenge on the green pigs who stole the Birds eggs.</li>\r\n<li>  Use the unique destructive powers of the Angry Birds to lay waste to the pigs fortified castles. </li>\r\n<li>  Gain exciting gifts </li>\r\n\r\n<ol/>\r\n', 'fun', 'Chandan Purohit', 'Keshav M Katwe<br/>9538650838<br/>keshav.katwe@gmail.com'),
(4, 'Galli Cricket', 'Galli cricket is a stripped-down version of the international sport of cricket, popular across the South Asia and in other cricket-playing nations. In the countryside, dried lakes and river beds are often used as playgrounds for cricket.', '<ol>\r\nTeams\r\n</ol>', 'fun', 'Nagaraj', 'Vinay Walvekar<br/>9738348060<br/>vinay.walvekar@gmail.com'),
(5, 'Lan War - Counter Strike', 'Counter-Strike is a first-person shooter in which players join either the terrorist team, the counter-terrorist team, or become spectators. Each team attempts to complete their mission objective and/or eliminate the opposing team. Each round starts with the two teams spawning simultaneously.', '<ol>\r\n<li>Any of the following rules can be changed without prior notifications.</li>\r\n\r\n<li>General terms<ul>\r\n<li>The Counter-Strike PC game championship 4x4 (team play, 4 members per team).</li>\r\n<li>Game version - Counter-Strike 1.6.</li>\r\n<li>The Tournament Organizers reserves the right to cancel or modify the tournament rules if fraud, technical failures.</li>\r\n</ul>\r\n</li>\r\n\r\n<li>Tournament game rules<ul>\r\n<li>A game consists of 2 periods, each period including 8 rounds. One period as terrorists and the other as counter-terrorists for each team. </li>\r\n<li>In the incident of a tie, there will be a tie breaker match. </li>\r\n<li>A knife-round is used to decide which team plays Counter-Terrorist and which team plays Terrorist. </li>\r\n<li>The winner of the knife-round picks their role before the first half of the match. Roles switch in the second half of the match. </li>\r\n</ul>\r\n</li>\r\n\r\n\r\n<li>Official tournament maps <ul>\r\n<li>Maps are presented at the play time by the organizer. </li>\r\n<li>A trail round for the teams are said to be played if they are unaware of map. </li>\r\n</ul>\r\n</li>\r\n\r\n\r\n<li>The accepted game server settings<ul>\r\n<li>In case of disconnection in first round while none of players were "killed" round is restart. </li>\r\n<li>In case of disconnection in any other round, game is paused until the last player has connected. </li>\r\n<li>In case of an intentional disconnection, the offending team might be announced the loser. </li>\r\n</ul>\r\n</li>\r\n\r\n<li>Cheating and Rule Violation<ul>\r\n<li>The Server Admin has the right to disqualify and dismiss any registered player from the tournament, at their discretion, at any stage of the tournament, for any reason, with no prior warning to the player. </li>\r\n</ul>\r\n</li>\r\n\r\n\r\n<li>The below items are considered as cheating<ol>\r\n<li>Using cheat software; </li>\r\n<li>Intentional disconnection; </li>\r\n<li>Using any settings other than standard and permitted; </li>\r\n</ol>\r\n</li>\r\n</ol>\r\n', 'main', 'Mr Girish Saunshi<br>Mr. Raghvendra K', 'Prithviraj Shiroor<br/>9738951291<br/>prinz.prithvi@gmail.com'),
(6, 'Lan War - Nfs Most Wanted', 'Most Wanted is like other Need for Speed games, where the player selects one car and races against a time limit or other racers to reach a destination. Police chases have once again been integrated into certain racing sessions, in which the police employ vehicles and tactics to stop the players car and arrest the player.', '<ol>\r\n<li>\r\nDAY 1: EASY AND ZIPPY (ELIMINATION ROUND) <ul>\r\n\r\n<li>There will be a circuit given to shortlist the number of participants. </li>\r\n<li>The races would be conducted with low incoming traffic. </li>\r\n<li>The winner of each race would proceed for the next round. </li>\r\n</ul>\r\n</li>\r\n<li>\r\nDAY 2: KNOCK â€˜EM OUT (SECOND ROUND) <ul>\r\n\r\n<li>Knock out races would be conducted with high traffic. </li>\r\n<li>The winners will qualify for the final round. </li>\r\n</ul>\r\n</li>\r\n<li><ul>\r\nRACE TO THE FINISH (FINAL ROUND) \r\n\r\n<li>A final sprint race with high traffic will be held to decide the ultimate winner. </li>\r\n</ul>\r\n</li>\r\n<li> PRE â€“ REQUISITES: \r\n<ul>\r\n<li>Each race would have a maximum of 4 participants. Total 8 PCâ€™s would be used. </li>\r\n</ul>\r\n</li>\r\n</ol>\r\n', 'main', 'Mr Girish Saunshi<br>Mr. Raghvendra K', 'Prithviraj Shiroor<br/>9738951291<br/>prinz.prithvi@gmail.com'),
(7, 'Brain Bash (The IT Quiz)', 'Brain Bash (The IT Quiz)', '<ol>\r\n<li>Its a team event of two members, consisting of three rounds.<ul>\r\n<li>Qualifying round.</li>\r\n<li>Tic â€“ Tac â€“ Toe round.</li>\r\n<li>Final round [khul jaa sim sim] surprise round. </li></ul>\r\n</li>\r\n<li>This event comprises of questions from the following topics: <ul>\r\n<li>Tech questions</li>\r\n<li>Puzzles </li>\r\n<li>Brain tests</li>\r\n<li>Analytical</li>\r\n<li>Encoding</li>\r\n<li>Mathematical</li></ul>\r\n</li>\r\n<li>The qualifying rounds consists of 30 multiple choice questions for duration of 40-45mins. </li>\r\n<li>20 qualifying teams will be selected from the first round. </li>\r\n<li>In the tic-tac-toe round, two teams will compete against each other, each pair of team will be provided with a 3 x 3 tic-tac-toe grid. <ul>\r\n<li>A question will be asked, the team which answers the question will be allowed to make a mark (x or o) on the grid. </li>\r\n<li>The first team that makes a line across the tic-tac-toe grid will be the qualifying team for the next round. </li></ul></li>\r\n<li>Final round. Khul jaa sim sim round (surprise round).<ul>\r\n<li>Rules will be announced on the spot.</li> </ul></li>\r\n<li>Use of calculators, mobiles is prohibited.</li>\r\n</ol>\r\n', 'main', 'Miss.Netravathi U<br>Mrs. Veena M', 'Shreekanth Hosamani<br>Karuna K.S<br><br>'),
(8, 'Paper Presentation', 'Paper Presentation', '<ol>\r\n<li>The students should ensure that the paper is relevant to the topics specified           below. </li>\r\n<li>There can be maximum of 2 authors for one paper. </li>\r\n<li>The paper should be in IEEE format and maximum of 8 pages. </li>\r\n<li>Candidates are advised to mail the complete paper in IEEE format by 05th march 2013 to advitiya2013.ise@gmail.com</li>\r\n<li>The shortlisted candidates will be informed through Mail by 10th march 2013    and they need to send reply confirming their participation. </li>\r\n<li>The Registration fees is rupees 300/- per participant. Registration fee will be     applicable for 3 events which should be paid on or before 15th march 2013. </li>\r\n<li>The selected team has to bring soft copies of ppts in CD and 2 hard copies of    paper at the time of presentation. </li>\r\n<li>There will be first, second and third prizes and other candidates will get   participation certificates. </li>\r\n<li>The participants should come with college ID Card. </li>\r\n<li>The teams will get 8-10 minutes to present their paper which can be followed by queries session by judges. </li>\r\n<li>Reviewers and committee decisions are final. </li>\r\n<li>Registration fee includes registration kit, breakfast, lunch, accommodation, participation certificates. </li>\r\n<li>Topics<ul>\r\n\r\n\r\n<li>Nano Robotics</li>\r\n<li>Robotics, Dynamics and Control</li>\r\n<li>Data mining and Data warehouse</li>\r\n<li>Image processing and Applications</li>\r\n<li>Cloud computing and Applications</li>\r\n<li>Artificial Intelligence</li>\r\n<li>3D photography</li>\r\n<li>Brain Fingerprinting</li>\r\n<li>Cyborgs</li>\r\n<li>Cyber crimes and security</li>\r\n</ul>\r\n</li>\r\n</ol>\r\n', 'main', 'Mrs.Deepa Garag<br>Mrs. Swati Sajjan', 'Priyanka Konesagar <br>Shruti Sajjanar<br><br>'),
(9, 'Debate', 'Debate', 'Debate', 'main', 'Mr.Mahantesh  S<br>Miss. Vibha Prabhu', 'Raksha Nadgir<br>Soumya<br><br>'),
(10, 'Lan War - FIFA', 'Lan War - FIFA', '<ol>\r\n<li> Players are allowed to change only the controls.</li>\r\n<li> Rounds will be 1-on-1.</li>\r\n<li> Preliminary Round:\r\n<ul> \r\n	<li> Any team is allowed</li>\r\n<li> In case of tie, game will move on to penalty shootout and sudden\r\ndeath.</li>\r\n<li>3 Substitutes</li>\r\n<li> Half time â€“ 2 minutes</li>\r\n</ul>\r\n</li>\r\n\r\n<li> Quarter/Semi Final:\r\n<ul> \r\n	<li> Any team is allowed</li>\r\n<li> In case of tie, game will move on to penalty shootout and sudden\r\nDeath. </li>\r\n<li>3 Substitutes </li>\r\n<li> Half time â€“ 4 minutes</li>\r\n</ul>\r\n</li>\r\n\r\n<li> The Finale:\r\n<ul> \r\n	<li> Only clubs are allowed</li>\r\n<li> In case of tie, game will move on extra time and then to penalty\r\nShootout .</li>\r\n<li>3 Substitutes</li>\r\n<li> Half time â€“ 8 minutes</li>\r\n</ul>\r\n</li>\r\n\r\n\r\n</ol>\r\n', 'main', 'Mr Girish Saunshi<br>Mr. Raghvendra K', 'Sohan.Huilgol<br>Rehaman Namazi<br><br>');

-- --------------------------------------------------------

--
-- Table structure for table `party`
--

CREATE TABLE IF NOT EXISTS `party` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `collage` text NOT NULL,
  `branch` text NOT NULL,
  `email` mediumtext NOT NULL,
  `ph` text NOT NULL,
  `events` mediumtext NOT NULL,
  `acc` tinytext NOT NULL,
  `money` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `party`
--

INSERT INTO `party` (`id`, `name`, `collage`, `branch`, `email`, `ph`, `events`, `acc`, `money`) VALUES
(1, 'Bhushan H Deshpande', 'Moodlakatte Institute of Technology, Kundapura', 'Ec', 'bhushanhd701@gmail.com', '9739278169', '<li>Fifa</li><li>Paper Presentation</li>', 'No', '300'),
(2, 'KIRAN M KESHYAGOL', 'AITM BELGAUM', 'EE', 'kirankeshyagol2393@gmail.com', '8147350102', '<li>Paper Presentation</li>', 'No', '300'),
(3, 'Saraswati K Shirsangi', 'BVB', 'EE', 'saraswatiks6@gmail.com', '9035570017', '<li>Project competition</li><li>Paper Presentation</li><li>Debate competition</li>', 'No', '300'),
(4, 'Amruta A Sannake', 'KLE Dr. M.S.Sheshgiri College of Engineering & Technology', 'Cse', 'sannake.amruta@gmail.com', '9019383930', '<li>Paper Presentation</li>', 'No', '300'),
(5, 'RAKESH PALUKURI', 'ST.MARY''S ENGINEERING COLLEGE CHEBROLU', 'Ec', 'rakesh.pr0944@gmail.com', '8686642041', '<li>Paper Presentation</li>', 'No', '300'),
(6, 'REKHA KULKARNI', 'KVG ENGG COLLEGE SULLIA', 'Ec', 'mukund.rekha20@gmail.com', '9620529380', '<li>Paper Presentation</li>', 'No', '300'),
(7, 'Rahul Avaghan', 'BVB College Of Engg & Tech', 'Ec', 'rahul4862@gmail.com', '8892888371', '<li>Project competition</li><li>Paper Presentation</li><li>Brain Bash</li>', 'No', '300'),
(8, 'Shruti Joshi', 'Goa College of Engineering', 'Other', 'tutyvmj@gmail.com', '9545383983', '<li>Paper Presentation</li>', 'Yes', '300'),
(9, 'Pragati Govekar', 'Goa College of Engineering', 'Other', 'pragati9126@gmail.com', '9923403948', '<li>Paper Presentation</li>', 'No', '300'),
(10, 'Prajakta Nigalye', 'Goa College of Engineering', 'Other', 'pnigalye@gmail.com', '9764846999', '<li>Paper Presentation</li>', 'Yes', '300'),
(11, 'FEROZKHAN', 'KONGU ENGG COLLEGE', 'Other', 'sunuappa@gmail.com', '9626510209', '<li>Paper Presentation</li>', 'Yes', '300'),
(12, 'TEJAS G R', 'Adichunchangiri institute of technology', 'Mech', 'tejudeepugr@gmail.com', '9686916497', '<li>Treasure Hunt</li><li>Paper Presentation</li><li>Brain Bash</li>', 'Yes', '300'),
(13, 'Ajay', 'Adichunchanagiri Institute of Technology,Chikamagalur', 'EE', 'ajay_bhat@live.in', '7204484142', '<li>Treasure Hunt</li><li>Paper Presentation</li><li>Brain Bash</li>', 'Yes', '300'),
(14, 'KOTE SREENIVASALU', 'DR.SAMUEL GEORGE INSTITUTE OF ENGINEERING & TECHNOLOGY,ANDHRA PRADESH', 'EE', 'SJAFFI@YAHOO.co.in', '9000484052', '<li>Paper Presentation</li>', 'Yes', '300'),
(15, 'Ashwini S Purohit', 'K L E Institute of Technology ,HUBLI', 'Ise', 'ashwinip62@yahoo.in', '9731138175', '<li>Treasure\nHunt</li><li>Paper Presentation</li><li>Brain Bash</li>', 'No', '300'),
(16, 'Santosh jadi', 'Gec haveri', 'Cse', 'Santosh.jadi@gmail.com', '9902268271', '<li>Treasure Hunt</li><li>Most Wanted</li><li>Brain Bash</li>', 'No', '300'),
(17, 'Asha', 'kleit', 'EE', 'ashaliar@gmail.com', '7795971750', '<li>Treasure Hunt</li><li>Brain Bash</li>', 'No', '300'),
(18, 'SOUMYA SHEKHARAGOUDA PATIL', 'SHRIDEVI INSTITUTE OF ENGINEERING AND TECHNOLOGY,TUMKUR', 'Cse', 'soumyapatil93@gmail.com', '8553882220', '<li>Paper Presentation</li><li>Brain Bash</li><li>Debate competition</li>', 'No', '300'),
(19, 'SOWMYA S', 'SHRIDEVI INSTITUTE OF ENGINEERING AND TECHNOLOGY,TUMKUR', 'Cse', 'soumya.jun18@gmail.com', '7829914419', '<li>Paper Presentation</li><li>Brain Bash</li><li>Debate competition</li>', 'No', '300'),
(20, 'ABHISHEK KUMAR', 'JNN College Of Engineering', 'Ec', 'abhishek.abhishekkumar63@gmail.com', '9449524554', '<li>Paper Presentation</li>', 'No', '300'),
(21, 'NILANJAN MUKHERJEE', 'JNN College Of Engineering', 'Ec', 'nilanjan1012@gmail.com', '8951090488', '<li>Paper Presentation</li>', 'Yes', '300');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
