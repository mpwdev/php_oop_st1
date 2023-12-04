<?php

  require_once 'Book.php';
  //require_once 'Song.php';

  $book1 = new Book();
  //$song1 = new Song();

  $book1->setId( 12345 );
  $book1->setName( 'Master' );

  echo '<pre>';
  //var_dump($album1->getSongs());
  echo '</pre>';


  echo '<br>';

  echo '<pre>';
  print_r( $book1->printIdentity() . '<br>' );
  // print_r($song1->getHexId() . '<br>');
  // print_r($song1->getId() . '<br>');
  // print_r($song1->getOriginalHexId() . '<br>');
  echo '</pre>';
