<?php
$id=$_REQUEST['id'];//http://138.2.63.32:9500/live.m3u8?c=1
$ids = array(      
"54.m3u8"=>"1",//三立新聞 http://tvvbox.ml/yu.php?id=54.m3u8
"51.m3u8"=>"2",//東森新聞 http://tvvbox.ml/yu.php?id=51.m3u8
"55.m3u8"=>"3",//TVBS新聞 http://tvvbox.ml/yu.php?id=55.m3u8
"56.m3u8"=>"4",//TVBS http://tvvbox.ml/yu.php?id=56.m3u8
);
    header("Location: http://138.2.63.32:9500/live.m3u8?c=$ids[$id]"); //https://hms9501.000webhostapp.com/yu.php?id=54

   // exit();
?> 



//<?php
//$id=$_REQUEST['id'];//http://138.2.63.32:9500/live.m3u8?c=1
//$ids = array(      
//"54"=>"1",//三立新聞 http://tvvbox.ml/yu.php?id=54
//"51"=>"2",//東森新聞 http://tvvbox.ml/yu.php?id=51
//"55"=>"3",//TVBS新聞 http://tvvbox.ml/yu.php?id=55
//"56"=>"13",//TVBS http://tvvbox.ml/yu.php?id=56
//);
//   header("Location: http://138.2.63.32:9500/live.m3u8?c=$ids[$id]"); //https://hms9501.000webhostapp.com/yu.php?id=54

// exit();
//?> 