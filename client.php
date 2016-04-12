<?php
/*
$client = new SoapClient("person.wsdl");
//$client = new SoapClient("Service.php?wsdl");//这样也行
echo($client->say());
echo "<br />";
echo($client->run());
echo "<br />";
*/
class Tools{
	private static $myself=null;
	public $a;
	
	private function __construct(){
	}
	
	public static function getInstance() {
		if(self::$myself == null){
			self::$myself = new Tools();
		}
		return self::$myself;
	}
}

$t1 = Tools::getInstance();
$t1->a = 1;
$t2 = Tools::getInstance();
echo $t2->a;
$test = new Tools();
echo $test->a;
