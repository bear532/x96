<?php
$vid=$_GET['id'];//https://raw.githubusercontent.com/Bear9501/news/YTlive/55.m3u8
$nid=$_GET['nid'];
$url="https://raw.githubusercontent.com/Bear9501/TVBoxDIY/main/".$vid.$nid."";
header('location:'.urldecode($url));//http://tvvbox.ml/raw.php?id=51.m3u8
?>
