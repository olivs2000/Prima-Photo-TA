<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('layanans')->insert([
            'judul_layanan' => 'Cetak Ukuran Pas Foto',
            'gambar' => 'cetakpf1.jpg',
            'harga' => 10000-68000,
            'keterangan_layanan' => 'Untuk pengiriman file dapat dilakukan via email (primaphoto027@gmail.com), pengerjaan dilakukan selama 1/2 hari',
            'ukuran_foto' => '2X3', '3X4', '4X6',
            'hasil_cetak' => 'Hitam Putih', 'Warna'
        ]);

        DB::table('layanans')->insert([
            'judul_layanan' => 'Cetak Ukuran 3R',
            'gambar' => 'cetak3R.jpg',
            'harga' => 4000,
            'keterangan_layanan' => 'Untuk pengiriman file dapat dilakukan via email (primaphoto027@gmail.com), pengerjaan dilakukan selama 1/2 hari',
            'ukuran_foto' => '3R',
            'hasil_cetak' => 'Warna'
        ]);

        DB::table('layanans')->insert([
            'judul_layanan' => 'Cetak Ukuran 4R',
            'gambar' => 'cetak4R.jpg',
            'harga' => 4000,
            'keterangan_layanan' => 'Untuk pengiriman file dapat dilakukan via email (primaphoto027@gmail.com), pengerjaan dilakukan selama 1/2 hari',
            'ukuran_foto' => '4R',
            'hasil_cetak' => 'Warna'
        ]);

        DB::table('layanans')->insert([
            'judul_layanan' => 'Cetak Ukuran 5R',
            'gambar' => 'cetak5R.jpg',
            'harga' => 8000,
            'keterangan_layanan' => 'Untuk pengiriman file dapat dilakukan via email (primaphoto027@gmail.com),pengerjaan dilakukan selama 1/2 hari',
            'ukuran_foto' => '5R',
            'hasil_cetak' => 'Warna'
        ]);

        DB::table('layanans')->insert([
            'judul_layanan' => 'Cetak Ukuran 6R',
            'gambar' => 'cetak6R.jpg',
            'harga' => 15000,
            'keterangan_layanan' => 'Untuk pengiriman file dapat dilakukan via email (primaphoto027@gmail.com), pengerjaan dilakukan selama 1/2 hari',
            'ukuran_foto' => '6R',
            'hasil_cetak' => 'Warna'
        ]);

        DB::table('layanans')->insert([
            'judul_layanan' => 'Cetak Ukuran 10R',
            'gambar' => 'cetak10R.jpg',
            'harga' => 20000,
            'keterangan_layanan' => 'Untuk pengiriman file dapat dilakukan via email (primaphoto027@gmail.com), pengerjaan dilakukan selama 3 hari',
            'ukuran_foto' => '10R',
            'hasil_cetak' => 'Warna'
        ]);

        DB::table('layanans')->insert([
            'judul_layanan' => 'Cetak Ukuran 10RS',
            'gambar' => 'cetak10RS.jpg',
            'harga' => 25000,
            'keterangan_layanan' => 'Untuk pengiriman file dapat dilakukan via email (primaphoto027@gmail.com), pengerjaan dilakukan selama 3 hari',
            'ukuran_foto' => '10RS',
            'hasil_cetak' => 'Warna'
        ]);

        DB::table('layanans')->insert([
            'judul_layanan' => 'Cetak Ukuran 12R',
            'gambar' => 'cetak12R.jpg',
            'harga' => 60000,
            'keterangan_layanan' => 'Untuk pengiriman file dapat dilakukan via email (primaphoto027@gmail.com), pengerjaan dilakukan selama 4 hari',
            'ukuran_foto' => '12R',
            'hasil_cetak' => 'Warna'
        ]);

        DB::table('layanans')->insert([
            'judul_layanan' => 'Cetak Ukuran 12RS',
            'gambar' => 'cetak12Rs.jpg',
            'harga' => 75000,
            'keterangan_layanan' => 'Untuk pengiriman file dapat dilakukan via email (primaphoto027@gmail.com), pengerjaan dilakukan selama 4 hari',
            'ukuran_foto' => '12RS',
            'hasil_cetak' => 'Warna'
        ]);

        DB::table('layanans')->insert([
            'judul_layanan' => 'Cetak Ukuran 16R',
            'gambar' => 'cetak16R.jpg',
            'harga' => 100000,
            'keterangan_layanan' => 'Untuk pengiriman file dapat dilakukan via email (primaphoto027@gmail.com), pengerjaan dilakukan selama 4 hari',
            'ukuran_foto' => '16R',
            'hasil_cetak' => 'Warna'
        ]);

        DB::table('layanans')->insert([
            'judul_layanan' => 'Cetak Ukuran 16RS',
            'gambar' => 'cetak16Rs.jpg',
            'harga' => 125000,
            'keterangan_layanan' => 'Untuk pengiriman file dapat dilakukan via email (primaphoto027@gmail.com), pengerjaan dilakukan selama 4 hari',
            'ukuran_foto' => '16RS',
            'hasil_cetak' => 'Warna'
        ]);

        DB::table('layanans')->insert([
            'judul_layanan' => 'Cetak Ukuran 20R',
            'gambar' => 'cetak20R.jpg',
            'harga' => 150000,
            'keterangan_layanan' => 'Untuk pengiriman file dapat dilakukan via email (primaphoto027@gmail.com), pengerjaan dilakukan selama 4 hari',
            'ukuran_foto' => '20R',
            'hasil_cetak' => 'Warna'
        ]);

        DB::table('layanans')->insert([
            'judul_layanan' => 'Cetak Ukuran 20RS',
            'gambar' => 'cetak20Rs.jpg',
            'harga' => 175000,
            'keterangan_layanan' => 'Untuk pengiriman file dapat dilakukan via email (primaphoto027@gmail.com), pengerjaan dilakukan selama 4 hari',
            'ukuran_foto' => '20RS',
            'hasil_cetak' => 'Warna'
        ]);

        DB::table('layanans')->insert([
            'judul_layanan' => 'Cetak Ukuran 24R',
            'gambar' => 'cetak24R.jpg',
            'harga' => 200000,
            'keterangan_layanan' => 'Untuk pengiriman file dapat dilakukan via email (primaphoto027@gmail.com), pengerjaan dilakukan selama 4 hari',
            'ukuran_foto' => '24R',
            'hasil_cetak' => 'Warna'
        ]);

        DB::table('layanans')->insert([
            'judul_layanan' => 'Cetak Ukuran 24RS',
            'gambar' => 'cetak24RS.jpg',
            'harga' => 225000,
            'keterangan_layanan' => 'Untuk pengiriman file dapat dilakukan via email (primaphoto027@gmail.com), pengerjaan dilakukan selama 4 hari',
            'ukuran_foto' => '24RS',
            'hasil_cetak' => 'Warna'
        ]);
    }
}
