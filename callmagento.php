<?php
$proxy = new SoapClient('http://localhost/magento/api/soap/?wsdl');
//$proxy = new SoapClient('http://localhost/magento/api/v2_soap/?wsdl=1');
$sessionId = $proxy->login('a4qyzzz', '35802630');
$order = $proxy->call($sessionId, 'order.info',200000001);
echo $order['base_grand_total'];
//print_r($customerinfo);