<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class AIAPIController extends Controller{
    public function AskAI (Request $request){
        $userMsg = $request->input('msg');

//https://laracasts.com/series/fun-with-openai-and-laravel/episodes/1

        $response = Http::withToken(config('services.openai.key'))->post('https://api.openai.com/v1/responses', [
            "model" => "gpt-4.1",
            "input" => $userMsg,
        ])->json();

        dd($response);
    }
}
