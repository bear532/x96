<?php
$vid=$_GET['id'];//https://bear9501.github.io/news/51.m3u8
$nid=$_GET['nid'];
$url="https://bear9501.github.io/TVBoxDIY/main".$vid.$nid."";
header('location:'.urldecode($url));//http://tvvbox.ml/gith.php?id=51.m3u8
?>

//<?php
//$id=$_GET['id'];//https://bear9501.github.io/news/51.m3u8
//$url="https://bear9501.github.io/news/".$id.".m3u8";//https://hms9501.000webhostapp.com/gith.php?id=51
//header('location:'.urldecode($url));//http://tvvbox.ml/gith.php?id=51
//?>