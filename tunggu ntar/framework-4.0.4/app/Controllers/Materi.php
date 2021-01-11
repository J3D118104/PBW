<?php
namespace App\Controllers;

class Materi extends BaseController {
    public function index() {
        echo view('header_v');
        echo view('materi_v');
        echo view('footer_v');
    }


}
