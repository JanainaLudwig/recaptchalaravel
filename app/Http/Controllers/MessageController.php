<?php

namespace App\Http\Controllers;

use App\Rules\ReCAPTCHAv3;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
            'grecaptcha' => ['required', new ReCAPTCHAv3],
        ]);

        // TODO

        return response()->json('Message sent.');
    }
}
