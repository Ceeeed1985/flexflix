<?php

namespace App\Http\Controllers\Client;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Services\TMDBService;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    protected $tmdbService;

    public function __construct(TMDBService $tmdbService)
    {
        $this->tmdbService = $tmdbService;
    }

    public function index(): View
    {
        $popularMovies = $this->tmdbService->getPopularMovies();
        $upcomingMovies = $this->tmdbService->getUpcomingMovies();
        return view('Clients.index', compact('popularMovies', 'upcomingMovies'));
    }
}
