<?php

use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawai')->insert([
            'nama_pegawai' => 'Bayu Saputra',
            'address' => 'Jl.SoekarnoHatta 37',
            'notelepon' => '087580585555',
        ]);

        DB::table('pegawai')->insert([
            'nama_pegawai' => 'Cienny Aprillia',
            'address' => 'Jl.Pegangsaan Timur 12',
            'notelepon' => '08123773112',
        ]);

        DB::table('pegawai')->insert([
            'nama_pegawai' => 'Dody Syahputra',
            'address' => 'Jl.Mekarsari 5',
            'notelepon' => '08567823698',
        ]);

        DB::table('pegawai')->insert([
            'nama_pegawai' => 'Audreyana Mutiara',
            'address' => 'Jl.Jalan 1',
            'notelepon' => '087162736794',
        ]);
    }
}
