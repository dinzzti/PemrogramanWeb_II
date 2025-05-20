<?php

namespace App\Controllers;

use App\Models\BookModel;

class Dashboard extends BaseController
{
    public function index()
    {
        // Cek apakah user sudah login
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $bookModel = new BookModel();
        $data['books'] = $bookModel->findAll(); // Ambil semua data buku
        return view('dashboard', $data);
    }
}
