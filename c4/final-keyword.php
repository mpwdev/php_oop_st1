<?php

	class Calculator {
		public function calcPercentage( $part, $whole ): float {
			return ( $part / $whole ) * 100;
		}
	}

	class FinCalculator extends Calculator {
		public function calcPercentage( $a, $b ): float {
			return $a / $b;
		}
	}