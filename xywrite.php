<?
//wczytamy zmienna

$x=$_GET["x"];//x
$y=$_GET["y"];
$kier=$_GET["kier"];
$fp = fopen("xy.txt" , "r");


$stareDane = fread($fp, filesize("xy.txt"));


$tab = explode(",", $stareDane);

$tab[0]=$tab[0]+$x;
$tab[1]=$tab[1]+$y;
$nowe=$tab[0].",".$tab[1].",".$kier;

$fp = fopen("xy.txt", "w+");
fputs($fp, $nowe);
fclose($fp);

?>