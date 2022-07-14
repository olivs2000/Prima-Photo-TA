<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([
            'nama' => 'Baby&Kids Photography',
        ]);

        DB::table('kategoris')->insert([
            'nama' => 'Family Photography',
        ]);

        DB::table('kategoris')->insert([
            'nama' => 'Graduation Photography',
        ]);

        DB::table('kategoris')->insert([
            'nama' => 'Birthday Photography',
        ]);

        DB::table('kategoris')->insert([
            'nama' => 'Prewedding/Wedding Photography',
        ]);

        DB::table('kategoris')->insert([
            'nama' => 'Student Photography',
        ]);

        DB::table('kategoris')->insert([
            'nama' => 'Alumni Photography',
        ]);

        DB::table('kategoris')->insert([
            'nama' => 'Construction Photography',
        ]);

        DB::table('kategoris')->insert([
            'nama' => 'Product Photography',
        ]);
    }
}
