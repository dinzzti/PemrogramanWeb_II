<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    public function getData()
    {
        return [
            'nama' => 'Dina Izzati Elfadheya',
            'nim' => '2310817120001',
            'asal_prodi' => 'Teknologi Informasi',
            'hobi' => 'Membaca Fiksi dan Travelling',
            'skill' => 'Data Management, Ms Word Excel',
            'gambar' => 'dina.jpg',
            'bio' => '"Aku adalah orang yang ceria dan mudah akrab, apalagi kalau udah ngobrol seru. Suka nyapa duluan, ketawa bareng temen, dan nyimpen banyak cerita receh. Hari-hari kecil yang sederhana selalu jadi favoritku—kayak makan bareng, jalan santai, atau nemu lagu enak di shuffle. Ayo berteman dengan ku!!"'         
        ];
    }
}
