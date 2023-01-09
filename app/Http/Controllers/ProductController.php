<?php

namespace App\Http\Controllers;

use App\Helper\Mapper\Product\RequestToProductMapper;
use App\Helper\Mapper\SetCustomValuesToProductMapper;
use App\Helper\Service\ProductService;
//use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Helper\Service\Admin as AdminServices;


class ProductController extends Controller
{

    use ResponseWrapper;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $product = AdminServices\ProductService::get();

        $arr = [];
        foreach ($product as $pro) {
            $arr[] = $pro;
            $pro->getVariants;

        }
        $product_image=  ProductImage::query()->where("reference","=",ProductImage::PRODUCT_IMAGE)->get();
        $variants = ProductVariant::query()->get();
        return view("pages.seller.products.all.index")->with(["products"=>$product,"variants"=>$arr,"product_image"=>$product_image]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $userId = Auth::user()->id;
            $requestMapper = new RequestToProductMapper($request);
            $product = $requestMapper->getProduct();
            ProductService::save($product, $userId);
            DB::commit();
            return self::response('Successfully Added');
        } catch (\Exception $ex) {
            DB::rollBack();
            return self::response($ex->getMessage(), [], 422);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }


    public function import(Request $request){
       
        try {
            $userId = Auth::user()->id;
            ProductService::import($request, $userId);
            return self::response('Succesfully Imported');
        } catch (\Exception $e) {
            return self::response($e->getMessage(), [], 422);
        }

    }
}
