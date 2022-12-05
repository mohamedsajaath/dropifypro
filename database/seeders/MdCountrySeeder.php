<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\MdCountry;

class MdCountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('md_countries')->truncate();
        $countries = file_get_contents(database_path() . '/seeders/src/countries.json');
        $countries = json_decode($countries, true);

        try{
            DB::beginTransaction();
            foreach ($countries as $country) {
                $mdCountry = new MdCountry();
                foreach ($country as $key => $value) {
                    $mdCountry->$key = $value;
                }
                $mdCountry->save();
            }
            DB::commit();
        }catch(\Exception $e){
            DB::rollBack();
            print($e->getMessage());
        }
    }
}
