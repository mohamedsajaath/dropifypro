<?php

namespace App\Helper\Service\Admin;

use App\Models\MdEbayCategory;
use App\Models\MdEbayCategoryList;


class MdEbayCategoryService
{

    public static function getCategory($request)
    {
//        dd($request->all());
        $requestData = $request->all();
        $EbayCategories = new MdEbayCategoryList();
        return $EbayCategories->query()->take(5)->where('category_name_list', 'LIKE', '%' . $requestData['search'] . '%')->get();

//        return response()->json([[
//            "id"=>4656 ,"node_id"=>"zdgsdfgfsdgfdsgdf","name"=>"gfgfdgdf","full_name"=>"sfdfdsf"
//        ]]);


    }
}
