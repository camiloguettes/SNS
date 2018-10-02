<?php
class ProgramaController extends programaModel{
    private $stm=NULL;
    public function index(){
        header('location:index.php?url=persona/perfil');
    }
	public function registrarprogramaformacion(){
        $datos=array(
            'programa_formacion' => $_POST['programa_formacion']
        );
        $stm=$this->registrarprogramaformacionModel($datos);
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