<?php
session_start();
$random_num=rand(11111,99999);
$_SESSION['CODE']=$random_num;
$decision=imagecreatetruecolor(60,30);
$captcha_bckgrud=imagecolorallocate($decision,420,169,120);
imagefill($decision,0,0,$captcha_bckgrud);
$captcha_word_color=imagecolorallocate($decision,1,2,3);
imagestring($decision,5,5,5,$random_num,$captcha_word_color);
header('Content-Type:image/jpeg');
imagejpeg($decision);
?>