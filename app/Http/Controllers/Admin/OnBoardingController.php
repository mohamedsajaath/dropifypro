<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Service\Admin\OnboardingService;
use App\Helper\Utility\DateTimeUtility;
use App\Http\Controllers\AbstractController;
use App\Http\Requests\AddOnboardingEventRequest;
use App\Models\Onboarding;
use Illuminate\Http\Request;

class OnBoardingController extends AbstractController
{
    public function getIndexView()
    {
        return 'pages.admin.onboardings.index';
    }

    public function getIndexData()
    {
        $dates = DateTimeUtility::getFutureDates(7);
        $onboarding = OnboardingService::getOnboardingByDate($dates[0]) ?? [];
        return [
            'dates' => $dates,
            'onboarding' => $onboarding,
        ];
    }

    public function getCreateView()
    {
        return 'pages.admin.onboardings.includes.create_modal';
    }

    public function store(AddOnboardingEventRequest $request)
    {
        $onBoarding = new Onboarding();
        $onBoarding->loadFromRequest($request);
        $onBoarding = OnboardingService::save($onBoarding);
        $response = ['message' => 'Successfully Added', 'event'=> $onBoarding];
        return response()->json($response);
    }

    public function getEditView()
    {
        return 'pages.admin.onboardings.includes.edit_modal';
    }

    public function getEditData($id)
    {
        $onboarding = Onboarding::find($id);
        return ['onboarding' => $onboarding];
    }

    /**
     * Note:  make sure to send value keys, same as table attributes
     **/
    public function update(Request $request, $id)
    {
        try {
            $onboarding = OnBoarding::find($id);
            $onboarding->loadFromRequest($request);
            $onBoarding = OnboardingService::save($onboarding);
            $response = ['message' => 'Successfully Updated', 'event'=> $onBoarding];
            return response()->json($response);
        }catch(\Exception $ex){
            return self::response($ex->getMessage(),[],422);
        }
    }

    public function destroy($id)
    {
        OnboardingService::deleteById($id);
        return self::response('Event deleted!');
    }

    public function getByDate($date)
    {
        return  OnboardingService::getOnboardingByDate($date);
    }
}
