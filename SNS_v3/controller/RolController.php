<?php
class RolController extends RolModel{
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

    public function asignarrol()
    {
        $datos=array(
            'rol' =>$_POST['rol'],
            'documento' =>$_POST['documento'],
            );
            $stm=$this->asignarrolModel($datos);
            echo $stm;
    }
    

}
