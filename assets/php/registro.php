<?php
    session_start();

    if(!isset($_SESSION['empleados'])){
        $_SESSION['empleados'] = [];
    }

    if(isset($_POST['btn']) && $_POST['btn'] == 'Registro'){

        $nombre = $_POST['txtNombre'];
        $apellido = $_POST['txtApellido'];
        $edad = $_POST['txtEdad'];
        $estado_civil = $_POST['txtEstadoCivil'];
        $sexo = $_POST['txtSexo'];
        $sueldo = $_POST['txtSueldo'];

        $empleado = [$nombre, $apellido, $edad, $estado_civil, $sexo, $sueldo];
        $_SESSION['empleados'][] = $empleado;

        header("Location: ".$_SERVER['REQUEST_URI']);
        exit();
    }

    if(isset($_POST['P1']) && $_POST['P1'] == 'Total de empleados femeninos'){
        $p1 = 0;
        foreach($_SESSION['empleados'] as $empleado){
            if($empleado[4] == 'F'){
                $p1++;
            }
        }
    }
        

    if(isset($_POST['P2']) && $_POST['P2'] == 'Total de hombres casados que ganan más de 2500Bs'){
        $p2 = 0;
        foreach($_SESSION['empleados'] as $empleado){
            if($empleado[3] == 'C' && $empleado[4] == 'M' && $empleado[5] > 2500){
                $p2++;
            }
        }
    }

    if(isset($_POST['P3']) && $_POST['P3'] == 'Total de mujeres viudas que ganan más de 1000Bs'){
        $p3 = 0;
        foreach($_SESSION['empleados'] as $empleado){
            if($empleado[3] == 'V' && $empleado[4] == 'F' && $empleado[5] > 1000){
                $p3++;
            }
        }
    }

    if(isset($_POST['P4']) && $_POST['P4'] == 'Edad promedio de los hombres'){
        $p4 = 0;
        $m = 0;
        foreach($_SESSION['empleados'] as $empleado){
            if($empleado[4] == 'M'){
                $p4+=$empleado[2];
                $m++;
            }
        }
        if($p4 != 0){
            $p4=$p4/$m;
        }
    }
?>