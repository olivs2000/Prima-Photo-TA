<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DetailPembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_pembelians')->insert([
            'data_pembelians_id' => 1,
            'produks_id' => 1,
            'jumlah' => 96,
            'harga' => 8500,
            'total' => 816000
        ]);

        DB::table('detail_pembelians')->insert([
            'data_pembelians_id' => 2,
            'produks_id' => 5,
            'jumlah' => 96,
            'harga' => 10000,
            'total' => 96000
        ]);

        DB::table('detail_pembelians')->insert([
            'data_pembelians_id' => 3,
            'produks_id' => 7,
            'jumlah' => 108,
            'harga' => 20000,
            'total' => 2160000
        ]);

        DB::table('detail_pembelians')->insert([
            'data_pembelians_id' => 4,
            'produks_id' => 9,
            'jumlah' => 96,
            'harga' => 30000,
            'total' => 2880000
        ]);

        DB::table('detail_pembelians')->insert([
            'data_pembelians_id' => 5,
            'produks_id' => 11,
            'jumlah' => 24,
            'harga' => 35000,
            'total' => 840000
        ]);

        DB::table('detail_pembelians')->insert([
            'data_pembelians_id' => 6,
            'produks_id' => 12,
            'jumlah' => 24,
            'harga' => 40000,
            'total' => 960000
        ]);

        DB::table('detail_pembelians')->insert([
            'data_pembelians_id' => 7,
            'produks_id' => 20,
            'jumlah' => 24,
            'harga' => 70000,
            'total' => 1680000
        ]);

        DB::table('detail_pembelians')->insert([
            'data_pembelians_id' => 8,
            'produks_id' => 22,
            'jumlah' => 24,
            'harga' => 15000,
            'total' => 360000
        ]);

        DB::table('detail_pembelians')->insert([
            'data_pembelians_id' => 9,
            'produks_id' => 23,
            'jumlah' => 24,
            'harga' => 20000,
            'total' => 480000
        ]);

        DB::table('detail_pembelians')->insert([
            'data_pembelians_id' => 10,
            'produks_id' => 25,
            'jumlah' => 24,
            'harga' => 25000,
            'total' => 600000
        ]);
    }
}
