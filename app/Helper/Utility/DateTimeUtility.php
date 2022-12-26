<?php

namespace App\Helper\Utility;

use Carbon\Carbon;
use Carbon\CarbonPeriod;

class DateTimeUtility
{
    public static function isFirstDateGTSecondDate($first_date, $second_date)
    {
        $first_date = self::castToDateObject($first_date);
        $second_date = self::castToDateObject($second_date);
        return $first_date->gt($second_date);
    }

    public static function getStartDateTime_ofTheWeekFromGivenDate(string $date): string
    {
        $date_obj = self::castToDateObject($date);
        return self::getFormattedTime($date_obj->startOfWeek());
    }

    public static function getStartDate_ofTheWeekFromGivenDate(string $date): string
    {
        $date_obj = self::castToDateObject($date);
        return self::getFormattedTime($date_obj->startOfWeek(), 'Y-m-d');
    }

    public static function endDateTime_ofTheWeekFromGivenDate(string $date)
    {
        $date_obj = self::castToDateObject($date);
        return self::getFormattedTime($date_obj->endOfWeek());
    }

    public static function endDate_ofTheWeekFromGivenDate(string $date)
    {
        $date_obj = self::castToDateObject($date);
        return self::getFormattedTime($date_obj->endOfWeek(), 'Y-m-d');
    }

    public static function getStartDateTime_ofTheMonthFromGivenDate(string $date): string
    {
        $date_obj = self::castToDateObject($date);
        return self::getFormattedTime($date_obj->startOfMonth());
    }

    public static function getStartDateTime_ofTheYearFromGivenDate(string $date): string
    {
        $date_obj = self::castToDateObject($date);
        return self::getFormattedTime($date_obj->startOfYear());
    }

    public static function getStartDate_ofTheYearFromGivenDate(string $date): string
    {
        $date_obj = self::castToDateObject($date);
        return self::getFormattedTime($date_obj->startOfYear(), 'Y-m-d');
    }

    public static function getStartDate_ofTheMonthFromGivenDate(string $date): string
    {
        $date_obj = self::castToDateObject($date);
        return self::getFormattedTime($date_obj->startOfMonth(), 'Y-m-d');
    }

    public static function getStartDateTime_ofTheMonthFromCurrentTime(): string
    {
        return self::getFormattedTime(Carbon::now()->startOfMonth());
    }

    public static function getStartDate_ofTheWeekFromCurrentTime(): string
    {
        return self::getFormattedTime(Carbon::now()->startOfWeek(), 'Y-m-d');
    }

    public static function getStartDate_ofTheYearFromCurrentTime(): string
    {
        return self::getFormattedTime(Carbon::now()->startOfYear(), 'Y-m-d');
    }

    public static function getStartDate_ofTheMonthFromCurrentTime(): string
    {
        return self::getFormattedTime(Carbon::now()->startOfMonth(), 'Y-m-d');
    }

    public static function getEndDateTime_ofTheMonthFromGivenTime(string $date): string
    {
        $date_obj = self::castToDateObject($date);
        return self::getFormattedTime($date_obj->endOfMonth());
    }

    public static function getEndDate_ofTheMonthFromCurrentTime(): string
    {
        return self::getFormattedTime(Carbon::now()->endOfMonth(), 'Y-m-d');
    }

    public static function getEndDate_ofTheYearFromCurrentTime(): string
    {
        return self::getFormattedTime(Carbon::now()->endOfYear(), 'Y-m-d');
    }

    public static function getCurrentDateTime($format = 'Y-m-d H:i:s'): string
    {
        return self::getFormattedTime(Carbon::now(), $format);
    }

    public static function getCurrentDateTimeWithAtomFormat(): string
    {
        return self::getFormattedTime(Carbon::now(), \DateTimeInterface::ATOM);
    }

    public static function getCurrentDateTimeWithISO8601Format(): string
    {
        return self::getFormattedTime(Carbon::now(), \DateTimeInterface::ISO8601);
    }

    public static function getCurrentDate(): string
    {
        return self::getFormattedTime(Carbon::now(), 'Y-m-d');
    }

    public static function getPreviousDate(): string
    {
        return self::getFormattedTime(Carbon::now()->subDays(1), 'Y-m-d');
    }

    public static function getCurrent24hTime(): string
    {
        return self::getFormattedTime(Carbon::now(), 'H:i:s');
    }

    public static function getCurrent12hTime(): string
    {
        return self::getFormattedTime(Carbon::now(), 'h:i A');
    }

    public static function getCurrentYear()
    {
        return Carbon::now()->year;
    }

    public static function getCurrentMonth(): int
    {
        return Carbon::now()->month;
    }

    public static function getFormattedTime($time, $format = 'Y-m-d H:i:s'): string
    {
        $date_obj = self::castToDateObject($time);
        return $date_obj->format($format);
    }

