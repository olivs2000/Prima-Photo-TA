<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produks')->insert([
            'judul_produk' => 'Bingkai 4R isi 2',
            'gambar' => 'B4R2Hitam.jpg', 'B4R2Putih.jpg',
            'harga' => 35000,
            'stok' => 24,
            'keterangan_produk' => 'Bingkai 4R isi 2 dengan list warna hitam dan putih'
        ]);

        DB::table('produks')->insert([
            'judul_produk' => 'Bingkai 4R isi 3',
            'gambar' => 'B4R3Hitam.jpg', 'B4R3Emas.jpg',
            'harga' => 45000,
            'stok' => 24,
            'keterangan_produk' => 'Bingkai 4R isi 3 dengan list warna hitam dan emas'
        ]);

        DB::table('produks')->insert([
            'judul_produk' => 'Bingkai 4R isi 4',
            'gambar' => 'B4R4Hitam.jpg', 'B4R4Putih.jpg', 'B4R4Kayu.jpg',
            'harga' => 50000,
            'stok' => 24,
            'keterangan_produk' => 'Bingkai 4R isi 4 dengan list warna hitam, putih dan kayu'
        ]);

        DB::table('produks')->insert([
            'judul_produk' => 'Bingkai 4R single',
            'gambar' => 'B4RSatu.jpg', 'B4RDua.jpg',
            'harga' => 20000,
            'stok' => 24,
            'keterangan_produk' => 'Bingkai 4R single dengan list warna hitam, putih, merah, kuning, hijau, biru dan pink. Bisa untuk ukuran 5R'
        ]);

        DB::table('produks')->insert([
            'judul_produk' => 'Bingkai 5R',
            'gambar' => 'B5REmas.jpg', 'B5RSilver.jpg', 'B5RCoklat.jpg',
            'harga' => 25000,
            'stok' => 24,
            'keterangan_produk' => 'Bingkai 5R single dengan list warna motif batik emas, list hitam silver polos, list coklat emas polos'
        ]);

        DB::table('produks')->insert([
            'judul_produk' => 'Bingkai 6R',
            'gambar' => 'B6RHitam.jpg', 
            'harga' => 23000,
            'stok' => 24,
            'keterangan_produk' => 'Bingkai 6R single dengan list warna hitam polos'
        ]);

        DB::table('produks')->insert([
            'judul_produk' => 'Bingkai 10R',
            'gambar' => 'B10RSatu.jpg', 'B10RDua.jpg',
            'harga' => 30000,
            'stok' => 24,
            'keterangan_produk' => 'Bingkai 10R dengan list warna hitam polos, putih polos, oren polos, emas corak, silver corak, putih corak, coklat corak, dan motif kayu'
        ]);

        DB::table('produks')->insert([
            'judul_produk' => 'Bingkai 10RS',
            'gambar' => 'B10RSSatu.jpg', 'B10RSHitam.jpg', 'B10RSPutih.jpg',
            'harga' => 35000,
            'stok' => 24,
            'keterangan_produk' => 'Bingkai 10RS dengan list warna hitam polos, putih polos, emas corak, silver corak, putih corak, coklat corak, dan hitam corak'
        ]);

        DB::table('produks')->insert([
            'judul_produk' => 'Bingkai 10R Gandeng',
            'gambar' => 'B10RGHitam.jpg',
            'harga' => 60000,
            'stok' => 24,
            'keterangan_produk' => 'Bingkai 10R gandeng dengan list warna hitam'
        ]);
        
        DB::table('produks')->insert([
            'judul_produk' => 'Bingkai 10RS Mahar',
            'gambar' => 'B10RSMEmas.jpg', 'B10RSMPutih.jpg',
            'harga' => 80000,
            'stok' => 24,
            'keterangan_produk' => 'Bingkai 10RS Mahar dengan list warna emas corak dan putih corak'
        ]);

        DB::table('produks')->insert([
            'judul_produk' => 'Bingkai 12R',
            'gambar' => 'B12RHitam.jpg', 'B12RPutih.jpg', 'B12REmas.jpg','B12RSilver.jpg', 'B12RPutihCorak.jpg', 'B12RCoklat.jpg', 'B12RKayu.jpg',
            'harga' => 60000,
            'stok' => 24,
            'keterangan_produk' => 'Bingkai 12R dengan list warna hitam polos, putih polos, emas corak, silver corak, putih corak, coklat corak, dan motif kayu'
        ]);

        DB::table('produks')->insert([
            'judul_produk' => 'Bingkai 12RS',
            'gambar' => 'B12RSHitam.jpg', 'B12RSPutih.jpg', 'B12RSKayu.jpg','B12RSSilver.jpg', 'B12RSPutihCorak.jpg', 'B12RSCoklat.jpg',
            'harga' => 65000,
            'stok' => 24,
            'keterangan_produk' => 'Bingkai 12RS dengan list warna hitam polos, putih polos, dan motif kayu'
        ]);

        DB::table('produks')->insert([
            'judul_produk' => 'Bingkai 12RS Mahar',
            'gambar' => 'B12RMPutih.jpg', 'B12RMEmas.jpg',
            'harga' => 110000,
            'stok' => 24,
            'keterangan_produk' => 'Bingkai 12R Mahar dengan list warna putih corak putih, putih corak emas'
        ]);

        DB::table('produks')->insert([
            'judul_produk' => 'Bingkai 16R',
            'gambar' => 'B16RHitam.jpg', 'B16RPutih.jpg',
            'harga' => 130000,
            'stok' => 24,
            'keterangan_produk' => 'Bingkai 16R dengan list warna hitam polos dan putih polos'
        ]);

        DB::table('produks')->insert([
            'judul_produk' => 'Bingkai 16RS',
            'gambar' => 'B16RSHitam.jpg', 'B16RSEmas.jpg',
            'harga' => 150000,
            'stok' => 24,
            'keterangan_produk' => 'Bingkai 16RS dengan list warna hitam polos dan emas corak'
        ]);

        DB::table('produks')->insert([
            'judul_produk' => 'Bingkai 16RS Mahar',
            'gambar' => 'B16RMPutihEmas.jpg', 'B16RMPutihPutih.jpg', 'B16RMEmasEmas.jpg',
            'harga' => 180000,
            'stok' => 24,
            'keterangan_produk' => 'Bingkai 16R Mahar dengan list warna emas corak emas, putih corak emas, putih corak putih'
        ]);

        DB::table('produks')->insert([
            'judul_produk' => 'Bingkai 20R',
            'gambar' => 'B20REmas.jpg', 'B20RPutih.jpg',
            'harga' => 180000,
            'stok' => 24,
            'keterangan_produk' => 'Bingkai 20R dengan list warna emas corak dan putih corak'
        ]);

        DB::table('produks')->insert([
            'judul_produk' => 'Bingkai 20RS',
            'gambar' => 'B20RS.jpg',
            'harga' => 200000,
            'stok' => 24,
            'keterangan_produk' => 'Bingkai 20RS dengan list warna emas corak dan putih corak'
        ]);

        DB::table('produks')->insert([
            'judul_produk' => 'Bingkai 24R',
            'gambar' => 'B24RPutih.jpg', 'B24RSilver.jpg', 'B24REmas.jpg',
            'harga' => 250000,
            'stok' => 24,
            'keterangan_produk' => 'Bingkai 24R dengan list warna emas corak, silver corak dan putih corak'
        ]);

        DB::table('produks')->insert([
            'judul_produk' => 'Bingkai 24RS',
            'gambar' => 'B24RSEmas.jpg', 'B24RSSilver.jpg', 'B24RSCoklat.jpg', 'B24RSPutih.jpg',
            'harga' => 260000,
            'stok' => 24,
            'keterangan_produk' => 'Bingkai 24RS dengan list warna emas corak, silver corak, coklat corak dan putih corak'
        ]);

        DB::table('produks')->insert([
            'judul_produk' => 'Album 10 sheets standard',
            'gambar' => 'A10S1.jpg', 'A10S2.jpg', 'A10S3.jpg', 'A10S4.jpg',
            'harga' => 100000,
            'stok' => 24,
            'keterangan_produk' => 'Album isi 10 sheets standard, warna sheets hitam, ukuran 26cmX32cm'
        ]);

        DB::table('produks')->insert([
            'judul_produk' => 'Album 10 sheets',
            'gambar' => 'A101.jpg', 'A102.jpg', 'A103.jpg',
            'harga' => 120000,
            'stok' => 24,
            'keterangan_produk' => 'Album isi 10 sheets, warna sheets hitam, ukuran 35cmX35cm'
        ]);

        DB::table('produks')->insert([
            'judul_produk' => 'Album 10 sheets berbingkai',
            'gambar' => 'A10B1.jpg', 'A10B2.jpg',
            'harga' => 130000,
            'stok' => 24,
            'keterangan_produk' => 'Album isi 10 sheets berbingkai, warna sheets hitam, ukuran 35cmX35cm'
        ]);

        DB::table('produks')->insert([
            'judul_produk' => 'Album 15 sheets berbingkai',
            'gambar' => 'A15B1.jpg', 'A15B2.jpg',
            'harga' => 160000,
            'stok' => 24,
            'keterangan_produk' => 'Album isi 15 sheets berbingkai, warna sheets hitam, ukuran 35cmX35cm'
        ]);


}
}