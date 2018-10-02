<?php
class SedeController extends sedeModel{
 public function index()
    {
        header('location:index.php?url=persona/perfil');
    }
public function link($v)
    {
        // echo $v;
        if (file_exists('view/formularios/'.$v.'.php')) {
            include 'view/formularios/'.$v.'.php';
        }
    }
    public function registrarsede(){
        $datos=array(
            'sede' => $_POST['sede'],
            'ciudad' => $_POST['ciudad']
        );
        $stm=$this->registrarsedeModel($datos);
    echo $stm;
    }
}