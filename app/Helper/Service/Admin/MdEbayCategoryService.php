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
        $ebayCategoryListsQuery = $ebayCategories->where('category_name_list', 'LIKE', '%' . $q . '%')
            ->limit(10)->offset($offset);

        $ebayCategoryListCountQuery = clone $ebayCategoryListsQuery;
        $totalCategoryListCount = $ebayCategoryListCountQuery->count();

        $ebayCategoryLists = $ebayCategoryListsQuery->get();

        $results = [];
        foreach ($ebayCategoryLists as $ebayCategoryList) {
            $results[] = [
                'id' => $ebayCategoryList->category_id,
                'text' => $ebayCategoryList->category_name_list
            ];
        }

        //ToDo Check the result count and return pagination accordingly
        return [
            'results' => $results,
            'pagination' => [
                'more' => $totalCategoryListCount
            ]
        ];
    }
}
