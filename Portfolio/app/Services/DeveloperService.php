<?php

namespace App\Services;

class DeveloperService
{
    public function getProfile()
    {
        return [
            'name' => 'Mallouli Abdelhay',
            'title' => 'Full-Stack Web Developer',
            'location' => 'Morocco',
            'bio' => 'I’m a passionate developer specializing in creating scalable, user-friendly web applications using modern technologies.',
            'bio2' => 'I’m a passionate full-stack developer who builds modern, scalable, and user-focused web applications. I have strong expertise in HTML, CSS, JavaScript, and TypeScript, crafting clean and responsive user interfaces with React. On the backend, I develop powerful APIs and dynamic systems using PHP (Laravel) and Python (Django).
I’m also experienced with MySQL, MariaDB, and RESTful API integration. I frequently work with Tailwind CSS, Bootstrap, and Sass to design polished frontends, and I use Node.js and npm for development tooling. My projects demonstrate practical knowledge of MVC architecture, authentication systems, and data-driven dashboards.',
            'email' => 'abdelhay.mallouli@gmail.com',
            'image' => '../../images/profile.jpg',
            'socials' => [
                ['platform' => 'GitHub', 'url' => 'https://github.com/abdelhaymallouli'],
                ['platform' => 'LinkedIn', 'url' => 'https://www.linkedin.com/in/abdelhaymallouli'],
                ['platform' => 'X', 'url' => 'https://x.com/Abdel7ay_mll'],
            ],
        ];
    }
}