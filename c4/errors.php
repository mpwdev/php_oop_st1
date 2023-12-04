<?php

  require_once 'JsonFileReader.php';

  try {

    $reader = new JsonFileReader();
    $data = $reader->readFileAsArray( [ 'inventory.json' ] );

    // $div = 100 / 0;

  } catch (ArgumentCountError|TypeError $error) {

    print 'ArgumentCountError (and Type err) Error ' . $error->getMessage() . '<br>';

    //  } catch (TypeError $error) {
    //
    //    print 'Type Error ' . $error->getMessage() . '<br>';

  } catch (Error $error) {

    print 'Error ' . $error->getMessage() . '<br>';
  }