<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DetailPemesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_pemesanans')->insert([
            'user_pelanggans_id' => 1,
            'pemesanans_id' => 1,
            'pakets_id' => 1,
            'penyewaan_alats_id' => 0,
            'layanans_id' => 0,
            'produks_id' => 0,
            'jumlah' => 0,
            'harga' => 1000000,
            'total' => 1000000,
            'status' => 'selesai'
        ]);

        DB::table('detail_pemesanans')->insert([
            'user_pelanggans_id' => 2,
            'pemesanans_id' => 2,
            'pakets_id' => 4,
            'penyewaan_alats_id' => 0,
            'layanans_id' => 0,
            'produks_id' => 0,
            'jumlah' => 0,
            'harga' => 3000000,
            'total' => 3000000,
            'status' => 'selesai'
        ]);

        DB::table('detail_pemesanans')->insert([
            'user_pelanggans_id' =>3,
            'pemesanans_id' => 3,
            'pakets_id' => 6,
            'penyewaan_alats_id' => 0,
            'layanans_id' => 0,
            'produks_id' => 0,
            'jumlah' => 0,
            'harga' => 3000000,
            'total' => 3000000,
            'status' => 'selesai'
        ]);

        DB::table('detail_pemesanans')->insert([
            'user_pelanggans_id' => 4,
            'pemesanans_id' => 4,
            'pakets_id' => 8,
            'penyewaan_alats_id' => 0,
            'layanans_id' => 0,
            'produks_id' => 0,
            'jumlah' => 0,
            'harga' => 5000000,
            'total' => 5000000,
            'status' => 'selesai'
        ]);

        DB::table('detail_pemesanans')->insert([
            'user_pelanggans_id' => 5,
            'pemesanans_id' => 5,
            'pakets_id' => 11,
            'penyewaan_alats_id' => 0,
            'layanans_id' => 0,
            'produks_id' => 0,
            'jumlah' => 0,
            'harga' => 1000000,
            'total' => 1000000,
            'status' => 'selesai'
        ]);

        DB::table('detail_pemesanans')->insert([
            'user_pelanggans_id' => 6,
            'pemesanans_id' => 6,
            'pakets_id' => 13,
            'penyewaan_alats_id' => 0,
            'layanans_id' => 0,
            'produks_id' => 0,
            'jumlah' => 0,
            'harga' => 5000000,
            'total' => 5000000,
            'status' => 'proses'
        ]);

        DB::table('detail_pemesanans')->insert([
            'user_pelanggans_id' => 7,
            'pemesanans_id' => 7,
            'pakets_id' => 15,
            'penyewaan_alats_id' => 0,
            'layanans_id' => 0,
            'produks_id' => 0,
            'jumlah' => 0,
            'harga' => 3000000,
            'total' => 3000000,
            'status' => 'proses'
        ]);

        DB::table('detail_pemesanans')->insert([
            'user_pelanggans_id' => 8,
            'pemesanans_id' => 8,
            'pakets_id' => 17,
            'penyewaan_alats_id' => 0,
            'layanans_id' => 0,
            'produks_id' => 0,
            'jumlah' => 0,
            'harga' => 1000000,
            'total' => 1000000,
            'status' => 'proses'
        ]);

        DB::table('detail_pemesanans')->insert([
            'user_pelanggans_id' => 9,
            'pemesanans_id' => 9,
            'pakets_id' => 18,
            'penyewaan_alats_id' => 0,
            'layanans_id' => 0,
            'produks_id' => 0,
            'jumlah' => 0,
            'harga' => 3000000,
            'total' => 3000000,
            'status' => 'proses'
        ]);

        DB::table('detail_pemesanans')->insert([
            'user_pelanggans_id' => 10,
            'pemesanans_id' => 10,
            'pakets_id' => 20,
            'penyewaan_alats_id' => 0,
            'layanans_id' => 0,
            'produks_id' => 0,
            'jumlah' => 0,
            'harga' => 3000000,
            'total' => 3000000,
            'status' => 'proses'
        ]);
    }
}
