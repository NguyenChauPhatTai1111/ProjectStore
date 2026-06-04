<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;
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

Route::get('/users/{id}', function ($id) {
    return User::select(
        'id',
        'name',
        'email',
        'role',
        'password'
    )->findOrFail($id);
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