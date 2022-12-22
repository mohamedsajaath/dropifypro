<?php

namespace App\Helper\Service;

use App\Models\MdCountry;

class MdCountryService
{
    public static function getCurrencyCode($countryId)
    {
        $country = MdCountry::findById($countryId,['currency_code']);
        return $country->currency_code;
    }
}
