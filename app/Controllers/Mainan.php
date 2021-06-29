<?php

namespace App\Controllers;

use App\Models\MainanModel;

class Mainan extends BaseController
{
    protected $mainanModel;

    public function __construct()
    {
        $this->mainanModel = new MainanModel();
    }

    public function index()
    {
        $mainan = $this->mainanModel->findAll();
        $data = [
            'title' => 'Admin - Baby Daily',
            'mainan' => $mainan
        ];
        return view('mainan/home', $data);
        // dd($mainan);
    }

    public function tambah()
    {
        session();
        $data = [
            'title' => 'Tambah Mainan',
            'validation' => \Config\Services::validation()
        ];
        return view('mainan/tambah', $data);
    }

    public function save()
    {

        if (!$this->validate([
            'nama_mainan' => 'required',
            'merk_mainan' => 'required',
            'deskripsi_mainan' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'foto' => 'uploaded[foto]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]'
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/tambah')->withInput()->with('validation', $validation);
            return redirect()->to('/tambah')->withInput();
        }

        $foto = $this->request->getFile('foto');
        $foto->move('img');
        $namaFoto = $foto->getName();

        // dd($foto);
        // dd($this->request->getVar());
        $this->mainanModel->save([
            'nama_mainan' => $this->request->getVar('nama_mainan'),
            'merk_mainan' => $this->request->getVar('merk_mainan'),
            'kategori_mainan' => $this->request->getVar('kategori_mainan'),
            'deskripsi_mainan' => $this->request->getVar('deskripsi_mainan'),
            'harga' => $this->request->getVar('harga'),
            'stok' => $this->request->getVar('stok'),
            'foto' => $namaFoto
        ]);


        echo "
        <script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href='/'
        </script>
        ";
    }

    public function getMainan($id_mainan)
    {
        $mainan = $this->mainanModel->getMainan($id_mainan);
        $data = [
            'title' => 'Baby Daily',
            'mainan' => $mainan
        ];
        return view('mainan/home', $data);
    }

    public function ubah($id_mainan)
    {
        $mainan = $this->mainanModel->getMainan($id_mainan);
        session();
        $data = [
            'title' => 'Edit Mainan',
            'mainan' => $mainan,
            'validation' => \Config\Services::validation()
        ];
        return view('mainan/ubah', $data);
        // dd($mainan);
    }



    public function update($id_mainan)
    {
        if (!$this->validate([
            'nama_mainan' => 'required',
            'merk_mainan' => 'required',
            'deskripsi_mainan' => 'required',
            'harga' => 'required',
            'stok' => 'required'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/ubah/' . $this->request->getVar('id_mainan'))->withInput()->with('validation', $validation);
        }

        $foto = $this->request->getFile('foto');
        $foto->move('img');
        $namaFoto = $foto->getName();
        // dd($foto);
        $this->mainanModel->save([
            'id_mainan' => $this->request->getVar('id_mainan'),
            'nama_mainan' => $this->request->getVar('nama_mainan'),
            'merk_mainan' => $this->request->getVar('merk_mainan'),
            'kategori_mainan' => $this->request->getVar('kategori_mainan'),
            'deskripsi_mainan' => $this->request->getVar('deskripsi_mainan'),
            'harga' => $this->request->getVar('harga'),
            'stok' => $this->request->getVar('stok'),
            'foto' => $namaFoto
        ]);

        echo "
        <script>
            alert('Data Berhasil Diubah!');
            document.location.href='/'
        </script>
        ";

        // dd($this->request->getVar());
    }

    public function delete($id_mainan)
    {
        $mainan = $this->mainanModel->find($id_mainan);
        // unlink('img/' . $mainan['foto']);

        $this->mainanModel->delete($id_mainan);

        echo "
        <script>
            alert('Data Berhasil Dihapus!');
            document.location.href='/'
        </script>
        ";
    }
}
