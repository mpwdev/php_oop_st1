<?php

  require_once 'Book.php';

  class PhysicalBook extends Book {
    public $weight;

    public function __construct( string $title, string $author, int $price, int $weight ) {
      parent::__construct( $title, $author, $price ); // from parent
      $this->weight = $weight;
    }

    public function getWeight(): int {
      return $this->weight;
    }

    public function print(): string {
      return "{$this->title}, {$this->author}, weight: {$this->weight}";
    }
  }
