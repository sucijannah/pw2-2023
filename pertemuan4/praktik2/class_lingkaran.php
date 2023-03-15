<?php

    class Lingkaran {
        //property
        private $jarijari;
        const PHI = 3.14;

        //method
        function __construct($r){
            $this->jarijari = $r;
        }

        function getLuas() {
            $luas = self::PHI * pow ($this->jarijari, 2);
            return $luas;
        }

        function getKel(){
            $kel = 2 * self::PHI * $this->jarijari;
            return $kel;
        }
    }
?>