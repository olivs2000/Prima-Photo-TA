<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pakets')->insert([
            'judul_paket' => 'Baby&Kids Photography Single',
            'gambar' => 'BKPS.jpg',
            'durasi' => '1 jam',
            'jumlah_jepretan' => 10,
            'keterangan' => 'foto hanya untuk 1 orang, free pencetakan 3 dari 10x jepretan, free 1 CD',
            'kategoris_id' => 1,
            'harga' => 1000000,
        ]);

        DB::table('pakets')->insert([
            'judul_paket' => 'Baby&Kids Photography Double',
            'gambar' => 'BKPD.jpg',
            'durasi' => '2 jam',
            'jumlah_jepretan' => 30,
            'keterangan' => 'foto diatas 1 orang (2/3 orang), free pencetakan 5 dari 20x jepretan, free 1 album foto isi 20 foto, free 1 CD',
            'kategoris_id' => 1,
            'harga' => 2500000
        ]);

        DB::table('pakets')->insert([
            'judul_paket' => 'Family Photography Paket 1',
            'gambar' => 'FPP1.jpg',
            'durasi' => '1 jam',
            'jumlah_jepretan' => 10,
            'keterangan' => 'foto hanya sampai 4 orang, free pencetakan 3 dari 10x jepretan, free 1 CD',
            'kategoris_id' => 2,
            'harga' => 1000000
        ]);

        DB::table('pakets')->insert([
            'judul_paket' => 'Family Photography Paket 2',
            'gambar' => 'FPP2.jpg',
            'durasi' => '2 jam',
            'jumlah_jepretan' => 30,
            'keterangan' => 'foto diatas 5 orang, free pencetakan 5 dari 30x jepretan, free 1 album foto isi 30 foto, free 1 CD',
            'kategoris_id' => 2,
            'harga' => 3000000
        ]);

        DB::table('pakets')->insert([
            'judul_paket' => 'Graduation Photography Single',
            'gambar' => 'GPS.jpg',
            'durasi' => '1 jam',
            'jumlah_jepretan' => 10,
            'keterangan' => 'foto hanya untuk 1 orang, free pencetakan 3 dari 10x jepretan, free 1 CD',
            'kategoris_id' => 3,
            'harga' => 1000000
        ]);

        DB::table('pakets')->insert([
            'judul_paket' => 'Graduation Photography Double',
            'gambar' => 'GPD.jpg',
            'durasi' => '3 jam',
            'jumlah_jepretan' => 40,
            'keterangan' => 'free pencetakan 5 dari 40x jepretan, free 1 album foto isi 40 foto, free 1 CD',
            'kategoris_id' => 3,
            'harga' => 3000000
        ]);

        DB::table('pakets')->insert([
            'judul_paket' => 'Birthday Photography Paket 1',
            'gambar' => 'BPP1.jpg',
            'durasi' => '3 jam',
            'jumlah_jepretan' => 30,
            'keterangan' => 'foto untuk acara internal(tidak lebih dari 10), free pencetakan 5 lembar, free 1 CD',
            'kategoris_id' => 4,
            'harga' => 3000000
        ]);

        DB::table('pakets')->insert([
            'judul_paket' => 'Birthday Photography Paket 2',
            'gambar' => 'BPP2.jpg',
            'durasi' => '5 jam',
            'jumlah_jepretan' => 60,
            'keterangan' => 'free pencetakan 10 dari 60x jepretan, free 1 album foto isi 60 foto, free 1 CD',
            'kategoris_id' => 4,
            'harga' => 5000000
        ]);

        DB::table('pakets')->insert([
            'judul_paket' => 'Prewedding Photography Paket 1',
            'gambar' => 'PWPP1.jpg',
            'durasi' => '3 jam',
            'jumlah_jepretan' => 60,
            'keterangan' => 'foto untuk 2 orang, free pencetakan 10 dari 60x jepretan, free 1 album foto isi 60 foto, free 1 CD',
            'kategoris_id' => 5,
            'harga' => 4000000
        ]);

        DB::table('pakets')->insert([
            'judul_paket' => 'Wedding Photography Paket 2',
            'gambar' => 'PWPP2.jpg',
            'durasi' => '5 jam',
            'jumlah_jepretan' => 100,
            'keterangan' => 'foto untuk acara pernikahan, free pencetakan 20 dari 100x jepretan, free 1 album foto isi 100 foto, free 1 CD',
            'kategoris_id' => 5,
            'harga' => 60000000
        ]);

        DB::table('pakets')->insert([
            'judul_paket' => 'Student Photography Paket 1',
            'gambar' => 'SPP1.jpg',
            'durasi' => '1 jam',
            'jumlah_jepretan' => 10,
            'keterangan' => 'foto untuk 10 siswa, free pencetakan 10 dari 10x jepretan, free 1 CD',
            'kategoris_id' => 6,
            'harga' => 1000000
        ]);

        DB::table('pakets')->insert([
            'judul_paket' => 'Student Photography Paket 2',
            'gambar' => 'SPP2.jpg',
            'durasi' => '2 jam',
            'jumlah_jepretan' => 30,
            'keterangan' => 'foto untuk 20-30 siswa, free pencetakan 30 dari 30x jepretan, free 1 CD',
            'kategoris_id' => 6,
            'harga' => 3000000
        ]);

        // DB::table('pakets')->insert([
        //     'judul_paket' => 'Student Photography Paket 3',
        //     'gambar' => 'SPP3.jpg',
        //     'durasi' => '3 jam',
        //     'jumlah_jepretan' => 50,
        //     'keterangan' => 'free pencetakan 50 dari 50x jepretan, free 1 CD',
        //     'kategoris_id' => 6,
        //     'harga' => 5000000
        // ]);

        DB::table('pakets')->insert([
            'judul_paket' => 'Alumni Photography Paket 1',
            'gambar' => 'APP1.jpg',
            'durasi' => '1 jam',
            'jumlah_jepretan' => 10,
            'keterangan' => 'foto untuk 1-5 orang, free pencetakan 10 dari 10x jepretan, free 1 CD',
            'kategoris_id' => 7,
            'harga' => 1000000
        ]);

        DB::table('pakets')->insert([
            'judul_paket' => 'Alumni Photography Paket 2',
            'gambar' => 'APP2.jpg',
            'durasi' => '2 jam',
            'jumlah_jepretan' => 30,
            'keterangan' => 'foto untuk lebih dari 5 orang(foto grup), free pencetakan 30 dari 30x jepretan, free 1 album foto isi 30 foto, free 1 CD',
            'kategoris_id' => 7,
            'harga' => 3000000
        ]);

        // DB::table('pakets')->insert([
        //     'judul_paket' => 'Alumni Photography Paket 3',
        //     'gambar' => 'APP3.jpg',
        //     'durasi' => '3 jam',
        //     'jumlah_jepretan' => 50,
        //     'keterangan' => 'free pencetakan 50 dari 50x jepretan,free 1 album foto isi 50 foto, free 1 CD',
        //     'kategoris_id' => 7,
        //     'harga' => 5000000
        // ]);

        DB::table('pakets')->insert([
            'judul_paket' => 'Constructions Photography Paket 1',
            'gambar' => 'CPP1.jpg',
            'durasi' => '1 jam',
            'jumlah_jepretan' => 10,
            'keterangan' => 'foto untuk bangunan-bangunan kecil, free pencetakan 3 dari 10x jepretan, free 1 CD',
            'kategoris_id' => 8,
            'harga' => 1000000
        ]);

        DB::table('pakets')->insert([
            'judul_paket' => 'Constructions Photography Paket 2',
            'gambar' => 'CPP2.jpg',
            'durasi' => '2 jam',
            'jumlah_jepretan' => 30,
            'keterangan' => 'foto untuk bangunan-bangunan besar seperti kantor, free pencetakan 5 dari 30x jepretan, free 1 album foto isi 30 foto, free 1 CD',
            'kategoris_id' => 8,
            'harga' => 3000000
        ]);

        DB::table('pakets')->insert([
            'judul_paket' => 'Product Photography Paket 1',
            'gambar' => 'PPP1.jpg',
            'durasi' => '1 jam',
            'jumlah_jepretan' => 10,
            'keterangan' => 'foto produk untuk 1-5 produk, free pencetakan 3 dari 10x jepretan, free 1 CD',
            'kategoris_id' => 9,
            'harga' => 1000000
        ]);

        DB::table('pakets')->insert([
            'judul_paket' => 'Product Photography Paket 2',
            'gambar' => 'PPP2.jpg',
            'durasi' => '2 jam',
            'jumlah_jepretan' => 30,
            'keterangan' => 'foto produk lebih dari 5 produk, free pencetakan 5 dari 30x jepretan, free 1 album foto isi 30 foto, free 1 CD',
            'kategoris_id' => 10,
            'harga' => 3000000
        ]);
    }
}
