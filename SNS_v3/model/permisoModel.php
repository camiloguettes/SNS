<?php
    class permisoModel extends db{
        private $stm=NULL;
        public function registrarpermisoModel($datos)
    {
        try{
            $stm=$this->conectar()->prepare("INSERT INTO permiso(id_documento) VALUES (?)");
            $stm->bindParam(1,$datos["documento"],PDO::PARAM_STR);
            
            if($stm->execute()){
                return '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Éxito!</strong> El usuario ahora tiene permiso para registrarse.
                  </div>';
            }else{
                return '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Atención!</strong> El usuario no tiene permiso para registrarse o ya tiene permiso.
                  </div>';
            }
        
            //var_dump($datos);
            
        }catch(PDOException $e){
            die($e->getMessage());
        } 
    }
        }
    
?>