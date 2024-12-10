<?php
class HomepageController
{

    public function index() {
        require 'views/mahasiswa/home/landingpage.php';
    }

    public function informasi() {
        require 'views/mahasiswa/home/informasi.php';
    }

    public function about() {
        require 'views/mahasiswa/home/about.php';
    }

    public function home() {
        require 'views/mahasiswa/index.php';
    }

    public function profile() {
        require 'views/mahasiswa/profile.php';
    }
    
    public function tatacara() {
        require 'views/mahasiswa/tatacara.php';
    }

    public function infodata() {
        require 'views/mahasiswa/infodata.php';
    }

    public function callcenter() {
        require 'views/mahasiswa/callcenter.php';
    }
}
?>