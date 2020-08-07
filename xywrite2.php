<?
//wczytamy zmienna

$x=$_GET["x"];//x
$y=$_GET["y"];
$kier=$_GET["kier"];
$fp = fopen("xy2.txt" , "r");


$stareDane = fread($fp, filesize("xy2.txt"));


$tab = explode(",", $stareDane);

$tab[0]=$tab[0]+$x;
$tab[1]=$tab[1]+$y;
$nowe=$tab[0].",".$tab[1].",".$kier;

$fp = fopen("xy2.txt", "w+");
fputs($fp, $nowe);
fclose($fp);

?>