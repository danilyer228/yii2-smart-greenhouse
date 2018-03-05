<?php
function read_content($fp){

    $content = ""; $i = 0;
    do {
        $content .= fread($fp, 1);
        echo $content;
		sleep(1);
    } while (($i += 1) === strlen($content));
    return $content;    
}

function write($command){
    $tty = 'COM8';
    $fp = fopen($tty, 'w');
	sleep(2);
    fwrite($fp, $command);
	sleep(1);
    fclose($fp);
}

function save_data($data) {
    $tty = 'data_sensor';
	$fp = fopen($tty, 'w');
	fwrite($fp, $data);
	fclose($fp);
}


?>
