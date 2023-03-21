<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'             => 'suraj kumar',
            'email'            => 'Admin@123gmail.com',
            'phone'            => '43795437654',
            'insta_username'   => 'admin_user',
            'interest'         => 'buy',
            'message'          => 'good view',
            'password'         => Hash::make('123456')
        ]);
    }
}