    public static function getPreviousHoursAtomDateTime_fromPassedTime_byHours($before_hours, $time)
    {
        $time = self::castToDateObject($time);
        $time = $time->subHours($before_hours);
        return self::getFormattedTime($time, \DateTimeInterface::ATOM);
    }

    public static function getPreviousDateTime_fromPassedTime($before_no_of_days, $time, $format = 'Y-m-d H:i:s'): string
    {
        $date = self::castToDateObject($time);
        $date = $date->subDays($before_no_of_days);
        return self::getFormattedTime($date, $format);
    }

    public static function getPreviousDate_fromPassedTime($before_no_of_days, $time): string
    {
        $date = self::castToDateObject($time);
        $date = $date->subDays($before_no_of_days);
        return self::getFormattedTime($date, 'Y-m-d');
    }

    public static function getPreviousDateTime_fromCurrentTime($before_no_of_days): string
    {
        $date = Carbon::now();
        $date = $date->subDays($before_no_of_days);
        return self::getFormattedTime($date);
    }

    /**
     * @param $before_no_of_hours
     * @return string
     * @note substract number of hours from current time
     */
    public static function getPreviousDateTime_fromCurrentTime_byHours($before_no_of_hours, $format = 'Y-m-d H:i:s'): string
    {
        $date = Carbon::now();
        $date = $date->subHours($before_no_of_hours);
        return self::getFormattedTime($date, $format);
    }

    public static function getPreviousDate_fromCurrentTime($before_no_of_days): string
    {
        $date = Carbon::now();
        $date = $date->subDays($before_no_of_days);
        return self::getFormattedTime($date, 'Y-m-d');
    }

    public static function getPreviousDateTime_fromPassedTime_byMints($time, $before_no_of_minutes, $format = 'Y-m-d H:i:s'): string
    {
        $date = self::castToDateObject($time);
        $date = $date->subMinute($before_no_of_minutes);
        return self::getFormattedTime($date, $format);
    }

    /**
     * @param $before_no_of_hours
     * @return string
     * @note substract number of hours from current time
     */
    public static function getAfterDate_fromCurrentDateTime($after_no_of_days, $format = 'Y-m-d'): string
    {
        $date = Carbon::now();
        $date = $date->addDays($after_no_of_days);
        return self::getFormattedTime($date, $format);
    }

    public static function getFutureDate_fromPassedDate($after_no_of_days, $time): string
    {
        $date = self::castToDateObject($time);
        $date = $date->addDays($after_no_of_days);
        return self::getFormattedTime($date, 'Y-m-d');
    }

    public static function getFutureMonthAtomFormatDateTime_fromCurrentTime($after_no_of_months): string
    {
        $date = Carbon::now();
        $date = $date->addMonth($after_no_of_months);
        return self::getFormattedTime($date, \DateTimeInterface::ATOM);
    }

    public static function getFirstDateOfTheYear($format = 'Y-m-d', $time = '')
    {
        if (!empty($time)) {
            $date_obj = self::castToDateObject($time);
            return $date_obj->endOfYear()->format($format);
        }

        return Carbon::now()->startOfYear()->format($format);
    }

    public static function getEndDateOfTheYear($format = 'Y-m-d', $time = '')
    {
        if (!empty($time)) {
            $date_obj = self::castToDateObject($time);
            return $date_obj->endOfYear()->format($format);
        }

        return Carbon::now()->endOfYear()->format($format);
    }

    public static function getZoneConvertedDate($time, $to_zone, $from_zone = 'UTC')
    {
        $time .= " {$from_zone}";
        return Carbon::parse($time)->tz($to_zone);
    }

    public static function getTimeRelativeDifferent($start_time, $end_time)
    {
        $from = self::castToDateObject($start_time);
        $to = self::castToDateObject($end_time);
        return $to->shortRelativeDiffForHumans($from);
    }

    public static function getTimeAbsoluteDifferent($start_time, $end_time)
    {
        $from = self::castToDateObject($start_time);
        $to = self::castToDateObject($end_time);
        return $to->shortAbsoluteDiffForHumans($from);
    }

    public static function getNumberOfDaysDifferent($start_date, $end_date)
    {
        $from = self::castToDateObject($start_date);
        $to = self::castToDateObject($end_date);
        return $to->diffInDays($from);
    }

    public static function getFutureDates($days)
    {
        //Get date from today to next 7 days
        $date = self::getCurrentDateTime('Y-m-d');
        $period = CarbonPeriod::create($date, $days);
        $dates = [];
        foreach ($period as $key => $date) {
            if ($key === $days) {
                $period->invert()->start($date); // invert() is an alias for invertDateInterval()
            }

            $dates[] = $date->format('Y-m-d');
            
        }

        return $dates;
    }


    private static function castToDateObject($time)
    {
        if (!self::isObject($time)) return Carbon::parse($time);

        return $time;
    }

    private static function isObject($time)
    {
        return gettype($time) === 'object' ? true : false;
    }
}
