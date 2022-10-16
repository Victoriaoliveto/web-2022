<?php
require_once './Controller/zapatillaController.php';
require_once './Controller/marcaController.php';
require_once "Controller/UserController.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// instancio el unico controller que existe por ahora
$zapatillaController = new ZapatillaController();
$marcaController = new MarcaController();


// tabla de ruteo
switch ($params[0]) {

    case 'home':
        $zapatillaController->Home();
        break;

    case 'tabla':
        $zapatillaController->showZapatilla();
        break;

    case 'homeFilter': 
        $id= $params[0];
         $zapatillaController->showZapatillaFilter($id); 
         break;

    case 'formularioZapa':
          $zapatillaController->formularioZapa();
         break;
    case 'addImagen': 
            $zapatillaController->addImage($params[1]); 
            break;   
    case 'formularioEditarZapatilla':
            $id= $params[1];
            $zapatillaController->FormularioEditarZapatilla($id);
               break;
    case 'addZapa':
        $zapatillaController->addZapatilla();
            break;
          
    case 'delete':
                // obtengo el parametro de la acción
          $id= $params[1];
          $zapatillaController->deleteZapatilla($id);
          break;

    case 'verMasZapas': 
        $id= $params[1];
        $zapatillaController->zapaIndi($id); 
         break;
               
    case 'editarZapatilla': 
         $zapatillaController->editarZapatilla($params[1]); 
         break;


   //MARCA                     
    case 'formularioInsertarMarca':
           $marcaController->formularioMarca();
         break;
    case 'addMarca':
                            $marcaController-> addMarca();
                            break;
    case 'delMarca':
                            $id= $params[1];
                            $marcaController-> delMarca($id);
                            break;
    case 'formularioEditarMarca':
                                $id= $params[1];
                                $marcaController->FormularioEditarMarca($id);
                                   break;                         
    case 'editarMarca':
       $marcaController-> editarMarca($params[1]);
       break;         
//LOGIG    
    case 'login':
        $userController = new UserController();
         $userController->showFormLogin();
                                break;
    case 'validate':
                                 
    $userController = new UserController();
      $userController->validateUser();
                                break;
                        
     case 'logout':
            $userController = new UserController();
           $userController->logout();
                      break;
                        
  
    default:
        echo('404 Page not found');
        break;
}
