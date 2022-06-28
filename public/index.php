<?php

echo 'Hello World!';

if( !session_id() ) session_start();

require_once '../app/init.php';
$app = new App;

