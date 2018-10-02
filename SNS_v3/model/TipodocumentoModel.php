<?php

class TipodocumentoModel extends db 
{
    private $stm=NULL;
    public function all()
    {
        try{
            $stm=$this->conectar()->prepare("SELECT * FROM `tipo_documento`");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

}
