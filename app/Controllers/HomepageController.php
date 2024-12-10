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
        if ($_SESSION['user']['role'] == 'mahasiswa') {
            require 'views/mahasiswa/index.php';
        } else {
            require 'views/admin/index.php';
        }
    }

    public function profile() {
        if ($_SESSION['user']['role'] == 'mahasiswa') {
            require 'views/mahasiswa/profile.php';
        } else {
            require 'views/admin/profile.php';
        }
    }
    
    public function tatacara() {
        if ($_SESSION['user']['role'] == 'mahasiswa') {
            require 'views/mahasiswa/tatacara.php';
        } else {
            require 'views/admin/tatacara.php';
        }
    }

    public function infodata() {
        if ($_SESSION['user']['role'] == 'mahasiswa') {
            require 'views/mahasiswa/infodata.php';
        } else {
            require 'views/admin/infodata.php';
        }
    }

    public function callcenter() {
        require 'views/mahasiswa/callcenter.php';
    }
}
?>