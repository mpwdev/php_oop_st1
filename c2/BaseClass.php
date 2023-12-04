<?php

  class BaseClass {
    public string $publicProperty = 'Public property here';

    protected string $protectedProperty = 'Protected property here';

    private string $privateProperty = 'Private property here';

    protected function getProtectedProperty(): string {
      return $this->protectedProperty;
    }

    public function getPrivateProperty(): string {
      return $this->privateProperty . ' from the Base class';
    }

  }
