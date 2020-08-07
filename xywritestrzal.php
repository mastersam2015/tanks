<?
//wczytamy zmienna

$x=$_GET["x"];//x
$y=$_GET["y"];
$kier=$_GET["kier"];
$fp = fopen("xystrzal.txt" , "r");


$stareDane = fread($fp, filesize("xystrzal.txt"));



$nowe=$x.",".$y.",";

$fp = fopen("xystrzal.txt", "w+");
fputs($fp, $nowe);
fclose($fp);

?>