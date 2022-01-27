<?php

$params = explode('/',$_GET['url']);
$model = array_shift($params);

include('./controller/'.$model.'.php');
$ret = handle($params);

extract($ret);
include('./view/'.$model.'.php');

?>
