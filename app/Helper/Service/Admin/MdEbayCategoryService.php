<?php

namespace App\Helper\Service\Admin;

use App\Models\MdEbayCategory;
use App\Models\MdEbayCategoryList;


class MdEbayCategoryService
{

    public static function getCategory($request)
    {
        $resultsPerPage = 10;
        $q = $request->search;
        $page = $request->page;
        $offset = ($page - $resultsPerPage) * 10;

        $ebayCategories = new MdEbayCategoryList();
        $ebayCategoryLists = $ebayCategories->where('category_name_list', 'LIKE', '%' . $q . '%')
            ->limit($resultsPerPage)->offset($offset)->get();

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
                'more' => $ebayCategoryLists->count() < $resultsPerPage ? false : true
            ]
        ];
    }
}
