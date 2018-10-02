<?php
class ciudadModel extends db{
    private $stm=NULL;
	public function registrarciudadModel($datos)
    {
        try{
            $stm=$this->conectar()->prepare("INSERT INTO ciudad (ciudad) VALUES (?)");
            $stm->bindParam(1,$datos["ciudad"],PDO::PARAM_STR);
            if($stm->execute()){
                return '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Hecho!</strong> La ciudad se registró exitosamente.
                  </div>';
            }else{
                return '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Atención!</strong> La ciudad no se pudo registrar.
                  </div>';
            }
        
            //var_dump($datos);
            
        }catch(PDOException $e){
            die($e->getMessage());
        } 
    }
}
?>