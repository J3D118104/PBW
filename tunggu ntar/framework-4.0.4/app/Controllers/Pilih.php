<?php
namespace App\Controllers;

class Pilih extends BaseController {
    public function index() {
        echo view('header_v');
        echo view('pilih_v');
        echo view('footer_v');
    }


}
