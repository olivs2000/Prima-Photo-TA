<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataFotograferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_fotografers')->insert([
            'nama' => 'Ahmad',
            'alamat' => 'Jl. Mawar 12',
            'email' => 'ahmadpegawai@gmail.com',
            'notelepon' => '081222625249',
            'riwayat_pengalaman' => 'fresh graduate jurusan multimedia universitas seni prarahiyangan, dan sekarang masih fotografer lepas',
            'jenis_kamera' => 'kamera DSLR canon 60D',
            'pas_foto' => 'pegawai1.jpg',
            'hasil_karya_beserta_logo' => 'foto1a.jpg',  
            'alat_fotografi' => 'Kamera DSLR, Flash, Tripod, Lightstand',  
            'status' => 'freelance'
        ]);

        DB::table('data_fotografers')->insert([
            'nama' => 'Bayu',
            'alamat' => 'Jl. Kartini 13',
            'email' => 'bayupegawai@gmail.com',
            'notelepon' => '082333625249',
            'riwayat_pengalaman' => 'pernah bekerja di studio eka jaya malang, sering mendapat tawaran foto acara wedding',
            'jenis_kamera' => 'kamera DSLR nikon 60D',
            'pas_foto' => 'pegawai2.jpg',
            'hasil_karya_beserta_logo' => 'foto1b.jpg', 
            'alat_fotografi' => 'Kamera DSLR, Tripod, Reflektor',
            'status' => 'tetap'
        ]);

        DB::table('data_fotografers')->insert([
            'nama' => 'Cecil',
            'alamat' => 'Jl. Garuda 14',
            'email' => 'cecilpegawai@gmail.com',
            'notelepon' => '083444625249',
            'riwayat_pengalaman' => 'fotografer lepas dan sering mendapat tawaran foto acara-acara besar',
            'jenis_kamera' => 'kamera DSLR sony 60D',
            'pas_foto' => 'pegawai3.jpg',
            'hasil_karya_beserta_logo' => 'foto1c.jpg', 
            'alat_fotografi' => 'Kamera DSLR, Reflektor, Lightstand',
            'status' => 'tetap'
        ]);

        DB::table('data_fotografers')->insert([
            'nama' => 'Delina',
            'alamat' => 'Jl. Kamboja 15',
            'email' => 'delinapegawai@gmail.com',
            'notelepon' => '084555625249',
            'riwayat_pengalaman' => 'freshgraduate jurusan desain grafis, sering mendapat panggilan untuk foto pada beberapa acara',
            'jenis_kamera' => 'kamera DSLR spectra 60D',
            'pas_foto' => 'pegawai4.jpg',
            'hasil_karya_beserta_logo' => 'foto1d.jpg', 
            'alat_fotografi' => 'Kamera DSLR, Flash, Tripod, Lightstand',
            'status' => 'freelance'
        ]);

        DB::table('data_fotografers')->insert([
            'nama' => 'Endra',
            'alamat' => 'Jl. Merpati 16',
            'email' => 'endrapegawai@gmail.com',
            'notelepon' => '084555625249',
            'riwayat_pengalaman' => 'fotografer lepas dan sering mendapat tawaran foto acara-acara besar seperti birthday party atau wedding party',
            'jenis_kamera' => 'kamera DSLR canon 600D',
            'pas_foto' => 'pegawai5.jpg',
            'hasil_karya_beserta_logo' => 'foto1e.jpg',
            'alat_fotografi' => 'Flash, Tripod, Lightstand',
            'status' => 'tetap'
        ]);

        DB::table('data_fotografers')->insert([
            'nama' => 'Felincia',
            'alamat' => 'Jl. Pahlawan 16',
            'email' => 'felinciapegawai@gmail.com',
            'notelepon' => '085666625249',
            'riwayat_pengalaman' => 'freshgraduate jurusan fotografi universitas seni palembang, sering mendapat panggilan untuk foto pada beberapa acara',
            'jenis_kamera' => 'kamera DSLR nikon 600D',
            'pas_foto' => 'pegawai6.jpg',
            'hasil_karya_beserta_logo' => 'foto1f.jpg', 
            'alat_fotografi' => 'Kamera DSLR, Flash, Tripod, Softbox',
            'status' => 'freelance'
        ]);

        DB::table('data_fotografers')->insert([
            'nama' => 'Gabby',
            'alamat' => 'Jl. Pahlawan 26',
            'email' => 'gabbypegawai@gmail.com',
            'notelepon' => '085666625111',
            'riwayat_pengalaman' => 'sering mendapat panggilan untuk foto pada beberapa acara prewedding',
            'jenis_kamera' => 'kamera DSLR nikon 600D',
            'pas_foto' => 'pegawai7.jpg',
            'hasil_karya_beserta_logo' => 'foto1g.jpg', 
            'alat_fotografi' => 'Kamera DSLR, Tripod, Softbox',
            'status' => 'freelance'
        ]);

        DB::table('data_fotografers')->insert([
            'nama' => 'Hendra',
            'alamat' => 'Jl. Pahlawan 36',
            'email' => 'hendrapegawai@gmail.com',
            'notelepon' => '085666625222',
            'riwayat_pengalaman' => 'sering mendapat panggilan untuk foto pada beberapa acara kantor',
            'jenis_kamera' => 'kamera DSLR nikon 600D',
            'pas_foto' => 'pegawai8.jpg',
            'hasil_karya_beserta_logo' => 'foto1h.jpg', 
            'alat_fotografi' => 'Kamera DSLR, Lightstand, Softbox',
            'status' => 'tetap'
        ]);

        DB::table('data_fotografers')->insert([
            'nama' => 'Ida bagus putra',
            'alamat' => 'Jl. Pahlawan 46',
            'email' => 'putrapegawai@gmail.com',
            'notelepon' => '085666625333',
            'riwayat_pengalaman' => 'sering mendapat panggilan untuk foto pada beberapa produk food blogger',
            'jenis_kamera' => 'kamera DSLR nikon 600D',
            'pas_foto' => 'pegawai9.jpg',
            'hasil_karya_beserta_logo' => 'foto1i.jpg',
            'alat_fotografi' => 'Kamera DSLR, Reflektor, Softbox',
            'status' => 'tetap'
        ]);

        DB::table('data_fotografers')->insert([
            'nama' => 'Jessica',
            'alamat' => 'Jl. Pahlawan 56',
            'email' => 'jessicapegawai@gmail.com',
            'notelepon' => '085666625249',
            'riwayat_pengalaman' => 'sering mendapat panggilan untuk foto pada beberapa acara birthday',
            'jenis_kamera' => 'kamera DSLR nikon 600D',
            'pas_foto' => 'pegawai10.jpg',
            'hasil_karya_beserta_logo' => 'foto1j.jpg',
            'alat_fotografi' => 'Kamera DSLR, Flash, Kamera Pocket',
            'status' => 'tetap'
        ]);
    }
}
