<?php

namespace App\Services;

class DeveloperService
{
    public function getProfile()
    {
        return [
            'name' => 'Abdelhay Mallouli',
            'role' => 'Full-Stack Developer',
            'biography' => 'I craft elegant and functional web experiences using modern technologies. Specializing in full-stack development with HTML, CSS, JavaScript, PHP, Laravel, and Tailwind CSS. Passionate about creating responsive, user-friendly applications that solve real-world problems.',
            'email' => 'abdelhay.mallouli@gmail.com',
        ];
    }
}