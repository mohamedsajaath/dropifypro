<?php

namespace Database\Seeders;

use App\Models\MdEbayCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PHPUnit\Exception;

class MdEbayCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('md_ebay_categories')->truncate();
        $ebay_categories = file_get_contents(database_path() . '/seeders/src/ebay_categories.json');
        $ebay_categories = json_decode($ebay_categories, true);
        try{
            DB::beginTransaction();
                foreach ($ebay_categories as $category) {
                    $ebay_category = new MdEbayCategory();
                    foreach ($category as $key => $value) {
                        $ebay_category->$key =  $value;
                    }
                    $ebay_category->save();
                }
            DB::commit();
        }catch (\Exception $e){
            print($e->getMessage());
            DB::rollBack();
        }

    }
}
