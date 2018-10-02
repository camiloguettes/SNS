<?php
class PermisoController extends PermisoModel{
    private $stm=NULL;
    public function index()
    {
        header('location:index.php?url=persona/perfil');
    }
    public function link($v)
    {
        echo $v;
        if (file_exists('view/formularios/'.$v.'.php')) {
            include 'view/formularios/'.$v.'.php';
        }
    }
    public function registrarpermiso(){
        $datos=array(
            'documento' =>$_POST['documento']
            );
    $stm=$this->registrarpermisoModel($datos);
    echo $stm;
    }

}
?>