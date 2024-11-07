<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AktivitasDataModel;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\AktivitasModel;
class AktivitasController extends BaseController
{
    public function index()
    {
        // Inisialisasi model
        $aktivitasModel = new AktivitasModel();
        
        // Ambil semua data, data akan dikembalikan sebagai object
        $data['aktivitas'] = $aktivitasModel->first();

        $aktivitasdatamodel = new AktivitasDataModel();

        $data['dataaktivitas'] = $aktivitasdatamodel->findAll();
        
        // Kirim data ke view
        return view('Aktivitas', $data);
    }
}