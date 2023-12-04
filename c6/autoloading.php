<?php

	use Utility\Chart;

	require_once 'autoload.php';

	$chart = new Chart();
	print $chart->draw();

	echo '<br>';

	$connection = new \Postgres\Connection();
	print $connection->connect();