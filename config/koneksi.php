<?php
$config = parse_ini_file('config.ini');
$host = $config['host'];
$db = $config['db'];
$user = $config['user'];
$password = $config['password'];

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
	$pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
	echo $e->getMessage();
}