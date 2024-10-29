<?php

namespace App\Http\Validators;

use Illuminate\Http\Request;
use Validator;

class FoundersLaunchValidator
{
    public function validate(Request $request): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($request->all(), [
            'first_name' => 'required|string|min:3|max:50',
            'last_name' => 'required|string|min:3|max:50',
            'email' => 'required|string|email|min:6|max:128'
        ]);
    }
}
