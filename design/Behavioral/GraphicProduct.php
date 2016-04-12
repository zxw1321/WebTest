<?php
class GraphicProduct implements Product {
	private $mfgProduct;
	public function getProperties() {
		$this->mfgProduct = "<img src='../../Img/test.png'>";
		return $this->mfgProduct;
	}
}