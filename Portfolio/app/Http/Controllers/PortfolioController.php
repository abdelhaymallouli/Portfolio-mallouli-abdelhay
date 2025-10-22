<?php

namespace App\Http\Controllers;

use App\Services\DeveloperService;
use App\Services\ProjectService;

class PortfolioController extends Controller
{
    protected $developerService;
    protected $projectService;

    public function __construct(DeveloperService $developerService, ProjectService $projectService)
    {
        $this->developerService = $developerService;
        $this->projectService = $projectService;
    }

    public function home()
    {
        $profile = $this->developerService->getProfile();

        return view('home', compact('profile'));
    }

    public function projects()
    {
        $projects = $this->projectService->getProjects();

        return view('projects', compact('projects'));
    }

    public function projectShow($id)
    {
        $project = $this->projectService->getProjectById($id);
        if (!$project) {
            abort(404);
        }
        return view('project.show', compact('project'));
    }

    public function about()
    {
        $profile = $this->developerService->getProfile();
        return view('about', compact('profile'));   
    }
}