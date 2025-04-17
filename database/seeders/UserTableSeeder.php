<?php

namespace Database\Seeders;

use Faker\Guesser\Name;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
     {   
        user::create([
            'name'=>'hasib',
            'email' => 'hasib@gmail.com',
            'password' => '42862266'

        ]);
    }
}
