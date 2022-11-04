<?php
$agilsayisi=4;
$toplamkoyun=130;
$agilkapasite=30;
echo "Agıl Sayısı:";
echo $agilsayisi;

echo "<br> ";

echo "Agıl Kapasitesi:";
echo $agilkapasite;
echo "<br>";


echo "Toplam Koyun Sayısı:";
echo $toplamkoyun;
echo "<br>";

$array = array(
    0  => "30",
    1  => "30",
    2  => "30",
	3 =>"30"
);

if ($toplamkoyun>=30 AND $toplamkoyun<=120 )
{
	echo "4. Ağıl Kapasitesi:";
echo $array[3];
echo "<br>";
	$toplamkoyun=$toplamkoyun-30;
	echo "3. Ağıl Kapasitesi:";	
echo $array[2];
echo "<br>";
	$toplamkoyun=$toplamkoyun-30;
}
else if($toplamkoyun>120)
{
	echo "4. Ağıl Kapasitesi:";
echo $array[3];
echo "<br>";
	$toplamkoyun=$toplamkoyun-30;
	echo "3. Ağıl Kapasitesi:";	
echo $array[2];
echo "<br>";
	$toplamkoyun=$toplamkoyun-30;
	echo "2. Ağıl Kapasitesi:";
echo $array[1];
echo "<br>";
	$toplamkoyun=$toplamkoyun-30;
	echo "1. Ağıl Kapasitesi:";
echo $array[0];
echo "<br>";
	$toplamkoyun=$toplamkoyun-30;
	echo "Ağıl kapasiteleri tamamen doludur! Dışarıda kalan koyun sayısı=";
echo $toplamkoyun;
}

else
{	
echo "2. Ağıl Kapasitesi:";
echo $array[1]=$toplamkoyun;
echo "<br>";

echo "1. Agıl Kapasitesi:";
echo $array[0]=0;
}

?>
