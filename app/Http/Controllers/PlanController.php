<?php

namespace App\Http\Controllers;

use App\Helper\Service\Admin\PlanService;
use App\Http\Requests\PlanRequest;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    use ResponseWrapper;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plan_details = PlanService::show();
        return view("pages.admin.account.plans")->with("plan_details", $plan_details);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlanRequest $request)
    {
        try {
            $plan = new Plan();
            $plan->fill($request->all());
            PlanService::save($plan);
            return self::response('Successfully Added');
        } catch (\Exception $ex) {
            return self::response($ex->getMessage(), [], 422);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Plan $plan)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd($id);
        $plan = Plan::find($id);
        return view("pages.admin.account.includes.edit_plan_model")->with('plan', $plan);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(PlanRequest $request, Plan $plan)
    {
        try {
            $id = $request->id;
            $plan = new Plan();
            $plan = Plan::find($id);
            $plan->name = $request->name;
            $plan->price_month = $request->price_month;
            $plan->price_year = $request->price_year;   
            PlanService::save($plan);
            return self::response('Successfully Updated');
        } catch (\Exception $ex) {
            return self::response($ex->getMessage(), [], 422);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan $plan)
    {
        //
    }
}
