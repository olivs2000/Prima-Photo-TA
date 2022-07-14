<?php

use Illuminate\Database\Seeder;

class AdminStudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_studios')->insert([
            'nama_admin' => 'Edyanto',
            'notelepon' => '081339087281',
            'email' => 'edyantoadmin@gmail.com'
        ]);

        DB::table('admin_studios')->insert([
            'nama_admin' => 'Meike Liliastiawati',
            'notelepon' => '082339087282',
            'email' => 'meikeadmin@gmail.com'
        ]);

        DB::table('admin_studios')->insert([
            'nama_admin' => 'Yunike Christina',
            'notelepon' => '085339522773',
            'email' => 'yunikeadmin@gmail.com'
        ]);

        DB::table('admin_studios')->insert([
            'nama_admin' => 'Dillon Christina',
            'notelepon' => '085239190224',
            'email' => 'dillonadmin@gmail.com'
        ]);

        DB::table('admin_studios')->insert([
            'nama_admin' => 'Delano Christian',
            'notelepon' => '082340252505',
            'email' => 'delanoadmin@gmail.com'
        ]);

        DB::table('admin_studios')->insert([
            'nama_admin' => 'Eliana',
            'notelepon' => '081339087286',
            'email' => 'elianaadmin@gmail.com'
        ]);

        DB::table('admin_studios')->insert([
            'nama_admin' => 'Yuliana',
            'notelepon' => '082339087287',
            'email' => 'yulianaadmin@gmail.com'
        ]);

        DB::table('admin_studios')->insert([
            'nama_admin' => 'Yuyun',
            'notelepon' => '085339522778',
            'email' => 'yuyunadmin@gmail.com'
        ]);

        DB::table('admin_studios')->insert([
            'nama_admin' => 'Haryanto',
            'notelepon' => '085239190229',
            'email' => 'haryantonadmin@gmail.com'
        ]);

        DB::table('admin_studios')->insert([
            'nama_admin' => 'Likanawati',
            'notelepon' => '082340252500',
            'email' => 'likanawatiadmin@gmail.com'
        ]);
    
    }
}
