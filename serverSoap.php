<?php
$classExample = array();

$soap = new SoapServer(null,array('uri'=>"http://localhost/",'classExample'=>$classExample));
$soap->setClass('chesterClass');
$soap->handle();

class chesterClass {
    public $name = 'Chester';

    function getName() {
        return $this->name;
    }
}