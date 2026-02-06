<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class AIAPIController extends Controller{
    public function AskAI (Request $request){
        $userMsg = $request->input('msg');

        //https://laravel.com/docs/12.x/http-client
        //https://laravel.com/docs/12.x/responses#json-responses
        //https://ai.google.dev/gemini-api/docs/quickstart#rest

        $response = Http::withHeaders([
                "x-goog-api-key" => config('services.gemini.key')
            ])->post('https://generativelanguage.googleapis.com/v1beta/models/gemini-3-flash-preview:generateContent', [
                "contents" => [
                    "parts" =>[
                        "text" => "Please describe a suit of gothic armour"//$userMsg,
                    ],
                ],
        ])->json();

        //var_dump($response["candidates"]);
        dd($response);
        dd($response["candidates"][0]);
    }
}
