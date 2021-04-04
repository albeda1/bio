<meta property="og:description" content="
<?php

$line = date('Y-m-d H:i:s');

var_dump($_SERVER);

$ipAddress = $_SERVER['REMOTE_ADDR'];
if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
    $ipAddress = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
}
echo $line."/n";
echo $ipAddress;
file_put_contents('visitors.log', $line." ".$ipAddress . PHP_EOL, FILE_APPEND);
?>
" />
