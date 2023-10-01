-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 07, 2022 at 09:19 PM
-- Server version: 5.6.51-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myflyconnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Content` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `Title`, `Image`, `Content`, `created_at`, `updated_at`) VALUES
(1, 'about', 'new2.png', 'We strive to deliver a level of service that exceeds the expectations of our customers.\r\n\r\nIf you have any questions about our products or services, please do not hesitate to contact us. We have friendly, knowledgeable representatives available seven days a week to assist you.              ', '2022-04-08 15:40:15', '2022-04-08 15:40:15');

-- --------------------------------------------------------

--
-- Table structure for table `add_banner`
--

CREATE TABLE `add_banner` (
  `id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_banner`
--

INSERT INTO `add_banner` (`id`, `Title`, `Image`, `created_at`, `updated_at`) VALUES
(1, 'We help connect air travelers', 'airtravel.jpg', '2022-04-15 13:46:52', '2022-04-15 13:46:52');

-- --------------------------------------------------------

--
-- Table structure for table `add_slider`
--

CREATE TABLE `add_slider` (
  `id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_slider`
--

INSERT INTO `add_slider` (`id`, `Title`, `Image`, `created_at`, `updated_at`) VALUES
(2, 'neeraj', 'img3.jpg', '2022-04-05 13:18:31', '2022-04-05 13:18:31'),
(4, 'paalvi', 'img2.jpg', '2022-04-05 13:57:58', '2022-04-05 13:57:58'),
(5, 'We help connect travelers', '', '2022-04-15 00:17:23', '2022-04-15 00:17:23'),
(6, 'We help connect travelers', '', '2022-04-15 23:10:49', '2022-04-15 23:10:49');

-- --------------------------------------------------------

--
-- Table structure for table `add_testimonials`
--

CREATE TABLE `add_testimonials` (
  `id` int(11) NOT NULL,
  `Content` text NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Image` varchar(50) NOT NULL,
  `Created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_testimonials`
--

INSERT INTO `add_testimonials` (`id`, `Content`, `Name`, `Image`, `Created_at`, `updated_at`) VALUES
(14, ' Content is information produced and directed at an end-user or audience in the sectors of publishing, art, and communication. Content is delivered via different media, including the Internet, cinema, television, radio, audio CDs, books and magazines, physical art, ', 'Sourabh', 'client.jpg', '2022-04-10 01:58:59', '2022-04-10 01:58:59'),
(16, 'I was looking for travel companion for my parents and came across myflyconnect. I was able to search and connect with a traveler with same itinerary within few hours. It is very easy and simple to sign up, create profile and connect with other travelers. I definitely recommend using myflyconnect to find travelers with same itinerary.      ', 'Jaspreet Singh', '2396947-60f1a396868e4.jpg', '2022-04-14 05:15:16', '2022-04-14 05:15:16'),
(17, 'Content is information produced and directed at an end-user or audience in the sectors of publishing, art, and communication. Content is delivered via different media, including the Internet, cinema, television, radio, audio CDs, books and magazines, physical art,', 'Taher', 'taher.PNG', '2022-04-14 23:46:12', '2022-04-14 23:46:12');

-- --------------------------------------------------------

--
-- Table structure for table `admin_db`
--

