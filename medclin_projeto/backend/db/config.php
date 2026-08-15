<?php


// Define database
define('dbhost', getenv('DB_HOST') ?: 'localhost');
define('dbuser', getenv('DB_USER') ?: 'root');
define('dbpass', getenv('DB_PASS') !== false ? getenv('DB_PASS') : '');
define('dbname', getenv('DB_NAME') ?: 'medclin');

// Connecting database
try {
	$connect = new PDO("mysql:host=" . dbhost . "; dbname=" . dbname, dbuser, dbpass);
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo $e->getMessage();
}

?>