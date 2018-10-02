<?php

class NovedadModel extends db {
    private $stm=NULL;
    private $stm2=NULL;
    
    public function all()
    {
        try{
            $stm=$this->conectar()->prepare("SELECT * FROM tipo_novedad");
            $stm->execute();
            return $stm->fetchAll();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function registrarnovedadModel($datos)
    {
        try{
            $stm=$this->conectar()->prepare("INSERT INTO `novedad`(`fecha_inicio`, `motivo`, `fallas`, `fk_tipo_novedad`, `fk_documento`, `nueva_jornada`, `nueva_sede`, `responsable`) VALUES (?,?,?,?,?,?,?,?)");
             $stm->bindParam(1,$datos["fecha_inicio"],PDO::PARAM_STR);
             $stm->bindParam(2,$datos["motivo"],PDO::PARAM_STR);
             $stm->bindParam(3,$datos["fallas"],PDO::PARAM_STR);
             $stm->bindParam(4,$datos["id_novedad"],PDO::PARAM_STR);
             $stm->bindParam(5,$datos["fk_documento"],PDO::PARAM_STR);
             $stm->bindParam(6,$datos["nueva_jornada"],PDO::PARAM_STR);
             $stm->bindParam(7,$datos["nueva_sede"],PDO::PARAM_STR);
             $stm->bindParam(8,$datos["responsable"],PDO::PARAM_STR);
             if($stm->execute()){
                $stm2=$this->conectar()->prepare("INSERT INTO `rol`(`fk_tipo_rol`, `fk_documento`) VALUES ('4',?)");
                $stm2->bindParam(1,$datos["documento"],PDO::PARAM_STR);
                $stm2->execute();
                return '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Exito!</strong> La novedad se ha registrado exitosamente.
                  </div>';
            }else{
                return '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Atención!</strong> Ocurrio un error, no se ha podido registrar.
                  </div>';
            }
            return $stm->fetchAll();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function consultarnovedad($id){
        try{
            $stm=$this->conectar()->prepare("SELECT * FROM novedad WHERE fk_tipo_novedad=?");
            $stm->bindParam(1,$id,PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function consultarnovedadS($id){
        try{
            $stm=$this->conectar()->prepare("SELECT * FROM novedad INNER JOIN sede ON sede.id_sede = novedad.nueva_sede WHERE fk_tipo_novedad=?");
            $stm->bindParam(1,$id,PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

   public function consultar1novedadModels($id){
        try{
            //var_dump($id);
            $stm=$this->conectar()->prepare("SELECT * FROM novedad INNER JOIN sede ON sede.id_sede = novedad.nueva_sede WHERE fk_tipo_novedad=? && fk_documento=?");
            $stm->bindParam(1,$id["fk_tipo_novedad"],PDO::PARAM_STR);
            $stm->bindParam(2,$id["fk_documento"],PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    } 
    

    public function consultar1novedadModel($id){
        try{
            // var_dump($id);
            $stm=$this->conectar()->prepare("SELECT * FROM novedad WHERE fk_tipo_novedad=? && fk_documento=?");
            $stm->bindParam(1,$id["fk_tipo_novedad"],PDO::PARAM_STR);
            $stm->bindParam(2,$id["fk_documento"],PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function eliminar($id){
        try{
            // var_dump($id);
            $stm=$this->conectar()->prepare("DELETE FROM novedad WHERE fk_documento=?");
            $stm->bindParam(1,$id,PDO::PARAM_STR);
            $stm->execute();
            header('location:index.php?url=novedad/link/consultar_novedad');
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}
