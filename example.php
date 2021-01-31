<?php

include_once "db-class.php";
include_once "config.php";

// CREAT PAGES TABLE
// UNCOMMENT FOR USE
/*
$database->query("DROP TABLE IF EXISTS `pages`;");
$database->query("
CREATE TABLE `pages` (
`page_id` int(11) NOT NULL AUTO_INCREMENT,
`title` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
`url` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
`description` text COLLATE utf8_unicode_ci NOT NULL,
PRIMARY KEY (`page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
");

 */

$page_title = "page title here";
$url = "url here";
$description = "description also here";

//Database::insert('pages', ['title' => $page_title, 'url' => $url, 'description' => $description], false);

//Database::update('pages', ['title' => 'hh'], ['page_id' => '3']);

/* if (Database::exists('page_id', 'pages', ['title' => $page_title])) {
echo "page found";
} else {
echo "page not found";
} */

// Database::simple_get('title', 'pages', ['page_id' => 4]);

//$data = Database::get(['title', 'description'], 'pages', ['page_id' => 4]);

//echo $data->title . $data->description;