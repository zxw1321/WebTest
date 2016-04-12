<?php
// Hardware.php
// Concrete decorator
class Hardware extends ComDecorator {
	private $hardwareNow;
	public function __construct(ICom $dateNow) {
		$this->date = $dateNow;
	}
	private $box = array (
			"mac" => "Macintosh",
			"dell" => "Dell",
			"hp" => "Hewlett-Packard",
			"lin" => "Linux" 
	);
	public function setFeature($hdw) {
		$this->hardwareNow = $this->box [$hdw];
	}
	public function getFeature() {
		$output = $this->date->getFeature ();
		$fmat = "<br/>&nbsp;&nbsp;";
		$output .= "$fmat Current Hardware: ";
		$output .= $this->hardwareNow;
		return $output;
	}
}