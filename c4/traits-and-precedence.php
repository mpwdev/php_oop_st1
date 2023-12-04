<?php

  //require_once 'Book.php';
  require_once 'Song.php';

  //$book1 = new Book();
  $song1 = new Song();

  echo '<pre>';
  //var_dump($album1->getSongs());

  echo '</pre>';

  echo '<br>';

  echo '<pre>';
  //print_r($book1->getHexId() . '<br>');
  print_r($song1->getHexId() . '<br>');
  print_r($song1->getId() . '<br>');
  print_r($song1->getOriginalHexId() . '<br>');
  echo '</pre>';
