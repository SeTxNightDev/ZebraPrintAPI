<?php 

require 'Print.php';

$h = new ZebraPrint("<<IP-Adress>>", "<<Port>>", "<<ZPL-Code>>")
  
  // ZebraPrint needs 3 values!:
  //    first: IP-Adress of the Printer
  //    second: Port to open socket (Standard: 9100)
  //    third: ZPL Code String

?>
