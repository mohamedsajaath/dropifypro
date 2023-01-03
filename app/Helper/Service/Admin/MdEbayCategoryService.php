<?php

namespace App\Helper\Service\Admin;

use App\Models\MdEbayCategory;
use App\Models\MdEbayCategoryList;


class MdEbayCategoryService
{

    public static function getCategory($request)
    {
        $requestData = $request->all();
        $ebayCategories = new MdEbayCategoryList();
        $ebayCategoryListsQuery = $ebayCategories->where('category_name_list', 'LIKE', '%' . $requestData['search'] . '%');

        $ebayCategoryListCountQuery = clone $ebayCategoryListsQuery;
        $totalCategoryListCount = $ebayCategoryListCountQuery->count();

        $ebayCategoryLists = $ebayCategoryListsQuery->limit(10)->get();

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
                'more' => true
            ]
        ];
    }
}
