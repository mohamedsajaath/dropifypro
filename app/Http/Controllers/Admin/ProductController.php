<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Helper\Service\Admin\MdEbayCategoryService;
use App\Helper\Mapper\Admin\ProductMapper;
use App\Helper\Service\ProductService;
use Yajra\DataTables\DataTables;
use App\Helper\Service\Admin as AdminServices;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {
        return view('pages.Admin.products.index')->with(["ebay_category" => ""]);
    }

    public function create()
    {

    }


    public function store(ProductRequest $request)
    {
        $productMapper = new ProductMapper($request->all());
        $product = $productMapper->getProduct();
        $productId = AdminServices\ProductService::save($product);
        AdminServices\ProductItemSpecificationService::save($productId, $product->specifications);
        AdminServices\ProductImageService::save($productId,$product->images);
        AdminServices\ProductVariationService::save($productId,$product->variations);

        return self::response('product Added Successfully');


    }


    public function list()
    {
        $products = ProductService::getAllProducts();
        return DataTables::of($products)
            ->addColumn('image_base_path', function () {
                return asset('storage/');
            })
            ->addIndexColumn()
            ->make(true);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getCategory(Request $request){
//        dd($request);
        return MdEbayCategoryService::getCategory($request);
        return '{
  "results": [
    {
      "id": 1,
      "text": "Option 1"
    },
    {
      "id": 2,
      "text": "Option 2"
    }
  ],
  "pagination": {
    "more": true
  }
}';
    }
}
