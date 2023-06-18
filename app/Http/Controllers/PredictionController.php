<?php

namespace App\Http\Controllers;
//use Illuminate\Http\Request;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class PredictionController extends Controller
{

//    public function predict()
//    {
//        // The URL of the Flask app
//        $url = 'https://coachai-5cjp.onrender.com/predict';
//
//        // The input data for prediction as an associative array
//        $data = [
//            "weight" => 70,
//            "height" => 170,
//            "bmi" => 24.2,
//            "age" => 35,
//            "gender" => 1,
//            "fat_percent" => 18.5
//        ];
//
//        // Create a GuzzleHTTP client instance
//        $client = new Client();
//
//        try {
//            // Send the POST request to the Flask app
//            $response = $client->post($url, [
//                'json' => $data
//            ]);
//
//            // Get the prediction from the response
//            $prediction = json_decode($response->getBody(), true)['prediction'];
//
//            // Return the prediction
//            return response()->json(['prediction' => $prediction]);
//        } catch (\Exception $e) {
//            // Handle any errors that occurred during the request
//            return response()->json(['error' => 'Failed to make the request'],500);
//            }
//    }

    public function predict(Request $request)
    {
        // Get the data from the request
//        $data = $request->all();
        $height = (int)$request->height;
        $weight = (int)$request->weight;
        $gender = (int)$request->gender;
        $age = (int)$request->age;
        $bmi = ($weight / (($height*$height)/10000));
        $fat_percent = (1.2 * $bmi) + (0.23 * $age) - (10.8 * $gender) - 5.4;

        $data = [
            "weight" => $weight,
            "height" => $height,
            "bmi" => $bmi,
            "age" => $age,
            "gender" => $gender,
            "fat_percent" => $fat_percent
        ];

        // Send a POST request to the Flask API
        $response = Http::post('https://coachai-5cjp.onrender.com/predict', $data);

        if ($response->successful()) {
            $prediction = $response->json();

            $result = implode("", $prediction);
            return view("prediction",["prediction"=>$result] );

        } else {
            $errorMessage = $response->body();

            return response()->json(['error' => $errorMessage], $response->status());
        }
    }
}

