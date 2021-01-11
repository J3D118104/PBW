<?php
namespace App\Controllers;

class Find extends BaseController {
    public function index() {
        echo view('header_v');
        echo view('find_v');
        echo view('footer_v');
    }


}
