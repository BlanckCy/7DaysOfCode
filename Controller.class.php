<?php
class Controller {
    private $view;
    private $crud;

    public function __construct() {
        $this->view = new View();
        $this->crud = new Crud();
    }

    public function do_register() {
        if(isset($_POST)){
            $this->crud->crud_create($_POST['person']);
            header("Location: /?page=login");
        }else{
            $this->view->render_view('register');
        }
    }
    
    public function do_login() {
        $this->view->render_view('login');
    }
    
    public function do_not_found() {
        http_response_code(404);
        $this->view->render_view('not_found');
    }
}

?>