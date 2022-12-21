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

    public static function getOnBoardingByDate($date)
    {
        return OnBoarding::findBy(['date' => $date]);
    }
}
