<?php

require_once 'bootstrap.php';

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

/* if(Database::exists('page_id', 'pages', ['title' => 'some title'])) {
echo "page found";
} else {
echo "page not found";
}
 */

/* $title = Database::simple_get('title', 'pages', ['page_id' => 1]);
echo $title;
//will print "new title here"
 */

/* $data = Database::get(['title', 'description'], 'pages', ['page_id' => 4]);

echo $data->title . "\n" . $data->description;
//will print new title here description here
 */

/* $data = Database::get(['*'], 'pages', ['page_id' => 1]);
echo $data->page_id . $data->title . $data->url . $data->description;
 */