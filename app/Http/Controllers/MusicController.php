<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MusicController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->get('q', 'pop');

        $response = Http::get(
            'https://api.deezer.com/search',
            [
                'q' => $keyword,
            ]
        );

        return response()->json(
            $response->json()
        );
    }

    public function chart()
    {
        $response = Http::get(
            'https://api.deezer.com/chart/0/tracks'
        );

        return response()->json(
            $response->json()
        );
    }
}