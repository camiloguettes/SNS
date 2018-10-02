<?php
class CiudadController extends ciudadModel{
    private $stm=NULL;
	public function registrarciudad(){
        $datos=array(
            'ciudad' => $_POST['ciudad']
        );
        $stm=$this->registrarciudadModel($datos);
    echo $stm;
    }
    public function link($v){
        echo $v;
        if (file_exists('view/formularios/'.$v.'.php')) {
            include 'view/formularios/'.$v.'.php';
        }
    }
}
?>