<?


$fp = fopen("xy2.txt" , "r");


$stareDane = fread($fp, filesize("xy2.txt"));


echo $stareDane;


?>