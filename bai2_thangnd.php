<?php
/**
 * Created by PhpStorm.
 * User: thangnd
 * Date: 2019-10-15
 * Time: 11:25
 */

    $tongle=0;
    $tongchan=0;
    for($i=1; $i<=100; $i++)
    {
        if($i%2==0)
        {
            $tongchan+=$i;
        }
        else
        {
            $tongle+=$i;
        }
    }
    echo "tong cac so chan tu 1-100 la:" .$tongchan;
    echo "tong cac so le tu 1-100 la:" .$tong;
?>