<?php

    class Logger
    {
        public static function addLoginLog($UserID, $UserIP){
            $Sql = Database::Connection()->prepare('INSERT INTO player_log (UserID, UserIp, Type, Content) VALUES (?,?,?,?)');
            $Sql->execute(array($UserID, $UserIP, 3, 1));
        }

        public static function addShopLog($UserID, $UserIP, $Type, $PaymentType, $PaymentAmount, $Amount, $Content){
            $Sql = Database::Connection()->prepare('INSERT INTO player_log (UserID, UserIP, Type, PaymentType, PaymentAmount, Amount, Content) VALUES (?,?,?,?,?,?,?)');
            $Sql->execute(array($UserID, $UserIP, $Type, $PaymentType, $PaymentAmount, $Amount, $Content));

            /*
                PaymentType{
                    Uridium => 1
                    Credi => 2
                }

                Type{
                    Shop => 1
                    SkillTree => 2
                    Account => 3
                }

                Content{
                    Shop{
                        Product ID
                    }
                    Account{
                        Login => 1
                        Change Company => 2
                        Leave Clan => 3
                        Join Clan => 4
                    }
                }
            */
        }
    }

?>