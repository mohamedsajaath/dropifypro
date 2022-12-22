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
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Admin",
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'address' => "test",
            'city' => "test",
            'state' => "test",
            'zipcode' => "test",
            'country_id' => "213",
            'currency' => "GBP",
            'phone_no' => "+94771231234",
            'type' => User::ADMIN,
            'temp_account' => User::FIXED_ACCOUNT,
            'image_url' => "",
        ]);
    }
}
