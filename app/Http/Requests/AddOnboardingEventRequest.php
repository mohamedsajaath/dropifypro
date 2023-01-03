<?php

namespace App\Http\Requests;

use App\Helper\Service\Admin\OnboardingService;
use App\Helper\Utility\DateTimeUtility;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class AddOnboardingEventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'date' => ['required', 'date'],
            'start_time' => ['required', 'date_format:H:i'],
            'end_time' => ['required', 'date_format:H:i'],
        ];
    }

    public function withValidator(Validator $validator)
    {
        if ($validator->fails()) return;

        $validator->after(function (Validator $validator) {
            $startTime = DateTimeUtility::getFormattedTime($this->start_time, 'H:i:s');
            $endTime = DateTimeUtility::getFormattedTime($this->end_time, 'H:i:s');
            if (OnboardingService::doesEventExists($this->date, $startTime, $endTime))
            {
                $validator->errors()->add('date', 'This event is over lapping with other existing events.');
            }

        });
    }
}
