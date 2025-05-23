<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Testimonial;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'title' => 'SmartFarm Android App',
            'description' => 'Native Android app that helps farmers track crop progress, fertilizer usage, and market trends. Built using Kotlin with Firebase backend.',
            'technologies' => 'Kotlin, Firebase',
            'image' => 'projects/smartfarm.jpg',
        ]);

        Project::create([
            'title' => 'Laravel Blog CMS',
            'description' => 'A full-featured content management system built with Laravel, supporting markdown editing, role-based access control, and SEO-ready posts.',
            'technologies' => 'Laravel, MySQL, TailwindCSS',
            'image' => 'projects/blog-cms.jpg',
        ]);

        Project::create([
            'title' => 'Online Portfolio Website',
            'description' => 'Personal responsive website showcasing my skills, projects, and services. Built using Laravel Blade and TailwindCSS with admin panel for content management.',
            'technologies' => 'Laravel, TailwindCSS, MySQL',
            'image' => 'projects/portfolio.jpg',
        ]);

        Project::create([
            'title' => 'Brand Identity for AgroTech',
            'description' => 'Complete logo and brand package designed in Adobe Illustrator and Figma for an agri-tech startup, including brand guidelines.',
            'technologies' => 'Figma, Adobe Illustrator',
            'image' => 'projects/agrotech.jpg',
        ]);

        Project::create([
            'title' => 'E-commerce Storefront',
            'description' => 'Laravel-powered e-commerce system with product management, cart, Stripe payments, and admin dashboard.',
            'technologies' => 'Laravel, Stripe, TailwindCSS',
            'image' => 'projects/ecommerce.jpg',
        ]);

        Project::create([
            'title' => 'Job Board Platform',
            'description' => 'A job listing and application system built in Laravel with employer/jobseeker portals, notifications, and application tracking.',
            'technologies' => 'Laravel, MySQL, TailwindCSS',
            'image' => 'projects/jobboard.jpg',
        ]);

        Service::create([
            'title' => 'Web Development',
            'description' => 'Custom Laravel/React websites with responsive design and scalable backends.',
            'icon' => 'icons/web-dev.png',
        ]);

        Service::create([
            'title' => 'Android App Development',
            'description' => 'Native Android apps using Kotlin/Java with robust functionality.',
            'icon' => 'icons/android.png',
        ]);

        Service::create([
            'title' => 'UI/UX Design',
            'description' => 'Prototypes, wireframes, and high-fidelity mockups in Figma.',
            'icon' => 'icons/uiux.png',
        ]);

        Service::create([
            'title' => 'Logo Design & Branding',
            'description' => 'Unique logos and brand guides created in Adobe Illustrator and Figma.',
            'icon' => 'icons/branding.png',
        ]);

        Skill::create([
            'name' => 'Laravel',
            'proficiency' => 90,
        ]);

        Skill::create([
            'name' => 'Kotlin',
            'proficiency' => 85,
        ]);

        Skill::create([
            'name' => 'Java',
            'proficiency' => 80,
        ]);

        Skill::create([
            'name' => 'MySQL',
            'proficiency' => 85,
        ]);

        Skill::create([
            'name' => 'TailwindCSS',
            'proficiency' => 90,
        ]);

        Skill::create([
            'name' => 'Figma',
            'proficiency' => 95,
        ]);

        Skill::create([
            'name' => 'Adobe Illustrator',
            'proficiency' => 90,
        ]);

        Testimonial::create([
            'name' => 'John Doe',
            'feedback' => 'Kelvin delivered an exceptional app for our startup. Highly professional and creative!',
            'avatar' => 'testimonials/john.jpg',
        ]);

        Testimonial::create([
            'name' => 'Jane Smith',
            'feedback' => 'The branding package Kelvin created was stunning and perfectly aligned with our vision.',
            'avatar' => 'testimonials/jane.jpg',
        ]);

        Testimonial::create([
            'name' => 'Mike Johnson',
            'feedback' => 'Kelvin’s Laravel expertise made our e-commerce platform seamless and scalable.',
            'avatar' => 'testimonials/mike.jpg',
        ]);
    }
}
