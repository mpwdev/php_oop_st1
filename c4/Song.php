<?php

  require_once 'Identifiable.php';
  require_once 'IdentifiableTrait.php';
  require_once 'IdentifiableTraitImposter.php';

  class Song implements Identifiable {
    use IdentifiableTrait;
    use IdentifiableTraitImposter {
      IdentifiableTraitImposter::getHexId insteadof IdentifiableTrait;
      IdentifiableTrait::getHexId as getOriginalHexId;
    }

    public function getId(): string {
      return "ID returned from class";
    }

  }

