<?php

namespace App\Controllers;

class IntellectualProperty extends BaseController
{
    public function patentlist()
    {
        $data = [
            'title' => 'Paten',
            'subtitle' => 'Daftar Paten'
        ];
        echo view('intellectualproperty/patent/patentlist', $data);
    }

    public function inputpatent()
    {
        $data = [
            'title' => 'Paten',
            'subtitle' => 'Input Paten'
        ];
        echo view('intellectualproperty/patent/inputpatent', $data);
    }

    public function copyrightlist()
    {
        $data = [
            'title' => 'Cipta',
            'subtitle' => 'Daftar Cipta'
        ];
        echo view('Intellectualproperty/copyright/copyrightlist', $data);
    }

    public function inputcopyright()
    {
        $data = [
            'title' => 'Cipta',
            'subtitle' => 'Input Cipta'
        ];
        echo view('Intellectualproperty/copyright/inputcopyright', $data);
    }
}
