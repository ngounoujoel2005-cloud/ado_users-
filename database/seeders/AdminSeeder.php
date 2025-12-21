<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;


class AdminSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('admins')->insert([
            [
                'nom' => 'adobanka',
                'email' => 'admin1@adobanka.com',
                'password' => Hash::make('adobanka1234'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'ngounou',
                'email' => 'admin2@adobanka.com',
                'password' => Hash::make('ngounou1234'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'karl',
                'email' => 'admin3@adobanka.com',
                'password' => Hash::make('karl1234'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
