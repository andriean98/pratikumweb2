<html>
<head>
<title>PENGGUNAAN IF ELSE IF ELSE</title>
</head>
<body>
nilai A = 2 <br>
nilai B = 5 <br>
nilai C = 9 <br><br>
<?php
$a = 2;
$b = 5;
$c = 9;
if($a > $b)
{
echo "A lebih besar dari B";
}
else if($a > $c)
{
echo "A lebih besar dari C";
}
else 
{
echo "A lebih kecil dari B dan C";
}
?>
</body>
</html>