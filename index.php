<?php 

require 'Print.php';

$h = new ZebraPrint("145.151.22.26", "9100", "^XA^FO100,100^ADN,18,10^FDTestdruck^FS^XZ")
  
  // ZebraPrint needs 3 values!:
  //    first: IP-Adress of the Printer
  //    second: Port to open socket (Standard: 9100)
  //    third: ZPL Code String


?>
