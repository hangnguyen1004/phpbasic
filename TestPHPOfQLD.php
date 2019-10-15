<html>
<title>QuanLD</title>
<body>
<?php
/** Bai 1: Tinh Tong */
echo "Bai 1 <br>";
echo "Cho 2 số a = 10 và b = 20 <br>";
$a = 10;
$b = 20;
$c = $a + $b;
echo "Tổng a và b là: ".$c;

/** Bai 2: Tinh chan le */
echo "Bai 2 <br>";
echo "Cho 1 dãy số từ 1 đến 100 <br>";
$tongChan = 0;
$tongLe = 0;
for ($i = 0; $i <101; $i++){
    if ($i%2==0){
        $tongChan = $tongChan + $i;
    } else {
        $tongLe = $tongLe + $i;
    }
}
echo "Tổng số chẵn của dãy trên = ".$tongChan."<br>";
echo "Tổng số lẻ của dãy trên = ".$tongLe."<br>";

/** Bai 3: Giai phuong trinh */
echo "Giải phương trình bậc 2 có dạng ax2 + bx +c = 0 <br>";
$result = 'null';
if (isset($_POST['calculate'])){

    $a = isset($_POST['a']) ? $_POST['a'] : '';
    $b = isset($_POST['b']) ? $_POST['b'] : '';
    $c = isset($_POST['c']) ? $_POST['c'] : '';


    $delta = ($b*$b) - (4*$a*$c);

    if ($delta < 0){
        $result = "Phương trình vô nghiệm";
    }
    else if ($delta == 0){
        $result = "Phương trình nghiệm kép x1 = x2 = " . (-$b/2*$a);
    }
    else {
        $result = "Phương trình có hai nghiệm phân biệt <br> x1 = " . ((-$b + sqrt($delta))/2*$a)."<br> x2 = " . ((-$b - sqrt($delta))/2*$a);
    }
}
?>
<form method="post" action="">
    <input type="text" style="width: 20px" name="a" value=""/>x<sup>2</sup>
    +
    <input type="text" style="width: 20px" name="b" value=""/>x
    +
    <input type="text" style="width: 20px" name="c" value=""/>
    = 0
    <br/><br/>
    <input type="submit" name="calculate" value="Tính" />
</form>
<?php
echo $result;
?>
</body>
</html>
