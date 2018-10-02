<?php
class fichaModel extends db{
    private $stm=NULL;
	public function registrarfichaModel($datos)
    {
        try{
            $stm=$this->conectar()->prepare("INSERT INTO ficha(codigo_ficha,fk_sede,fk_jornada,fk_tipo_formacion,fk_modalidad,fk_programa_formacion,trimestre_formacion) VALUES (?,?,?,?,?,?,?)");
            $stm->bindParam(1,$datos["ficha"],PDO::PARAM_STR);
            $stm->bindParam(2,$datos["sede"],PDO::PARAM_STR);
            $stm->bindParam(3,$datos["jornada"],PDO::PARAM_STR);
            $stm->bindParam(4,$datos["tipo_formacion"],PDO::PARAM_STR);
            $stm->bindParam(5,$datos["modalidad"],PDO::PARAM_STR);
            $stm->bindParam(6,$datos["programa_formacion"],PDO::PARAM_STR);
            $stm->bindParam(7,$datos["trimestre_formacion"],PDO::PARAM_STR);
            
            if($stm->execute()){
                return '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Hecho!</strong> La ficha se registró exitosamente.
                  </div>';
            }else{
                return '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Atención!</strong> La ficha no se pudo registrar.
                  </div>';
            }
        
            //var_dump($datos);
            
        }catch(PDOException $e){
            die($e->getMessage());
        } 
    }
}
?>