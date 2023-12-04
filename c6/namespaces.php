<?php

	require_once 'MySql\Connection.php';
	require_once 'Postgres\Connection.php';

	use MySql\Connection as MySqlConnection;
	use Postgres\Connection as PostgresConnection;

	$mySqlConnection    = new MySqlConnection();
	$postgresConnection = new PostgresConnection();

	print $mySqlConnection->connect();
	echo '<br>';
	print $postgresConnection->connect();