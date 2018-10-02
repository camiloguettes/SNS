<?php

class PersonaController extends personaModel {
    private $rol=NULL;
    private $datosController=NULL;
    private $respuesta=NULL;
    private $contrasena=NULL;
    private $do=NULL;
    private $doc=NULL;
    private $d=NULL;
    private $f=NULL;
    public function index($id=null)
    {
        $this->perfil();
    }

    public function ingresar()
    {
        if(isset($_POST["documento"])){
            $datosController = array( 'documento' =>$_POST["documento"]);


            // $respuesta = Datos :: ingresoUsuarioModel($datosController,"registro");
            $respuesta = $this->ingresarModel($datosController);
            // var_dump($respuesta);      
            

//cambiar este login

            if (is_null($respuesta["contrasena"])|| empty($respuesta["contrasena"])&&$respuesta["fk_estado"]==2) {
                echo '<div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>Atención!</strong> No puede ingresar.
                                      </div>';
            }else{
                   if($respuesta["documento"]==$_POST["documento"] && $respuesta["fk_tipo_documento"]==$_POST["fk_tipo_documento"] && $respuesta["contrasena"]==md5($_POST["contrasena"])){
                    $_SESSION["documento"]=$_POST["documento"];
                    $_SESSION["fk_tipo_documento"]=$_POST["fk_tipo_documento"];
                    $_SESSION["nombre"]=$respuesta["primer_nombre"].' '.$respuesta["primer_apellido"];
                    
                   
                    header('location:index.php?url=persona/perfil');

                }

                else{
                    echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Atención!</strong> No se pudo ingresar.
                      </div>';

                }
                // var_dump($respuesta); 
            }
        }//if

    }

    public function perfil()
    {
        if(!is_null($_SESSION["documento"])){
            $rol=$this->rol($_SESSION["documento"]);
            // var_dump($rol);
            $_SESSION["rol"]=$rol["fk_tipo_rol"];
            switch ($rol["fk_tipo_rol"]) {
            case $rol["fk_tipo_rol"]==1:
            include('view/cuerpo/perfil_admin.php');
            include('view/cuerpo/nav3.php');
            break;
            case $rol["fk_tipo_rol"]==2:
            include('view/cuerpo/perfil_apoyo_admin.php');
            include('view/cuerpo/nav3.php');
            break;
            case $rol["fk_tipo_rol"]==3:
            include('view/cuerpo/perfil_instructor.php');
            include('view/cuerpo/nav2.php');
            break;
            case $rol["fk_tipo_rol"]==4:
            include('view/cuerpo/perfil.php');
            include('view/cuerpo/nav4.php');
            break;
            default:
            header('location:index.php');
            break;
            }
        }else{
            header('location:index.php');
        }
    }  
    
    public function link($v)
    {

 switch ($_SESSION["rol"]) {
    case 1:
    include('view/cuerpo/nav3.php');
    break;
    case 2:
            include('view/cuerpo/nav3.php');
    break;
    case 3:
            include('view/cuerpo/nav2.php');
    break;
    case 4:
            include('view/cuerpo/nav4.php');
    break;
    default:
    header('location:index.php');
    break;


 }

        // echo $v;
        if (file_exists('view/formularios/'.$v.'.php')) {
            include 'view/formularios/'.$v.'.php';
        }
    }

    public function registrar()
    {
        if($_POST['contrasena']==$_POST['contrasena2']){
            $contrasena=md5($_POST['contrasena']);
            $datos=array(
                    'documento' =>$_POST['documento'],
                    'primer_nombre' =>$_POST['primer_nombre'],
                    'segundo_nombre' =>$_POST['segundo_nombre'],
                    'primer_apellido' =>$_POST['primer_apellido'],
                    'segundo_apellido' =>$_POST['segundo_apellido'],
                    'correo' =>$_POST['correo'],
                    'contrasena' =>$contrasena,
                    'fk_tipo_documento' =>$_POST['fk_tipo_documento'],
                    );
            $stm=$this->registrarModel($datos);
            echo $stm;
        }else{
            return 'Las contraseñas no coinciden';
        }   
       
       
    }
    public function salir()
    {
        $_SESSION["rol"]=null;
        $_SESSION["documento"]=null;
        $_SESSION["fk_tipo_documento"]=null;
        $_SESSION["nombre"]=null;
        header('location:index.php');

    }
    

    public function cambiarContra()
    {
        
        if($_POST["contrasena1"]==$_POST["contrasena2"]){
            $datosController = array( 'documento' =>$_SESSION["documento"]);
             $respuesta = $this->ingresarModel($datosController);
             if ($respuesta["contrasena"]==md5($_POST["contrasena"])) {
                $contrasena1=md5($_POST['contrasena1']);
                $datos = array(
                    'contrasena' =>$contrasena1 , 
                    'documento' =>$_SESSION['documento'] , 
                );
                $stm=$this->cambiarContraModel($datos);
                 echo $stm; 
            }else {
                echo 'Las contraseñas no coinciden con la informacion del perfil';            
            }  
        }else{
            echo 'Las contraseñas no coinciden';
        }
    
    }

    public function registraraprendiz(){
        $datos=array(
            'documento' =>$_POST['documento'],
            'primer_nombre' =>$_POST['primer_nombre'],
            'segundo_nombre' =>$_POST['segundo_nombre'],
            'primer_apellido' =>$_POST['primer_apellido'],
            'segundo_apellido' =>$_POST['segundo_apellido'],
            'correo' =>$_POST['correo'],
            'ficha' =>$_POST['ficha'],
            'tipo_documento' =>$_POST['tipo_documento']
      
          );
        
        $stm=$this->registraraprendizModel($datos);
    echo $stm;
    }
    public function registrar_aprendiz(){
        $do=new TipodocumentoModel;       
        $doc=$do->all();
        $d= new superconsultaModel;
        $f=$d->consultartodo('ficha');
        include('view/formularios/registrar_aprendiz.php');
    }

    public function consultar1aprendiz(){
        if(isset($_POST['documento'])){
        $datos=array(
                    'documento'=>$_POST['documento']
                    );
        //var_dump($datos);
        $respuesta=$this->consultar1aprendizModel($datos);
        include 'view/formularios/tabla_aprendiz.php';

        }
    }

}
