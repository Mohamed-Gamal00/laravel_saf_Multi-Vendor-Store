<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'moahmed gamal',
            'email' => 'mo12@y.com',
            'password' => Hash::make('password'),
            'phone_number' => '01065743058',
        ]);

        DB::table('users')->insert([
            'name' => 'ahmed gamal',
            'email' => 'ahmed12@y.com',
            'password' => Hash::make('password'),
            'phone_number' => '01065743047',
        ]);
    }
}
