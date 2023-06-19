<?php
$vid=$_GET['id'];//https://raw.githubusercontent.com/bear532/tv/main/01.m3u8
$nid=$_GET['nid'];
$url="https://raw.githubusercontent.com/bear532/tv/main/".$vid.$nid."";
header('location:'.urldecode($url));//http://tvvbox.ml/bear532.php?id=01.m3u8
?>
