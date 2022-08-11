<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelanggans')->insert([
            'nama' => 'Adinda Rizka Fadillah',
            'notelepon' => '08123773112',
            'email' => 'adindapelanggan@gmail.com'
        ]);

        DB::table('pelanggans')->insert([
            'nama' => 'Bobby Briliant',
            'notelepon' => '081353446669',
            'email' => 'bobbypelanggan@gmail.com'
        ]);

        DB::table('pelanggans')->insert([
            'nama' => 'Cyntia Gabriella',
            'notelepon' => '085353445656',
            'email' => 'cyntiapelanggan@gmail.com'
        ]);

        DB::table('pelanggans')->insert([
            'nama' => 'Deddy Corbuzier',
            'notelepon' => '085480556391',
            'email' => 'deddypelanggan@gmail.com'
        ]);

        DB::table('pelanggans')->insert([
            'nama' => 'Emmanuela Gabriella',
            'notelepon' => '081773112237',
            'email' => 'emmanuelapelanggan@gmail.com'
        ]);

        DB::table('pelanggans')->insert([
            'nama' => 'Fabian Rizky',
            'notelepon' => '081112237773',
            'email' => 'fabianpelanggan@gmail.com'
        ]);

        DB::table('pelanggans')->insert([
            'nama' => 'Gladis Putri',
            'notelepon' => '085445656353',
            'email' => 'gladispelanggan@gmail.com'
        ]);

        DB::table('pelanggans')->insert([
            'nama' => 'Hafiz Irzya',
            'notelepon' => '085656353445',
            'email' => 'Hafizpelanggan@gmail.com'
        ]);

        DB::table('pelanggans')->insert([
            'nama' => 'Iyuth Umu Amini',
            'notelepon' => '085445656222',
            'email' => 'iyuthpelanggan@gmail.com'
        ]);

        DB::table('pelanggans')->insert([
            'nama' => 'Jarviz Syahputra',
            'notelepon' => '085656353333',
            'email' => 'jarvizpelanggan@gmail.com'
        ]);
    }
}
