<?php

namespace App\Helper\Service\Admin;

use App\Models\Plan;

class PlanService
{
    public static function save(Plan $plan)
    {
        $plan->save();
    }

    public static function show()
    {
        return Plan::all();
    }
}
