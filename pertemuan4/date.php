<?php 

echo date("l, d-M-Y");

echo time();

echo date("l", time()-60*60*24*100);

// mktime (0, 0, 0, 0, 0, 0)

echo date("l", mktime(0,0,0,8,25,1985));
 

 // srttotime
echo date("l", srttotime("25 aug 1985"));




?>