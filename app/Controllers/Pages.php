<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home()
    {
        $data = [
            'title' => 'Beranda Aplikasi Sentra HKI',
        ];
        echo view('pages/home', $data);
    }
}
