<?php

namespace App\Helper\Service\Admin;

use App\Models\OnBoarding;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

class OnboardingService
{
    public static function save(onboarding $onboarding)
    {
        $onboarding->save();
    }

    public static function show()
    {

        return OnBoarding::all();
        // $data->
        // $output_date = Carbon::create($data->date);
        // // dd($output_date);
    }

    public static function getDateRanges()
    {
        //Get date from today to next 7 days
        $date = Carbon::now();
        $date->toDateString();
        $period = CarbonPeriod::create($date, 7);

        $dates = [];
        foreach ($period as $key => $date) {
            if ($key === 7) {
                $period->invert()->start($date); // invert() is an alias for invertDateInterval()
            }
            $dates[] = $date->format('Y-m-d');
        }
        return $dates;
    }

    public static function getOnBoardingByDate($dates)
    {
        {
            $event = OnBoarding::where('date', $dates)->get();
            return $event;

        }
    }
}
