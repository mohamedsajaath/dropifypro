<?php

namespace App\Http\Controllers;

trait ResponseWrapper
{
    protected static function response($message, $errors = [], $status_code = 200)
    {
        return response()->json(['message' => $message, 'errors' => $errors], $status_code);
    }
}
