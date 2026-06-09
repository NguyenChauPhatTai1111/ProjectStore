<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FavoriteMusic;
use Illuminate\Http\Request;

class FavoriteMusicController extends Controller
{

    public function index(Request $request)
{
    $user = $request->user();

    $data = FavoriteMusic::where('user_id', $user->id)
        ->latest()
        ->get();

    return response()->json([
        'data' => $data,
        'total' => $data->count(),
    ]);
}

    public function store(Request $request)
    {
        $favorite = FavoriteMusic::firstOrCreate(
            [
                'user_id' => $request->user()->id,
                'track_id' => $request->track_id,
            ],
            [
                'title' => $request->title,
                'artist' => $request->artist,
                'cover' => $request->cover,
                'preview' => $request->preview,
            ]
        );

        return response()->json([
            'message' => 'Added to favorites',
            'data' => $favorite,
        ]);
    }

    public function destroy($id, Request $request)
    {
        FavoriteMusic::where('id', $id)
            ->where('user_id', $request->user()->id)
            ->delete();

        return response()->json([
            'message' => 'Removed',
        ]);
    }
}