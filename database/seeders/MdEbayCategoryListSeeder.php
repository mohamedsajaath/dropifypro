<?php

namespace Database\Seeders;

use App\Models\MdEbayCategoryList;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MdEbayCategoryListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('md_ebay_category_lists')->truncate();
        $category_list = file_get_contents(database_path() . '/seeders/src/ebay_category_lists.json');
        $category_list = json_decode($category_list, true);

        try{
            DB::beginTransaction();
            foreach ($category_list as $category) {
                $ebayCategoryList = new MdEbayCategoryList();
                foreach ($category as $key => $value) {
                    $ebayCategoryList->$key = $value;
                }
                $ebayCategoryList->save();
            }
            DB::commit();
        }catch(\Exception $e){
            DB::rollBack();
            print($e->getMessage());
        }


    }
}
