<?php
    function tinhTong($a = 10, $b = 20){
         $sum = $a + $b;
         print "Tổng của 2 số đã cho là".$sum;
    }

    function tinhTongDay($arr){
        $sumodd = 0;
        $sumeven = 0;

        foreach ($arr as $num){
            if($num % 2 == 0){
                $sumeven += $num;
            }else{
                $sumodd += $num;
            }
        }

        print "Tổng các số chẵn là: ".$sumeven;
        print "Tổng các số lẻ là: ".$sumodd;
    }

    function giaiPTB2($a = 0, $b = 0, $c = 0) {

        if ($a == 0) {
            if ($b == 0) {
                print ("Phương trình vô nghiệm!");
            } else {
                print ("Phương trình có một nghiệm: " . "x = " . (- $c / $b));
            }
            return;
        }

        $delta = $b * $b - 4 * $a * $c;

        if ($delta > 0) {
            print ("Phương trình có 2 nghiệm là: " . "x1 = " . (- $b + sqrt ( $delta )) / (2 * $a) . ", x2 = " . (- $b - sqrt ( $delta )) / (2 * $a));
        } else if ($delta == 0) {
            print ("Phương trình có nghiệm kép: x1 = x2 = " . (- $b / (2 * $a)));
        } else {
            print ("Phương trình vô nghiệm!");
        }
    }

    giaiPTB2(2,3,1);
    tinhTong();
    tinhTongDay(array());