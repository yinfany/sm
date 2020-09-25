<?php
require_once 'SM3.php';
$data = '1234567890abcdefghijklmnopqrstuvwxyz!@#$%^&*(),./;我是一个好人，你不要怀疑';
$sm3 = new SM3($data);
echo $sm3;