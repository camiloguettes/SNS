<?php
class personaModel extends db {
    private $stm=NULL;
    private $stmt=NULL;
    private $stm1=NULL;
    public function ingresarModel($datos)
    {
        try{
            $stm=$this->conectar()->prepare("SELECT `documento`, `contrasena`, `fk_tipo_documento`, primer_nombre,primer_apellido  FROM `persona` WHERE documento=?");
            $stm->bindParam(1,$datos["documento"],PDO::PARAM_STR);            
            $stm->execute();
            return $stm->fetch();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function rol($doc)
       {
           try{
               $stm=$this->conectar()->prepare("SELECT fk_tipo_rol FROM rol WHERE fk_documento=?");
               $stm->bindParam(1,$doc,PDO::PARAM_STR);           
               $stm->execute();
               return $stm->fetch();
           }catch(PDOException $e){
               die($e->getMessage());
        }
    }

    public function registrarModel($datos)
    {
        try{
            
            // $stm1=$this->conectar()->prepare("INSERT INTO `permiso`(`id_documento`) VALUES (?)");
            // $stm1->bindParam(1,$datos["documento"],PDO::PARAM_STR);
            // $stm1->execute();
             
            // var_dump($datos);
            $stm=$this->conectar()->prepare("INSERT INTO `persona`(`documento`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `correo`, `contrasena`, `fk_tipo_documento`) VALUES (?,?,?,?,?,?,?,?)");
            $stm->bindParam(1,$datos["documento"],PDO::PARAM_STR);            
            $stm->bindParam(2,$datos["primer_nombre"],PDO::PARAM_STR);            
            $stm->bindParam(3,$datos["segundo_nombre"],PDO::PARAM_STR);            
            $stm->bindParam(4,$datos["primer_apellido"],PDO::PARAM_STR);            
            $stm->bindParam(5,$datos["segundo_apellido"],PDO::PARAM_STR);            
            $stm->bindParam(6,$datos["correo"],PDO::PARAM_STR);            
            $stm->bindParam(7,$datos["contrasena"],PDO::PARAM_STR);            
            $stm->bindParam(8,$datos["fk_tipo_documento"],PDO::PARAM_STR);       
            // $stm->execute();
           
            if($stm->execute()){
                $stm2=$this->conectar()->prepare("INSERT INTO `rol`(`fk_tipo_rol`, `fk_documento`) VALUES ('4',?)");
                $stm2->bindParam(1,$datos["documento"],PDO::PARAM_STR);
                $stm2->execute();
                return '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Exito!</strong> El usuario se ha registrado correctamente. Ingresa desde el inicio.
                  </div>';
            }else{
                return '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Atención!</strong> El usuario no se ha registrado correctamente.
                  </div>';
            }
            //var_dump($datos);
            
        }catch(PDOException $e){
            die($e->getMessage());
        } 
    }

    public function cambiarContraModel($datos)
    {
        try{
            $stm1=$this->conectar()->prepare("UPDATE `persona` SET `contrasena`=? WHERE documento=?");
            $stm1->bindParam(1,$datos["contrasena"],PDO::PARAM_STR);
            $stm1->bindParam(2,$datos["documento"],PDO::PARAM_STR);
            if ($stm1->execute()) {
                return '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Exito!</strong> La contraseña se ha actualizado.
                  </div>';
            }else{
                return '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Atención!</strong> La contraseña no se ha actualizado.
                  </div>';
            }
            
        }catch(PDOException $e){
            die($e->getMessage());
        } 
    }

    public function registraraprendizModel($datos)
    {
        try{
            // var_dump($datos);   
            $stmt=$this->conectar()->prepare("INSERT INTO permiso (id_documento) VALUES (?)");
            $stmt->bindParam(1,$datos["documento"],PDO::PARAM_STR);
            $stmt->execute();
            $stm=$this->conectar()->prepare("INSERT INTO persona (`documento`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `correo`, `contrasena`, `fk_estado`, `fk_ficha`, `fk_tipo_documento`) VALUES (?,?,?,?,?,?,Null,'3',?,?)");
            $stm->bindParam(1,$datos["documento"],PDO::PARAM_STR);            
            $stm->bindParam(2,$datos["primer_nombre"],PDO::PARAM_STR);            
            $stm->bindParam(3,$datos["segundo_nombre"],PDO::PARAM_STR);            
            $stm->bindParam(4,$datos["primer_apellido"],PDO::PARAM_STR);            
            $stm->bindParam(5,$datos["segundo_apellido"],PDO::PARAM_STR);            
            $stm->bindParam(6,$datos["correo"],PDO::PARAM_STR);            
            $stm->bindParam(7,$datos["ficha"],PDO::PARAM_STR);            
            $stm->bindParam(8,$datos["tipo_documento"],PDO::PARAM_STR);
            if($stm->execute()){
                return '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Hecho!</strong> El aprendiz se registró exitosamente.
                  </div>';
            }else{
                return '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Atención!</strong> El aprendiz no se pudo registrar.
                  </div>';
            }
        
                // var_dump($datos);
            
        }catch(PDOException $e){
            die($e->getMessage());
        } 
    }
    public function consultar1aprendizModel($datos){
        try{
            $stm=$this->conectar()->prepare("SELECT * FROM persona INNER JOIN tipo_documento ON persona.fk_tipo_documento=tipo_documento.id_tipo_documento WHERE fk_estado=3 && documento=?");
            $stm->bindParam(1,$datos["documento"],PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
    

}
