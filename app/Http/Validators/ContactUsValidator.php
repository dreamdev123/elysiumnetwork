<?php

namespace App\Http\Validators;

use Illuminate\Http\Request;
use Validator;

class ContactUsValidator
{
    public function validate(Request $request): \Illuminate\Validation\Validator
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|min:3|max:50',
            'last_name' => 'required|string|min:3|max:50',
            'email' => 'required|string|email|min:6|max:128',
            'phone' => 'required|string|max:17',
            'message' => 'required|string|min:8|max:512',
        ]);

        return $validator;
    }
}
