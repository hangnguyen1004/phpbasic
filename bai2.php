<!DOCTYPE html>
<html>
<head>
<title>Bài 2</title>
</head>
<body>
<?php
	$tongchan=0;
	$tongle=0;
	for($i=0; $i<=100; $i++)
	{
		if($i%2==0)
		{
			$tongchan=$tongchan + $i;
		}
		else if ($i%2==1) 
		{
			$tongle=$tongle + $i;
		}
	}
	echo "Tổng chẵn là: " .$tongchan;
	echo "<br>";
	echo "Tổng lẻ là: " .$tongle;
?>
</body>
</html>