<?php

require_once './libs/smarty-master/libs/Smarty.class.php';
class UserView{
    
        private $smarty;
    
        public function __construct() {
            $this->smarty = new Smarty(); // inicializo Smarty
        }

        function showHome(){
            header("Location: ".BASE_URL."tabla");
        }
    
        function showFormLogin($error = null) {
            $this->smarty->assign("error", $error);
            $this->smarty->display('login.tpl');
        }
           

    }
    