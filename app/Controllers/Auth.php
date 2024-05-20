<?php

namespace App\Controllers;

use App\Models\User;

class Auth extends BaseController
{
    public function login(): string
    {
        return view('auth/login');
    }

    public function register(): string
    {
        return view('auth/register');
    }

    public function actlogin()
    {
        $usermail = $this->request->getPost('usermail');
        $password = $this->request->getPost('password');
        
        if (empty($usermail) || empty($password)) {
            return redirect()->to('/auth/login')->with('error', 'Email and password are required.');
        } 
        
        // Buat instance UserModel
        $userModel = new User();
        
        // Cari pengguna berdasarkan email atau username
        $user = $userModel->where('email', $usermail)->orWhere('username', $usermail)->first();
        
        // Periksa apakah pengguna ditemukan
        if ($user) {
            // Verifikasi password yang diinputkan dengan password yang disimpan di database
            if (password_verify($password, $user['password'])) {
                // Login berhasil, redirect ke halaman utama
                // Anda dapat menyimpan informasi pengguna ke sesi di sini
                $session = session();
                $session->set([
                    'id_user' => $user['id_user'],
                    'username' => $user['username'],
                    'email' => $user['email'],
                    'role' => $user['role'],
                    'logged_in' => true,
                ]);
                return redirect()->to('/dashboard')->with('success', 'Login successful');
            } else {
                // Password salah, redirect ke halaman login
                return redirect()->to('/auth/login')->with('error', 'Invalid password');
            }
        } else {
            // Pengguna tidak ditemukan, redirect ke halaman login
            return redirect()->to('/auth/login')->with('error', 'User not found');
        }
    }

    public function actregister()
    {
        $fullname = $this->request->getPost('fullname');
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $created_at = date('Y-m-d H:i:s');
        
        if (empty($fullname) || empty($username) || empty($email) || empty($password)) {
            return redirect()->to('/auth/register')->with('error', 'All fields are required.');
        }

        // Buat instance UserModel
        $userModel = new User();
        
        // Hash password sebelum menyimpan ke database
        $pwd = password_hash($password, PASSWORD_DEFAULT);
        
        // Simpan pengguna baru ke database
        $userModel->insert([
            'fullname' => $fullname,
            'username' => $username,
            'email' => $email,
            'password' => $pwd,
            'created_at' => $created_at,
            'updated_at' => $created_at,
        ]);
        
        return redirect()->to('/auth/login')->with('success', 'Registration successful. Please login.');
    }


    //logout function
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/auth/login');

    }
}
