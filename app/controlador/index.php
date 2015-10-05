<?php
/**
 * Step 1: Require the Slim Framework
 *
 * If you are not using Composer, you need to require the
 * Slim Framework and register its PSR-0 autoloader.
 *
 * If you are using Composer, you can skip this step.
 */

require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();


$app = new \Slim\Slim();



// GET route
//---------------listar empleado
$app->get(
    '/empleado/:accion',
    function ($accion)  {
        require('../modelo/mod_empleado.php');
        $emp=new Empleado;

            switch ($accion) {
                case 'listar':
                     $emp=$emp->listar();
            echo json_encode($emp);
                    break;
            case 'crear':
                     $emp=$emp->crear();
            echo json_encode($emp);
                    break;
                default:
                    # code...
                    break;
            }

    }
);

//--------buscar empleado
$app->get(
    '/empleado/buscar/:ci',
    function ($ci)  {
        require('../modelo/mod_empleado.php');
        $emp=new Empleado;
        $emp=$emp->buscar($ci);
            echo json_encode($emp);
    }
    );
//--------crear empleado
/*
$app->get(
    '/empleado/crear',
    function ()  {
        require('../modelo/mod_empleado.php');
        $emp=new Empleado;
        $emp=$emp->crear();
            echo "si";
    }
);

);*/
// POST route
$app->post(
    '/post',
    function () {
        echo 'This is a POST route';
    }
);

// PUT route
$app->put(
    '/put',
    function () {
        echo 'This is a PUT route';
    }
);

// DELETE route
$app->delete(
    '/delete',
    function () {

        echo 'This is a DELETE route';
    }
);

/**
 * Step 4: Run the Slim application
 *
 * This method should be called last. This executes the Slim application
 * and returns the HTTP response to the HTTP client.
 */
$app->run();
