<?php

namespace Ninhnk\FirstPackage\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->truncate();
        DB::table('accounts')->insert([
            'name'      => 'Admin',
            'user_name' => 'admin',
            'email'     => 'admin@admin.com',
            'password'  => Hash::make('123qweASD'),
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);

        DB::table('accounts')->insert([
            'name'      => 'NinhNK',
            'user_name' => 'ninhnk',
            'email'     => 'ninhnk@admin.com',
            'password'  => Hash::make('123qweASD'),
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
    }
}
