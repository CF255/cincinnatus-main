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
            $sql = "INSERT INTO usuarios (usuario, nombre, apellido, fecha, email, contraseña, rol) 
            VALUES (:usuario, :nombre, :apellido, :fecha, :email, :contraseña, :rol )";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam(':usuario', $data['usuario']);
            $stmt->bindParam(':nombre', $data['nombre']);
            $stmt->bindParam(':apellido', $data['apellido']);
            $stmt->bindParam(':fecha', $data['fecha']);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':contraseña', $data['contraseña']);
            $stmt->bindParam(':rol', $data['rol']); 
           $stmt->execute();
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }
 
     public static function actualizar($data){
        try{
            $sql = "UPDATE usuario SET usuarios = :usuario, nombre = :nombre, apellido = :apellido, fecha = :fecha, email = :email, contraseña = :contraseña, rol = :rol WHERE id = :id";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam(':usuario', $data['usuario']);
            $stmt->bindParam(':nombre', $data['nombre']);
            $stmt->bindParam(':apellido', $data['apellido']);
            $stmt->bindParam(':fecha', $data['fecha']); 
             $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':contraseña', $data['contraseña']);
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