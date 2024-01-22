<?php
$controler = new Controller();
$page = ($_GET['page']??'login');

switch ($page) {
    case 'login':
        $controler->do_login();
        break;
    case 'register':
        $controler->do_register();
        break;
    default:
        $controler->do_not_found();
        break;
}
