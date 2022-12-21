<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MdCountry extends Model
{
    use HasFactory;
    protected $table = "md_countries";

    public static function country()
    {
        $countries = MdCountry::all();
        return $countries;
    }

    public static function userCountry($id)
    {
        $country = MdCountry::where('id', $id)->first();
        return $country->name;
    }

}
