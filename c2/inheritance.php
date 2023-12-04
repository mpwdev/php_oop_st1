<?php

  //require_once 'Book.php';
  require_once 'PhysicalBook.php';
  require_once 'DigitalBook.php';

  $book = new Book('A Random BookBook', 'Jane Doe', 2150);
  $physicalBook = new PhysicalBook('A Random BookP', 'Jane Doe', 2000, 300);
  $digitalBook = new DigitalBook('A Random BookD', 'Jane Doe', 2000, 1048);

  echo '<br>';
  print_r($book->print() . '<br>');
  print_r($physicalBook->print() . '<br>');
  print_r($digitalBook->print() . '<br>');
  echo '<br><br>';

