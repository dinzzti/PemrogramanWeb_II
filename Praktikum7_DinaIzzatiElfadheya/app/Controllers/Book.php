<?php

namespace App\Controllers;

use App\Models\BookModel;

class Book extends BaseController
{
    protected $bookModel;

    public function __construct()
    {
        $this->bookModel = new BookModel();
    }

    private function checkLogin()
    {
        if (!session()->get('logged_in')) {
            session()->setFlashdata('error', 'Login terlebih dahulu!');
            return redirect()->to('auth/login')->send();
        }
    }

    public function index()
    {
        $this->checkLogin();
        $books = $this->bookModel->findAll();
        return view('books/index', ['books' => $books]);
    }

    public function create()
    {
        $this->checkLogin();
        return view('books/create');
    }

    public function store()
    {
        $this->checkLogin();

        $rules = [
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'tahun_terbit' => 'required|integer|greater_than[1800]|less_than[2024]',
        ];

        $messages = [
            'judul' => [
                'required' => 'Judul harus diisi.',
                'string' => 'Judul harus berupa teks.'
            ],
            'penulis' => [
                'required' => 'Penulis harus diisi.',
                'string' => 'Penulis harus berupa teks.'
            ],
            'penerbit' => [
                'required' => 'Penerbit harus diisi.',
                'string' => 'Penerbit harus berupa teks.'
            ],
            'tahun_terbit' => [
                'required' => 'Tahun terbit harus diisi.',
                'integer' => 'Tahun terbit harus berupa angka.',
                'greater_than' => 'Tahun harus lebih dari 1800.',
                'less_than' => 'Tahun harus kurang dari 2024.',
            ]
        ];

        if (!$this->validate($rules, $messages)) {
            return view('books/create', [
                'validation' => $this->validator
            ]);
        }

        $this->bookModel->save([
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ]);

        return redirect()->to('/books');
    }

    public function edit($id)
    {
        $this->checkLogin();
        $book = $this->bookModel->find($id);
        return view('books/edit', ['book' => $book]);
    }

    public function update($id)
    {
        $this->checkLogin();

        $rules = [
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'tahun_terbit' => 'required|integer|greater_than[1800]|less_than[2024]',
        ];

        if (!$this->validate($rules)) {
            return view('books/edit', [
                'validation' => $this->validator,
                'book' => $this->bookModel->find($id)
            ]);
        }

        $this->bookModel->update($id, [
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ]);

        return redirect()->to('/books');
    }

    public function delete($id)
    {
        $this->checkLogin();
        $this->bookModel->delete($id);
        return redirect()->to('/books');
    }
}
