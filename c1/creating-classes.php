<?php

  class Product {

    public function __construct(public $name = 'Soap', public $price = 100) {

    }

    public function priceCurrency( $divisor = 1, $curSymbol = '$') {
      $priceCalculated = $this->price / $divisor;

      return $curSymbol . $priceCalculated;
    }
  }

  $product1 = new Product(name: 'Apple');
  $product1->price = 550;
  $priceAsCurrency = $product1->priceCurrency(curSymbol: '#');


  echo '<pre>';
  var_dump($product1);
  var_dump($priceAsCurrency);

  echo '</pre>';

  echo '<br>';

  echo '<pre>';
  print_r($product1->name . '<br>');
  echo '</pre>';
