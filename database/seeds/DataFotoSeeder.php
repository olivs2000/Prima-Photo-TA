<?php

use Illuminate\Database\Seeder;

class DataFotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('datafotos')->insert([
            'nokamera' => '011',
            'nama' => 'pelanggan pertama',
            'email' => 'pelangganpertama@gmail.com',
            'tanggal' => now(),
            'filefoto' => '011.jpg',
        ]);

        DB::table('datafotos')->insert([
            'nokamera' => '012',
            'nama' => 'pelanggan kedua',
            'email' => 'pelanggankedua@gmail.com',
            'tanggal' => now(),
            'filefoto' => '012.jpg',
        ]);

        DB::table('datafotos')->insert([
            'nokamera' => '013',
            'nama' => 'pelanggan ketiga',
            'email' => 'pelangganketiga@gmail.com',
            'tanggal' => now(),
            'filefoto' => '013.jpg',
        ]);

        DB::table('datafotos')->insert([
            'nokamera' => '014',
            'nama' => 'pelanggan keempat',
            'email' => 'pelanggankeempat@gmail.com',
            'tanggal' => now(),
            'filefoto' => '014.jpg',
        ]);

        DB::table('datafotos')->insert([
            'nokamera' => '015',
            'nama' => 'pelanggan kelima',
            'email' => 'pelanggankelima@gmail.com',
            'tanggal' => now(),
            'filefoto' => '015.jpg',
        ]);

    }
}
