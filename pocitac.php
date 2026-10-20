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
echo "<p>nazev</p>";
echo var_dump($nazev);
echo "<p>vyrobce</p>";
echo var_dump($vyrobce);
echo "<p>OS</p>";
echo var_dump($OS);
echo "<p>VelikostRAM</p>";
echo var_dump($VelikostRAM);
echo "<p>VelikostUložiště</p>";
echo var_dump($VelikostUložiště);
echo "<p>MaSSD</p>";
echo var_dump($MaSSD);
