-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2014 at 02:02 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ratings`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `date` timestamp NOT NULL,
  `views` int(10) NOT NULL DEFAULT '0',
  `rate` float NOT NULL,
  `total_rate` float NOT NULL,
  `hits` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `subject`, `body`, `date`, `views`, `rate`, `total_rate`, `hits`) VALUES
(2, 'PHP', '<p>PHP received mixed reviews due to lacking native <a href="http://en.wikipedia.org/wiki/Unicode" title="Unicode">Unicode</a> support at the core language level.<sup id="cite_ref-32" class="reference"><a href="http://en.wikipedia.org/wiki/PHP#cite_note-32">[32]</a></sup><sup id="cite_ref-33" class="reference"><a href="http://en.wikipedia.org/wiki/PHP#cite_note-33">[33]</a></sup> In 2005, a project headed by Andrei Zmievski was initiated to bring native Unicode support throughout PHP, by embedding the <a href="http://en.wikipedia.org/wiki/International_Components_for_Unicode" title="International Components for Unicode">International Components for Unicode</a> (ICU) library, and representing text strings as <a href="http://en.wikipedia.org/wiki/UTF-16" title="UTF-16">UTF-16</a> internally.<sup id="cite_ref-34" class="reference"><a href="http://en.wikipedia.org/wiki/PHP#cite_note-34">[34]</a></sup>\r\n Since this would cause major changes both to the internals of the \r\nlanguage and to user code, it was planned to release this as version 6.0\r\n of the language, along with other major features then in development.<sup id="cite_ref-35" class="reference"><a href="http://en.wikipedia.org/wiki/PHP#cite_note-35">[35]</a></sup></p>\r\n<p>However, a shortage of developers who understood the necessary \r\nchanges, and performance problems arising from conversion to and from \r\nUTF-16, which is rarely used in a web context, led to delays in the \r\nproject.<sup id="cite_ref-36" class="reference"><a href="http://en.wikipedia.org/wiki/PHP#cite_note-36">[36]</a></sup>\r\n As a result, a PHP&nbsp;5.3 release was created in 2009, with many \r\nnon-Unicode features back-ported from PHP&nbsp;6, notably namespaces. In \r\nMarch 2010, the project in its current form was officially abandoned, \r\nand a PHP&nbsp;5.4 release was prepared containing most remaining non-Unicode\r\n features from PHP&nbsp;6, such as traits and closure re-binding.<sup id="cite_ref-37" class="reference"><a href="http://en.wikipedia.org/wiki/PHP#cite_note-37">[37]</a></sup> Initial hopes were that a new plan would be formed for Unicode integration, but as of 2014 none has been adopted.</p>', '2014-08-06 13:38:30', 146, 2.78873, 198, 71),
(3, 'JavaScript', '<p style="margin: 0.5em 0px; line-height: 22.399999618530273px; color: rgb(37, 37, 37); font-family: sans-serif; font-size: 14px;">Although it was developed under the name&nbsp;<i>Mocha</i>, the language was officially called&nbsp;<i>LiveScript</i>&nbsp;when it first shipped in beta releases of Netscape Navigator 2.0 in September 1995, but it was renamed JavaScript<sup id="cite_ref-10" class="reference" style="line-height: 1; unicode-bidi: -webkit-isolate;"><a href="http://en.wikipedia.org/wiki/Javascript#cite_note-10" style="color: rgb(11, 0, 128); white-space: nowrap; background: none;">[10]</a></sup>&nbsp;when it was deployed in the Netscape browser version 2.0B3.<sup id="cite_ref-techvision_11-0" class="reference" style="line-height: 1; unicode-bidi: -webkit-isolate;"><a href="http://en.wikipedia.org/wiki/Javascript#cite_note-techvision-11" style="color: rgb(11, 0, 128); white-space: nowrap; background: none;">[11]</a></sup></p><p style="margin: 0.5em 0px; line-height: 22.399999618530273px; color: rgb(37, 37, 37); font-family: sans-serif; font-size: 14px;">The change of name from LiveScript to JavaScript roughly coincided with Netscape adding support for Java technology in its&nbsp;<a href="http://en.wikipedia.org/wiki/Netscape_Navigator" title="Netscape Navigator" style="color: rgb(11, 0, 128); background: none;">Netscape Navigator</a>&nbsp;web browser. The final choice of name caused confusion, giving the impression that the language was a spin-off of the&nbsp;<a href="http://en.wikipedia.org/wiki/Java_programming_language" title="Java programming language" class="mw-redirect" style="color: rgb(11, 0, 128); background: none;">Java programming language</a>, and the choice has been characterized as a marketing ploy by Netscape to give JavaScript the cachet of what was then the hot new web programming language.</p>', '0000-00-00 00:00:00', 18, 2.66667, 8, 3),
(4, 'Jquery Tabs', '<div style="text-align: left;">This project will teach you how to create a simple jquery tabs using \r\njquery and css. I used fragment identifier this.hash for the href values\r\n in the navigation. this.hash is equivalent to #about, #faqs and \r\n#contact. By clicking each tab, the older vissible tab will be hidden \r\nand the new tab will show. Hope you learn from this.</div>', '0000-00-00 00:00:00', 17, 3, 3, 1),
(5, 'Rating System', 'This is a rating system using jquery and php. The user has an option to \r\nchoose what rate he/she wants to give on the page. Then, it \r\nautomatically gets the average page rating. I also used Jrating jquery \r\nplugin in creating ajax star rating to configure the corresponding page \r\nrate. Hope you learn from this.<br>', '0000-00-00 00:00:00', 19, 4, 4, 1),
(6, 'Registration Form Validation in PHP', 'This project will teach you how to validate forms. It has a certain \r\ngroup of rules to pass the validation. For example, password must \r\ncontain no lesser than 8 characters, email must be in correct format and\r\n input field must be non-blank. It also includes secure login system. It\r\n may be simple but this is very helpful for the beginners. Hope you \r\nlearn from this.<br>', '0000-00-00 00:00:00', 23, 4, 4, 1),
(7, 'Bee Keeping Management System', '<p>This Bee Keeping Management System is developed using Visual Basic.NET and using MS Access 2010 database in the back end.</p>\r\n<p>Main Features are:<br>\r\n1. Apiary and Hive Management<br>\r\n2. Hive Inspection<br>\r\n3. Honey and Bee Management Tools Stock Maintenance<br>\r\n4. Honey and Bee Management Tools Sales and Invoice Generation<br>\r\n5. Advance Records Searching<br>\r\n6. Database Backup and Recovery<br>\r\n7. Customers and Beekeepers Management</p>\r\n<p>Login Information :<br>\r\nUsername - admin<br>\r\nPassword - admin</p>\r\n<p>Requirements - Visual Studio 2010 or above and Crystal Report for VS \r\n2010 must be installed on your system to run this Project Successfully</p>', '0000-00-00 00:00:00', 19, 2, 2, 1),
(8, 'Church Management System', '<p>This Church Management System is developed using Visual Basic.NET and using MS Access 2010 database in the back end.</p>\r\n<p>Main Features are:<br>\r\n1. Members Registration<br>\r\n2. Weekly Expenditure Management<br>\r\n3. Income and Expenses Per Department Management<br>\r\n4. Income Envelops Management<br>\r\n5. Advance Records Searching<br>\r\n6. Advance Reports</p>\r\n<p>Login Information :<br>\r\nUsername - admin<br>\r\nPassword - admin</p>\r\n<p>Requirements - Visual Studio 2010 or above and Crystal Report for VS \r\n2010 must be installed on your system to run this Project Successfully</p>', '0000-00-00 00:00:00', 20, 2, 2, 1),
(9, 'Simple Screen Capture', '<div class="field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items"><div class="field-item even"><p>Hi there,</p>\r\n<p>This simple project works like print screen button. The code \r\ndemonstrates how to import external procedures on vb.net. I created this\r\n program using visual studio 2010.</p></div></div></div>', '0000-00-00 00:00:00', 21, 4, 4, 1),
(10, 'Backup MySQL Database in PHP', '<div class="field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items"><div class="field-item even"><p>This is an update on the <a href="http://www.sourcecodester.com/php/7052/data-entry-picture-uploads-and-pagination.html">Data Entry with Picture Upload</a>\r\n project that I created previously. I added Backup Database option on \r\nthe View Data page. This is important to those sites that are using \r\ndatabase. It is a good practice to regularly back up our records.</p>\r\n<p>Hope you learn from this project.</p></div></div></div>', '0000-00-00 00:00:00', 22, 2.5, 5, 2),
(11, 'Password Generator in PHP', '<div class="field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items"><div class="field-item even"><p>This\r\n is a simple project on how to create a password generator in php. By \r\nclicking the "Generate Password" button, it will automatically give you \r\nan alphanumeric password combination. This example is typically used \r\nwhen creating a registration form.</p>\r\n<p>Hope you learn from this.</p></div></div></div>', '0000-00-00 00:00:00', 13, 5, 5, 1),
(12, 'Simple Navigation Buttons', 'This simple program is written in Visual Studio 2010. It simply \r\nnavigates and shows the content of an MS Access database through \r\nnavigational buttons (next, previous and page buttons). It also \r\ndemonstrates retrieving and storing an image from/to a database.<br>', '0000-00-00 00:00:00', 13, 3, 3, 1),
(13, 'How to Create Simple View Counter', '<div class="field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items"><div class="field-item even"><p>In\r\n this project, you will learn how to create a simple view counter and \r\nhow to limit number of words to be displayed in the Meta Description.</p>\r\n<p>Every view in the page will be automatically added in the view \r\ncounters so the user will be able to see the number of views generated \r\nby each page.</p>\r\n<p>Hope you learn from this.</p></div></div></div>', '0000-00-00 00:00:00', 10, 2, 2, 1),
(14, 'Network Webcam Application', '<div class="field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items"><div class="field-item even"><p>Network webcam application made by visual studio 2012 with EMGU CV.<br>\r\nIt contains a client and host projects. they interact with tcp/ip protocol ( sockets).</p>\r\n<p>The host is listening for the incoming connection from client and accept it if the client have the same IP Address of the host.</p>\r\n</div></div></div><div class="field field-name-middlecontentads field-type-ds field-label-hidden"><div class="field-items"><div class="field-item even"><br></div></div></div>', '0000-00-00 00:00:00', 17, 4, 4, 1),
(15, 'Super Market Product Quality Verification System', 'This system is about Super Market Product Quality Verification System.<br>\r\nWe validate product before buying. The system has the following module:<br>\r\n1. user form records<br>\r\n2. location of super market place<br>\r\n3. user registration<br>\r\n4. admin module<br>\r\n5. quality process<br>\r\n6. comparison<br>\r\n7. pricing module&nbsp;<br>', '0000-00-00 00:00:00', 57, 3, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `views_per_day`
--

CREATE TABLE IF NOT EXISTS `views_per_day` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `views_per_day`
--

INSERT INTO `views_per_day` (`id`, `post_id`, `subject`, `date`, `views`) VALUES
(4, 15, '', '2014-08-08', 2),
(5, 2, '', '2014-08-10', 2),
(6, 14, '', '2014-08-08', 3),
(7, 13, '', '2014-08-08', 2),
(8, 12, '', '2014-08-08', 2),
(9, 11, '', '2014-08-08', 4),
(10, 10, '', '2014-08-08', 2),
(11, 5, '', '2014-08-10', 2),
(12, 9, '', '2014-08-08', 3),
(13, 8, '', '2014-08-10', 1),
(14, 7, '', '2014-08-10', 1),
(15, 6, '', '2014-08-08', 3),
(16, 4, '', '2014-08-10', 1),
(17, 3, '', '2014-08-10', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
