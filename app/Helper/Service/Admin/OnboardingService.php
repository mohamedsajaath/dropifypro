<?php

namespace App\Helper\Service\Admin;

use App\Models\Onboarding;

class OnboardingService
{
    public static function save(Onboarding $onboarding)
    {
        $onboarding->save();
        return $onboarding;
    }

    public static function getAll()
    {
        return Onboarding::all();
    }

    public static function getOnboardingByDate($date)
    {
        return Onboarding::query()
            ->where('date', $date)
            ->orderBy('start_time')
            ->get();

    }

    public static function deleteById($id)
    {
        Onboarding::deleteById($id);
    }

    public static function doesEventExists($date, $start_time, $end_time)
    {
        return  OnBoarding::whereDate('date', $date)
            ->where(function ($query)use($start_time, $end_time) {

                $query->whereBetween('start_time', [$start_time, $end_time])
                    ->orWhereBetween('end_time', [$start_time, $end_time]);
            })
            ->exists();
    }
}
