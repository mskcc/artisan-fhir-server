<?php

namespace App;

use Illuminate\Http\Request;
use Spatie\HttpLogger\LogProfile;

class LogHttpRequests implements LogProfile
{
    public function shouldLogRequest(Request $request): bool
    {
        return in_array(strtolower($request->method()), ['post', 'get', 'put', 'patch', 'delete']);
    }
}
