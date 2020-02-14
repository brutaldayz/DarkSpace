<?php

    class SkillTree
    {
        public static function getRequiredLogdisk($Level){
            $array = array(
                '1' => '30',
                '2' => '63',
                '3' => '99',
                '4' => '139',
                '5' => '183',
                '6' => '231',
                '7' => '284',
                '8' => '342',
                '9' => '406',
                '10' => '477',
                '11' => '555',
                '12' => '641',
                '13' => '735',
                '14' => '839',
                '15' => '953',
                '16' => '1078',
                '17' => '1216',
                '18' => '1368',
                '19' => '1535',
                '20' => '1718',
                '21' => '1920',
                '22' => '2142',
                '23' => '2386',
                '24' => '2655',
                '25' => '2950',
                '26' => '3275',
                '27' => '3633',
                '28' => '4026',
                '29' => '4459',
                '30' => '4935',
                '31' => '5458',
                '32' => '6034',
                '33' => '6667',
                '34' => '7364',
                '35' => '8130',
                '36' => '8973',
                '37' => '9900',
                '38' => '10920',
                '39' => '12042',
                '40' => '13276',
                '41' => '14634',
                '42' => '16128',
                '43' => '17771',
                '44' => '19578',
                '45' => '21566',
                '46' => '23753',
                '47' => '26158',
                '48' => '28804',
                '49' => '31715',
                '50' => '34917',
                "51" => "0"
            );
            return $array[$Level];
        }

        public static function GetTooltips($SkillID, $Level, $MaxLevel){
            $Message = "";

            if($Level == 0){
                $Message = "<br>".Lang::Get('NextLevel').": " . Lang::SkillDescription($SkillID, $Level);
            }elseif($Level != 0 && $Level != $MaxLevel){
                $Message = "<br>".Lang::Get('CurrentLevel').": " . Lang::SkillDescription($SkillID, $Level) . "<br>".Lang::Get('NextLevel').": " . Lang::SkillDescription($SkillID, $Level+1);
            }elseif($Level == $MaxLevel){
                $Message = "<br>".Lang::Get('CurrentLevel').": " . Lang::SkillDescription($SkillID, $Level);
            }

            return $Message;
        }

        public static function GetSkills($skillPoints) {
            return [
                "skill_13" => [
                    "Hash" => "VkZaRk9WQlJQVDA9",
                    "ID" => 1,
                    "HighLevel" => false,
                    "CurrentLevel" => $skillPoints['skill_13'],
                    "MaxLevel" => 5
                ],
                "skill_5a" => [
                    "Hash" => "VkZkak9WQlJQVDA9",
                    "ID" => 2,
                    "HighLevel" => false,
                    "CurrentLevel" => $skillPoints['skill_5a'],
                    "MaxLevel" => 2
                ],
                "skill_5b" => [
                    "Hash" => "VkZoak9WQlJQVDA9",
                    "ID" => 3,
                    "HighLevel" => true,
                    "LowLevel" => "skill_5a",
                    "CurrentLevel" => $skillPoints['skill_5b'],
                    "MaxLevel" => 3
                ],
                "skill_1" => [
                    "Hash" => "Vkd0Rk9WQlJQVDA9",
                    "ID" => 4,
                    "HighLevel" => false,
                    "CurrentLevel" => $skillPoints['skill_1'],
                    "MaxLevel" => 5
                ],
                "skill_20" => [
                    "Hash" => "Vkcxak9WQlJQVDA9",
                    "ID" => 5,
                    "HighLevel" => false,
                    "CurrentLevel" => $skillPoints['skill_20'],
                    "MaxLevel" => 5
                ],
                "skill_6" => [
                    "Hash" => "Vkc1ak9WQlJQVDA9",
                    "ID" => 6,
                    "HighLevel" => false,
                    "CurrentLevel" => $skillPoints['skill_6'],
                    "MaxLevel" => 5
                ],
                "skill_23a" => [
                    "Hash" => "VkRCRk9WQlJQVDA9",
                    "ID" => 7,
                    "HighLevel" => false,
                    "CurrentLevel" => $skillPoints['skill_23a'],
                    "MaxLevel" => 2
                ],
                "skill_23b" => [
                    "Hash" => "VkRCRk9WQlJQVDA9",
                    "ID" => 8,
                    "HighLevel" => true,
                    "LowLevel" => "skill_23a",
                    "CurrentLevel" => $skillPoints['skill_23b'],
                    "MaxLevel" => 3
                ],
                "skill_21a" => [
                    "Hash" => "VkRGRk9WQlJQVDA9",
                    "ID" => 9,
                    "HighLevel" => false,
                    "CurrentLevel" => $skillPoints['skill_21a'],
                    "MaxLevel" => 2
                ],
                "skill_21b" => [
                    "Hash" => "VkZaU1FsQlJQVDA9",
                    "ID" => 10,
                    "HighLevel" => true,
                    "LowLevel" => "skill_21a",
                    "CurrentLevel" => $skillPoints['skill_21b'],
                    "MaxLevel" => 3
                ]
            ];
        }
    }
    
?>