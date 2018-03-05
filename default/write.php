<?php
$tty = '/dev/ttyACM0';
function write($command){
    $tty = '/dev/ttyACM0';
    $fp = fopen($tty, 'w');
    //fwrite($fp, $command);
    sleep(3);
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
write (5);
?>
