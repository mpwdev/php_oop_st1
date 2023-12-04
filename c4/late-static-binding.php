<?php

	require_once 'Ssong.php';
	require_once 'Bbook.php';

	$ssong = Ssong::create();
	$bbook = Bbook::create();

	echo '<br>';
	print_r( var_dump( $ssong ) );
	echo '<br><br>';

	echo '<br>';
	print_r( var_dump( $bbook ) );
	echo '<br><br>';


