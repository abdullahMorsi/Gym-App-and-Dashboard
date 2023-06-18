<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

use Illuminate\Support\Facades\Http;

Route::post('/prediction', function () {
    // The URL of the Flask app
    $url = 'https://coachai-5cjp.onrender.com/predict';

    // The input data for prediction as an associative array
    $data = [
        "weight" => 70,
        "height" => 170,
        "bmi" => 24.2,
        "age" => 35,
        "gender" => 1,
        "fat_percent" => 18.5
    ];

    // Send the POST request to the Flask app using Laravel's HTTP client
    $response = Http::post($url, $data);

    // Check if the request was successful
    if ($response->successful()) {
        // Get the prediction from the response
        $prediction = $response->json()['prediction'];

        // Return the prediction as the API response
        return response()->json(['prediction' => $prediction]);
    } else {
        // Return an error response if the request was unsuccessful
        return response()->json(['error' => 'Failed to make the request'], 500);
    }
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
