<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['username', 'email', 'password'];
    protected $useTimestamps    = false;

    protected $validationRules = [
        'username' => 'required|min_length[3]|max_length[100]|is_unique[users.username]',
        'email'    => 'required|valid_email|is_unique[users.email]',
        'password' => 'required|min_length[6]'
    ];

    protected $validationMessages = [
        'username' => [
            'required'    => 'Username wajib diisi.',
            'min_length'  => 'Username minimal 3 karakter.',
            'is_unique'   => 'Username sudah digunakan.'
        ],
        'email' => [
            'required'    => 'Email wajib diisi.',
            'valid_email' => 'Format email tidak valid.',
            'is_unique'   => 'Email sudah digunakan.'
        ],
        'password' => [
            'required'    => 'Password wajib diisi.',
            'min_length'  => 'Password minimal 6 karakter.'
        ]
    ];
}
