<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        
        echo view('Template/header.php');
        echo view('Home/home_view.php');
        echo view('Template/footer.php');
        //return view('welcome_message');
    }
}
