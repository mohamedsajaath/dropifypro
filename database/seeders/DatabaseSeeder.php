<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\OrderCustomer::factory(1)->create();

        DB::table('users')->insert([
            'first_name' => "Admin",
            'last_name' => "admin",
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
