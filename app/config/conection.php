<?php
class Connection{
   public $host = 'localhost';
   public $dbname = 'miniproyect';
   public $port = '5432';
   public $user = 'postgres';
   public $password = '1234';
   public $driver = 'pgsql';
   public $connect;

   public static function getconnection(){
      try{
         $connection = new Connection();
         $connection -> connect = new PDO("{$connection->driver}: host={$connection ->host}; port={$connection->port};
          dbname={$connection -> dbname}", $connection->user, $connection->password);

          $connection->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        /*   return $connection=>connect; */
        echo"funciona";
      }catch(PDOException $e){

         echo "Error:". $e->getMessage();
      }
   }
}

Connection::getconnection();
?>