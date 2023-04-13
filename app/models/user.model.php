<?php

require_once "../config/connection.php";

class Usuario extends Connection
{
    public static function mostrar()
    {
      try {
        $sql = "SELECT * FROM usuarios";
        $stmt = Connection::getConnection()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
      } catch (PDOException $th) {
        echo $th->getMessage();
      }
    }

    
   public static function obtener($id){
        try {
            $sql = "SELECT * FROM usuarios WHERE id = :id";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
          } catch (PDOException $th) {
            echo $th->getMessage();
          }
    }
 
     public static function guardar($data)
    {
        try{
            $sql = "INSERT INTO usuarios (usuario , nombre, apellido, email, fecha , pass, rol) 
            VALUES (:usuario, :nombre, :apellido, :email, :fecha, :pass, :rol)";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam(':usuario', $data['usuario']);
            $stmt->bindParam(':nombre', $data['nombre']);
            $stmt->bindParam(':apellido', $data['apellido']);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':fecha', $data['fecha']);
            $stmt->bindParam(':pass', $data['pass']);
             $stmt->bindParam(':rol', $data['rol']);
           $stmt->execute();
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }
 
    public static function actualizar($data){
        try{
            $sql = "UPDATE usuarios SET usuario = :usuario, nombre = :nombre, apellido = :apellido, email = :email, fecha = :fecha, pass = :pass, rol = :rol WHERE id = :id";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam(':usuario', $data['usuario']);
            $stmt->bindParam(':nombre', $data['nombre']);
            $stmt->bindParam(':apellido', $data['apellido']);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':fecha', $data['fecha']);
            $stmt->bindParam(':pass', $data['pass']);
            $stmt->bindParam(':rol', $data['rol']);
            $stmt->bindParam(':id', $data['id']);
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }

 
     public static function eliminar($id){
        try{
            $sql = "DELETE FROM usuarios WHERE id = :id";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }  
} 