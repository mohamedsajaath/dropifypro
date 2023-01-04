<?php

namespace App\Helper\Service\Admin;

use App\Models\MdEbayCategory;
use App\Models\MdEbayCategoryList;


class MdEbayCategoryService
{

    public static function getCategory($request)
    {
        $q = $request->search;
        $page = $request->page;
        $offset = ($page - 1) * 10;

        $ebayCategories = new MdEbayCategoryList();
        $ebayCategoryLists = $ebayCategories->where('category_name_list', 'LIKE', '%' . $q . '%')
            ->limit(10)->offset($offset)->get();

        $results = [];
        foreach ($ebayCategoryLists as $ebayCategoryList) {
            $results[] = [
                'id' => $ebayCategoryList->category_id,
                'text' => $ebayCategoryList->category_name_list
            ];
        }


        return [
            'results' => $results,
            'pagination' => [
                'more' => $ebayCategoryLists->count() < 10 ? false : true
            ]
        ];
    }
}
