<?php
require_once './models/ZapatillaModel.php';
require_once './views/ZapatillaView.php';
require_once './models/marcaModel.php';
require_once "./Helper/logHelper.php";

class ZapatillaController {
    private $model;
    private $view;
    private $logHelper;
    private $marcaModel;

    public function __construct() {
        $this->model = new ZapatillaModel();
        $this->view = new ZapatillaView();
        $this->marcaModel = new MarcaModel();
        $this->logHelper = new logHelper();

  
    }


    function Home(){
        $this->view->showHome();
    }

//TODAS LAS ZAPAS 
    public function showZapatilla() {
        session_start();
        $zapatillas = $this->model->getAllZapatilla();
        $marcas=$this->marcaModel->getMarcas(); 
        $this->view->showZapatilla($marcas,$zapatillas, $marcas);
        }

    function zapaIndi ($id){
        session_start();
        $datosZapatilla=$this->model->getZapatillaID($id);
        $this->view->showMasZapatilla($datosZapatilla);
    }

 //Ver Productos por Filtro
        function showZapatillaFilter($id){
            session_start();
        $id=$_POST['select_marca'];
        $marca=$this->marcaModel->GetMarcaID($id);
        $marcaElegida=$this->marcaModel->getMarcas();
        $zapatillasPorMarca=$this->model->getZapatillasPorMarca($id);
        $this->view->showZapatilla($marcaElegida,$zapatillasPorMarca,$marca);


    }


function addZapatilla(){
    $this->logHelper->checkLoggedIn();
    $modelo = $_POST['Modelo'];
    $precio = $_POST['Precio'];
    $stock = $_POST['Stock'];
    $id_marca=$_POST['select_marca'];
    

    $this->model->insertZapatilla($modelo,$precio,$stock,$id_marca,);
    $this->view->showTablaLocation();
}
function addImage($id){
    if ($this->logHelper->checkAdminLogIn()) {
        if($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" || $_FILES['input_name']['type'] == "image/png" ) {
            $this->model->addImage($_FILES['input_name']['tmp_name'], $id);
        }
    }
    $this->view->showTablaLocation();

}

       function  formularioZapa (){
        $this->logHelper->checkLoggedIn();
        $marca=$this->marcaModel ->getMarcas();
        $this->view->showFormularioInsertar($marca);
    }

       

    function deleteZapatilla($id) {
        $this->logHelper->checkLoggedIn();
        $this->model->deleteZapatillaById($id);
        $this->view->showTablaLocation();

}




 function editarZapatilla($id){
    $this->logHelper->checkLoggedIn();
   $modelo=$_POST['editar_Modelo_input'];
   $precio=$_POST['editar_Precio_input'];
   $stock=$_POST['editar_Stock_input'];
   $id_marca=$_POST['editar_Marca_select'];
   $this->marcaModel->updateMarca ($id_marca, $id);
   $this->model->updateZapatilla ($modelo, $precio, $stock,$id ); 
   header("Location: ".BASE_URL."tabla");
}
    
    



function FormularioEditarZapatilla ($id){
    $this->logHelper->checkLoggedIn();
$datosZapatillas=$this->model->getZapatillaID($id);
$marcas=$this->marcaModel->getMarcas();
$this->view->showFormularioEditarZapatilla($marcas, $datosZapatillas);
}

}


