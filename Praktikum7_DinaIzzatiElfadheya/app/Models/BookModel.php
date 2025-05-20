<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'penulis', 'penerbit', 'tahun_terbit'];
    protected $useTimestamps = false;

    protected $validationRules = [
        'judul'        => 'required|alpha_numeric_space',
        'penulis'      => 'required|alpha_numeric_space',
        'penerbit'     => 'required|alpha_numeric_space',
        'tahun_terbit' => 'required|integer|greater_than[1800]|less_than[2024]',
    ];

    protected $validationMessages = [
        'judul' => [
            'required'            => 'Judul buku wajib diisi.',
            'alpha_numeric_space' => 'Judul hanya boleh berisi huruf, angka, dan spasi.',
        ],
        'penulis' => [
            'required'            => 'Nama penulis wajib diisi.',
            'alpha_numeric_space' => 'Nama penulis hanya boleh berisi huruf, angka, dan spasi.',
        ],
        'penerbit' => [
            'required'            => 'Nama penerbit wajib diisi.',
            'alpha_numeric_space' => 'Nama penerbit hanya boleh berisi huruf, angka, dan spasi.',
        ],
        'tahun_terbit' => [
            'required'      => 'Tahun terbit wajib diisi.',
            'integer'       => 'Tahun terbit harus berupa angka.',
            'greater_than'  => 'Tahun terbit harus lebih besar dari 1800.',
            'less_than'     => 'Tahun terbit harus lebih kecil dari 2024.',
        ]
    ];

    protected $skipValidation = false;
}
