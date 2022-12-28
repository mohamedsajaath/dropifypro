<?php

namespace App\Helper\Service\Admin;

use App\Models\Onboarding;

class OnboardingService
{
    public static function storeFromRequest($request)
    {
        $onBoarding = new Onboarding();
        $onBoarding->loadFromRequest($request);
        $onBoarding->save();
    }

    public static function show()
    {
        return Onboarding::all();
    }

    public static function getDateRanges($days)
    {

    }

    public static function getOnboardingByDate($date)
    {
        return Onboarding::findBy(['date' => $date]);
    }
}
