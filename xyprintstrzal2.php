<?


$fp = fopen("xystrzal2.txt" , "r");


$stareDane = fread($fp, filesize("xystrzal2.txt"));


echo $stareDane;


?>