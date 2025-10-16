<?php

namespace App\Http\Controllers;

use App\Services\DeveloperService;

class PortfolioController extends Controller
{
    public function index(DeveloperService $developerService)
    {
        $profile = $developerService->getProfile();

        return view('home', ['profile' => $profile]);
    }
}