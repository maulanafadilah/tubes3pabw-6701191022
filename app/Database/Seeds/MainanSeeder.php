<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MainanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_mainan'    => 'Woddy from Toy story 4',
                'merk_mainan'    => 'Pixar Offical Merch',
                'kategori_mainan'    => 'Karakter',
                'deskripsi_mainan'    => 'Woody attempts to make Forky, a toy, suffering from existential crisis, realise his importance in the life of Bonnie, their owner. However, things become difficult when Gabby Gabby enters their lives.',
                'harga'    => '150000',
                'stok'    => '20',
            ],
            [
                'nama_mainan'    => 'Boneka Barbie Original Mattel Murah',
                'merk_mainan'    => 'Mattel',
                'kategori_mainan'    => 'Barbie',
                'deskripsi_mainan'    => 'Barbie adalah boneka yang diproduksi oleh perusahaan Amerika, Mattel, dan diperkenalkan pada Maret 1959. Pembuat boneka ini, Ruth Handler, mendapatkan inspirasi dari sebuah boneka asal Jerman yang bernama Bild Lilli.',
                'harga'    => '90000',
                'stok'    => '30',
            ],
            [
                'nama_mainan'    => 'New Smart Hafiz Doll Ver 4 Hafiz Hafizah Sufiz Al qolam Promo',
                'merk_mainan'    => 'Smart Hafiz',
                'kategori_mainan'    => 'Edukasi',
                'deskripsi_mainan'    => 'Smart Hafiz adalah media edukasi terbaik untuk anak-anak muslim. Media yang dirancang untuk menemani anak-anak belajar sambil bermain dengan gembira dan menyenangkan. Dengan menggunakan teknologi layar sentuh, anak-anak akan dimudahkan untuk mencari konten konten yang diinginkan.',
                'harga'    => '300000',
                'stok'    => '5',
            ],
            [
                'nama_mainan'    => 'Balok Susun Bangun Persegi Isi 54 - Mainan Edukasi Kayu Puzzle Jam',
                'merk_mainan'    => 'Pizzle',
                'kategori_mainan'    => 'Edukasi',
                'deskripsi_mainan'    => 'Mainan untuk melatih motorik halus, merangsang imajinasi dan kreatifitas, mengenal warna dan bentuk geometri.',
                'harga'    => '50000',
                'stok'    => '50',
            ],
            [
                'nama_mainan'    => 'Fun Doh Lilin Mainan',
                'merk_mainan'    => 'Fun Doh',
                'kategori_mainan'    => 'Lilin Mainan',
                'deskripsi_mainan'    => 'Mainan Lilin Fun Doh sudah sertifikasi SNI. Lilin aman dimainkan anak-anak karena terbuat dari tepung, garam dan air.',
                'harga'    => '10000',
                'stok'    => '100',
            ],
        ];

        // Using Query Builder
        $this->db->table('mainan')->insertBatch($data);
    }
}
