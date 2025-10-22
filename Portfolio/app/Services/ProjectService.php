<?php 

namespace App\Services;

class ProjectService
{
    protected $technologiesService;

    public function __construct(TechnologiesService $technologiesService)
    {
        $this->technologiesService = $technologiesService;
    }
    public function getProjects()
    {
        return [
            [
                'id' => 1,
                'title' => 'Restaurant-of-Tangier',
                'description' => 'A dynamic web application showcasing restaurants in Tangier, with features like detailed pages, admin panel, and search. ',
                'image' => 'https://github.com/abdelhaymallouli/Restaurant-of-Tangier/blob/main/screenshots/homepage.png',
                'technologies' => [2, 1, 3, 12],
            ],
            [
                'id' => 2,
                'title' => 'cart-shopping',
                'description' => 'A responsive dessert shop webpage: browse items, simulate adding to cart, with a modern UI. ',
                'image' => 'https://github.com/abdelhaymallouli/cart-shopping/blob/main/assets/screenshot1.png',
                'technologies' => [2, 1, 3],
            ],
            [
                'id' => 3,
                'title' => 'WeatherWise',
                'description' => 'A weather application built with Tkinter (Python) to fetch and show weather for locations worldwide. ',
                'image' => 'https://raw.githubusercontent.com/abdelhaymallouli/WeatherWise/refs/heads/main/screenshots/logo.png',
                'technologies' => [7, 13, 12],
            ],
            [
                'id' => 4,
                'title' => 'WordHaven-Bookstore',
                'description' => 'An interactive and dynamic bookstore web application that fetches books from a JSON file, displays them with animations, allows users to add books to a wishlist, view detailed information, and explore related books by category.. ',
                'image' => 'https://raw.githubusercontent.com/abdelhaymallouli/WordHaven-Bookstore/refs/heads/main/imgs/preview.png',
                'technologies' => [2, 1, 3],
            ],
            [
                'id' => 5,
                'title' => 'restaurant-ordering-system',
                'description' => 'PHP-based web app for online food ordering: browse menu, add to cart, checkout, with admin panel etc. ',
                'image' => 'https://images.unsplash.com/photo-1526779259212-939e64788e3c?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8ZnJlZSUyMGltYWdlc3xlbnwwfHwwfHx8MA%3D%3D&fm=jpg&q=60&w=3000',
                'technologies' => [4, 6, 1, 2, 3],
            ],
            [
                'id' => 6,
                'title' => 'Event-management-of-a-cultural-association',
                'description' => 'A PHP web app for browsing, filtering, and booking event tickets. Users can register, login, book and manage tickets. ',
                'image' => 'https://images.unsplash.com/photo-1526779259212-939e64788e3c?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8ZnJlZSUyMGltYWdlc3xlbnwwfHwwfHx8MA%3D%3D&fm=jpg&q=60&w=3000',
                'technologies' => [4, 6, 1, 2, 3],
            ],
        ];

        foreach($projects as &$project) {
            $project['technologies'] = $this->technologiesService->getNamesByIds($project['technologies']);
        }
        return $projects;
    }

    public function getProjectById($id)
    {
        $projects = $this->getProjects();
        foreach ($projects as $project) {
            if ($project['id'] == $id) {
                return array_merge($project, [
                    'details' => "This project showcases {$project['title']} with advanced features like user authentication, real-time data processing, and a responsive UI.",
                    'features' => [
                        ['name' => 'User Authentication', 'description' => 'Secure login and registration system.'],
                        ['name' => 'Responsive Design', 'description' => 'Optimized for all devices.'],
                    ],
                ]);
            }
        }
        return null;
    }
}