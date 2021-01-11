<?php
namespace App\Controllers;
use App\Models\Penggunaan_Model;

class Rumus_hitung extends BaseController {
    public function __construct() {
        $this->rumus = new Penggunaan_Model();
        $db = \Config\Database::connect();
    }
    public function index() {
        echo view('header_v');
        echo view('rumushitung_v');
        echo view('footer_v');
    }

    public function hasil() {
        $data = [
            'nama_bangun_datar' => $this->request->getPost('bangun'),
            'nama_rumus' => $this->request->getPost('rms')
        ];
        $b=$this->request->getPost('bil1');
        $c=$this->request->getPost('bil2');
        $d=$this->request->getPost('bil3');
        $bgn=$this->request->getPost('bangun');
        $rms=$this->request->getPost('rms');

        $db = $this->rumus->insert($data);
        if (($bgn== 'persegi') or ($bgn== 'persegi_panjang')){
            switch ($rms) {
                case "keliling": $hasil= ($b+$c) * 2; break;
                case "luas": $hasil= $b*$c; break;
                }
            $data = [
                'hasil' => $hasil
             ];
		    echo view('rumushitung_v',$data);
        }
       elseif ($bgn== 'segitiga'){
            switch ($rms) {
                case "keliling": $hasil= $b+$c+$d; break;
                case "luas": $hasil= ($b*$c) / 2; break;
                }
            $data = [
                'hasil' => $hasil
             ];
		    echo view('rumushitung_v',$data);
        }
        elseif ($bgn== 'lingkaran'){
            switch ($rms) {
                case "keliling": $hasil= ($b*2)*3.14; break;
                case "luas": $hasil= ($b+$b)*3.14; break;
                }
                $data = [
                    'hasil' => $hasil
                 ];
                echo view('rumushitung_v',$data);
        }  
    } 
}
