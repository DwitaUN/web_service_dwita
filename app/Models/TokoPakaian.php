<?php

namespace App\Models;

use CodeIgniter\Model;

class TokoPakaian extends Model
{
    protected $table      = 'tokopakaian';
    protected $primaryKey = 'id_barang';
    protected $allowedFields = ['id_barang', 'nama_pakaian', 'harga', 'stok', 'ukuran', 'warna'];

    // Method untuk mengambil data admin
    public function getTokoPakaian()
    {
        // Mengambil semua data dari tabel tb toko pakaian
        return $this->findAll();
    }
    // Method umtuk mengambil data admin berdasarkan id
    public function getTokoPakaian($id)
    {
        // Mengambil data admin berdasarkan id
        return $this->find($id);
    }

    // Method untuk menyimpan data baru atau memperbarui data yang sudah ada
    public function savetokopakaian($data)
    {
        // Menyimpan data baru atau memperbarui data yang ada jika primary key sudah ada
        return $this->save($data)
    }

    // Method untuk memperbarui data admin berdasarkan id
    public function updatetokopakaian($id, $data)
    {
        //Menggunakan method update () dari CodeIgniter untuk mengupdate data
        return $this->update($id, $data);
    }

    //Method untuk menghapus data petshop berdasarkan id
    public function deletetokopakaian($id)
    {
        //Menggunakan method delete() untuk menghapus data admin berdasarkan id
        return $this->delete($id);
    }

}