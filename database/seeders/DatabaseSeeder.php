<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 10; $i++) {
            $name = Str::random(10);
            DB::table('users')->insert([
                'name' => Str::random(10),
                'email' => $name . '@gmail.com',
                'password' => Hash::make('password'),
            ]);
        }
    }

}
