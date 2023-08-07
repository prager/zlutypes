<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {        
        echo view('Template/header_view.php');
        echo view('Home/home_view.php');
        echo view('Template/footer_view.php');
    }

    public function register() {
        //echo view('Template/header_view.php');
        echo view('Home/usr_register.php');
        //echo view('Template/footer_view.php');
    }
}
