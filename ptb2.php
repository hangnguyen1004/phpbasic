<!doctype html>
<html lang="1">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $denta="";
    $nghiem="";
    $a=$_GET['a'];
    $b=$_GET['b'];
    $c=$_GET['c'];
    if(isset($_GET['a'])&&isset($_GET['b'])&&isset($_GET['c'])){
        if($a==0){
            if($b!=0){
                $x=-$c/$b;
                $nghiem="phương trình có 1 nghiệm x=$x";
            }else
                $nghiem="phương trình vô nghiệm";

        }else{
            $denta=$b*$b-4*$a*$c;
            if($denta==0){
                $x3=-($b/(2*$a));
                $nghiem="phương trình có nghiệm duy nhất x=$x3";
            }elseif ($denta>0){
                $x1=(-$b+sqrt($denta))/(2*$a);
                $x2=(-$b-sqrt($denta))/(2*$a);
                $nghiem="phương trình có nghiệm kép x1=$x1,x2=$x2";
            }else{
                $nghiem="phương trình vô nghiệm";
            }
        }
    }
?>
<form action="bai5.php" method="get" >
    <table border="1">
        <tr>
            <th colspan="4">In loi chao</th>
        </tr>
        <tr>
            <td>Phương trình:</td>
            <td><input type="text" name="a" value="<?php echo $a?>"> X^2 + </td>
            <td><input type="text" name="b" value="<?php echo $b?>"> X + </td>
            <td><input type="text" name="c" value="<?php echo $c?>"> = 0</td>
        </tr>
        <tr>
            <td colspan="4">Nghiệm<input type="text" style="width: 400px;" name="nghiem" value="<?php echo $nghiem?>"></td>
        </tr>
        <tr>
            <td colspan="4"><button type="submit">Xuất</button></td>
        </tr>
    </table>
</form>
</body>
</html>