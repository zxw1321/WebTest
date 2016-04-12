<?php
$memcache = new Memcache();
$memcache->connect('localhost',11211) or die("Could not connect");
$version = $memcache->getversion();
echo "Server's version: ".$version."<BR>\n";

// $tmp_object = new stdClass();
// $tmp_object -> str_attr = 'test';
// $tmp_object -> int_attr = 123;
// $memcache->set('key', $tmp_object, false, 10) or die ("Failed to save data at the server");
// echo "Store data in the cache (data will expire in 10 seconds)<BR>\n";

$get_result = $memcache->getserverstatus('localhost',11211);
var_dump($get_result);
