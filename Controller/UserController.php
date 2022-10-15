<?php
require_once "./views/UserView.php";
require_once "./models/UserModel.php";
include_once './Helper/logHelper.php';
 
class UserController {
    private $view;
    private $model;
    private $Helper;
    
    public function __construct() {
        $this->model = new UserModel();
        $this->view = new UserView(); 
        $this->loghelper= new logHelper();
    }

    public function showFormLogin() {
        $this->view->showFormLogin();
    }

    public function validateUser() {
        // toma los datos del form
        $email = $_POST['email'];
        $password = $_POST['password'];

        // busco el usuario por email
        $user = $this->model->getUserByEmail($email);

        // verifico que el usuario existe y que las contraseñas son iguales
        if ($user && password_verify($password, $user->password)) {

            // inicio una session para este usuario
            session_start();
            $_SESSION['USER_ID'] = $user->id;
            $_SESSION['USER_EMAIL'] = $user->email;
            $_SESSION['IS_LOGGED'] = true;
            header("Location: ".BASE_URL."tabla");
        } else {
            // si los datos son incorrectos muestro el form con un erro
           $this->view->showFormLogin("El usuario o la contraseña no existe.");
        } 
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: ".BASE_URL."tabla");
    }
}
