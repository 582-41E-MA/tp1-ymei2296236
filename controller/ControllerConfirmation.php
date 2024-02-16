<?php

class ControllerConfirmation extends Controller {

    public function index() {
        return Twig::render('confirmation.php');
    }

    public function error($e = null) {
        return Twig::render('404.html');
    }
}

?>