<?php

require_once './libs/smarty-master/libs/Smarty.class.php';

class ZapatillaView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showHome(){

        $this->smarty->display('./templates/home.tpl');
    }



  
    function showZapatilla($marcas,$zapatillas ){
         $this->smarty->assign('titulo', 'Lista de zapatillas'); 
         $this->smarty->assign('marcas', $marcas);
         $this->smarty->assign('zapatillas', $zapatillas);
         $this->smarty->display('./templates/zapatillaList.tpl');
    }



    function showFormularioInsertar($marcas){
    $this->smarty->assign('marcas', $marcas);
    $this->smarty->display('./templates/insertarZapa.tpl');
}

    function showFormularioInsertarMarca($marcas){
    $this->smarty->assign('marcas', $marcas);
    $this->smarty->display('./templates/insertarMarca.tpl');
}
    function showTablaLocation(){
    header("Location: ".BASE_URL."tabla");



}
function showMasZapatilla($zapatilla){   
        $this->smarty->assign('zapatilla', $zapatilla);
        $this->smarty->display('./templates/soloPagZapatilla.tpl');
    }
    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }
   
  
    function showFormularioEditarZapatilla($marcas,$datosZapatillas){
        $this->smarty->assign('marcas', $marcas);
        $this->smarty->assign('datosZapatillas', $datosZapatillas);
        $this->smarty->display('./templates/editarZapatilla.tpl');
    }

    function showFormularioEditarMarca($datosMarca){
        $this->smarty->assign('datosMarca',$datosMarca);
        $this->smarty->display('./templates/editarMarca.tpl');
    }

    }
