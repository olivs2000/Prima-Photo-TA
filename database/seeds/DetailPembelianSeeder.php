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
            'produks_id' => 4,
            'nama_produk' => 'Bingkai 4R single',
            'jumlah' => 96,
            'harga' => 5000,
            'total' => 480000
        ]);

        DB::table('detail_pembelians')->insert([
            'data_pembelians_id' => 1,
            'produks_id' => 1,
            'nama_produk' => 'Bingkai 4R isi 2',
            'jumlah' => 96,
            'harga' => 7000,
            'total' => 672000
        ]);

        DB::table('detail_pembelians')->insert([
            'data_pembelians_id' => 1,
            'produks_id' => 2,
            'nama_produk' => 'Bingkai 4R isi 3',
            'jumlah' => 96,
            'harga' => 10000,
            'total' => 960000
        ]);

        DB::table('detail_pembelians')->insert([
            'data_pembelians_id' => 2,
            'produks_id' => 5,
            'nama_produk' => 'Bingkai 5R',
            'jumlah' => 96,
            'harga' => 10000,
            'total' => 96000
        ]);

        DB::table('detail_pembelians')->insert([
            'data_pembelians_id' => 3,
            'produks_id' => 7,
            'nama_produk' => 'Bingkai 10R single',
            'jumlah' => 108,
            'harga' => 20000,
            'total' => 2160000
        ]);

        DB::table('detail_pembelians')->insert([
            'data_pembelians_id' => 3,
            'produks_id' => 9,
            'nama_produk' => 'Bingkai 10R gandeng',
            'jumlah' => 108,
            'harga' => 22000,
            'total' => 2376000
        ]);

        DB::table('detail_pembelians')->insert([
            'data_pembelians_id' => 3,
            'produks_id' => 10,
            'nama_produk' => 'Bingkai 10RS mahar',
            'jumlah' => 108,
            'harga' => 25000,
            'total' => 2700000
        ]);

        DB::table('detail_pembelians')->insert([
            'data_pembelians_id' => 4,
            'produks_id' => 11,
            'nama_produk' => 'Bingkai 12R single',
            'jumlah' => 96,
            'harga' => 25000,
            'total' => 2400000
        ]);

        DB::table('detail_pembelians')->insert([
            'data_pembelians_id' => 4,
            'produks_id' => 12,
            'nama_produk' => 'Bingkai 12RS',
            'jumlah' => 96,
            'harga' => 28000,
            'total' => 2688000
        ]);

        DB::table('detail_pembelians')->insert([
            'data_pembelians_id' => 4,
            'produks_id' => 13,
            'nama_produk' => 'Bingkai 12R mahar',
            'jumlah' => 96,
            'harga' => 30000,
            'total' => 2880000
        ]);

        DB::table('detail_pembelians')->insert([
            'data_pembelians_id' => 5,
            'produks_id' => 19,
            'nama_produk' => 'Bingkai 24R',
            'jumlah' => 96,
            'harga' => 40000,
            'total' => 3840000
        ]);

        DB::table('detail_pembelians')->insert([
            'data_pembelians_id' => 5,
            'produks_id' => 20,
            'nama_produk' => 'Bingkai 24RS',
            'jumlah' => 96,
            'harga' => 43000,
            'total' => 4128000
        ]);

        DB::table('detail_pembelians')->insert([
            'data_pembelians_id' => 6,
            'produks_id' => 21,
            'nama_produk' => 'ALbum 10 sheets standard',
            'jumlah' => 24,
            'harga' => 15000,
            'total' => 3600000
        ]);

        DB::table('detail_pembelians')->insert([
            'data_pembelians_id' => 6,
            'produks_id' => 22,
            'nama_produk' => 'Album 10 shhets',
            'jumlah' => 24,
            'harga' => 18000,
            'total' => 4320000
        ]);

        DB::table('detail_pembelians')->insert([
            'data_pembelians_id' => 6,
            'produks_id' => 24,
            'nama_produk' => 'Album 15 sheets berbingkai',
            'jumlah' => 24,
            'harga' => 22000,
            'total' => 5280000
        ]);
    }
}
