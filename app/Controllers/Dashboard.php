<?php

namespace App\Controllers;
use Config\Services;
use App\Models\Dashboard_model;

class Dashboard extends BaseController
{
    public function index()
    {
        $m_dashboard        = new Dashboard_model();
        $data = [
            'location'     => 'dashboard',
            'total_penduduk' => $m_dashboard->dashboard_penduduk(),
            'total_pendidikan' => $m_dashboard->dashboard_pendidikan(),
            'total_agama' => $m_dashboard->dashboard_agama()
        ];
        return view('dashboard', $data);
    }
}