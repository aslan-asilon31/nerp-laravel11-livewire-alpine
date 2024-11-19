<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        // あすらん あしろん
        foreach (range(1, 50000) as $index) {
            DB::table('users')->insert([
                'role_id' => $faker->numberBetween(1, 5), // Misal, ada 5 role
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'password' => bcrypt('password'), // Password yang sama untuk semua, ganti sesuai kebutuhan
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'two_factor_confirmed_at' => null,
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'updated_by' => null,
                'profile_photo_path' => null,
            ]);
        }
    }
}
