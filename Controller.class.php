<?php
class Controller {
    private $view;

    public function __construct() {
        $this->view = new View();
    }

    public function do_register() {
        $this->view->render_view('register');
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