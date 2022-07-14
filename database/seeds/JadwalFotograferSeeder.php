<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JadwalFotograferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jadwal_fotografers')->insert([
            'admin_id' => '1',
            'detail_pemesanan_id' => '1',
            'data_fotografer_id' => '1',
            // 'nama_pelanggan' => 'Adinda Rizka Fadillah',
            // 'lokasi_acara' => 'jl. Moyo Hulu 23',
            // 'tanggal_acara' => '14-02-2022',
            // 'waktu_acara' => 09.00,
            // 'nama_fotografer' => 'Ahmad',
            'status' => 'Selesai'
        ]);

        DB::table('jadwal_fotografers')->insert([
            'admin_id' => '2',
            'detail_pemesanan_id' => '2',
            'data_fotografer_id' => '2',
            // 'nama_pelanggan' => 'Bobby Briliant',
            // 'lokasi_acara' => 'jl. pahlawan 12',
            // 'tanggal_acara' => '24-02-2022',
            // 'waktu_acara' => 15.00,
            // 'nama_fotografer' => 'Bayu',
            'status' => 'Selesai'
        ]);

        DB::table('jadwal_fotografers')->insert([
            'admin_id' => '3',
            'detail_pemesanan_id' => '3',
            'data_fotografer_id' => '3',
            // 'nama_pelanggan' => 'Cyntia Gabriella',
            // 'lokasi_acara' => 'jl. Garuda 1, SMA Negeri 1 Sumbawa',
            // 'tanggal_acara' => '28-02-2022',
            // 'waktu_acara' => 12.00,
            // 'nama_fotografer' => 'Cecil',
            'status' => 'Selesai'
        ]);

        DB::table('jadwal_fotografers')->insert([
            'admin_id' => '4',
            'detail_pemesanan_id' => '4',
            'data_fotografer_id' => '4',
            // 'nama_pelanggan' => 'Deddy Corbuzier',
            // 'lokasi_acara' => 'jl. kamboja 20, gedung kantor desa no.30',
            // 'tanggal_acara' => '21-03-2022',
            // 'waktu_acara' => 15.00,
            // 'nama_fotografer' => 'Delina',
            'status' => 'Proses'
        ]);

        DB::table('jadwal_fotografers')->insert([
            'admin_id' => '5',
            'detail_pemesanan_id' => '5',
            'data_fotografer_id' => '5',
            // 'nama_pelanggan' => 'Emmanuela Gabriella',
            // 'lokasi_acara' => 'jl. Jayawijaya 20, gedung kantor desa no.30',
            // 'tanggal_acara' => '23-03-2022',
            // 'waktu_acara' => 18.00,
            // 'nama_fotografer' => 'Endra',
            'status' => 'Proses'
        ]);

        DB::table('jadwal_fotografers')->insert([
            'admin_id' => '6',
            'detail_pemesanan_id' => '6',
            'data_fotografer_id' => '6',
            // 'nama_pelanggan' => 'Fabian Rizky',
            // 'lokasi_acara' => 'jl. Kartini 20, taman bunga mekar sari',
            // 'tanggal_acara' => '27-03-2022',
            // 'waktu_acara' => 15.00,
            // 'nama_fotografer' => 'Felincia',
            'status' => 'Proses'
        ]);

        DB::table('jadwal_fotografers')->insert([
            'admin_id' => '7',
            'detail_pemesanan_id' => '7',
            'data_fotografer_id' => '7',
            // 'nama_pelanggan' => 'Gladis Putri',
            // 'lokasi_acara' => 'jl. Simpang Bingung, gedung bale raya',
            // 'tanggal_acara' => '30-03-2022',
            // 'waktu_acara' => 14.00,
            // 'nama_fotografer' => 'Gabby',
            'status' => 'Proses'
        ]);

        DB::table('jadwal_fotografers')->insert([
            'admin_id' => '8',
            'detail_pemesanan_id' => '8',
            'data_fotografer_id' => '8',
            // 'nama_pelanggan' => 'Hafiz Irzya',
            // 'lokasi_acara' => 'jl. Panji Makmur 7',
            // 'tanggal_acara' => '31-03-2022',
            // 'waktu_acara' => 15.00,
            // 'nama_fotografer' => 'Hendra',
            'status' => 'Proses'
        ]);

        DB::table('jadwal_fotografers')->insert([
            'admin_id' => '9',
            'detail_pemesanan_id' => '9',
            'data_fotografer_id' => '9',
            // 'nama_pelanggan' => 'Iyuth Umu Amini',
            // 'lokasi_acara' => 'jl. Panji Makmur 17',
            // 'tanggal_acara' => '01-04-2022',
            // 'waktu_acara' => 12.00,
            // 'nama_fotografer' => 'Ida bagus putra',
            'status' => 'Proses'
        ]);

        DB::table('jadwal_fotografers')->insert([
            'admin_id' => '10',
            'detail_pemesanan_id' => '10',
            'data_fotografer_id' => '10',
            // 'nama_pelanggan' => 'Jarviz Syahputra',
            // 'lokasi_acara' => 'jl. Panji Makmur 27',
            // 'tanggal_acara' => '10-04-2022',
            // 'waktu_acara' => 12.00,
            // 'nama_fotografer' => 'Jessica',
            'status' => 'Proses'
        ]);
    }
}