CREATE TABLE `admin_db` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_db`
--

INSERT INTO `admin_db` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'b6974067030e5d0377e9bb99f276368c', '2022-04-05 16:49:07', '2022-04-05 16:49:07');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone_number` varchar(100) NOT NULL,
  `Message` text NOT NULL,
  `Created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `Name`, `Email`, `Phone_number`, `Message`, `Created_at`, `Updated_at`) VALUES
(1, 'jaspreet', 'jaspreetsingh9088@gmail.com', '9638527410', 'dfjdskljflksdj dsf', '2022-04-27 22:27:51', '2022-04-27 22:27:51');

-- --------------------------------------------------------

--
-- Table structure for table `faq_table`
--

CREATE TABLE `faq_table` (
  `id` int(11) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Question` text NOT NULL,
  `Answer` text NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq_table`
--

INSERT INTO `faq_table` (`id`, `Category`, `Question`, `Answer`, `Created_at`, `updated_at`) VALUES
(5, 'general', 'How Is MyLifeWell Different Than Other Wellness Platforms?', 'Comprehensive: You probably had to do a lot of Google searches to find the rightfitness classes, instructors, travel or products and you likely have memberships with each one. With MyLifeWell, all you need is ONE membership and you can have your virtual programs, active and wellness travel and wellness products all in ONE place.\r\n\r\n\r\n', '2022-04-14 11:07:23', '2022-04-14 11:07:23'),
(6, 'livewell', 'What Type Of Programs Are On MyLifeWell?', 'Our MyLife Health and Wellness Plan innovative design allows employers to sponsor a “Self Funded Defined-Benefits “section 125 Cafeteria Plan. By allowing ...', '2022-04-14 11:12:11', '2022-04-14 11:12:11'),
(7, 'travelwell', 'What Is Wellness Travel?', 'If you say that an idea, a method, or a style travels well, you mean that it can be appreciated or used by people in several different countries, and not just in the country where it began.', '2022-04-14 11:13:20', '2022-04-14 11:13:20'),
(8, 'app', 'MOVE WITH VIDEO ON DEMAND', 'The App Store gives people around the world a safe and trusted place to discover apps that meet our high standards for privacy, security and content.', '2022-04-14 11:14:17', '2022-04-14 11:14:17');

-- --------------------------------------------------------

--
-- Table structure for table `fly_connect_do`
--

CREATE TABLE `fly_connect_do` (
  `id` int(11) NOT NULL,
  `Icon1` varchar(200) NOT NULL,
  `Content1` text NOT NULL,
  `Icon2` varchar(200) NOT NULL,
  `Content2` text NOT NULL,
  `Icon3` varchar(200) NOT NULL,
  `Content3` text NOT NULL,
  `Created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fly_connect_do`
--

INSERT INTO `fly_connect_do` (`id`, `Icon1`, `Content1`, `Icon2`, `Content2`, `Icon3`, `Content3`, `Created_at`, `updated_at`) VALUES
(1, '1.jpg', 'Family members cannot always accompany travelers that needs helping hand.                   ', '4.jpg', 'We help connect travelers with similar itinerary that needs assistance.             ', '7.jpg', 'We created easy to use platform for travelers across the globe to connect during the travel.                     ', '2022-04-08 16:10:37', '2022-04-08 16:10:37');

-- --------------------------------------------------------

--
-- Table structure for table `fly_connect_works`
--

CREATE TABLE `fly_connect_works` (
  `id` int(11) NOT NULL,
  `Icon1` varchar(200) NOT NULL,
  `Title1` varchar(50) NOT NULL,
  `Content1` text NOT NULL,
  `Icon2` varchar(200) NOT NULL,
  `Title2` varchar(50) NOT NULL,
  `Content2` text NOT NULL,
  `Icon3` varchar(200) NOT NULL,
  `Title3` varchar(50) NOT NULL,
  `Content3` text NOT NULL,
  `Created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fly_connect_works`
--

INSERT INTO `fly_connect_works` (`id`, `Icon1`, `Title1`, `Content1`, `Icon2`, `Title2`, `Content2`, `Icon3`, `Title3`, `Content3`, `Created_at`, `Updated_at`) VALUES
(1, 'signup.png', 'Sign up', 'Create your profile and travel itinerary                     ', 'connect.png', 'Connect ', 'Search and connect with travelers\r\n                     ', 'intract.png', 'Interact ', 'Communicate using inbuilt chat or email (free for initial 3 connects)\r\n                     ', '2022-04-05 10:32:49', '2022-04-05 10:32:49');

-- --------------------------------------------------------

--
-- Table structure for table `my_fly_connect_logo`
--

CREATE TABLE `my_fly_connect_logo` (
  `id` int(11) NOT NULL,
  `Logo` varchar(100) NOT NULL,
  `Created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `my_fly_connect_logo`
--

INSERT INTO `my_fly_connect_logo` (`id`, `Logo`, `Created_at`, `Updated_at`) VALUES
(1, 'MyFlyConnect Final.png', '2022-04-05 12:45:30', '2022-04-05 12:45:30');

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policy`
--

CREATE TABLE `privacy_policy` (
  `id` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Content` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `privacy_policy`
--

