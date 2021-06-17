<?php

class DiscountCalculatorTest {

	public function shouldApplyWhenValueIsAboveTheMiniumTest() {

		$discountCalculator = new DiscountCalculator();

		$value = $discountCalculator->apply(120);

		$this->assertEquals($value, 100);

	}

	public function ShouldNotApplyWhenValueIsBellowTheMinimumTest() {

		$discountCalculator = new DiscountCalculator();

		$value = $discountCalculator->apply(90);

		$this->assertEquals($value, 90);

	}

	public function assertEquals($expected, $actual) {

		if($expected !== $actual) {
			$message = "Expected: " . $expected . "but got: " . $actual;
			throw new \Exception($message);
		}

		echo "Test passed! \n";

	}

}
