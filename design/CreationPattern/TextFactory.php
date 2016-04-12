<?php
include_once('Creator.php');
include_once('TextProduct.php');
class TextFactory extends Creator{
	public function factoryMethod() {
		$product = new TextProduct();
		return $product->getProperties();
	}
}