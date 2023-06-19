<?php
$id=$_GET['id'];//https://stream.naihe.cf/api/v2/channel4.m3u8?fid=4gtv-live007&hd=1080
$url="https://stream.naihe.cf/api/v2/".$id."&hd=720";//https://hms9501.000webhostapp.com/mgt.php?id=channel4.m3u8?fid=4gtv-live007
header('location:'.urldecode($url));//http://tvvbox.ml/mgt.php?id=channel3.m3u8?fid=4gtv-live007
?>