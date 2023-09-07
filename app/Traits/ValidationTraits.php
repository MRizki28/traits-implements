<?php

namespace App\Traits;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Validator;

trait ValidationTraits
{
    protected function dataValidation(array $data, array $validation)
    {
        $validator = Validator::make($data, $validation);
        if ($validator->fails()) {
            throw new HttpResponseException(response()->json([
                    'icon' => 'error',
                    'message' => 'check your validation',
                    'errors' => $validator->errors()
            ]));
        }
    }
}
