<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::get('/hello', function () {
    return response()->json([
        'message' => 'API working!'
    ]);
});


Route::get('/users', function () {
    return User::select('id', 'name', 'email', 'role')->get();
});

Route::get('/products', function () {
    return Product::select('id', 'name', 'price')->get();
});

Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);


    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        return response()->json([
            'success' => false,
            'message' => 'Email hoặc mật khẩu không đúng',
        ], 401);
    }

    return response()->json([
        'success' => true,
        'token' => base64_encode($user->id . '|' . now()),
        'user' => [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
        ]
    ]);
});


