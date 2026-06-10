<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class OphimService
{
    protected string $baseUrl = 'https://ophim1.com';

    public function getMovies($page = 1)
    {
        return Http::get(
            "{$this->baseUrl}/danh-sach/phim-moi-cap-nhat",
            [
                'page' => $page,
            ]
        )->json();
    }

    public function getMovieDetail($slug)
    {
        return Http::get(
            "{$this->baseUrl}/phim/{$slug}"
        )->json();
    }

    public function searchMovies(string $keyword, int $page = 1)
    {
        return Http::get(
            'https://ophim1.com/v1/api/tim-kiem',
            [
                'keyword' => $keyword,
                'page' => $page,
            ]
        )->json();
    }
    
    public function getMoviesByCategory(
        string $category,
        int $page = 1
    ) {
        return Http::get(
            "https://ophim1.com/v1/api/the-loai/{$category}",
            [
                'page' => $page,
            ]
        )->json();
    }
}