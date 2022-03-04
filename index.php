?php
 
$fiyat=85;
 
$kdv=$fiyat*18/100;
 
$toplam=$fiyat+$kdv;
 
echo "Tutar=".$toplam."<br>";
 
if($toplam>=100)
       echo "Kargo Bedava!";
 
?>
