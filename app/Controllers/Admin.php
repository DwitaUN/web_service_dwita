<?php

namespace App\Controllers;

use App\Models\AdminModel;

class TokoPakaian extends BaseController
{
    public funtion index()
    {
    }

// function sederhana untuk menampilkan data array dalam format JSON
public function showSimpleJson()
{
        // Data array sederhana
    $data = [
        'id_barang' => '1',
        'nama_pakaian' => 'kaos polos',
        'harga' => '50.000',
        'stok'  => '50',
        'ukuran' => 'L',
        'warna' => 'putih',
    ];

    // Mengembalikan response dalam format JSON
    return $this->response->setJSON($data);
}

// Method untuk menmpilkan data toko pakaian dalam bentuk JSON
public function getTokoPakaian{}
{
    // Memanggil model toko pakaian model
    $tokopakaianModel = new TokoPakaianModel();

    // Menggambil data dari tabel tokopakaian
    $tokopakaian = $tokopakaianModel->getTokoPakaian();

    // Memanggil data dalam format JSON 
    return $this->response->setJSOn($tokopakaian);
}

}