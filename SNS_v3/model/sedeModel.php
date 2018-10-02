<?php
class sedeModel extends db{
    private $stm=NULL;
	public function registrarsedeModel($datos)
    {
        try{
            $stm=$this->conectar()->prepare("INSERT INTO sede(sede,fk_ciudad) VALUES (?,?)");
            $stm->bindParam(1,$datos["sede"],PDO::PARAM_STR);
            $stm->bindParam(2,$datos["ciudad"],PDO::PARAM_STR);
            if($stm->execute()){
                return '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Hecho!</strong> La sede se registró exitosamente.
                  </div>';
            }else{
                return '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Atención!</strong> La sede no se pudo registrar.
                  </div>';
            }
        
            //var_dump($datos);
            
        }catch(PDOException $e){
            die($e->getMessage());
        } 
    }
}
?>