<?php
function read_content($fp){

    $content = ""; $i = 0;
    do {
	//var_dump('f',fread($fp, 128));
        $content .= fread($fp, 128);
        echo $content;
	sleep(3);
file_put_contents('save.txt', $content."\n", FILE_APPEND);
    } while (($i += 128) === strlen($content));
    return $content;    
}
$tty = '/dev/ttyACM0';
$fp = fopen($tty,'r'); 
//var_dump($fp);
//var_dump('f',fread($fp, 128));
sleep(2);
echo "start read";
/** for simple */
while (1) {
   $content = read_content($fp);
   //var_dump($content);
   if (!empty($content)) {
       echo "===========\n";
       echo $content;
   }
}
$full = "";
/*
while (1) {
   $content = read_content($fp);
   
   if (!empty($content)) {
    $full .= $content;
    if (strlen($full) > 8) {
        echo "===============\n";
        echo $full;
        $full = "";        
    }
   }
}
*/
