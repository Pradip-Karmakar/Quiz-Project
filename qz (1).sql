-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2017 at 11:00 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qz`
--

-- --------------------------------------------------------

--
-- Table structure for table `round1q`
--

CREATE TABLE `round1q` (
  `id` int(20) NOT NULL,
  `question` longtext NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `answer` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `round1q`
--

INSERT INTO `round1q` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(12, 'At a conference, 12 members shook hands with each other before & after the meeting. How many total number of hand shakes occurred?', '132', '145', '143', '121', 1),
(13, 'If Bob sold 15 apples in a working week, what is the average number of apples he sells each day?', '18', '30', '15', '21', 3),
(14, 'The day after the day after tomorrow is four days before Monday. What day is it today?', 'Tuesday', 'Wednesday', 'Monday', 'Sunday', 3),
(15, '"Pig is to pork" as "Cow is to _____" ? ', 'Lamb', 'Beef', 'Stew', 'Cattle', 2),
(16, 'Forest is to tree as tree is to ?', 'Branch', 'Plant', 'Mangrove', 'Leaf', 4),
(17, 'If it takes 2 hours to drive to City A and the city is 120km away, what speed was the vehicle travelling at?', '60 kmph', '30 kmph', '80 kmph', '120 kmph', 1),
(21, 'The word PARTICULAR is the opposite of ?', 'Distinct', 'Vague', 'Exacting', 'Fussy', 2),
(19, 'Choose the word most similar to "Trustworthy"', 'Resolute', 'Reliable', 'Tenacity', 'Insolent', 2),
(20, 'If Sally sells more tickets than Betty and Betty sells more tickets than Jodie, who sells the most if we compare Sally and Jodie?', 'Sally', 'Batty', 'Joddy', 'None The Two', 1),
(22, 'The following series of numbers contains one number that does not fit the pattern set by the others.  What number does not fit? <br> 3, 5, 7, 11, 14, 17', '3', '5', '14', '11', 3),
(23, 'The words "inclusive" and "exclusive" have : ', 'The same meaning', 'Different meanings', 'An Opposite Meaning', 'An Appropriate Meaning', 3),
(25, 'A prisoner is told "If you tell a lie we will hang you; if you tell the truth we will shoot you." What can he say to save himself?', 'hang me', 'shoot me', 'dont hang me', 'dont shoot me', 4),
(26, 'In a row of trees, a tree is 7th from left end and 14th from right end. How many tree are there in the row ?', '18', '19', '20', '21', 3),
(27, 'B is twice as old as A but twice younger than F. C is half the age of A but is twice older than d. Who is the second oldest ?', 'B', 'F', 'C', 'D', 1),
(28, ' In a family there are husband wife, two sons and two daughters. All the ladies were invited to a dinner. Both sons went out to play. Husband did not return from office. Who was at home?', 'Only wife was at home', ' All ladies were at home', 'Only sons were at home', 'No body was at home', 4),
(29, 'Ramesh ranks 13th in the class of 33 students. There are 5 students below Suresh rankwise. How many student are there between Ramesh and Suresh ?', '12', '14', '15', '16', 2),
(30, 'If Football is called Cricket, Cricket is called Basketball, Basketball is called Badminton, Badminton is called Volleyball, Volleyball is called Hockey and Hockey is called Golf, then which of the following games is not played using a ball?', 'Volleyball', 'Basketball', 'Hockey', 'Cricket', 1),
(31, 'Which of the following operator takes only integer operands?', '+', '*', '/', '%', 4),
(32, 'It was Sunday on Jan 1, 2006. What was the day of the week Jan 1, 2010?', 'Sunday', 'Saturday', 'Friday', 'Thursday', 2),
(33, 'The ability to combine name and addresses with a standard document is called _________ .', 'document formatting', 'database management', 'mail merge ', 'form letters', 3),
(34, 'What is gutter margin?', 'Margin that is added to the left margin when printing', 'Margin that is added to right margin when printing', 'Margin that is added to the binding side of page when printing', 'Margin that is added to the outside of the page when printing', 3),
(35, '"Milind Panho" explaining the Buddhist doctrines in the form of a dialogue between Milind and his teacher Nagsena (the great Buddhist philosopher ) is in :', 'Sanskrit', 'Pali Language', 'Hindi', 'Santhali', 2),
(36, 'In 1724 the state of Hyderabad was founded by :', 'Nizam-ul-Mulk Asaf-Jah', 'Azim Jah Bahadur', 'Osman Ali Khan', 'Qamaruddin Khan', 1),
(37, 'Patents, Copyrights and Trademarks are', 'Current assets', 'Fixed assets', 'Intangible assets', 'Investments', 3),
(38, 'Where is the Railway Staff College located?', 'Pune', 'Vadodara', 'Goa', 'Delhi', 2),
(39, 'The headquarters of the National Power Training institute is located in ?', 'Pune', 'Bhopal', 'Faridabad', 'Lucknow', 3),
(40, 'The Indian Institute of Science is located at ?', 'Kerala', 'Madras', 'Bangalore', 'New Delhi', 3),
(41, 'You have four chains. Each chain has three links in it. Although it is difficult to cut the links, you wish to make a single loop with all 12 links. What is the fewest number of cuts you must make to accomplish this task?', '3', '4', '5', '12', 1),
(42, 'Who has been awarded the first lifetime Achievement Award for his/her contribution in the field of Cinema?', 'Ashok Kumar', 'Hou Hsio-hsein', 'Akiro Burosova', 'Bernardo Burtolucci', 1),
(43, 'Rhonda will go see ballet but not the opera. Her favorite number is eight and she doesn\'t like nine. She likes salmon but not trout. She hates Mondays and likes Wednesdays. Does she use a comb or a brush?', 'comb', 'brush', 'monday', 'wednesday', 1),
(44, 'What is the original name of akshay kumar.', 'Vishal kumar', 'Raj Shakher', 'Akshay kumar', 'Rajiv Bhatia', 4),
(45, 'What is the nick name of Priyanka Chopra.', 'Priya', 'Piggy Chops', 'Piyu', 'Pinku', 2),
(46, 'Mr. Brown was killed on Sunday afternoon. <br/>The Wife said, she was reading a Book.<br/> The Butler said, he was taking a shower.<br/> The Chef said, he was making breakfast.<br/> The Maid said, she was folding clothes. <br/>The Gardener said, he was planting tomatoes. <br/>Who Killed Him ?', 'wife', 'butler', 'chef', 'maid', 3),
(47, 'Who was the first Captain of Indian Cricket Team ?', 'K.R.Sharma', 'R.K.Varman', 'D.C.Khatri', 'C.K.Naidu', 4),
(48, 'The only Indian cricketer who have won four successive Man of the Match awards in One-day Internationals.', 'Sachin', 'Ganguly', 'Dravid', 'Lakshman', 2),
(49, 'The Smith family is a very wealthy family that lives in a big, circular home.<br/> One morning, Mr. Smith woke up and saw a strawberry jam stain on his new carpet.<br/> He figured out that everyone who was there that morning had a jam sandwich.<br/> By reading the following excuses, figure out who spilled the jam.<br/> Billy Smith: â€œI was outside playing basketball.â€<br/> The Maid: â€œI was dusting the corners of the house.â€<br/> Chef: â€œI was starting to make lunch for later.â€<br/> Who is lying?', 'smith	', 'maid ', 'chef', 'robber', 2),
(50, 'A boat has a ladder that has six rungs. Each rung is one foot apart. The bottom rung is one foot from the water. The tide rises at 12 inches every 15 minutes. High tide peaks in one hour.<br/> When the tide is at its highest, how many rungs are under water?', 'all rungs', 'higher rungs', 'lower rungs', 'none', 4),
(51, 'Five pigeons are sitting on a fence. The farmer comes out and shoots one. How many are left?', 'one', 'three', 'five', 'none', 4),
(52, 'Two women apply for a job. They are identical and have the same mother, father and birthday. The interviewer asks, "Are you twins?" to which they honestly reply, "No". <br/> How is this possible?', 'They are grand daugters.', 'They are twins sisters.', 'They are triplets sisters.', 'They are friends.', 3),
(53, 'What is the most populer drink in the world that does not contain alcohol?', 'Gin', 'Coffee', 'Cider', 'Alcopops', 2),
(54, 'Dose sound travel faster than water or steel?', 'water', 'steel', 'both', 'none', 2),
(55, 'What is the most common blood type in humans?', 'A', 'B', 'AB', 'O', 4),
(56, 'hich is the largest planet in our Solar System?', 'Saturn', 'Jupiter', 'Uranus', 'Neptune', 2),
(57, 'What is the only man made object that is observable from the moon?', 'Taj Majal', 'Great Wall of China', 'The Roman Colosseum', 'Machu Picchu', 2),
(58, 'In which country would one find 8 of the world\'s 10 highest mountains?', 'bhutan', 'china', 'nepal', 'India', 3),
(59, 'A plane crashed on the border or US and Canada. Where do they bury the survivors?', 'U.S', 'Canada', 'Nowhere', 'At their origin Countries', 3),
(60, 'Indian Navy Act was passed on ?', '1921', '1925', '1927', '1930', 3),
(61, 'The first president of the Republic of India was ?', ' V.V.Giri', 'Dr.Radhakrishnan', 'Zakir Hussain', 'Dr.Rajendra Prasad', 4),
(62, 'The first to establish regular trade with India was ?', 'Dutch', 'Portuguese', 'French', 'English', 2),
(63, 'The last Mughal Emperor was ?', 'Akbar', 'Babur', 'Bahadur Shah', 'Noor Jehan', 3),
(64, 'Who is 14 Prime Minister of India?', 'H. D. Deve Gowda', 'Narendra Modi', 'V. P. Singh', 'Manmohan Singh', 4),
(65, 'When was rupee symbol adopted?', '24 July 2011', '8 Aug 2010', '15 July 2012', '22 May 2011', 3),
(66, 'Which is the 2<sup>nd</sup> longest river in world ?', 'Nile', 'Yangtze', 'Mississippi ', 'Amazon', 4);

-- --------------------------------------------------------

--
-- Table structure for table `round1res`
--

CREATE TABLE `round1res` (
  `id` int(30) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `urname` varchar(255) NOT NULL,
  `tot` varchar(255) NOT NULL,
  `nota` varchar(255) NOT NULL,
  `atq` varchar(255) NOT NULL,
  `ra` varchar(255) NOT NULL,
  `wa` varchar(255) NOT NULL,
  `mark` int(20) NOT NULL,
  `time` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `round2q`
--

CREATE TABLE `round2q` (
  `id` int(20) NOT NULL,
  `question` longtext NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `answer` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `round2q`
--

INSERT INTO `round2q` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(2, 'A large volume of water is gushing through a pipe which narrows at the outlet. At which point, A, B, C or D will the water flow fastest?', 'B', 'A', 'D', 'c', 4),
(3, 'A blind man had only black or white socks. In his drawer he had 4 socks. He went to the drawer and took out 2 socks. The chances that he had a pair of white socks was 1/2. What were the chances that he had drawn out a pair of black socks?', 'Half', 'Zero', 'One Fourth', 'One', 2),
(4, 'A bag of potatoes weighs 50 lbs divided by half of its weight. How much does the bag of potatoes weigh?', '10 lb', '100 lb', '25 lb', '5 lb', 1),
(6, 'At college, 70% of the students studied Maths, 75% studied English, 85% studied French and 80% studied German. What percentage at least must have studied all 4?', '10', '20', '5', '30', 1),
(7, 'Every station on the railway system sells tickets to every other station. Some new stations were added. 46 sets of additional sets of tickets were required. How many new stations have been added? How many stations were there originally?', '3 new stations', '4 new stations', '1 new stations', '2 new stations', 4),
(8, 'various terms of an alphabet series are given with one or more terms missing as shown by (?). Choose the missing terms out of the given alternatives.<br/> BMO, EOQ, HQS, ? ', 'KSU', 'LMN', 'SOV', 'SOW', 1),
(9, 'In a party of 35 people there are twice as many women as children and twice as many children as men. How many of each are there?', '5 men, 20 children and 20 women.', '5 men, 10 children and 20 women.', '5 men, 10 children and 10 women.', '5 men, 20 children and 10 women.', 2),
(10, 'A card player holds 13 cards of four suits, of which seven are black and six are red. There are twice as many hearts as clubs and twice as many diamonds as hearts. How many spades does he hold?', '7', '6', '5', '8', 2),
(11, 'You have 59 cubic blocks. What is the minimum number that needs to be taken away in order to construct a solid cube with none left over?', '30', '31', '32', '33', 3),
(12, 'How many cases do you need if you have to pack 112 pairs of shoes into cases that each hold 28 shoes?', '11', '12', '8', '9', 3),
(13, 'Various terms of an alphabet series are given with one or more terms missing as shown by (?). Choose the missing terms   out of the given alternatives.<br/>AZ, GT, MN, ?, YB ', 'KF', 'RX', 'SH', 'TS', 3),
(14, 'A and B are young ones of C. If C is the father of A but B is not the son of C. How are B and C related ?', 'Niece and Uncle', 'Daughter and Father', 'Niece and Uncle', 'Daughter and Mother', 2),
(15, 'A man pointing to a photograph says. "The lady in the photograph is my nephewâ€™s maternal grandmother." How is the lady in the photograph related to the manâ€™s sister who has no other sister?', 'Mother in law', 'Cousin', 'Sister in law', 'Mother', 4),
(16, 'Of the following two statements, both of which cannot be true, but both can also be false. Which are these two statements ?<br/>I. All machines make noise<br/>II. Some machines are noisy<br/> III. No machine makes noise<br/> IV. Some machines are not noisy', 'I & II', 'III & IV', 'I & III', 'II & IV', 3),
(17, '3 pumps, working 8 hours a day, can empty a tank in 2 days. How many hours a day must 4 pumps work to empty the tank in 1 day?', '9', '10', '11', '12', 4),
(18, 'How many terms are there in 20, 25, 30......... 140', '22', '25', '23', '24', 2),
(19, 'The higher the wind speed and the longer the fetch or distance of open water across which the wind blows and waves travel, the ____ waves and the ____ energy they   process.', 'larger, more', 'larger, less', 'smaller, more', 'smaller, less', 1),
(20, 'Apartments in the Riverdale Manor cost less than apartments in The Gaslight Commons.<br/> Apartments in the Livingston Gate cost more than apartments in the The Gaslight Commons.<br/> Of the three apartment buildings, the Livingston Gate costs the most. If the first two statements are true, the third statement is', 'true', 'false', 'uncertain', 'none', 1),
(21, 'Four defensive football players are chasing the opposing wide receiver, who has the ball. Calvin is directly behind the ball carrier. Jenkins and Burton are side by   side behind Calvin. Zeller is behind Jenkins and Burton. Calvin tries for the tackle but misses and falls. Burton trips. Which defensive player tackles the receiver?', 'Burton', 'Zeller', 'Jenkins', 'Calvin', 3),
(22, 'A four-person crew from Classic Colors is painting Mr. Field\'s house. Michael is painting the front of the house. Ross is in the alley behind the house painting the   back. Jed is painting the window frames on the north side, Shawn is on the south. If Michael switches places with Jed, and Jed then switches places with Shawn, where   is Shawn?', 'in the alley behind the house', 'on the north side of the house', 'in front of the house', 'on the south side of the house', 3),
(23, 'In a four-day period Monday through Thursday each of the following temporary office workers worked only one day, each a different day. Ms. Johnson was scheduled to   work on Monday, but she traded with Mr. Carter, who was originally scheduled to work on Wednesday. Ms. Falk traded with Mr. Kirk, who was originally scheduled to work   on Thursday. After all the switching was done, who worked on Tuesday?', 'Mr. Carter', 'Ms. Falk', 'Ms. Johnson', 'Mr. Kirk', 4),
(24, 'Ms. Forest likes to let her students choose who their partners will be; however, no pair of students may work together more than seven class periods in a row. Adam   and Baxter have studied together seven class periods in a row. Carter and Dennis have worked together three class periods in a row. Carter does not want to work with   Adam. Who should be assigned to work with Baxter?', 'Carter', 'Adam', 'Dennis', 'Forest', 1),
(25, 'At the baseball game, Henry was sitting in seat 253. Marla was sitting to the right of Henry in seat 254. In the seat to the left of Henry was George. Inez was   sitting to the left of George. Which seat is Inez sitting in?', '251', '254', '255', '256', 1),
(26, 'Four friends in the sixth grade were sharing a pizza. They decided that the oldest friend would get the extra piece. Randy is two months older than Greg, who is   three months younger than Ned. Kent is one month older than Greg. Who should get the extra piece of pizza?', 'Robort', 'Greg', 'Ned', 'Kent', 3),
(27, 'The high school math department needs to appoint a new chairperson, which will be based on seniority. Ms. West has less seniority than Mr. Temple, but more than Ms. Brody. Mr. Rhodes has more seniority than Ms. West, but less than Mr. Temple. Mr. Temple doesn\'t want the job. Who will be the new math department chairperson?', 'Mr. Rhodes', 'Mr. Temple', 'Ms. West', 'Ms. Brody', 1),
(28, 'As they prepare for the state championships, one gymnast must be moved from the Level 2 team to the Level 1 team. The coaches will move the gymnast who has won the biggest prize and who has the most experience. In the last competition, Roberta won a bronze medal and has competed seven times before. Jamie has won a silver medal and has competed fewer times than Roberta. Beth has won a higher medal than Jamie and has competed more times than Roberta. Michele has won a bronze medal, and it is her third time competing. Who will be moved to the Level 1 team?', 'Roberta', 'Beth', 'Michele', 'Jamie', 2),
(29, 'Danielle has been visiting friends in Ridge-wood for the past two weeks. She is leaving tomorrow morning and her flight is very early. Most of her friends live fairly close to the airport. Madison lives ten miles away. Frances lives five miles away, Samantha, seven miles. Alexis is farther away than Frances, but closer than Samantha. Approximately how far away from the airport is Alexis?', 'nine miles', 'seven miles', 'eight miles', 'six miles', 4),
(30, 'Nurse Kemp has worked more night shifts in a row than Nurse Rogers, who has worked five. Nurse Miller has worked fifteen night shifts in a row, more than Nurses Kemp and Rogers combined. Nurse Calvin has worked eight night shifts in a row,less than Nurse Kemp. How many night shifts in a row has Nurse Kemp worked?', 'eight', 'nine', 'ten', 'eleven', 2),
(31, 'Children are in pursuit of a dog whose leash has broken. James is directly behind the dog. Ruby is behind James. Rachel is behind Ruby. Max is ahead of the dog walking down the street in the opposite direction. As the children and dog pass, Max turns around and joins the pursuit. He runs in behind Ruby. James runs faster and is alongside the dog on the left. Ruby runs faster and is alongside the dog on the right. Which child is directly behind the dog?', 'James', 'Ruby', 'Rachel', 'Max', 4),
(32, 'Fact 1: All drink mixes are beverages.<br/> Fact 2: All beverages are drinkable.<br/> Fact 3: Some beverages are red.<br/> If the first three statements are facts, which of the following statements must also be a fact?<br/>I: Some drink mixes are red.<br/> II: All beverages are drink mixes.<br/> III: All red drink mixes are drinkable.', 'I and II only', 'II only', 'I and III only', 'III only', 4),
(33, 'Fact 1: All chickens are birds.<br/> Fact 2: Some chickens are hens.<br/> Fact 3: Female birds lay eggs.<br/> If the first three statements are facts, which of the following statements   must also be a fact?<br/> I: All birds lay eggs.<br/> II: Some Hens are birds.<br/> III: Some chickens are not hens.', 'I only', 'II only', 'II and III only', 'None of the statements is a known fact.', 3),
(34, 'Fact 1: All hats have brims.<br/> Fact 2: There are black hats and blue hats. Fact 3: Baseball caps are hats.<br/> If the first three statements are facts, which of the following statements must also be a fact?<br/> I: All caps have brims.<br/> II: Some baseball caps are blue.<br/> III: Baseball caps have no brims.', 'I only', 'II only', 'II and III only', 'None of the statements is a known fact.', 4),
(35, 'Fact 1: Mary said, "Ann and I both have cats."<br/> Fact 2: Ann said, "I don\'t have a cat."<br/> Fact 3: Mary always tells the truth, but Ann sometimes lies.<br/> If the first three statements are facts, which of the following statements must also be a fact?<br/> I: Ann has a cat.<br/> II: Mary has a cat.<br/> III: Ann is lying.', 'I only', 'II only', 'I and II only', 'All the statements are facts.', 4),
(36, 'A toothpick is useful.<br/> Useful things are valuable.<br/> A toothpick is valuable.<br/> If the first two statements are true, the third statement is', 'true', 'false', 'uncertain', 'none', 1),
(37, ' 19) Three pencils cost the same as two erasers.<br/> Four erasers cost the same as one ruler.<br/> Pencils are more expensive than rulers.<br/> If the first two statements are true, the third statement is', 'true', 'false', 'uncertain', 'none', 2),
(38, 'All computer programs for a machine are called ________.', 'software', 'firmware', 'hardware', 'none of the above', 1),
(39, '.sea is extension of which file ?', 'Self Extracting Automative File', 'Self Extracting Archive', 'Solo Extracting Archive', 'Self Executable Archive', 2),
(40, 'Recently launched satellite by ISRO on which date?', 'Sep 9 2017', 'Aug 31 2017', 'Jun 06 2017', 'July 10 2017', 2),
(41, 'Documents, Movies, Images and Photographs etc are stored at a ?', 'Application Sever', 'Web Sever', 'Print Server', 'File Server', 4),
(42, 'Which of following is used in RAM ?', 'Conductor', 'Semi Conductor', 'Vaccum Tubes', 'Transistor', 2),
(43, 'Which of these Indian cities is closest to the Pakistani city of Lahore ?', 'Srinagar', 'Jaisalmer', 'Amritsar', 'Udhampur', 3),
(44, 'In July 2017, Narendra Modi Become the first Prime Minister to visit which country ?', 'Isreal', 'Jordan', 'Saudi Arab', 'Qatar', 1),
(45, 'Which of these gods is also known as Ramapati, Ramakant and Ramaraman ?', 'Ganesha', 'Vishnu', 'Brahma', 'Shiva', 2),
(46, 'Which of the following states does not border Myanmar ?', 'Manipur', 'Meghalaya', 'Mizoram', 'Nagaland', 2),
(47, 'Starting with the earliest, arrange these festivals in the order of their celebration in the calendar year of 2017?<br/> A. Dussehra<br/> B. Makar Sankranti<br/> C. Janmashtmi<br/> D. Baisakhi', 'BACD', 'ACBD', 'BDCA', 'DCBA', 3),
(48, 'Who is the first women wrestler in wwe from indian?', 'Uma Chorasia', 'Mamta Devi', 'Kavita Devi', 'Bhanu Bhatiya', 3),
(49, 'What is part of a database that holds only one type of information?', 'Report', 'Field', 'Record', 'File', 2),
(50, 'Who developed Yahoo?', 'Dennis Ritchie & Ken Thompson', 'David Filo & Jerry Yang', 'Vint Cerf & Robert Kahn', 'Steve Case & Jeff Bezos', 2),
(51, ' Nobel prize is awarded for which of the following disciplines:', 'Literature, peace and economics', 'Medicine or Physiology', ' Chemistry and Physics', 'All the above', 4),
(52, 'Which is the smallest country in the world?', 'Nauru', 'Monaco', 'San Marino', 'Vatican', 4),
(53, 'Which gas is used for the preparation of Soda water ?', 'Oxygen ', ' Carbon Dioxide ', 'Ammonia ', 'Hydrogen', 2),
(54, 'Who among the following appoints the Prime Minister of India?', 'Lok Sabha ', 'Rajya Sabha ', ' President of India ', 'Chief Justice of Supreme Court', 3),
(55, 'Punjab is famous for ?', 'Nylon textile ', 'Silk textile ', 'Woolen textile ', 'Cotton textile', 3);

-- --------------------------------------------------------

--
-- Table structure for table `round2res`
--

CREATE TABLE `round2res` (
  `id` int(20) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `urname` varchar(255) NOT NULL,
  `tot` varchar(255) NOT NULL,
  `nota` varchar(255) NOT NULL,
  `atq` varchar(255) NOT NULL,
  `ra` varchar(255) NOT NULL,
  `wa` varchar(255) NOT NULL,
  `mark` int(20) NOT NULL,
  `time` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `urname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `st` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `mname`, `lname`, `urname`, `pass`, `st`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'ssaccm@17', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `round1q`
--
ALTER TABLE `round1q`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `round1res`
--
ALTER TABLE `round1res`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `round2q`
--
ALTER TABLE `round2q`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `round2res`
--
ALTER TABLE `round2res`
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
-- AUTO_INCREMENT for table `round1q`
--
ALTER TABLE `round1q`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `round1res`
--
ALTER TABLE `round1res`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `round2q`
--
ALTER TABLE `round2q`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `round2res`
--
ALTER TABLE `round2res`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
