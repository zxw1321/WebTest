<?php
$host = 'localhost:3306';
$user = 'root';
$pwd = '123456';
$db = 'test';
$conn = mysql_connect($host,$user,$pwd);

mysql_select_db($db,$conn);
$sql = 'select * from t order by id desc';
$result = mysql_query($sql,$conn);

while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
	$test_key[] = $row;
}
$sql = md5($sql);
$mem = new Memcache();
$mem -> connect('localhost',11211);
$mem -> set('array_key',$test_key,0,600);

print_r($mem->get($sql));