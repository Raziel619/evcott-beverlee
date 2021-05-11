<?php
// php script to test and learn syntax

echo "<body style='background-color:white'>";

$txt1 = "EV Data Capture";
$txt2 = "UWI MASc. (Energy Systems) Thesis";
$txt3 = "['7ED 03 7F 21 12 \n', '7EA 03 7F 21 12 \n', '7EB 03 7F 21 12 \n', '7EC 10 2D 61 05 FF FF FF FF \n', '7EC 21 00 00 00 00 00 1E 1E \n', '7EE 03 7F 21 12 \n', '7EC 22 1E 1E 1D 1D 1D 26 48 \n', '7EC 23 26 48 00 01 4B 00 00 \n', '7EC 24 03 E8 2E 03 E8 01 AD \n', '7EC 25 00 31 00 00 00 00 00 \n', '7EC 26 00 00 00 00 00 00 00 \n']";
$x = 5;
$y = 4;

$txt4 = "['7EA 10 16 61 01 FF E0 00 00 \n', '7EB 10 1E 61 01 00 00 03 FF \n', '7ED 10 33 61 01 FF FF FB C0 \n', '7EE 03 7F 21 12 \n', '7EC 10 3D 61 01 FF FF FF FF \n', '7EA 21 09 21 5A 4C 06 39 03 \n', '7EB 21 0C 38 00 74 95 5B 38 \n', '7ED 21 01 03 3E 03 48 04 06 \n', '7EC 21 A7 26 48 26 48 03 00 \n', '7EA 22 00 00 00 00 D5 74 34 \n', '7EB 22 00 E4 0C 3B 00 30 02 \n', '7ED 22 00 00 92 00 36 01 BD \n', '7EC 22 15 0E EE 1E 1D 1D 1D \n', '7EA 23 04 20 00 00 00 00 00 \n', '7EB 23 30 04 63 38 D0 FF 9F \n', '7ED 23 05 B2 21 00 00 00 00 \n', '7EC 23 1D 1E 1D 00 1E C7 49 \n', '7EB 24 FF 92 00 00 00 00 00 \n', '7EC 24 C6 01 00 00 8E 00 01 \n', '7ED 24 00 00 00 00 60 00 00 \n', '7ED 25 00 00 01 F4 00 83 03 \n', '7EC 25 9A 40 00 01 98 F7 00 \n', '7ED 26 5D 00 00 00 00 00 00 \n', '7EC 26 00 95 B8 00 00 92 E2 \n', '7ED 27 05 AB 00 00 00 00 00 \n', '7EC 27 00 6E C5 33 0D 01 7E \n', '7EC 28 06 A4 00 00 03 E8 00 \n']";

$txt5 = "['7EA 10 16 61 01 FF E0 00 00 \n', '7EB 10 1E 61 01 00 00 03 FF \n', '7ED 10 33 61 01 FF FF FB C0 \n', '7EC 10 3D 61 01 FF FF FF FF \n', '7EE 03 7F 21 12 \n', '7EA 21 09 21 5A 47 06 39 03 \n', '7EB 21 0C 38 00 69 95 84 38 \n', '7ED 21 01 03 42 03 4B 04 0A \n', '7EC 21 A6 26 48 26 48 03 00 \n', '7EA 22 00 00 00 00 C6 74 34 \n', '7EB 22 00 E4 0C 3B 00 31 02 \n', '7ED 22 00 00 92 00 36 01 BD \n', '7EC 22 15 0E EE 1E 1D 1D 1D \n', '7EA 23 04 20 00 00 00 00 00 \n', '7EB 23 31 04 85 38 00 00 30 \n', '7ED 23 05 B1 21 00 00 00 00 \n', '7EC 23 1D 1E 1D 00 1E C7 47 \n', '7EB 24 00 D0 FF 00 00 00 00 \n', '7ED 24 00 00 00 00 60 00 00 \n', '7EC 24 C6 01 00 00 8E 00 01 \n', '7ED 25 00 00 01 F3 00 7F 03 \n', '7EC 25 9A 40 00 01 98 F7 00 \n', '7ED 26 62 00 00 00 00 00 00 \n', '7EC 26 00 95 B8 00 00 92 E2 \n', '7ED 27 05 AA 00 00 00 00 00 \n', '7EC 27 00 6E C5 49 0D 01 7E \n', '7EC 28 06 A4 00 00 03 E8 00 \n']";

echo "<h2>" . $txt1 . "</h2>";
echo "Study to code!!! "."<br>" . $txt2 . "<br>";
echo $x + $y. "<br>";
echo "<br>";
echo $txt3;
echo "<br>";
echo "<br>";
// echo strlen($txt3);
// echo "<br>";
// echo "<br>";
echo strpos($txt3, "7EC 24"). "<br>";
echo substr($txt3,218,27). "<br>";
echo substr($txt3,243,2). "<br>";
echo "SOC = ".(substr($txt3,243,2)). "<br>";
//echo "SOC = ". hexdec(substr($txt3,243,2)) / 2 . " %". "<br>";

// Check for SOC Data!!
// if(strpos($txt3, "7EC 24") === FALSE )
// 	{	echo "FALSE"."<br>";
// 		echo "SOC = N/A". " %". "<br>";
// 	}

// else
// 	{	echo "TRUE"."<br>";
// 		echo "SOC = ". hexdec(substr($txt3,243,2)) / 2 . " %". "<br>";
// 	}

echo $txt4. "<br>";
echo strpos($txt4, "7EC 28"). "<br>";
echo substr($txt4,848,20). "<br>";
echo substr($txt4,855,2) . substr($txt4,858,2). "<br>";
echo hexdec(substr($txt4,(strpos($txt4,"7EC 28")+7),2).substr($txt4,(strpos($txt4,"7EC 28")+10),2))."<br>";
echo "RPM = ". hexdec(substr($txt4,855,2) . substr($txt4,858,2)). "<br>";

// if(strpos($txt4,"7EC 28") === FALSE){$txt4= "N/A";}
// else{$txt4=substr($txt4,(strpos($txt4,"7EC 28")+7),2) ;}

//Check for SOC (BMS Data!!
// if(strpos($txt5, "7EC 21") === FALSE )
// 	{	echo "FALSE"."<br>";
// 		echo "SOC = N/A". " %". "<br>";
// 	}

// else
// 	{	echo "TRUE"."<br>";
// 		echo "SOC = ". hexdec(substr($txt5,243,2)) / 2 . " %". "<br>";
// 	}

// echo substr($txt5,(strpos($txt5,"7EC 21")+7),2)."<br>";
// $var= hexdec(substr($txt5,(strpos($txt5,"7EC 21")+7),2)) / 2 ;
// echo "SOC (BMS) = ".$var. "<br>";

//echo substr($txt5,(strpos($txt5,"7EC 21")+10),2).substr($txt5,(strpos($txt5,"7EC 21")+13),2)."<br>";
// $var= hexdec(substr($txt5,(strpos($txt5,"7EC 21")+10),2).substr($txt5,(strpos($txt5,"7EC 21")+13),2))/100;
// echo "Available Charge Power = ".$var. "<br>";

echo substr($txt5,(strpos($txt5,"7EC 21")+25),2).substr($txt5,(strpos($txt5,"7EC 22")+7),2)."<br>";
$var= hexdec(substr($txt5,(strpos($txt5,"7EC 21")+25),2).substr($txt5,(strpos($txt5,"7EC 22")+7),2))/10;
echo "Battery Current = ".$var. "<br>";



?>