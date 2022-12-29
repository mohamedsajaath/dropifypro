<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Helper\Service\admin;
use App\Models\MdEbayCategory;
use App\Helper\Service\ProductService;
use Yajra\DataTables\DataTables;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {
        
        // dd($products);

        $EbayCategories = new MdEbayCategory();

        $category = $EbayCategories->query()->get()->take(10);

        return view('pages.Admin.products.index')->with(["ebay_category" => $category]);
    }

    public function list()
    {
        $products = ProductService::getAllProducts();
        return DataTables::of($products)
            ->addColumn('image_base_path', function(){
                return  asset('storage/');
            })
            ->addIndexColumn()
            ->make(true);
    }

    public function create()
    {
    }




    public function store(ProductRequest $request)
    {


        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
