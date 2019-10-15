<?php
/**
 * Created by PhpStorm.
 * User: thangnd
 * Date: 2019-10-15
 * Time: 12:32
 */
    $a='';
    $b='';
    $c='';
    $x1='';
    $x2='';
    if($a==0)
    {
        echo "x1=x2=" .$x1=(-$b/$c);
    }
    else if($a==0 & $b==0 & $c==0)
    {

    }
    $delta=($b*$b)-(4*$a*$c);
    if($delta < 0)
    {
        echo "pt vo nghiem";
    }
    else if($delta == 0)
    {
        $x1=$x2=(-$b/2*$a);
        echo "pt co nghiem kep x1=x2=" .$x1;
    }
    else
    {
        echo "pt co 2 nghiem x1=" .$x1=((-$b + sqrt($delta))/2*$a);
        echo "x2=" .$x2=((-$b - sqrt($delta))/2*$a);
    }
?>