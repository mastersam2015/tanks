<?
//wczytamy zmienna

$x=$_GET["x"];//x
$y=$_GET["y"];
$kier=$_GET["kier"];
$fp = fopen("xystrzal2.txt2" , "r");


$stareDane = fread($fp, filesize("xystrzal2.txt"));



$nowe=$x.",".$y.",";

$fp = fopen("xystrzal2.txt", "w+");
fputs($fp, $nowe);
fclose($fp);

?>