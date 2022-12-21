<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [[
            'name' => "Starter",
            'slug' => "starter",
            'price_month' => "10",
            'price_year' => "100",
        ], [
            'name' => "Advanced",
            'slug' => "advanced",
            'price_month' => "20",
            'price_year' => "200",
        ], [
            'name' => "Business",
            'slug' => "business",
            'price_month' => "30",
            'price_year' => "300",
        ]];
        DB::table('plans')->insert($plans);
    }
}
