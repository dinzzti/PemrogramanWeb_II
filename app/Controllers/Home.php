<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new MahasiswaModel();
        $data['mahasiswa'] = $model->getData();

        return view('home/beranda', $data);
    }

    public function profil()
    {
        $model = new MahasiswaModel();
        $data['mahasiswa'] = $model->getData();

        return view('home/profil', $data);
    }
}
