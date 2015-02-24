<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "t3events".
 *
 * Auto generated 24-02-2015 09:16
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Events',
	'description' => 'Manage events, show teasers, list and single views.',
	'category' => 'plugin',
	'version' => '0.16.1',
	'state' => 'beta',
	'uploadfolder' => 1,
	'createDirs' => '',
	'clearcacheonload' => 0,
	'author' => 'Dirk Wenzel, Michael Kasten',
	'author_email' => 'wenzel@webfox01.de, kasten@webfox01.de',
	'author_company' => 'Agentur Webfox',
	'constraints' => 
	array (
		'depends' => 
		array (
			'typo3' => '6.2.0-6.2.99',
			'static_info_tables' => '6.1.0-6.1.99',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
	'_md5_values_when_last_written' => 'a:175:{s:9:"ChangeLog";s:4:"dc58";s:21:"ExtensionBuilder.json";s:4:"7d1f";s:9:"README.md";s:4:"6d97";s:12:"ext_icon.gif";s:4:"fed2";s:17:"ext_localconf.php";s:4:"badc";s:14:"ext_tables.php";s:4:"3274";s:14:"ext_tables.sql";s:4:"487e";s:24:"ext_typoscript_setup.txt";s:4:"4c24";s:41:"Classes/Command/TaskCommandController.php";s:4:"8b9c";s:41:"Classes/Controller/AbstractController.php";s:4:"62cf";s:38:"Classes/Controller/EventController.php";s:4:"84aa";s:46:"Classes/Controller/EventLocationController.php";s:4:"3b60";s:42:"Classes/Controller/OrganizerController.php";s:4:"25f0";s:44:"Classes/Controller/PerformanceController.php";s:4:"cd78";s:39:"Classes/Controller/TeaserController.php";s:4:"7d74";s:42:"Classes/Controller/TeaserController_dw.php";s:4:"72e5";s:44:"Classes/Controller/TicketClassController.php";s:4:"6056";s:38:"Classes/Controller/VenueController.php";s:4:"1f94";s:32:"Classes/Domain/Model/Country.php";s:4:"04f6";s:30:"Classes/Domain/Model/Event.php";s:4:"5250";s:38:"Classes/Domain/Model/EventLocation.php";s:4:"888c";s:34:"Classes/Domain/Model/EventType.php";s:4:"0403";s:30:"Classes/Domain/Model/Genre.php";s:4:"de4d";s:43:"Classes/Domain/Model/GeocodingInterface.php";s:4:"85e4";s:34:"Classes/Domain/Model/Organizer.php";s:4:"9396";s:36:"Classes/Domain/Model/Performance.php";s:4:"1867";s:42:"Classes/Domain/Model/PerformanceStatus.php";s:4:"f0c2";s:29:"Classes/Domain/Model/Task.php";s:4:"3343";s:31:"Classes/Domain/Model/Teaser.php";s:4:"8c39";s:36:"Classes/Domain/Model/TicketClass.php";s:4:"f5d4";s:30:"Classes/Domain/Model/Venue.php";s:4:"7ee1";s:43:"Classes/Domain/Model/Dto/AbstractDemand.php";s:4:"0557";s:44:"Classes/Domain/Model/Dto/DemandInterface.php";s:4:"eba2";s:40:"Classes/Domain/Model/Dto/EventDemand.php";s:4:"c98d";s:46:"Classes/Domain/Model/Dto/PerformanceDemand.php";s:4:"0fef";s:41:"Classes/Domain/Model/Dto/TeaserDemand.php";s:4:"fca3";s:56:"Classes/Domain/Repository/AbstractDemandedRepository.php";s:4:"6dfd";s:48:"Classes/Domain/Repository/AbstractRepository.php";s:4:"5160";s:53:"Classes/Domain/Repository/EventLocationRepository.php";s:4:"b03d";s:45:"Classes/Domain/Repository/EventRepository.php";s:4:"364e";s:49:"Classes/Domain/Repository/EventTypeRepository.php";s:4:"02d4";s:45:"Classes/Domain/Repository/GenreRepository.php";s:4:"6a1d";s:51:"Classes/Domain/Repository/PerformanceRepository.php";s:4:"ee09";s:44:"Classes/Domain/Repository/TaskRepository.php";s:4:"ba1a";s:46:"Classes/Domain/Repository/TeaserRepository.php";s:4:"9984";s:45:"Classes/Domain/Repository/VenueRepository.php";s:4:"a200";s:31:"Classes/Hooks/ItemsProcFunc.php";s:4:"9d30";s:29:"Classes/Hooks/T3libBefunc.php";s:4:"a125";s:36:"Classes/Service/ExtensionService.php";s:4:"71e5";s:44:"Classes/ViewHelpers/HeaderDataViewHelper.php";s:4:"a664";s:41:"Classes/ViewHelpers/MetaTagViewHelper.php";s:4:"8e02";s:42:"Classes/ViewHelpers/TitleTagViewHelper.php";s:4:"08bb";s:52:"Classes/ViewHelpers/Event/PerformancesViewHelper.php";s:4:"5581";s:68:"Classes/ViewHelpers/Event/Performances/Locations/CountViewHelper.php";s:4:"6dd9";s:45:"Classes/ViewHelpers/Format/TrimViewHelper.php";s:4:"c3dd";s:60:"Classes/ViewHelpers/Widget/Controller/PaginateController.php";s:4:"5912";s:44:"Configuration/ExtensionBuilder/settings.yaml";s:4:"8c28";s:43:"Configuration/FlexForms/flexform_events.xml";s:4:"7337";s:27:"Configuration/TCA/Event.php";s:4:"44b2";s:35:"Configuration/TCA/EventLocation.php";s:4:"f1be";s:31:"Configuration/TCA/EventType.php";s:4:"3521";s:27:"Configuration/TCA/Genre.php";s:4:"05d4";s:31:"Configuration/TCA/Organizer.php";s:4:"d721";s:33:"Configuration/TCA/Performance.php";s:4:"0e3b";s:39:"Configuration/TCA/PerformanceStatus.php";s:4:"d08e";s:26:"Configuration/TCA/Task.php";s:4:"2b5f";s:28:"Configuration/TCA/Teaser.php";s:4:"79c0";s:33:"Configuration/TCA/TicketClass.php";s:4:"3745";s:27:"Configuration/TCA/Venue.php";s:4:"c40b";s:38:"Configuration/TypoScript/constants.txt";s:4:"bd3e";s:34:"Configuration/TypoScript/setup.txt";s:4:"2632";s:24:"Documentation/Images.txt";s:4:"0c40";s:23:"Documentation/Index.rst";s:4:"13c1";s:33:"Documentation/ExtEvents/Index.rst";s:4:"fb01";s:47:"Documentation/ExtEvents/Configuration/Index.rst";s:4:"b284";s:56:"Documentation/ExtEvents/Configuration/Overview/Index.rst";s:4:"c8ff";s:42:"Documentation/ExtEvents/Credits/Images.txt";s:4:"3507";s:41:"Documentation/ExtEvents/Credits/Index.rst";s:4:"a127";s:46:"Documentation/ExtEvents/Introduction/Index.rst";s:4:"a932";s:59:"Documentation/ExtEvents/Introduction/WhatDoesItDo/Index.rst";s:4:"912b";s:43:"Documentation/ExtEvents/To-doList/Index.rst";s:4:"e07c";s:45:"Documentation/ExtEvents/UsersManual/Index.rst";s:4:"dea4";s:62:"Documentation/ExtEvents/UsersManual/AuxiliaryRecords/Index.rst";s:4:"5c1c";s:53:"Documentation/ExtEvents/UsersManual/Events/Images.txt";s:4:"cabb";s:52:"Documentation/ExtEvents/UsersManual/Events/Index.rst";s:4:"01d4";s:59:"Documentation/ExtEvents/UsersManual/InsertPlugins/Index.rst";s:4:"540b";s:54:"Documentation/ExtEvents/UsersManual/Overview/Index.rst";s:4:"3de7";s:45:"Documentation/Images/manual_html_22ebf792.gif";s:4:"1563";s:45:"Documentation/Images/manual_html_3c9c2593.png";s:4:"0eb5";s:45:"Documentation/Images/manual_html_m3c18b3d.png";s:4:"b2d8";s:46:"Documentation/Images/manual_html_m63a1b3be.png";s:4:"f491";s:40:"Resources/Private/Language/locallang.xml";s:4:"c3f9";s:43:"Resources/Private/Language/locallang_be.xml";s:4:"f8ae";s:53:"Resources/Private/Language/locallang_csh_flexform.xml";s:4:"b959";s:61:"Resources/Private/Language/locallang_csh_static_countries.xml";s:4:"328b";s:75:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_event.xml";s:4:"3c90";s:83:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_eventlocation.xml";s:4:"37f8";s:79:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_eventtype.xml";s:4:"9856";s:75:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_genre.xml";s:4:"2b4d";s:78:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_location.xml";s:4:"aceb";s:79:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_organizer.xml";s:4:"7573";s:81:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_performance.xml";s:4:"45e0";s:87:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_performancestatus.xml";s:4:"1029";s:74:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_task.xml";s:4:"7713";s:76:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_teaser.xml";s:4:"04ed";s:81:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_ticketclass.xml";s:4:"01ff";s:75:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_venue.xml";s:4:"16f5";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"547a";s:38:"Resources/Private/Layouts/Default.html";s:4:"262e";s:46:"Resources/Private/Partials/Event/ListItem.html";s:4:"7f3a";s:48:"Resources/Private/Partials/Event/Properties.html";s:4:"1f2a";s:48:"Resources/Private/Partials/Event/SingleItem.html";s:4:"83db";s:50:"Resources/Private/Partials/EventLocation/Item.html";s:4:"1011";s:56:"Resources/Private/Partials/EventLocation/Properties.html";s:4:"45c1";s:51:"Resources/Private/Partials/Location/Properties.html";s:4:"1bce";s:46:"Resources/Private/Partials/Organizer/Item.html";s:4:"f5a0";s:52:"Resources/Private/Partials/Organizer/Properties.html";s:4:"c7fa";s:48:"Resources/Private/Partials/Performance/Item.html";s:4:"18d3";s:54:"Resources/Private/Partials/Performance/Properties.html";s:4:"3e93";s:43:"Resources/Private/Partials/Teaser/Item.html";s:4:"2e20";s:48:"Resources/Private/Partials/TicketClass/Item.html";s:4:"87c2";s:48:"Resources/Private/Partials/TicketClass/List.html";s:4:"0e93";s:54:"Resources/Private/Partials/TicketClass/Properties.html";s:4:"92a2";s:48:"Resources/Private/Partials/Venue/Properties.html";s:4:"b614";s:43:"Resources/Private/Templates/Event/List.html";s:4:"32ee";s:48:"Resources/Private/Templates/Event/QuickMenu.html";s:4:"2e77";s:43:"Resources/Private/Templates/Event/Show.html";s:4:"b62d";s:44:"Resources/Private/Templates/Teaser/List.html";s:4:"26d2";s:49:"Resources/Private/Templates/TicketClass/List.html";s:4:"b4b7";s:49:"Resources/Private/Templates/TicketClass/Show.html";s:4:"3a8b";s:43:"Resources/Private/Templates/Venue/List.html";s:4:"dc2c";s:43:"Resources/Private/Templates/Venue/Show.html";s:4:"4b61";s:66:"Resources/Private/Templates/ViewHelpers/Widget/Paginate/Index.html";s:4:"1d2d";s:38:"Resources/Public/Css/t3eventsBasic.css";s:4:"cb6f";s:47:"Resources/Public/Css/t3eventsBasic.original.css";s:4:"b385";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:43:"Resources/Public/Icons/static_countries.gif";s:4:"1103";s:57:"Resources/Public/Icons/tx_t3events_domain_model_event.gif";s:4:"c924";s:65:"Resources/Public/Icons/tx_t3events_domain_model_eventlocation.gif";s:4:"2959";s:61:"Resources/Public/Icons/tx_t3events_domain_model_eventtype.gif";s:4:"c055";s:57:"Resources/Public/Icons/tx_t3events_domain_model_genre.gif";s:4:"5bb5";s:60:"Resources/Public/Icons/tx_t3events_domain_model_location.gif";s:4:"2959";s:61:"Resources/Public/Icons/tx_t3events_domain_model_organizer.gif";s:4:"3e33";s:63:"Resources/Public/Icons/tx_t3events_domain_model_performance.gif";s:4:"ff9d";s:69:"Resources/Public/Icons/tx_t3events_domain_model_performancestatus.gif";s:4:"5adf";s:58:"Resources/Public/Icons/tx_t3events_domain_model_teaser.gif";s:4:"acae";s:63:"Resources/Public/Icons/tx_t3events_domain_model_ticketclass.gif";s:4:"06be";s:57:"Resources/Public/Icons/tx_t3events_domain_model_venue.gif";s:4:"4934";s:39:"Resources/Public/Images/dummy-image.png";s:4:"8084";s:32:"Resources/Public/Js/accordion.js";s:4:"72d0";s:25:"Tests/Build/UnitTests.xml";s:4:"3310";s:48:"Tests/Unit/Controller/AbstractControllerTest.php";s:4:"eebb";s:45:"Tests/Unit/Controller/EventControllerTest.php";s:4:"1304";s:53:"Tests/Unit/Controller/EventLocationControllerTest.php";s:4:"0beb";s:49:"Tests/Unit/Controller/OrganizerControllerTest.php";s:4:"43ab";s:51:"Tests/Unit/Controller/PerformanceControllerTest.php";s:4:"fd6c";s:46:"Tests/Unit/Controller/TeaserControllerTest.php";s:4:"a802";s:51:"Tests/Unit/Controller/TicketClassControllerTest.php";s:4:"deea";s:45:"Tests/Unit/Controller/VenueControllerTest.php";s:4:"1631";s:46:"Tests/Unit/Domain/Model/AbstractDemandTest.php";s:4:"5abc";s:43:"Tests/Unit/Domain/Model/EventDemandTest.php";s:4:"0103";s:45:"Tests/Unit/Domain/Model/EventLocationTest.php";s:4:"fe7e";s:37:"Tests/Unit/Domain/Model/EventTest.php";s:4:"9bbd";s:41:"Tests/Unit/Domain/Model/EventTypeTest.php";s:4:"75f1";s:37:"Tests/Unit/Domain/Model/GenreTest.php";s:4:"8511";s:41:"Tests/Unit/Domain/Model/OrganizerTest.php";s:4:"2fdd";s:49:"Tests/Unit/Domain/Model/PerformanceDemandTest.php";s:4:"a9a3";s:49:"Tests/Unit/Domain/Model/PerformanceStatusTest.php";s:4:"3f89";s:43:"Tests/Unit/Domain/Model/PerformanceTest.php";s:4:"af73";s:36:"Tests/Unit/Domain/Model/TaskTest.php";s:4:"d735";s:44:"Tests/Unit/Domain/Model/TeaserDemandTest.php";s:4:"91c2";s:38:"Tests/Unit/Domain/Model/TeaserTest.php";s:4:"3e65";s:43:"Tests/Unit/Domain/Model/TicketClassTest.php";s:4:"b6e5";s:37:"Tests/Unit/Domain/Model/VenueTest.php";s:4:"ab89";s:14:"doc/manual.sxw";s:4:"e711";}',
);

