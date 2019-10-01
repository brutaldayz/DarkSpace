<?php

        header('Content-Type: application/json');

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

                require_once('../../System/Init.php');

                $Param1 = Security::Post('Param1');
                Security::Empty($Param1);
                $Param1 = base64_decode(base64_decode(base64_decode(base64_decode($Param1))));
                $Param1 = in_array($Param1, ["dmg-b01","dmg-b02","ep-b01","ep-b02","hon-b01","hon-b02","hp-b01","hp-b02","rep-b01","rep-b02","shd-b01","shd-b02"]) ? $Param1 : "dmg-b01";

                $db = Database::Connection();
 
                die(json_encode(["error" => true, "msg" => $Param1]));
        }else Functions::router('Home');
        /*
                DMG_B01,
                DMG_B02,
                EP_B01,
                EP_B02,
                EP50,
                HON_B01,
                HON_B02,
                HON50,
                HP_B01,
                HP_B02,
                REP_B01,
                REP_B02,
                REP_S01,
                RES_B01,
                RES_B02,
                SHD_B01,
                SHD_B02,
                SREG_B01,
                SREG_B02,
                BB_01,
                QR_01,
                CD_B01,
                CD_B02,
                KAPPA_B01,
                HONM_1,
                XPM_1,
                DMGM_1
                36.000 = 10 Saat
                {"1":[{"Type":0,"Seconds":36000}], "2":[{"Type":5,"Seconds":36000}, "3":[{"Type":2,"Seconds":36000}]]}
        */

?>