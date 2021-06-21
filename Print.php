<?php
/**
* This class was created by SeTxNightDev on 21.06.2021
* 10:05 AM
*
* You can use and modify this class as you want :D
*/

class ZebraPrint {

    private $printerIp;
    private $zplCode;
    private $printerPort;

    function __construct ( $printerIp, $printerPort, $zplCode) {
        $this->printerIp = $printerIp;
        $this->printerPort = $printerPort;
        $this->zplCode = $zplCode;

        if(($conn = fsockopen($this->printerIp,$this->printerPort,$errno,$errstr))===false){ 
            return 0;
        }

        $fput = fputs($conn, $this->zplCode, strlen($this->zplCode)); 
        fclose($conn);
    }



}
?>