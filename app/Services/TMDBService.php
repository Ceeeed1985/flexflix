<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TMDBService
{
    protected $baseUrl;
    protected $apiKey;

    public function __construct()
    {
        $this->baseUrl = config('services.tmdb.base_url');
        $this->apiKey = config('services.tmdb.api_key');
    }

    public function getPopularMovies()
    {
        $response = Http::withOptions([
            'verify' => false,  // Désactive la vérification SSL temporairement
        ])->get("{$this->baseUrl}/movie/popular", [
            'api_key' => $this->apiKey,
            'language' => 'fr-FR',
        ]);

        if ($response->successful()) {
            return $response->json()['results'];
        }

        return [];
    }

    public function getUpcomingMovies()
    {
        $response = Http::withOptions([
            'verify' => false,  // Désactive la vérification SSL temporairement
        ])->get("{$this->baseUrl}/movie/upcoming", [
            'api_key' => $this->apiKey,
            'language' => 'fr-FR',
        ]);

        if ($response->successful()) {
            return $response->json()['results'];
        }

        return [];
    }

    public function searchMovies($query)
    {
        $response = Http::withOptions([
            'verify' => false,  // Désactive la vérification SSL temporairement
        ])->get("{$this->baseUrl}/search/movie", [
            'api_key' => $this->apiKey,
            'query' => $query,
            'language' => 'fr-FR',
        ]);

        if ($response->successful()) {
            return $response->json()['results'];
        }

        return [];
    }
}
