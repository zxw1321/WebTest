<?php
try {
	$client = new SoapClient(null,
			array('location' =>"http://localhost/testweb/serverSoap.php",'uri' => "http://localhost/")
			);
	 echo $client->getName();

} catch (SoapFault $fault){
	echo "Error: ",$fault->faultcode,", string: ",$fault->faultstring;
}