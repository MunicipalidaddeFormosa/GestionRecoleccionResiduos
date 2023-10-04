<?php
include_once 'Conexiones.php';

class ModeloGestor{
    
    static public function mdlLogin($username, $clave){
        
        $logueo=Conexiones::conectarMD()->prepare("EXEC LOGEO ?,?,?,?");

        $logueo->bindValue(1, $username);
        $logueo->bindValue(2, $clave);
        $logueo->bindValue(3, NULL);
        $logueo->bindValue(4, NULL);
        
        $logueo->execute();

        return $logueo->fetchAll();

        $logueo->close();
    }


    static public function mdlUsuarioLogin($usuarioNombre){
        
        $stmt=Conexiones::conectarM()->prepare("SELECT * FROM municipio.dbo.Usuarios2
                WHERE codusu = ?");

        $stmt->bindValue(1, $usuarioNombre);
        
        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();
    }

    static public function mdlIngresoUsu($username,$clave,$modulo){
    
        $stmt = Conexiones::conMunicipalidadDigital()->prepare("SELECT * FROM login (?,?,?)");

        $stmt->bindParam(1, $username, PDO::PARAM_INT);
        $stmt->bindParam(2, $clave, PDO::PARAM_STR);
        $stmt->bindParam(3, $modulo, PDO::PARAM_INT);
    
        $stmt->execute();

        return $stmt -> fetch();

        $stmt->close();
    }
    public function mdlFecha(){
		//SP fecha extraida del servidor municipal
		$consultaFecha= Conexiones::conMunicipio()->prepare("EXEC [municipio].[dbo].[Fecha]");
		$consultaFecha->execute();

		return $consultaFecha->fetchAll();

		$consultaFecha ->close();
	}
    public function mdlDatosUsu($usu){
			
		$stmt = Conexiones::conMunicipalidadDigital()->prepare("EXECUTE [MunicipalidadDigital].[dbo].[Usuarios2_Datos] ?");

		$stmt->bindParam(1, $usu, PDO::PARAM_INT);
		
		$stmt->execute();

		return $stmt -> fetchAll();

		$stmt->close();

		$stmt = null; 
	}
}