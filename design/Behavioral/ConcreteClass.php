<?php
// ConcreteClass.php
function __autoload($class_name) {
	include $class_name . '.php';
}
class ConcreteClass extends AbstractClass {
	protected function addPix($pix) {
		$this->pix = $pix;
		$this->pix = "pix/" . $this->pix;
		$formatter = "<img src=$this->pix><br/>";
		echo $formatter;
	}
	protected function addCaption($cap) {
		$this->cap = $cap;
		echo "<em>Caption:</em>" . $this->cap . "<br/>";
	}
}