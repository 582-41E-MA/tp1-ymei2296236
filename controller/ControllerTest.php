<?php

class ControllerTest extends Controller {

    public function index() {
        return Twig::render('test.php');
    }

    public function error($e = null) {
        return Twig::render('404.html');
    }
}

?>