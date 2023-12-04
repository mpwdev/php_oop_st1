<?php

  require_once 'BaseClass.php';
  require_once 'SubClass.php';

  $baseObject = new BaseClass();
  $subObject = new SubClass();

  echo '<br>';
  //print_r($baseObject->getProtectedProperty() . '<br>');
  print_r($baseObject->getPrivateProperty() . '<br>');
  print_r($subObject->getParentProtectedProperty() . '<br>');
  echo '<br><br>';
