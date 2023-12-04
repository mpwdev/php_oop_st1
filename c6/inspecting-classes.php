<?php

	require_once 'vendor/autoload.php';

	// $exists = class_exists( 'App\User' );
	$exists = class_exists( \App\User::class );

	$unknownObject = \App\UserFactory::create( 5, 'Gary' );
	$className     = get_class( $unknownObject );

	$isUser = $unknownObject instanceof \App\User;

	$admin = new \App\Admin( 6, 'Isabel' );

	$parentClass = get_parent_class( $admin );

	$isSubClass = is_subclass_of( $admin, \App\User::class );

	$classImplements = class_implements( $admin );

	echo '<pre>';
	print_r( $unknownObject );
	echo '</pre>';
	echo '<br>';
	print_r( $className );
	echo '<br>';
	print_r( $isUser );
	echo '<br>';
	print_r( $parentClass );
	echo '<br>';
	print_r( $isSubClass );
	echo '<br>';
	echo '<pre>';
	print_r( $classImplements );
	echo '</pre>';

