<?


$fp = fopen("xystrzal.txt" , "r");


$stareDane = fread($fp, filesize("xystrzal.txt"));


echo $stareDane;


?>