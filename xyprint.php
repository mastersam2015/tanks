<?


$fp = fopen("xy.txt" , "r");


$stareDane = fread($fp, filesize("xy.txt"));


echo $stareDane;


?>