<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function welcome()
    {
        return view('welcome');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function loginPost()
    {
        $session = session();
        $model = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            $session->set([
                'username' => $user['username'],
                'logged_in' => true,
            ]);
            return redirect()->to('/dashboard');
        } else {
            $session->setFlashdata('error', 'Username atau password salah!');
            return redirect()->to('/login');
        }
    }

    public function register()
    {
        helper('form');

        if ($this->request->getMethod() === 'post') {
            $userModel = new UserModel();

            $data = $this->request->getPost([
                'username', 'email', 'password', 'password_confirm'
            ]);

            if ($userModel->where('username', $data['username'])->first()) {
                session()->setFlashdata('error', 'Username sudah digunakan!');
                return redirect()->back()->withInput();
            }

            if ($userModel->where('email', $data['email'])->first()) {
                session()->setFlashdata('error', 'Email sudah terdaftar!');
                return redirect()->back()->withInput();
            }

            if ($data['password'] !== $data['password_confirm']) {
                session()->setFlashdata('error', 'Password dan konfirmasi tidak cocok!');
                return redirect()->back()->withInput();
            }

            if (! $this->validate($userModel->validationRules, $userModel->validationMessages)) {
                return view('auth/register', [
                    'validation' => $this->validator
                ]);
            }

            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

            $userModel->save([
                'username' => $data['username'],
                'email'    => $data['email'],
                'password' => $data['password']
            ]);

            return redirect()->to('/login')->with('success', 'Registrasi berhasil, silakan login.');
        }

        return view('auth/register');
    }
    public function registerPost()
    {
        $userModel = new UserModel();

        if (!$this->validate([
            'username' => 'required|min_length[3]|max_length[100]|is_unique[users.username]',
            'email'    => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[6]',
            'password_confirm' => 'matches[password]'
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $userModel->insert([
            'username' => $this->request->getPost('username'),
            'email'    => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ]);

        return redirect()->to('/login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('success', 'Berhasil logout.');
    }
}
