<?php
include_once ('Creator.php');
include_once ('Product.php');
class GeneralFactory extends Creator {
	private $country;
	protected function factoryMethod(Product $product) {
		$this->country = $product;
		return ($this->country->getProperties ());
	}
}