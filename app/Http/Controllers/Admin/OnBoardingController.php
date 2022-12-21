<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Service\Admin\OnboardingService;
use App\Http\Controllers\Controller;
use App\Models\OnBoarding;
use Illuminate\Http\Request;

class OnBoardingController extends Controller
{
    use ResponseWrapper;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $onboardings = OnboardingService::show();
        $dateRanges = OnboardingService::getDateRanges();
        $onBoardingEvents = OnboardingService::getOnBoardingByDate($dateRanges[0]);
        //dd($onBoardingEvent);
        return view("pages.admin.onboardings.index")->with([
            "onboardings" => $onboardings,
            "date_ranges" => $dateRanges,
            "onboarding_events" => $onBoardingEvents,
        ]);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            // (OnboardingService::getDateRanges);
            $onboarding = new onboarding();
            $onboarding->date = $request->date;
            $onboarding->time = $request->time;
            $onboarding->status = OnBoarding::IDLE;
            $onboarding->save();
            return self::response('Successfully Added');
        } catch (\Exception$ex) {
            return self::response($ex->getMessage());
        }
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
        // public function index()
        {
            $onboarding = OnBoarding::find($id);

            return view("pages.admin.onboardings.includes.edit_modal")->with(['onboarding' => $onboarding]);
        }
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

        // try {
        //     $id = $request->id;
        //     $onboarding = new Onboarding();
        //     $onboarding= OnBoarding::find($id);
        //     $onboarding->date = $request->date;
        //     $onboarding->time = $request->time;
        //     // PlanService::save($plan);
        //     return self::response('Successfully Updated');
        // } catch (\Exception $ex) {
        //     return self::response($ex->getMessage(), [], 422);
        //  }

        //     $onboarding = OnBoarding::find($id);
        //     $onboarding  = $request->all();
        //     $onboarding->update($request);
        // return redirect('onboarding')->with('flash_message', 'onboarding Updated!');
        $onboarding = OnBoarding::find($request->id);
        $onboarding->date = $request->date;
        $onboarding->time = $request->time;
        // $project->description = $request->input('description');
        // $project->time_span = $request->input('time_span');
        // $project->text_report = $request->input('text_report');
        // $project->created_by = $request->input('created_by');

        $onboarding->save();

        return redirect('/')->with('success', 'Project aangepast');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OnBoarding::destroy($id);
        return redirect('onboarding')->with('flash_message', 'Event deleted!');   
    }

    public function getOnBoardingByDate($date)
    {
        return OnboardingService::getOnBoardingByDate($date);
    }
}
