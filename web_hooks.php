<?php
file_put_contents('log.php',date('Y-m-d H:i:s'));
$res = [];
exec('sh ./auto_sync.sh',$res);
var_dump($res);
