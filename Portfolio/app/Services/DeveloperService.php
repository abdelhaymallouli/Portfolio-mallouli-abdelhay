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
            'bio' => 'I’m a passionate developer specializing in creating scalable, user-friendly web applications using modern technologies like Laravel, PHP, JavaScript, and Tailwind CSS.',
            'email' => 'abdelhay.mallouli@gmail.com',
            'socials' => [
                ['platform' => 'GitHub', 'url' => 'https://github.com/abdelhaymallouli'],
                ['platform' => 'LinkedIn', 'url' => 'https://www.linkedin.com/in/abdelhaymallouli'],
                ['platform' => 'X', 'url' => 'https://x.com/Abdel7ay_mll'],
            ],
        ];
    }

    public function getSkills()
    {
        return [
            'frontend' => [
                ['name' => 'HTML5', 'level' => 95],
                ['name' => 'CSS3 / Tailwind', 'level' => 90],
                ['name' => 'JavaScript', 'level' => 85],
                ['name' => 'React', 'level' => 82],
                ['name' => 'bootstrap', 'level' => 75],
                ['name' => 'tailwind', 'level' => 85],

            ],
            'backend' => [
                ['name' => 'PHP', 'level' => 88],
                ['name' => 'Laravel', 'level' => 85],
                ['name' => 'MySQL', 'level' => 80],
                ['name' => 'Node.js', 'level' => 70],
                ['name' => 'Python', 'level' => 85],
                ['name' => 'Django', 'level' => 78],
            ],
            'others' => [
                'Git & GitHub', 'REST APIs', 'Responsive Design', 'Agile Methodology',
            ],
        ];
    }
}