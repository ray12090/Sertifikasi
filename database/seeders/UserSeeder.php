<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
            'no_hp' => '081289396644',
            'provinsi_id' => '1',
            'kabupaten_id' => '1',
            'agama_id' => '1',
            'usertype' => 'admin',
        ]);

        // Create user
        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('user123'),
            'no_hp' => '081289396644',
            'provinsi_id' => '1',
            'kabupaten_id' => '1',
            'agama_id' => '1',
            'usertype' => 'user',
        ]);
    }
}