INSERT INTO `privacy_policy` (`id`, `Title`, `Content`, `created_at`, `updated_at`) VALUES
(1, ' Privacy Policy  ', 'MyFlyConnect LLC and our subsidiaries and other affiliates (collectively, â€œMyFLyConnect,â€ â€œwe,â€ â€œusâ€ or â€œourâ€) are committed to protecting your privacy.  This Privacy Policy describes how we collect, use, and disclose the Personal Information that you provide during your online and offline interactions with us or that we collect about you.\r\nAs used in this Privacy Policy, â€œPersonal Informationâ€ means any information that can be used to individually identify a person or household, and may include, but is not limited to, name, email address, postal or other physical address, credit or debit card number, title, and other information reasonably linkable to an individual or household with or without other identifying information in our possession.         \r\n\r\nWe may update this policy from time to time, and we will provide notice of any changes, for example, by sending an email notification, providing notice through the Sites or updating the â€œLast Updatedâ€ date at the beginning of this Privacy Policy.  We encourage you to review this Privacy Policy whenever you use or access the Sites or otherwise interact with us to stay informed about our information practices and the ways you can help protect your privacy.\r\nCategories of Personal Information we collect         \r\n\r\nWe may collect the following categories of Personal Information from or about you:         \r\nInformation commonly used to identify you, such as your name, user name, physical address, email address, phone numbers, and other similar identifiers.  \r\nInformation about your usage of or other interaction with our websites, apps, blogs, or other digital properties (our â€œSitesâ€).  This information includes actions taken, date and time, frequency, duration, quantity, and performance information related to logins, clicks, messages, how you reached our Sites, and other website and feature usage information.  \r\nInformation about your Blue Apron subscription, purchases or receipt of meal ingredients or other products we offer, or your use of our Sites (collectively, our â€œServicesâ€).  This information includes:\r\ndelivery and dietary preferences\r\ninformation related to returns, refunds and cancellations, and\r\ninformation about gift orders and referrals \r\ninformation about your interactions with technical and/or customer support\r\nGeneral information about your product and service preferences, including your interest in products or services offered by third parties, and your demographics, behavior, and predispositions.  \r\nInformation about your device, network, and internet connection, such as your IP address(es), MAC address, other device ID (UDID), device type, operating system type and version, and client version.  \r\nBasic account information related to your Facebook, Apple, or other third party account if you choose to register and log in using such an account.  This information includes your username and information from the third party service about whether you entered your password correctly.  (These services are designed so that Blue Apron doesnâ€™t see your actual password for these services â€“ just whether you got the password right or wrong.) \r\nLimited payment information.  (When you pay for a Blue Apron Service, your payment information goes directly to a payment processing company who is responsible for keeping your info safe.  We never get your full credit card information.  More info below.)\r\nEmployment-related information from Blue Apron personnel and or an applicant for personnel positions.  \r\nOther information you upload, provide, or create while using the Sites or our Services.  \r\nHow we collect Personal Information\r\n\r\nWe collect many of the categories of Personal Information listed above when you affirmatively give it to us or transact business with us.  You may always choose not to provide that Personal Information to Blue Apron, but note that you may be unable to access certain services or features if they require Personal Information that you have not provided.         \r\n\r\nWe also collect information automatically when you interact with our Sites.  You can adjust certain settings, such as by turning off cookies in your browser or adjusting privacy settings in our apps, to reduce the amount of Personal Information we passively collect from you when you use our Services.  Because we use these features to enhance your user experience (such as using cookies to remember your user name when you visit our Sites or by using push notification in our Apps to let you know the status of your Blue Apron orders), disabling such features may impact our Sitesâ€™ functionality.         \r\n\r\nWe may also collect some Personal Information from third-party partners, who may actively or passively collect information on our behalf when you use our Sites.  We may also receive Personal Information that third parties collect in other contexts, such as when you visit other websites that are unaffiliated with Blue Apron and information collected from you offline.           \r\n\r\nMore about active collection\r\n\r\nHere are some more specific examples of categories of Personal Information we gather through active collection.         \r\n Account Information: Name, email, password, address, phone number, subscription status, and dietary preferences. \r\nTransaction Information: Information about the Services you purchase, shipping and delivery information and information related to returns, refunds and cancellations. We may also collect and store limited payment information from you, such as payment card type and expiration date and the last four digits of your payment card number; however, we do not collect or store full payment card numbers and all transactions are processed by our third party payment processors.  At present, Blue Apron uses Stripe and Apple Pay to process payments. Information collected directly by Stripe and Apple Pay, including your full payment card information, is governed by rigorous data protection standards that apply to the payment card industry, which you can read in full here: https://stripe.com/privacy and here: https://support.apple.com/en-us/HT203027.\r\nOther Information You Choose to Provide, such as when you communicate with us using social media; participate in a survey, contest, promotion or interactive area of the Sites; or when you request technical or customer support.\r\nMore about passive collection\r\n\r\nBlue Apron and our third-party service providers automatically collect some information about you when you use our Sites, using methods such as cookies and tracking technologies (further described below). Information automatically collected includes Internet protocol (IP) addresses, browser type, Internet service provider (ISP), referring/exit pages, the files viewed on our site (e.g., HTML pages, graphics, etc.), operating system, date/time stamp, and/or clickstream data to analyze trends in the aggregate and operate the Sites.         \r\n\r\nIn addition, when you use some of our Sites, network information is transmitted back to us such as Site usage information. This information is transmitted back to us, so we can determine how users are interacting with our Sites, to assist us with improving our Sites and Services, and to correct any problems that may occur.         \r\n\r\nBlue Apron and the vendors we work with â€“ including web analytics vendors and companies that help us market Blue Apron Services â€“ use various tracking technologies, including cookies and web beacons, to collect information about you when you interact with our Sites, including information about your browsing and purchasing behavior. Cookies are small data files stored on your hard drive or in device memory that help us improve the Sites and your experience, see which areas and features of the Sites are popular, and count visits. Web beacons are electronic images that may be used on the Sites or in emails and help deliver cookies, count visits and understand usage and campaign effectiveness. Vendors we work with may combine the personal information they collect when you use our Sites with information that they collect from other sources.         \r\n\r\nWhen you visit our Sites from a mobile device, we collect information about the mobile device you use to access or use the Sites, including the hardware model, operating system and version, unique device identifiers, mobile network information and information about your use of our mobile applications. With your consent, we may also collect information about the location of your device and access and collect information from certain native applications on your device (such as your deviceâ€™s camera, photo album and phonebook applications) to facilitate your use of certain features of the Sites.         \r\n\r\nWe may also collect information about you from other Blue Apron users.  For example, a Blue Apron user can use our referral program to tell a friend about our Services, providing the friendâ€™s name and email address in the process.  A particularly generous Blue Apron user might send a friend a gift or gift certificate, providing the friendâ€™s name, email address, and mailing address.  Blue Apron users are responsible for obtaining any necessary consent from you before submitting your Personal Information to us.         \r\n\r\nWhy we collect Personal Information\r\n\r\nWe collect and use the categories of Personal Information listed above in order to get you delicious meals and otherwise provide our Services, to communicate with you about your subscription and our Services, to provide customer support and troubleshooting, to improve our business, for security purposes, for other legitimate business purposes, or as required by law.           \r\n\r\nWe restrict our use of employment-related information that we collect from Blue Apron personnel and or an applicant for personnel positions solely for hiring, human resources management, and other employment-related purposes or as required by law.\r\nOur disclosure of Personal Information         \r\n\r\nFirst, we may share Personal Information about you with our service providers. These are other companies that help us run our business, and who have promised only to use Personal Information subject to this privacy policy in order to help Blue Apron run its business.  We may disclose all of the categories of Personal Information we have about you with such service providers, for the purposes of providing, running, marketing, personalizing, improving, operating, and maintaining our Sites and Services.           \r\n\r\nSecond, we also share Personal Information with a limited number of other businesses that arenâ€™t service providers.  These businesses offer services to Blue Apron, like serving advertisements on our behalf across the Internet, serving personalized ads on our website, and providing analytics services.  Unlike with our service providers, these businesses have not promised to use Personal Information that we provide solely in connection with Blue Apronâ€™s Sites and Services, and they may use your Personal Information for other purposes.           \r\n\r\nUnder the California Consumer Protection Act, this sharing of Personal Information may qualify as the â€œsaleâ€ of Personal Information by Blue Apron, even though Blue Apron does not get money in exchange for giving a third party access to your Personal Information.  Blue Apron does not knowingly collect or sell information from or about children under 16 without sufficient legal authorization.  For more information about opting out of the â€œsaleâ€ of your Personal Information, go to the Consumer Rights section below.\r\nThird, we also may disclose your Personal Information when you voluntarily use a Site feature that requires sharing of Personal Information in order to work properly.  For example, if you â€œLike,â€ â€œTweet,â€ â€œPin,â€ or share content using the social sharing features or other integrated tools on our Sites, you should be aware that the relevant social media company may access Personal Information from you, and any information that you post may be made broadly Last, we disclose Personal Information to courts, law enforcement, and other appropriate third parties when the disclosure is required or authorized by law or reasonably necessary for the protection of our property or legal rights.         \r\n\r\nMore about our sharing with service providers\r\navailable, depending on your privacy settings for your social media account.         \r\n\r\n\r\nFor example, service providers may get access to Personal Information so they can help with:         \r\nManaging your account and sending you related information, including confirmations, updates, technical notices, security alerts and support and administrative messages\r\nFulfilling Service requests\r\nProtecting against, investigating, and deterring fraudulent, harmful, unauthorized or illegal activity\r\nProviding reports to you based on information collected from your use of our Services\r\nProcessing your orders and delivering the Services that you have ordered\r\nProviding support and assistance in connection with your use of our Services\r\nProviding the ability to contact you and provide you with shipping and billing information and other Sites, Services, recipes, services, offers, surveys, events and other news and information we think may be of interest to you\r\nFacilitating contests, sweepstakes and promotions and processing and delivering entries and rewards\r\nEnhancing your experience with our Sites \r\nResponding to your comments, questions and requests and providing customer service\r\nComplying with our contractual and legal obligations, resolving disputes with users, enforcing our agreements\r\nMonitoring and analyzing trends, usage and activities in connection with the Sites\r\nLinking or combining  Personal Information from our various sources of Personal Information (described above) to help us understand your needs and provide you with a better experience\r\nMore about â€œsaleâ€ of Personal Information\r\n\r\nThe companies we use for analytics and targeted advertising may use cookies, pixels, web beacons and other technologies to collect information about your use of the Sites and other websites, including your IP address, web browser, pages viewed, time spent on pages, links clicked, and conversion information. This information may be used by us and others to, among other things, analyze and track data, determine the popularity of certain content, deliver advertising and content targeted to your interests on the Sites and other websites, and better understand your online activity.         \r\n\r\nMore about social media integrations\r\n\r\nFor more information about the purpose and scope of data collection and processing in connection with social sharing features, please visit the privacy policies of the social media services that you use and that provide these features.  In other words, Facebook, Instagram, Pinterest, Twitter, and similar services all have their own privacy policies that you should read.  Blue Apronâ€™s privacy policy doesnâ€™t apply to them.         \r\n\r\nControls over your Personal Information\r\n\r\nWe encourage you to read this section in full.  But here are the links you may need if you want to make a request related to your Personal Information, so you have them handy:         \r\n\r\nOpt Out of the â€œSaleâ€ of Personal Information and Targeted Advertising\r\n\r\n\r\nNow onto the full explanation: We do our best to give you reasonable controls over the Personal Information we collect from or about you as set forth below.  If you reside in California, you may have legal rights with respect to your Personal Information, including those set forth under the California Consumer Privacy Act (â€œCCPAâ€).  In order to protect the privacy of all Blue Apron customers and potential customers from across the United States, we will make our best effort to honor requests made non-California residents.  Here are the types of requests you can make: \r\n     \r\nYou may request to opt out of the â€œsaleâ€ of personal information.  Whether or not you opt out of the â€œsaleâ€ of personal information, Blue Apron doesnâ€™t allow marketing companies, advertisers, or anyone else to access to your Personal Information in exchange for payment.  But some of Blue Apronâ€™s information sharing practices may qualify as the â€œsaleâ€ of personal information, as â€œsaleâ€ is defined in the California Consumer Privacy Act.  If you opt out of â€œsale,â€ we will change these information sharing practices.   \r\n  \r\nYou may request access to the Personal Information that Blue Apron has collected about you during the previous 12 months, for a copy of Personal Information in a portable format, that Blue Apron delete Personal Information it has about you, and to opt-out of the sale of Personal Information. \r\n       \r\nYou may make a request by calling 1-888-278-4349 or emailing privacy@BlueApron.com.  Before we disclose or delete Personal Information in response to any of these requests, we will need to verify your identity.  If you have an account with Blue Apron, we will verify your identity by having you log-in to your Blue Apron account.  If you do not have an account with us, please provide your email address.  Depending on the nature of your request, we may contact you for further information if appropriate to verify your identity.  Note, however, that Blue Apron will never ask you for sensitive personal or financial information when verifying your identity, and no Blue Apron employee will ask you to tell them your password.\r\n\r\nUnder certain circumstances, we will not be able to fulfill your request, such as if it prevents us from completing a transaction you initiated, interferes with our regulatory obligations, affects legal matters including a Blue Apron userâ€™s rights to data contained in their account, we cannot verify your identity, or compliance with your request is not legally required and would involve disproportionate cost or effort.  But in any event we will respond to your request within a reasonable timeframe and provide you with an explanation.\r\n \r\nBlue Apron will not discriminate against anyone that makes a request to access, delete, or limit our use or sale of Personal Information, but in some cases we will not be able to provide our Services to you without that information.\r\n\r\nYou may make a request by calling 1-888-278-4349 or emailing privacy@BlueApron.com.       \r\n\r\nMore about the types of privacy rights requests you can make       \r\n\r\nAccess: You can request more information about Blue Apronâ€™s processing of your Personal Information during the previous 12 months.  Your request can include:       \r\nthe categories and specific pieces of Personal Information we collected from you, \r\nwhy we collected that information, \r\nthe categories of third parties from which we received Personal Information about you, \r\nthe categories of third parties with whom we shared that information, and/or \r\nthe categories of third parties to whom we may have sold that information during the previous 12 months. \r\nPortability: You can request a copy of your Personal Information that we have collected about you in a machine-readable format. You can also request that we transmit the data to another entity where technically feasible.       \r\n\r\nDeletion: You can request that we erase some or all of your Personal Information from our systems.       \r\n\r\nPlease be aware that your request to delete Personal Information may not cover all of the Personal Information in Blue Apronâ€™s possession.  We will continue to retain Personal Information that we use to provide our Services to you, preserve the security and functionality of our Services, protect our legal rights, and internally for other legitimate business purposes that are consistent with the reason why you provided us with the Personal Information and reasonable expectations.       \r\n\r\nOpt-Out of â€œSalesâ€: You can ask us not to sell your Personal Information by clicking on the â€œDo Not â€˜Sellâ€™ My Personal Informationâ€ link above.  You can also use an authorized agent to submit a request to opt-out on your behalf if you provide the agent written permission to do so.  We may require the agent to submit proof that you have authorized them to submit an opt-out request.         \r\n\r\nIf you opt out of the â€œsaleâ€ of information, we will alter or suspend our information sharing with businesses that offer services to Blue Apron (like serving advertisements on our behalf across the Internet, serving personalized ads on our website, and providing analytics services) but that have not promised to use all Personal Information that we provide them solely in connection with Blue Apronâ€™s Sites and Services.         \r\n\r\nCommunications preferences\r\n\r\nWe may send you communications (including emails, phone calls, text messages, push notifications, and snail mail) to your account and transactions initiated by you (such as order status updates and billing receipts).  We need the ability to send you these communications to offer the Services, so we do not allow you turn them off entirely.  But you can let us know if you have a preferred method for receiving these communications by changing the Notification Settings in your account, disabling push notifications as described below, or contacting us.  We try our best to honor your reasonable preferences about communications.       \r\n\r\nWe may also send additional communications about the Services, such as newsletters and additional options that may be of interest to you.  We do our best to only send this type of communication to people who want to receive it.  If you would like to discontinue receiving these communications, you can update your preferences by using the â€œUnsubscribeâ€ link found in such emails or by contacting us using the information in the â€œContact Usâ€ section of this policy.         \r\n\r\nMore about disabling push notifications\r\n\r\nNote that discontinuing push messages typically requires you to change your settings on your device.  Each type of device operates differently, so please check your user manual if youâ€™re having trouble.       \r\n\r\nData retention\r\n\r\nHow long we retain your Personal Information depends on the type of data and the purpose for which we process the data. We will retain your Personal Information for the period necessary to fulfill the purposes outlined in this Privacy Notice unless a longer retention period is required or permitted by law.       \r\n\r\nSecurity of your Personal Information\r\n\r\nBlue Apron is committed to protecting the Personal Information you share with us. We utilize a combination of industry-standard security technologies, procedures, and organizational measures to help protect your Personal Information from unauthorized access, use, or disclosure. When we transfer credit card information over the Internet, we protect it using Transport Layer Security (TLS) encryption technology.       \r\n\r\nWe recommend you take every precaution in protecting your Personal Information when you are on the Internet. For example, change your passwords often, use a combination of upper and lower-case letters, numbers, and symbols when creating passwords, and make sure you use a secure browser.\r\n\r\nContact us\r\n\r\nIf you have any questions or comments related to this privacy policy, please send an email to privacy@BlueApron.com. You can also contact us by writing to this address:  \r\nBlue Apron, LLC\r\nPrivacy Requests\r\n28 Liberty St., Floor 28\r\nNew York, NY 10005          ', '2022-04-11 11:21:10', '2022-04-11 11:21:10');

