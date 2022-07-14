<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PenyewaanAlatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penyewaan_alats')->insert([
            'nama_alat' => 'Kamera DSLR Nikon',
            'gambar' => 'kamera1.jpg',
            'harga' => 400000,
            'stok' => 1,
            'keterangan_alat' => 'Kamera Nikon type D610'
        ]);

        DB::table('penyewaan_alats')->insert([
            'nama_alat' => 'Kamera DSLR Canon',
            'gambar' => 'kamera2.jpg',
            'harga' => 400000,
            'stok' => 1,
            'keterangan_alat' => 'Kamera Canon type EOS 200D'
        ]);

        DB::table('penyewaan_alats')->insert([
            'nama_alat' => 'Kamera Pocket Sony',
            'gambar' => 'kamera3.jpg',
            'harga' => 250000,
            'stok' => 1,
            'keterangan_alat' => 'Kamera Sony type DSCW810'
        ]);

        DB::table('penyewaan_alats')->insert([
            'nama_alat' => 'Kamera Pocket Canon',
            'gambar' => 'kamera4.jpg',
            'harga' => 250000,
            'stok' => 1,
            'keterangan_alat' => 'Kamera Canon type PowerShot SX620'
        ]);

        DB::table('penyewaan_alats')->insert([
            'nama_alat' => 'Kamera Pocket Olympus',
            'gambar' => 'kamera5.jpg',
            'harga' => 200000,
            'stok' => 1,
            'keterangan_alat' => 'Kamera Olympus type Tough TG-6'
        ]);

        DB::table('penyewaan_alats')->insert([
            'nama_alat' => 'Backdrop Putih',
            'gambar' => 'backdrop1.jpg',
            'harga' => 100000,
            'stok' => 2,
            'keterangan_alat' => 'Ukuran: 3mX6m'
        ]);

        DB::table('penyewaan_alats')->insert([
            'nama_alat' => 'Flash Godox',
            'gambar' => 'flash1.jpg',
            'harga' => 100000,
            'stok' => 1,
            'keterangan_alat' => 'Flash Godox TT520 II plus Wireless Trigger Speedlite kamera mirrorless'
        ]);

        DB::table('penyewaan_alats')->insert([
            'nama_alat' => 'Flash Canon',
            'gambar' => 'flash2.jpg',
            'harga' => 100000,
            'stok' => 1,
            'keterangan_alat' => 'Flash Canon Speedlite 430EX III-RT'
        ]);

        DB::table('penyewaan_alats')->insert([
            'nama_alat' => 'Softbox Lighting Godox',
            'gambar' => 'softbox1.jpg',
            'harga' => 100000,
            'stok' => 2,
            'keterangan_alat' => 'Godox Softbox SB BW 60x90cm Bowens Mount'
        ]);

        DB::table('penyewaan_alats')->insert([
            'nama_alat' => 'Reflektor Lighting Tronic',
            'gambar' => 'reflektor1.jpg',
            'harga' => 60000,
            'stok' => 2,
            'keterangan_alat' => 'Tronic Reflector 5in1, Pilihan warna gold, silver, white, black, Translucent.
            Diameter 105cm'
        ]);

        DB::table('penyewaan_alats')->insert([
            'nama_alat' => 'Light Stand Takara',
            'gambar' => 'LS1.jpg',
            'harga' => 80000,
            'stok' => 2,
            'keterangan_alat' => 'Takara Spirit-3 Heavy Duty Light Stand'
        ]);

        DB::table('penyewaan_alats')->insert([
            'nama_alat' => 'Tripod Takara',
            'gambar' => 'tripod1.jpg',
            'harga' => 80000,
            'stok' => 2,
            'keterangan_alat' => 'Tripod Takara Rover 66 Tripod Monopod, berat: 2.000 Gram'
        ]);

        DB::table('penyewaan_alats')->insert([
            'nama_alat' => 'Tripod Yunteng',
            'gambar' => 'tripod2.jpg',
            'harga' => 60000,
            'stok' => 2,
            'keterangan_alat' => 'Tripod yunteng bluetooth vct 5208, diameter maksimum: 18mm'
            
        ]);
    }
}
