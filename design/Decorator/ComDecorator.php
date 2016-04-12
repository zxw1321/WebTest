<?php
// Decorator.php
// Decorator participant
abstract class ComDecorator extends ICom {
	public function setAge($ageNow) {
		$this->ageGroup = $this->ageGroup;
	}
	public function getAge() {
		return $this->ageGroup;
	}
}