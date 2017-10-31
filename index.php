<?php

require __DIR__ . '/autoload.php';

$db = new \App\Db();
$res = $db->execute('DROP TABLE foo');
var_dump($res);