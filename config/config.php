<?php

/* CONNECTION */
$database_connection = new StdClass();

/** MySQL hostname */
$database_connection->server = 'localhost';

/** MySQL database username */
$database_connection->username = 'root';

/** MySQL database password */
$database_connection->password = '';

/** The name of the database */
$database_connection->name = 'mekbout';

/* ESTABLISHING THE CONNECTION */
$database = new mysqli($database_connection->server, $database_connection->username, $database_connection->password, $database_connection->name);

/* REDIRECT TO INSTALLER (IMPORTANT) */
if ($database->connect_error) {

    echo " Failed to connect : \n" . $database->connect_error;
}

/* DB CLASS */
Database::$database = $database;

/* DEBUGGING */
define('DEBUGGING', false);