<?php
    
    include_once("Controladores/ControladorPlantillas.php");
    include_once("Controladores/ControladorGestor.php");
    include_once("Modelos/ModeloGestor.php");
    
    $plantillas = new ControladorPlantilla();
    $plantillas->ctrPlantillas();