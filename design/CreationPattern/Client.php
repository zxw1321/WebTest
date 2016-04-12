<?php
include_once ('GeneralFactory.php');
include_once ('KyrgyzstanProduct.php');
class Client {
	private $generalFactory;
	public function __construct() {
		$this->generalFactory = new GeneralFactory ();
		echo $this->generalFactory->doFactory ( new KyrgyzstanProduct () );
	}
}
$worker = new Client ();