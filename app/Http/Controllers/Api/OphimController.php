<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\OphimService;
use Illuminate\Support\Facades\Http;

class OphimController extends Controller
{
      public function movies(Request $request, OphimService $ophim)
    {
        $page = $request->page ?? 1;

        return response()->json(
            $ophim->getMovies($page)
        );
    }

    public function detail($slug, OphimService $ophim)
    {
        return response()->json(
            $ophim->getMovieDetail($slug)
        );
    }

   public function country(string $country, Request $request)
    {
        $page = $request->get('page', 1);

        $response = Http::get(
            "https://ophim1.com/v1/api/quoc-gia/{$country}",
            [
                'page' => $page,
            ]
        );

        return response()->json(
            $response->json()
        );
    }

    public function search(Request $request, OphimService $ophim)
    {
        return response()->json(
            $ophim->searchMovies(
                $request->keyword,
                $request->page ?? 1
            )
        );
    }

    public function category(
        string $category,
        Request $request,
        OphimService $ophim
    ) {
        return response()->json(
            $ophim->getMoviesByCategory(
                $category,
                $request->get('page', 1)
            )
        );
    }
    
}
