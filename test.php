<?php

$handle = fopen('/dev/ttyUSB0', 'r+');
sleep(5);
while(1) {
	//fwrite($handle, 1);
	//sleep(2);
	//fwrite($handle, 2);
	//sleep(2);
	echo "tick\n";
	var_dump(fread($handle, 10));
	sleep(2);
}

?>