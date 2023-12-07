<?php

	namespace App;

	class User implements AuthenticatedUserInterface {
		public function __construct( private int $id, public string $name ) {
		}

		public function getId(): int {
			return $this->id;
		}

		private function getName(): string {
			return $this->name;
		}
	}