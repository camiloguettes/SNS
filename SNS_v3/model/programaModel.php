<?php
class programaModel extends db{
    private $stm=NULL;
	public function registrarprogramaformacionModel($datos)
    {
        try{
            $stm=$this->conectar()->prepare("INSERT INTO programas_formacion (programa_formacion) VALUES (?)");
            $stm->bindParam(1,$datos["programa_formacion"],PDO::PARAM_STR);
            if($stm->execute()){
                return '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Hecho!</strong> El programa de formación se registró exitosamente.
                  </div>';
            }else{
                return '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Atención!</strong> El programa de formación no se pudo registrar.
                  </div>';
            }
        
            //var_dump($datos);
            
        }catch(PDOException $e){
            die($e->getMessage());
        } 
    }
}
?>