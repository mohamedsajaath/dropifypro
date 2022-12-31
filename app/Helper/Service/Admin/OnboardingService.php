<?php

namespace App\Helper\Service\Admin;

use App\Models\Onboarding;

class OnboardingService
{
    public static function save(Onboarding $onboarding)
    {
        $onboarding->save();
    }

    public static function getAll()
    {
        return Onboarding::all();
    }

    public static function getOnboardingByDate($date)
    {
        return Onboarding::findBy(['date' => $date]);
    }

    public static function deleteById($id)
    {
        Onboarding::deleteById($id);
    }
}
