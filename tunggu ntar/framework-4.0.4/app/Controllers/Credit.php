<?php
namespace App\Controllers;

class Credit extends BaseController {
    public function index() {
        echo view('header_v');
        echo view('credit_v');
        echo view('footer_v');
    }


}
