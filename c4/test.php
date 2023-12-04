<?php

	require_once 'final-keyword.php';

	$calc1 = new Calculator();

	echo '<pre>';
	var_dump( $calc1->calcPercentage( 5, 20 ) );
	echo '</pre>';
	//die();


	$calc2 = new FinCalculator();

	echo '<br>';
	print_r( $calc2->calcPercentage( 5, 20 ) );
	echo '<br><br>';
	die();




