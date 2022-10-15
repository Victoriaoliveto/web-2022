<?php
require_once "./views/ZapatillaView.php";
require_once "./Helper/logHelper.php";
require_once "./models/marcaModel.php";

class MarcaController{
    private $marcaModel;
    private $view;
    private $logHelper;

    function __construct(){
        $this->marcaModel = new MarcaModel();
        $this->view = new ZapatillaView();
        $this->logHelper = new logHelper();
    }



    function  formularioMarca (){
        
        $this->logHelper->checkLoggedIn();
        $marca=$this->marcaModel->getMarcas();
        $this->view->showFormularioInsertarMarca($marca);
    }

    function delMarca($id){
         
        $this->logHelper->checkLoggedIn();   
         $this->marcaModel->delMarca($id);       
         $this->view->showTablaLocation();
        }
  

    function editarMarca($id){
      
        $this->logHelper->checkLoggedIn();
        $nombre=$_POST['editar_Nombre_input'];
        $this->marcaModel->updateMarca ($nombre, $id);
        header("Location: ".BASE_URL."tabla");
    }
    function addMarca(){
          $this->logHelper->checkLoggedIn();
          $marcas=$_POST['input_Marca'];
          $this->marcaModel->addMarca($marcas);
            $this->view->showTablaLocation();
          
        }

        function FormularioEditarMarca($id){
            $this->logHelper->checkLoggedIn();
            $datosMarca=$this->marcaModel->GetMarcaID($id);
           $this->view->showFormularioEditarMarca($datosMarca);
        }

    
}