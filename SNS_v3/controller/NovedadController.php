<?php
class NovedadController extends NovedadModel {
    private $respuesta=NULL;
    public function index()
    {
        header('location:index.php?url=persona/perfil');
    }

    public function link($v)
    {
        if (file_exists('view/formularios/'.$v.'.php')) {
            include 'view/formularios/'.$v.'.php';
        }
    }

	public function registrarnovedad(){
        switch ($_POST["id_novedad"]) {
        	
        	case '1':
        	$datos=array(
        		'fecha_inicio'=>$_POST["fecha_inicio"],
        		'motivo'=>$_POST["motivo"],
        		'fallas'=>null,
        		'id_novedad'=>$_POST["id_novedad"],
        		'fk_documento'=>$_POST["fk_documento"],
        		'nueva_jornada'=>null,
        		'nueva_sede'=>null,
        		'responsable'=>$_SESSION["documento"],
        	);
        	// var_dump($datos);
        	$respuesta=$this->registrarnovedadModel($datos);
        	echo $respuesta;
        	break;

        	case '2':
        	$datos=array(
        		'fecha_inicio'=>$_POST["fecha_inicio"],
        		'motivo'=>$_POST["motivo"],
        		'fallas'=>null,
        		'id_novedad'=>$_POST["id_novedad"],
        		'fk_documento'=>$_POST["fk_documento"],
        		'nueva_jornada'=>$_POST["nueva_jornada"],
        		'nueva_sede'=>null,
        		'responsable'=>$_SESSION["documento"],
        	);
        	// var_dump($datos);
        	$respuesta=$this->registrarnovedadModel($datos);
        	echo $respuesta;
        	break;

        	case '3':
        	$datos=array(
        		'fecha_inicio'=>$_POST["fecha_inicio"],
        		'motivo'=>$_POST["motivo"],
        		'fallas'=>$_POST["fallas"],
        		'id_novedad'=>$_POST["id_novedad"],
        		'fk_documento'=>$_POST["fk_documento"],
        		'nueva_jornada'=>null,
        		'nueva_sede'=>null,
        		'responsable'=>$_SESSION["documento"],
        	);
        	// var_dump($datos);
        	$respuesta=$this->registrarnovedadModel($datos);
        	echo $respuesta;
        	break;

        	case '4':
        	$datos=array(
        		'fecha_inicio'=>$_POST["fecha_inicio"],
        		'motivo'=>$_POST["motivo"],
        		'fallas'=>null,
        		'id_novedad'=>$_POST["id_novedad"],
        		'fk_documento'=>$_POST["fk_documento"],
        		'nueva_jornada'=>null,
        		'nueva_sede'=>$_POST["nueva_sede"],
        		'responsable'=>$_SESSION["documento"],
        	);
        	// var_dump($datos);
        	$respuesta=$this->registrarnovedadModel($datos);
        	echo $respuesta;
        	break;

        	case '5':
        	$datos=array(
        		'fecha_inicio'=>$_POST["fecha_inicio"],
        		'motivo'=>$_POST["motivo"],
        		'fallas'=>null,
        		'id_novedad'=>$_POST["id_novedad"],
        		'fk_documento'=>$_POST["fk_documento"],
        		'nueva_jornada'=>null,
        		'nueva_sede'=>null,
        		'responsable'=>$_SESSION["documento"],
        	);
        	// var_dump($datos);
        	$respuesta=$this->registrarnovedadModel($datos);
        	echo $respuesta;
        	break;
        	
        	case '6':
        	$datos=array(
        		'fecha_inicio'=>$_POST["fecha_inicio"],
        		'motivo'=>$_POST["motivo"],
        		'fallas'=>null,
        		'id_novedad'=>$_POST["id_novedad"],
        		'fk_documento'=>$_POST["fk_documento"],
        		'nueva_jornada'=>null,
        		'nueva_sede'=>$_POST["nueva_sede"],
        		'responsable'=>$_SESSION["documento"],
        	);
        	// var_dump($datos);
        	$respuesta=$this->registrarnovedadModel($datos);
        	echo $respuesta;
        	break;

        	default:
        		# code...
        		break;
        }
    }    

    public function consultar1novedad(){
        if($_POST["id_novedad"]==4||$_POST["id_novedad"]==6){
            $datos=array(
            'fk_documento'=>$_POST["documento"],
            'fk_tipo_novedad'=>$_POST["id_novedad"],
            );
            $respuesta=$this->consultar1novedadModels($datos);
            // var_dump($respuesta);
            include'view/formularios/tablas.php';
        }else{
            $datos=array(
            'fk_documento'=>$_POST["documento"],
            'fk_tipo_novedad'=>$_POST["id_novedad"],
            );
            $respuesta=$this->consultar1novedadModel($datos);
            // var_dump($respuesta);
            include'view/formularios/tabla.php';
        }
    }
}
