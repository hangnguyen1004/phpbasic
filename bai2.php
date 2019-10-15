<?php

$tongchan = 0;
$tongle =0;

for($i =1 ; $i <=100; $i++){
    if ($i%2 == 0){
        $tongchan +=$i;
    }
    else{
        $tongle +=$i;
    }

}
echo "tổng số chẵn " . $tongchan ." & ". "tổng số lẻ " . $tongle;

