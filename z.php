<?php
include 'databases.php';
$BL= $_GET['BL'];
$QG = $_GET['QG'];
$quoc_gia = str_replace('-', ' ', $QG);
$TL = $_GET['TL'];
$the_loai = str_replace('-', ' ', $TL);
if ($TL == 'Hoạt-Hình') { $theloai = 'Yêu'; } else { $theloai = 'Hoạt Hình'; }
$NC = $_GET['NC'];
$trang = $_GET['trang'];
if(!$trang){ $trang = 1; }
include 'theme/'.$theme.'/z.php';
?>