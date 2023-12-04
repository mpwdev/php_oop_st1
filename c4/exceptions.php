<?php

  require_once 'JsonFileReader.php';

  //  $reader1 = new JsonFileReader();
  //
  //  echo '<br>';
  //  echo '<pre>';
  //  print_r( $items = $reader1->readFileAsArray( 'foo.json' ) );
  //  echo '</pre>';
  //  echo '<br><br>';

  try {

    $filePointer = fopen( 'errors.txt', 'a+' );
    fwrite( $filePointer, "Starting..." );

    $reader = new JsonFileReader();
    $items = $reader->readFileAsArray( 'foo.json' );

    print_r( $items );

  } catch (FileNotFoundException|JsonException $fileException) {

    fwrite( $filePointer, "File problem: {$fileException->getMessage()} on line {$fileException->getLine()}  in file {$fileException->getFile()} \n" );

    print 'There was a problem with your file...please check the errors.log' . PHP_EOL;

  } catch (Exception $exception) {

    fwrite( $filePointer, "A problem occurred: {$exception->getMessage()} on line {$exception->getLine()} in file {$exception->getFile()} \n" );

    print 'There was a problem...please check the errors.log' . PHP_EOL;

  } finally {

    print "Finally block being called" . PHP_EOL;

    fclose( $filePointer );
  }