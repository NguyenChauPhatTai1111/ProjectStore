<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AiChatController extends Controller
{
    public function chat(Request $request)
    {
        $message = $request->message;

        $response = Http::post(
    'https://generativelanguage.googleapis.com/v1beta/models/gemini-flash-latest:generateContent?key='
    . env('GEMINI_API_KEY'),
    [
        'contents' => [
            [
                'role' => 'user',
                'parts' => [
                    [
                        'text' => "Bạn là trợ lý tư vấn sản phẩm nội thất. Câu hỏi: " . $message
                    ]
                ]
            ]
        ]
    ]
);
 

        $data = $response->json();

        $text = $data['candidates'][0]['content']['parts'][0]['text']
            ?? 'Không có phản hồi từ AI';

        return response()->json([
            'reply' => $text
        ]);
    }
}