<?php
include 'databases.php';
$s = $_GET['s'];
$s2 = str_replace(" ", "-", $s);
$trang = $_GET['trang'];
if(!$trang){ $trang = 1; }
include 'theme/'.$theme.'/search.php';
?>