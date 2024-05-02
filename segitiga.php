<?php
class Segitiga{
     public function hitungluas($alas,$tinggi){
        return 0.5 * $alas * $tinggi;
    }
}
$Segitiga = new segitiga();
echo "Luas segitiga: " . $Segitiga->hitungluas(6,4) ." cm\n<br>";
echo "Luas segitiga: " . $Segitiga->hitungluas(6,4) ." cm\n";
?>