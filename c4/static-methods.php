<?php

	require_once 'Book.php';

	//$book1 = new Book();


	echo '<br>';

	echo '<pre>';
	//print_r($book1->getHexId() . '<br>');
	print_r( Book::generateHexId() . '<br>' );
	echo '</pre>';
