<?php

	require_once 'vendor/autoload.php';

	$user = new \App\User( 7, 'Bob' );


	$classMethods = get_class_methods( $user );

	// do not show private methods
	// dd($classMethods);

	$methodExists = method_exists( $user, 'getId' );
	// dd($methodExists); // return true if exists

	$isCallable = is_callable( [ $user, 'getId' ] );
	// dd( $isCallable );

	$props = get_class_vars( \App\User::class );
	// dd( $props );

	$objectVars = get_object_vars( $user );
	dd( $objectVars );


