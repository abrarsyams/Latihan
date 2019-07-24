<?php
$filename = 'tempt.txt';

//fopen($filename, 'r');

if(file_exists($filename)){
    echo "The $filename ditemukan";
    $file=fopen("tempt.txt",'w+');
    for ($x = 0; $x <=10; $x++){
    fwrite($file,$x.".kalimat ini ditulis olehh abrar \r\n");
    }
    fclose($file);
}else{
    echo "file $filename tidak ditemukan";
    fopen("tempt.txt",'w');
    echo "file ditemukan";
}
?>