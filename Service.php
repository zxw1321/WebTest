<?php
include ("person.class.php");
$objSoapServer = new SoapServer("person.wsdl");//person.wsdl是刚创建的wsdl文件 
//$objSoapServer = new SoapServer("server.php?wsdl");//这样也行 
$objSoapServer->setClass("person");//注册person类的所有方法 
$objSoapServer->handle();//处理请求 