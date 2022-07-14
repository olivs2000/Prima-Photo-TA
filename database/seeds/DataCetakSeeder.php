<?php

use Illuminate\Database\Seeder;

class DataCetakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('datacetaks')->insert([
            'nama' => 'pelanggan pertama cetak',
            'ukuran' => '10R, 12R',
            'notelepon' => '081917770089',
            'tanggal' => now(),
            'filecetak' => 'cetak1.jpg',
        ]);

        DB::table('datacetaks')->insert([
            'nama' => 'pelanggan kedua cetak',
            'ukuran' => '20R',
            'notelepon' => '081917770087',
            'tanggal' => now(),
            'filecetak' => 'cetak2.jpg',
        ]);

        DB::table('datacetaks')->insert([
            'nama' => 'pelanggan ketiga cetak',
            'ukuran' => '5R(2 lembar)',
            'notelepon' => '081917770086',
            'tanggal' => now(),
            'filecetak' => 'cetak3.jpg',
        ]);

        DB::table('datacetaks')->insert([
            'nama' => 'pelanggan keempat cetak',
            'ukuran' => '4x6(10 lembar)',
            'notelepon' => '081917770085',
            'tanggal' => now(),
            'filecetak' => 'cetak4.jpg',
        ]);

        DB::table('datacetaks')->insert([
            'nama' => 'pelanggan kelima cetak',
            'ukuran' => '4x6, 3x4, 2x3(masing-masing 4 lembar)',
            'notelepon' => '081917770084',
            'tanggal' => now(),
            'filecetak' => 'cetak5.jpg',
        ]);
    }
}
