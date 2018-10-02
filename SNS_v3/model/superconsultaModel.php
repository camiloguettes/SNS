<?php
class superconsultaModel extends db{
    private $tabla=NULL;
    private $stm=NULL;
	public function consultartodo($tabla){
        try{
            $stm=$this->conectar()->prepare("SELECT * FROM $tabla");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function consultaraprendiz(){
        try{
            $stm=$this->conectar()->prepare("SELECT * FROM persona INNER JOIN tipo_documento ON persona.fk_tipo_documento=tipo_documento.id_tipo_documento WHERE fk_estado=3");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}

?>