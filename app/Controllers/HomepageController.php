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
        if ($_SESSION['user']['role'] == '1') {
            require 'views/mahasiswa/index.php';
        } else {
            require 'views/admin/index.php';
        }
    }

    public function profile() {
        require 'views/mahasiswa/profile.php';
    }
    
    public function tatacara() {
        if ($_SESSION['user']['role'] == '1') {
            require 'views/mahasiswa/tatacara.php';
        } else {
            require 'views/admin/tatacara.php';
        }
    }

    public function infodata() {
        if ($_SESSION['user']['role'] == '1') {
            require 'views/mahasiswa/infodata.php';
        } else {
            require 'views/admin/infodata.php';
        }
    }

    public function callcenter() {
        if ($_SESSION['user']['role'] == '1') {
            require 'views/mahasiswa/callcenter.php';
        } else {
            require 'views/admin/callcenter.php';
        }
    }
}
?>