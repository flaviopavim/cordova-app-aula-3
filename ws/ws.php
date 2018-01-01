<?php

//$html = file_get_contents('http://localhost/hello/ws/pg/home.php');
//$json['return'] = $html;
$json['return'] = base64_decode($_GET['q']);
echo json_encode($json);