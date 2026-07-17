<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $session = session();
        // Cek jika belum login
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
        
        return view('dashboard');
    }
}
