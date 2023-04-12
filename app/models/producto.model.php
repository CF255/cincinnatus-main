<?php

require_once "../config/connection.php";

class Producto extends Connection
{
    public static function mostrar()
    {
      try {
        $sql = "SELECT * FROM productos";
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
            $sql = "SELECT * FROM productos WHERE id = :id";
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
            $sql = "INSERT INTO productos (nombre, descripcion, precio, unidades, proveedor, categoria) 
            VALUES (:nombre, :descripcion, :precio, :unidades, :proveedor, :categoria )";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam(':nombre', $data['nombre']);
            $stmt->bindParam(':descripcion', $data['descripcion']);
            $stmt->bindParam(':precio', $data['precio']);
            $stmt->bindParam(':unidades', $data['unidades']);
            $stmt->bindParam(':proveedor', $data['proveedor']);
            $stmt->bindParam(':categoria', $data['categoria']);
            /* $stmt->bindParam(':fotos', $data['fotos']); */
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }

    public static function actualizar($data){
        try{
            $sql = "UPDATE productos SET nombre = :nombre, descripcion = :descripcion, precio = :precio, unidades = :unidades, proveedor = :proveedor, categoria = :categoria WHERE id = :id";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam(':nombre', $data['nombre']);
            $stmt->bindParam(':descripcion', $data['descripcion']);
            /* $stmt->bindParam(':fotos', $data['fotos']); */
            $stmt->bindParam(':precio', $data['precio']);
            $stmt->bindParam(':unidades', $data['unidades']);
            $stmt->bindParam(':proveedor', $data['proveedor']);
            $stmt->bindParam(':categoria', $data['categoria']);
            $stmt->bindParam(':id', $data['id']);
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }

    public static function eliminar($id){
        try{
            $sql = "DELETE FROM productos WHERE id = :id";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }  
}