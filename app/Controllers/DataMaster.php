<?php

namespace App\Controllers;

class DataMaster extends BaseController
{
    public function academiccommunitylist()
    {
        $data = [
            'title' => 'Data Master',
            'subtitle' => 'Civitas Akademik'
        ];
        echo view('datamaster/academiccommunity', $data);
    }

    public function academicdegreelist()
    {
        $data = [
            'title' => 'Data Master',
            'subtitle' => 'Gelar Akademik'
        ];
        echo view('datamaster/academicdegreelist', $data);
    }

    public function facultylist()
    {
        $data = [
            'title' => 'Data Master',
            'subtitle' => 'Daftar Fakultas'
        ];
        echo view('datamaster/facultylist', $data);
    }
}
