<?php

namespace App\Helper\Service\Admin;

use App\Models\OnBoarding;

class OnboardingService
{
    public static function storeFromRequest($request)
    {
        $onBoarding = new OnBoarding();
        $onBoarding->loadFromRequest($request);
        $onBoarding->save();
    }

    public static function show()
    {
        return OnBoarding::all();
    }

    public static function getDateRanges($days)
    {

    }

    public static function getOnBoardingByDate($dates)
    {
        // return OnBoarding::findBy(['date' => $date],['time']);
        return OnBoarding::whereIn('date', array($dates))->get();

    }
    public static function updateOnboarding(array $requested_values, $id)
    {
        // $onboardingModel = OnBoarding::findById($id);
        // $onboardingModel->loadFromArray($requested_values);
        // $onboardingModel->save();
        // return $onboardingModel;
        return OnBoarding::updateById(['id' => $id], $requested_values);
    }
    public static function deleteOnboarding($id)
    {
        return OnBoarding::deleteById(['id' => $id]);
    }
}
