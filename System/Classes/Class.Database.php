<?php

    class Database
    {
        public static $Connection;

		public static function Connection() {

			if(empty(self::$Connection)) {

				$options = [
					PDO::ATTR_EMULATE_PREPARES   => false,
					PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
					PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
				];

				try
				{
					self::$Connection = new PDO("mysql:host=".Config::Get('DB_HOST').";port=3306;dbname=".Config::Get('DB_NAME').";charset=utf8",Config::Get('DB_USER'),Config::Get('DB_PASS'),$options);
				}
				catch(PDOException $e)
				{
					echo $e->getMessage();
				}
            }
			return self::$Connection;
        }
    }
    
?>