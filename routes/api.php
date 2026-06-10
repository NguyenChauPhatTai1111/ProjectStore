<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\AiChatController;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\Api\FavoriteMusicController;
use App\Http\Controllers\Api\OphimController;

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
    return Product::select('id', 'name', 'price', 'discount_price')->get();
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

Route::get('/users/{id}', function ($id) {
    return User::select(
        'id',
        'name',
        'email',
        'role',
        'password'
    )->findOrFail($id);
});

Route::get('/products/{id}', function ($id) {

    $product = Product::findOrFail($id);

    return [
        'id' => $product->id,
        'name' => $product->name,
        'price' => $product->price,
        'quantity' => $product->quantity,
        'discount_price' => $product->discount_price,
        'image' => $product->image,
        'image_url' => $product->image
            ? asset('storage/' . $product->image)
            : null,
    ];
});

Route::patch('/users/{id}', function (Request $request, $id) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'role' => 'required|string',
        'password' => 'nullable|min:6',
    ]);

    $user = User::findOrFail($id);

    $data = [
        'name'  => $request->name,
        'email' => $request->email,
        'role'  => $request->role,
    ];

    if ($request->filled('password')) {
        $data['password'] = $request->password; // ✔ Laravel auto hash
    }
    $user->update($data);

    return response()->json([
        'success' => true,
        'data' => $user,
    ]);
});

Route::post('/users', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'role' => 'required|string',
        'password' => 'required|min:6',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'role' => $request->role,
        'password' => Hash::make($request->password), // luôn hash mật khẩu
    ]);

    return response()->json([
        'success' => true,
        'message' => 'User created successfully',
        'data' => [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'role' => $user->role,
        ]
    ], 201);
});

Route::post('/chat', [AiChatController::class, 'chat']);

Route::post('/products', function (Request $request) {

    $request->validate([
        'name' => 'required',
        'price' => 'required|numeric',
        'slug' => 'required|unique:products,slug',
        'quantity' => 'required|integer',
        'image' => 'nullable|image|max:2048',
    ]);

    $imagePath = null;

    if ($request->hasFile('image')) {
        $imagePath = $request
            ->file('image')
            ->store('products', 'public');
    }

    $product = Product::create([
        'name' => $request->name,
        'price' => $request->price,
        'slug' => Str::slug($request->name),
        'quantity' => $request->quantity,
        'image' => $imagePath,
    ]);

    return response()->json([
        'success' => true,
        'data' => $product,
    ]);
});

Route::get(
    '/music/search',
    [MusicController::class, 'search']
);

Route::get('/music/chart', [MusicController::class, 'chart']);


Route::middleware('auth.token')->group(function () {

    Route::get('/favorite-music', [FavoriteMusicController::class, 'index']);

    Route::post('/favorite-music', [FavoriteMusicController::class, 'store']);

    Route::delete('/favorite-music/{id}', [FavoriteMusicController::class, 'destroy']);

});



Route::get('/movies', [OphimController::class, 'movies']);
Route::get('/movies/search', [OphimController::class, 'search']);
Route::get('/movies/country/{country}', [OphimController::class, 'country']);
Route::get(
    '/movies/category/{category}',
    [OphimController::class, 'category']
);
Route::get('/movies/{slug}', [OphimController::class, 'detail']);