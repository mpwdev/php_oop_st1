<?php

  require_once 'BaseClass.php';

	class SubClass extends BaseClass {

    public function getParentProtectedProperty(): string {
      //return $this->protectedProperty . ' from subClass';
      return $this->getProtectedProperty() . ' from subClass';
    }

  }
