<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PemesanansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pemesanans')->insert([
            'nama' => 'Adinda Rizka Fadillah',
            'notelepon' => '08123773112',
            'email' => 'adinda@gmail.com',
            'alamat' => 'jl. Moyo Hulu 23',
            'lokasi_acara' => 'jl. Moyo Hulu 23',
            'tanggal_acara' => '14-02-2022',
            'waktu_acara' => 09.00,
            'total' => 1000000
        ]);

        DB::table('pemesanans')->insert([
            'nama' => 'Bobby Briliant',
            'notelepon' => '081353446669',
            'email' => 'bobby@gmail.com',
            'alamat' => 'jl. pahlawan 12',
            'lokasi_acara' => 'jl. pahlawan 12',
            'tanggal_acara' => '24-02-2022',
            'waktu_acara' => 15.00,
            'total' => 3000000
        ]);

        DB::table('pemesanans')->insert([
            'nama' => 'Cyntia Gabriella',
            'notelepon' => '085353445656',
            'email' => 'cyntia@gmail.com',
            'alamat' => 'jl. Garuda 1',
            'lokasi_acara' => 'jl. Garuda 1, SMA Negeri 1 Sumbawa',
            'tanggal_acara' => '28-02-2022',
            'waktu_acara' => 12.00,
            'total' => 3000000
        ]);

        DB::table('pemesanans')->insert([
            'nama' => 'Deddy Corbuzier',
            'notelepon' => '085480556391',
            'email' => 'deddy@gmail.com',
            'alamat' => 'jl. kamboja 20',
            'lokasi_acara' => 'jl. kamboja 20, gedung kantor desa no.30',
            'tanggal_acara' => '21-03-2022',
            'waktu_acara' => 15.00,
            'total' => 5000000
        ]);

        DB::table('pemesanans')->insert([
            'nama' => 'Emmanuela Gabriella',
            'notelepon' => '081773112237',
            'email' => 'emmanuela@gmail.com',
            'alamat' => 'jl. Batu lante 13',
            'lokasi_acara' => 'jl. Jayawijaya 20, gedung kantor desa no.30',
            'tanggal_acara' => '23-03-2022',
            'waktu_acara' => 18.00,
            'total' => 1000000 
        ]);

        DB::table('pemesanans')->insert([
            'nama' => 'Fabian Rizky',
            'notelepon' => '081112237773',
            'email' => 'fabian@gmail.com',
            'alamat' => 'jl. kartini 20',
            'lokasi_acara' => 'jl. Kartini 20, taman bunga mekar sari',
            'tanggal_acara' => '27-03-2022',
            'waktu_acara' => 15.00,
            'total' => 5000000 
        ]);

        DB::table('pemesanans')->insert([
            'nama' => 'Gladis Putri',
            'notelepon' => '085445656353',
            'email' => 'gladis@gmail.com',
            'alamat' => 'jl. Kebon jeruk 27',
            'lokasi_acara' => 'jl. Simpang Bingung, gedung bale raya',
            'tanggal_acara' => '30-03-2022',
            'waktu_acara' => 14.00,
            'total' => 3000000 
        ]);

        DB::table('pemesanans')->insert([
            'nama' => 'Hafiz Irzya',
            'notelepon' => '085656353445',
            'email' => 'hafiz@gmail.com',
            'alamat' => 'jl. Panji Makmur 7',
            'lokasi_acara' => 'jl. Panji Makmur 7',
            'tanggal_acara' => '31-03-2022',
            'waktu_acara' => 15.00,
            'total' => 1000000 
        ]);

        DB::table('pemesanans')->insert([
            'nama' => 'Iyuth Umu Amini',
            'notelepon' => '085656353446',
            'email' => 'iyuth@gmail.com',
            'alamat' => 'jl. Panji Makmur 17',
            'lokasi_acara' => 'jl. Panji Makmur 17',
            'tanggal_acara' => '01-04-2022',
            'waktu_acara' => 12.00,
            'total' => 3000000  
        ]);

        DB::table('pemesanans')->insert([
            'nama' => 'Jarviz Syahputra',
            'notelepon' => '085656353447',
            'email' => 'jarviz@gmail.com',
            'alamat' => 'jl. Panji Makmur 27',
            'lokasi_acara' => 'jl. Panji Makmur 27',
            'tanggal_acara' => '10-04-2022',
            'waktu_acara' => 12.00,
            'total' => 3000000 
        ]);
    }
}
