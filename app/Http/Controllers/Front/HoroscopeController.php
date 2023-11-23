<?php

namespace App\Http\Controllers\Front;

// app/Http/Controllers/HoroscopeController.php
// namespace App\Http\Controllers;
use App\Http\Controllers\AppBaseController;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HoroscopeController extends AppBaseController
{
    public function getHoroscope(Request $request)

    {
        $span = $request->input('span');
        $sign = $request->input('sign');

        // Make the HTTP request to the external API
        $client = new Client();
        $response = $client->get("https://www.hamropatro.com/rashifal/{$span}?sign={$sign}");
        // dd($response);
        // dd($response->getBody()->getContents());

        // Parse the JSON response
        $data = json_decode($response->getBody(), true);
        // dd($data);

        // Pass the data to the Blade view
        return view('fronts/horoscope', ['data' => $response->getBody()->getContents()]);

        // Check if the API request was successful (status code 200)
    }

    // public function getHoroscope(Request $request)
    // {
    //     // ...

    //     $span = $request->input('span');
    //     $sign = $request->input('sign');

    //     // Make the HTTP request to the external API
    //     $client = new Client();
    //     $response = $client->get("https://www.hamropatro.com/rashifal/{$span}?sign={$sign}");
    //     return $response;

    //     // Check if the API request was successful (status code 200)
    //     if ($response->getStatusCode() === 200) {
    //         $data = $response->getBody()->getContents();
    //         // dd($data);

    //         // Check if the data is not empty and is valid JSON
    //         if (!empty($data) && is_json($data)) {
    //             $data = json_decode($data, true);

    //             // Pass the data to the Blade view
    //             return view('fronts/horoscope', ['data' => $data]);
    //         } else {
    //             // Handle the case when the API response is not valid JSON or empty
    //             return view('fronts/horoscope', ['message' => 'Invalid API response']);
    //         }
    //     }
    // }
}



