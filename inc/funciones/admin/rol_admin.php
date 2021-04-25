<?php 
    //-----------SE ABRE LA SESIÓN DEL USUARIO
    //session_start();
    $id_user = $_SESSION['id_user'];
    if(!$id_user == ""){ //si la variable de sesión no está vacia entonces entra a verificacion
        //header("location: ../../../index.html");
        try {
            require '../../../conexion.php';
            $sql = "SELECT `puestos`.`nombre_puesto` 
                    FROM `empleados`,`puestos` 
                    WHERE `puestos`.`nombre_puesto` = 'administrador' 
                        and `puestos`.`id_puesto` = `empleados`.`id_puesto`
                        and `empleados`.`id_usuario` = $id_user";
            $consulta = mysqli_query($conexion, $sql);
            $puestos = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
            $puesto = $puestos["nombre_puesto"]; 
            $acceso = false;
            if($puesto != 'administrador'){
                //Si el puesto del usuario no es administrador entonces
                header("location: ../../../src/plantillas/pages/access_denied.php"); 
            }
            else{
                $acceso = true;
            }
            
    
        } catch (\Throwable $th) {
            var_dump($th);
        }
        
        mysqli_close($conexion);
    }
?>