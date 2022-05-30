<?php
error_reporting(E_ALL);
require_once 'core/init.php';
// var_dump($_SESSION);
$body_email = file_get_contents('https://duckgutboy.com/email_tmp/dangky.html');
$body_email = str_replace('%name%', 'Chỉnh', $body_email);
$body_email = str_replace('%email%', 'hịi', $body_email);
$body_email = str_replace('%code%', '125879', $body_email);
// echo $body_email;die;
sendEmail('ngvchinhyeulan@gmail.com', 'Chỉnh', 'Email thông báo đăng ký thành công tài khoản', $body_email);
?>