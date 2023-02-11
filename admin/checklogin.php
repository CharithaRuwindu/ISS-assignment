<?php
//$ip = md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);

$options = [
    'cost' => 12,
];
$ip = password_hash($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT'], PASSWORD_BCRYPT, $options);


$lastlogin = file_get_contents('lastlogin.encrypt');
if($ip == $lastlogin){
}
else{
    header('Location: ./login.php');
}
