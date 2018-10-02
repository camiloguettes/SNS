<?php
class FichaController extends fichaModel{
    private $stm=NULL;
     public function index()
    {
        header('location:index.php?url=persona/perfil');
    }
    public function link($v){
        echo $v;
        if (file_exists('view/formularios/'.$v.'.php')) {
            include 'view/formularios/'.$v.'.php';
        }
    }

    public function registrarficha(){
        $datos=array(
            'ficha' => $_POST['ficha'],
            'sede' => $_POST['sede'],
            'jornada' => $_POST['jornada'],
            'tipo_formacion' => $_POST['tipo_formacion'],
            'modalidad' => $_POST['modalidad'],
            'programa_formacion' => $_POST['programa_formacion'],
            'trimestre_formacion' => $_POST['trimestre_formacion']
        );
        $stm=$this->registrarfichaModel($datos);
    echo $stm;
    }
}
?>