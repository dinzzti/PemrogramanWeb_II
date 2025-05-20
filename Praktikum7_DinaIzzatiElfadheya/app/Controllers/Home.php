<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function welcome()
    {
        if (session()->get('logged_in')) {
            return redirect()->to('/dashboard');
        }

        return view('welcome');
    }
}
