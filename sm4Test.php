<?php
header("Content-type:text/html;charset=gb2312");
include 'sm4.php';
$sm4 = new SM4();

$key = '1234567890123456';
$data = '1234567890abcdefghijklmnopqrstuvwxyz!@#$%^&*(),./;我是一个好人，你不要怀疑';
echo 'Key: '.$key.'<br>';
echo 'Data: '.$data.'<br>';

$enc = $sm4->encrypt($key, $data);
echo 'encrypt: '.$enc.'<br>';
$dec = $sm4->decrypt($key,'mpkfJeMwPhIXPwT2mO1fTSFWNyFuoG3nzQeIjzJNkfHsa6EZiyTAzRGjm8PC37XSnoAtOXlIoyiesO6u84nGJFWzmEkp2wbGbwhmkz+CwR8=');
echo 'decrypt: '.$dec.'<br>';