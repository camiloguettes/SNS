<?php

class IndexController extends TipodocumentoModel {
    private $t_d=NULL;
    
    public function index()
    {
        if (isset($_SESSION["rol"])) {
        header('location:index.php?url=persona/perfil');
        }else{
        $t_d=$this->all();
        include('view/cuerpo/inicio.php');
        }
    	
    }



}
