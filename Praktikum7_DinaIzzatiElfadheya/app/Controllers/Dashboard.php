<?php

namespace App\Controllers;

use App\Models\BookModel;

class Dashboard extends BaseController
{
    public function index()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $bookModel = new BookModel();
        $data['books'] = $bookModel->findAll();
        return view('dashboard', $data);
    }
}
