<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index($userId)
    {
        return view('chat.index', compact('userId'));
    }

    public function fetch($userId)
    {
        $authId = auth()->id();

        if (!$authId) {
            return response()->json([], 401);
        }

        return Message::where(function ($q) use ($userId, $authId) {
                $q->where('sender_id', $authId)
                ->where('receiver_id', $userId);
            })
            ->orWhere(function ($q) use ($userId, $authId) {
                $q->where('sender_id', $userId)
                ->where('receiver_id', $authId);
            })
            ->orderBy('id')
            ->get();
    }

    public function send(Request $request)
    {
        $authId = Auth::id();

        if (!$authId) {
            return response()->json(['status' => false, 'message' => 'Unauthorized'], 401);
        }

        $request->validate([
            'receiver_id' => 'required|integer|exists:users,id',
            'message' => 'required|string|max:1000',
        ]);

        Message::create([
            'sender_id' => $authId,
            'receiver_id' => $request->receiver_id,
            'message' => $request->message,
        ]);

        return response()->json(['status' => true]);
    }
}
