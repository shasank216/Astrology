<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\AppBaseController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends AppBaseController
{
    public function getDataFromApi($span, $sign)
    {
        $apiEndpoint = "https://www.hamropatro.com/rashifal/{$span}?sign={$sign}";
        $apiResponse = Http::get($apiEndpoint);

        if ($apiResponse->successful()) {
            $data = $apiResponse->body(); // Get the API response as plain text or HTML
        } else {
            // Handle API request failure here, e.g., return an error message or fallback data
            $data = null;
        }

        return view('fronts/rasifal', compact('data'));
    }
}
