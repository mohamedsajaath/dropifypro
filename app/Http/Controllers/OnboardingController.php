<?php

namespace App\Http\Controllers;

use App\Helper\Service\Admin\OnboardingService;
use App\Helper\Utility\DateTimeUtility;
use App\Http\Requests\AddOnboardingEventRequest;
use Illuminate\Http\Request;
use App\Models\Onboarding;
use App\Http\Controllers\Auth;

class OnboardingController extends AbstractController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndexView()
    {
        return 'pages.seller.onboardings.index';
    }
    // public function getIndexData()
    // {
    //     $dates = DateTimeUtility::getFutureDates(7);

    
    //     $onboarding = OnboardingService::setOnboardingByDate($dates);

    //     return [
    //         'dates' => $dates,
    //         'onboarding' => $onboarding,
           
    //     ];
       
    // }

    public function getIndexData()
    {
        $dates = DateTimeUtility::getFutureDates(7);
        $onboardings = OnboardingService::getOnboardingByDates($dates);

        $data = [];
        foreach($onboardings as $onboarding){
            $data[$onboarding->date][] = $onboarding;
        }
        
        $rows = [];
        $maxOnboardingCount = 2;
        for($i=0;$i<=$maxOnboardingCount;$i++){
            foreach($data as $onboarding){
                if(isset($onboarding[$i]))
                    $rows[$i][] = $onboarding[$i];
            }
        }
        
        return ['onboardings'=>$data,'rows'=>$rows];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Onboarding  $onBoarding
     * @return \Illuminate\Http\Response
     */
    public function show(Onboarding $onboarding)
    {
       
        return self::response($ex->getMessage(), [], 500);
        
    }


    public function getEditView()
    {
        return 'pages.seller.onboardings.includes.reserve_onboarding';
    }

    public function getEditData($id)
    {
        return [
            'id' => $id
        ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Onboarding  $onBoarding
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Onboarding $onboarding)
    {
        try{
            $userId = auth()->user()->id;
            $onboarding->title = $request->get('title');
            $onboarding->user_id = $userId;
            OnboardingService::save($onboarding);
            return self::response('Successfully updated!');
        }catch(Exception $e){
            return self::response($e->getMessage(),[],422);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Onboarding  $onBoarding
     * @return \Illuminate\Http\Response
     */
    public function destroy(Onboarding $onBoarding)
    {
        //
    }

    // public  function getEditView()
    // {
    //     return view('kkfmf');
    // }

    // public function getEditData()
    // {

    // }

}
