<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataPembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_pembelians')->insert([
            'deskripsi_produk' => "Bingkai 4R",
            'stok' => "96",
            'nama_supplier' => "Frame Shop Multiframe",
            'alamat_supplier' => "Jl. Jenderal Sudirman No.kav 22-23, Jakarta",
            'notelepon_supplier' => "085710008080",
            'tanggal_pemesanan' => 31-11-21,
            'tanggal_penerimaan' => 05-12-21,
            'status' => "selesai"
        ]);

        // DB::table('data_pembelians')->insert([
        //     'deskripsi_produk' => "Bingkai 4R isi 2",
        //     'stok' => "96",
        //     'nama_supplier' => "ID Photobook (HQ)",
        //     'alamat_supplier' => "Jl. Jenderal Sudirman No.kav 22-23, Jakarta",
        //     'notelepon_supplier' => "085710008080",
        //     'tanggal_pemesanan' => 31-11-21,
        //     'tanggal_penerimaan' => 05-12-21,
        //     'status' => "selesai"
        // ]);

        DB::table('data_pembelians')->insert([
            'deskripsi_produk' => "Bingkai 5R",
            'stok' => "96",
            'nama_supplier' => "Wholesale Photo Frame Center",
            'alamat_supplier' => "Jl. W R Supratman No.2, Jakarta",
            'notelepon_supplier' => "087878853993",
            'tanggal_pemesanan' => 05-01-22,
            'tanggal_penerimaan' => 10-01-22,
            'status' => "selesai"
        ]);

        DB::table('data_pembelians')->insert([
            'deskripsi_produk' => "Bingkai 10R",
            'stok' => "108",
            'nama_supplier' => "Berland Frame",
            'alamat_supplier' => "Jl. Matraman Raya No.219, Kota Jakarta Timur",
            'notelepon_supplier' => "081286503480",
            'tanggal_pemesanan' => 12-02-22,
            'tanggal_penerimaan' => 20-02-22,
            'status' => "selesai"
        ]);

        // DB::table('data_pembelians')->insert([
        //     'deskripsi_produk' => "Bingkai 10R Gandeng",
        //     'stok' => "96",
        //     'nama_supplier' => "Frame Shop Multiframe",
        //     'alamat_supplier' => "Jl. Merpati Raya, Sawah Baru, Jakarta",
        //     'notelepon_supplier' => "085770888232",
        //     'tanggal_pemesanan' => 11-02-22,
        //     'tanggal_penerimaan' => 20-02-22,
        //     'status' => "selesai"
        // ]);

        // DB::table('data_pembelians')->insert([
        //     'deskripsi_produk' => "Bingkai 10RS Mahar",
        //     'stok' => "24",
        //     'nama_supplier' => "Mozart Gallery Photo",
        //     'alamat_supplier' => "Jl. Raya Jatiwaringin No.A-11, Jakarta",
        //     'notelepon_supplier' => "(021) 8616184",
        //     'tanggal_pemesanan' => 22-03-22,
        //     'tanggal_penerimaan' => 30-03-22,
        //     'status' => "selesai"
        // ]); 
        
        DB::table('data_pembelians')->insert([
            'deskripsi_produk' => "Bingkai 12R",
            'stok' => "24",
            'nama_supplier' => "Mozart Gallery Photo",
            'alamat_supplier' => "Jl. Raya Jatiwaringin No.A-11, Jakarta",
            'notelepon_supplier' => "(021) 8616184",
            'tanggal_pemesanan' => 22-03-22,
            'tanggal_penerimaan' => 30-03-22,
            'status' => "selesai"
        ]); 

        DB::table('data_pembelians')->insert([
            'deskripsi_produk' => "Bingkai 24R",
            'stok' => "24",
            'nama_supplier' => "Light Gallery Multiframe",
            'alamat_supplier' => "Jl. Merpati Raya, Sawah Baru, Jakarta",
            'notelepon_supplier' => "085770888232",
            'tanggal_pemesanan' => 11-02-22,
            'tanggal_penerimaan' => 20-03-22,
            'status' => "selesai"
        ]); 

        // DB::table('data_pembelians')->insert([
        //     'deskripsi_produk' => "Album 10 sheets standard",
        //     'stok' => "12",
        //     'nama_supplier' => "Berland Frame",
        //     'alamat_supplier' => "Jl. Matraman Raya No.219, Kota Jakarta Timur",
        //     'notelepon_supplier' => "081286503480",
        //     'tanggal_pemesanan' => 12-02-22,
        //     'tanggal_penerimaan' => 20-02-22,
        //     'status' => "proses"
        // ]); 

        DB::table('data_pembelians')->insert([
            'deskripsi_produk' => "Album",
            'stok' => "12",
            'nama_supplier' => "ID Photobook (HQ)",
            'alamat_supplier' => "Jl. Jenderal Sudirman No.kav 22-23, Jakarta",
            'notelepon_supplier' => "085710008080",
            'tanggal_pemesanan' => 31-12-21,
            'tanggal_penerimaan' => 05-12-21,
            'status' => "proses"
        ]); 

        // DB::table('data_pembelians')->insert([
        //     'deskripsi_produk' => "Album 15 sheets berbingkai",
        //     'stok' => "12",
        //     'nama_supplier' => "",
        //     'alamat_supplier' => "Jl. Merpati Raya, Sawah Baru, Jakarta",
        //     'notelepon_supplier' => "085770888232",
        //     'tanggal_pemesanan' => 11-02-22,
        //     'tanggal_penerimaan' => 20-03-22,
        //     'status' => "proses"
        // ]); 
    }
}
