<?php

class ControladorGestor{

    static public function ctrLogin(){

        if (isset($_POST['username']) && isset($_POST['clave'])){

            $username = $_POST['username'];
            $clave    = $_POST['clave'];

            if ($username == true && $clave == true){
                $respuesta=ModeloGestor::mdlLogin($username, $clave);
                return $respuesta;
            }
        }
    }


    static public function ctrUsuarioLogin(){

        if (isset($_REQUEST['username'])){
        
            $usuarioNombre = $_REQUEST['username'];

            if ($usuarioNombre == true){
                $respuesta=ModeloGestor::mdlUsuarioLogin($usuarioNombre);
                return $respuesta;
            }
        }
    }

    static public function CtrIngresoUsu($username,$clave){
        // ID 264 es el de sistema de gestion ambiental
        $modulo=264;
        $respuesta= ModeloGestor::mdlIngresoUsu($username,$clave,$modulo);
        return $respuesta;
        
    }

    /*=============================================
	 =            DATOS USUARIOS          		=
	 =============================================*/ 
	
	public function CtrDatosUsu($usu){

		/* pasa el parametro $usu al modelo  ModelosSeguimientoExpedientes::mdlDatosUsu($usu,$modulo)*/
        $modulo=264;

		$rta= ModeloGestor::mdlDatosUsu($usu,$modulo); 

		return $rta;
	}

}