-- --------------------------------------------------------

--
-- Table structure for table `SIgnUp`
--

CREATE TABLE `SIgnUp` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Activation_code` varchar(150) NOT NULL,
  `Status` int(11) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SIgnUp`
--

INSERT INTO `SIgnUp` (`id`, `FirstName`, `LastName`, `Phone`, `Email`, `Password`, `Gender`, `Activation_code`, `Status`, `Created_at`, `Updated_at`) VALUES
(1, 'Gagandeep', 'Singh', 9463616139, 'gagan13420@gmail.com', 'e24181baffeb8768a2f4ba498292a5f9', 'Male', '2rRda8U0BfB5B6l', 1, '2022-06-09 04:25:38', '2022-06-09 04:25:38'),
(2, 'Jaspreet', 'Singh', 9464533870, 'jaspreetsingh9088@gmail.com', '27fb17a5f5a06685bd05e0cbbf5411d7', 'Male', 'EFavl0RTMWtBfO7', 1, '2022-06-09 04:45:34', '2022-06-09 04:45:34'),
(3, 'akshay', 'rana', 8627035869, 'ashuakshay1996@gmail.com', '4893fa76da232ba2b81e212961735f6a', 'Male', '3MOzTTYeBIR7Qgd', 0, '2022-06-10 07:13:21', '2022-06-10 07:13:21'),
(12, 'Gagandeep', 'Singh', 9463616133, 'gagankamboz1998@gmail.com', 'e24181baffeb8768a2f4ba498292a5f9', '', '1fsNekuhCqphS2P', 1, '2022-06-23 10:42:23', '2022-06-23 10:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `terms_conditions`
--

CREATE TABLE `terms_conditions` (
  `id` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Content` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `terms_conditions`
--

INSERT INTO `terms_conditions` (`id`, `Title`, `Content`, `created_at`, `updated_at`) VALUES
(1, 'Terms & Conditions  ', 'Specialist Paid Search Marketing Agency. Results Driven To Meet The Needs Of Your Business. Get The Exposure Your Brand Deserves. ï¿½5m+ Managed Ad Spend. Digital Marketing Experts. Award Winning Team.  ', '2022-04-11 11:34:27', '2022-04-11 11:34:27');

-- --------------------------------------------------------

--
-- Table structure for table `trip_details`
--

CREATE TABLE `trip_details` (
  `id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `First_name` varchar(150) NOT NULL,
  `Last_name` varchar(150) NOT NULL,
  `Age` int(11) NOT NULL,
  `Travel` varchar(150) NOT NULL,
  `Photo` varchar(200) NOT NULL,
  `Depature_airport` varchar(150) NOT NULL,
  `Arival_airport` varchar(150) NOT NULL,
  `Date` date NOT NULL,
  `Number_of_travelers` varchar(150) NOT NULL,
  `Language` varchar(200) NOT NULL,
  `Airline` varchar(150) NOT NULL,
  `Message` text NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trip_details`
--

INSERT INTO `trip_details` (`id`, `UserId`, `First_name`, `Last_name`, `Age`, `Travel`, `Photo`, `Depature_airport`, `Arival_airport`, `Date`, `Number_of_travelers`, `Language`, `Airline`, `Message`, `Created_at`, `Updated_at`) VALUES
(1, 2, 'Gagandeep', 'singh', 0, 'Family', '88301365-friends-travelling-together.webp', 'mumbai', 'delhi', '2022-06-24', '5', '', 'IndiGo', 'hello', '2022-06-20 12:38:31', '2022-06-20 12:38:31'),
(2, 2, 'sourabh', 'singh', 0, 'Parents', 'images.jpg', 'punjab', 'delhi', '2022-06-30', '3', '', 'SpiceJet.', 'hii', '2022-06-20 12:39:11', '2022-06-20 12:39:11'),
(3, 1, 'mankirat', 'singh', 0, 'Family', 'GettyImages-1155613712-1.webp', 'CHR', 'CGN', '2022-07-08', '3', '', 'SpiceJet.', 'hello', '2022-06-20 12:54:13', '2022-06-20 12:54:13'),
(4, 2, 'Jaspreet', 'Singh', 0, 'Self', 'New Project.jpg', 'CHR', 'YZR', '2022-07-06', '4', '', 'airindia', 'just checking', '2022-06-24 07:30:18', '2022-06-24 07:30:18'),
(5, 1, 'Gagandeep', 'singh', 0, 'Family', '88301365-friends-travelling-together.webp', 'CHR', 'CGN', '2022-07-06', '8', '', 'IndiGo.', 'hii', '2022-07-06 08:25:06', '2022-07-06 08:25:06');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `passengerId` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` varchar(150) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `passengerId`, `userid`, `status`, `Created_at`, `Updated_at`) VALUES
(1, 1, 1, 'Check', '2022-07-04 11:42:13', '2022-07-04 04:42:13'),
(2, 2, 1, 'Check', '2022-07-04 11:42:17', '2022-07-04 04:42:17'),
(3, 3, 1, 'Check', '2022-07-04 11:42:20', '2022-07-04 04:42:20');

-- --------------------------------------------------------

--
-- Table structure for table `web_information`
--

CREATE TABLE `web_information` (
  `id` int(11) NOT NULL,
  `Address` text NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone_number` varchar(100) NOT NULL,
  `Facebook` varchar(200) NOT NULL,
  `Twitter` varchar(200) NOT NULL,
  `Instagram` varchar(200) NOT NULL,
  `Linkedin` varchar(200) NOT NULL,
  `Created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web_information`
--

INSERT INTO `web_information` (`id`, `Address`, `Email`, `Phone_number`, `Facebook`, `Twitter`, `Instagram`, `Linkedin`, `Created_at`, `updated_at`) VALUES
(1, '  Contact us at below email ID  ', 'info@myflyconnect.com', '', 'https://facebook.com/myflyconnect', 'https://twitter.com/myflyconnect', 'https://instagram.com/myflyconnect', 'https://linkedin.com/myflyconnect', '2022-04-08 15:02:56', '2022-04-08 15:02:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_banner`
--
ALTER TABLE `add_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_slider`
--
ALTER TABLE `add_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_testimonials`
--
ALTER TABLE `add_testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_db`
--
ALTER TABLE `admin_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_table`
--
ALTER TABLE `faq_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fly_connect_do`
--
ALTER TABLE `fly_connect_do`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fly_connect_works`
--
ALTER TABLE `fly_connect_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_fly_connect_logo`
--
ALTER TABLE `my_fly_connect_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy_policy`
--
ALTER TABLE `privacy_policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `SIgnUp`
--
ALTER TABLE `SIgnUp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_conditions`
--
ALTER TABLE `terms_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trip_details`
--
ALTER TABLE `trip_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_information`
--
ALTER TABLE `web_information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `add_banner`
--
ALTER TABLE `add_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `add_slider`
--
ALTER TABLE `add_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `add_testimonials`
--
ALTER TABLE `add_testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `admin_db`
--
ALTER TABLE `admin_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faq_table`
--
ALTER TABLE `faq_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fly_connect_do`
--
ALTER TABLE `fly_connect_do`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fly_connect_works`
--
ALTER TABLE `fly_connect_works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `my_fly_connect_logo`
--
ALTER TABLE `my_fly_connect_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `privacy_policy`
--
ALTER TABLE `privacy_policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `SIgnUp`
--
ALTER TABLE `SIgnUp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `terms_conditions`
--
ALTER TABLE `terms_conditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trip_details`
--
ALTER TABLE `trip_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `web_information`
--
ALTER TABLE `web_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
