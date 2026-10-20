<?php
 $nazev = "Herni PC";
 $vyrobce = "Lenovo";
 $VelikostRAM = 16;
 $VelikostUložiště = 1.5;
 $MaSSD = true;
 $OS = "Win11";
//nazvy//
 echo "<h1>Profil mého PC </h1>";
 echo "<p><strong>$nazev</strong></p>";
 echo "<p><strong>$vyrobce</strong></p>";
 echo "<p><strong>$OS</strong></p>";
 echo "<p>$VelikostRAM</p>";
 echo "<p>$VelikostUložiště</p>";
 echo "<p>$MaSSD</p>";


 /*
  * názvy a datové typy
  */
echo "<h1>Datové typy</h1>";
echo "<p></p>";
echo var_dump($nazev);
echo "<p></p>";
echo var_dump($vyrobce);
echo "<p></p>";
echo var_dump($OS);
echo "<p></p>";
echo var_dump($VelikostRAM);
echo "<p></p>";
echo var_dump($VelikostUložiště);
echo "<p></p>";
echo var_dump($MaSSD);
