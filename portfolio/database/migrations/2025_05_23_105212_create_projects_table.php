<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('projects')) {
            Schema::create('projects', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->text('description');
                $table->string('image');
                $table->string('technologies');
                $table->string('url');
                $table->timestamps();
            });
        }

        // Seed the projects table
        if (Schema::hasTable('projects')) {
            \App\Models\Project::truncate(); // Clear existing data to avoid duplicates
            \App\Models\Project::create([
                'title' => 'E-Commerce Platform',
                'description' => 'A fully responsive e-commerce platform with secure payment integration.',
                'image' => 'project1.webp',
                'technologies' => 'Laravel, TailwindCSS, Stripe',
                'url' => 'https://example.com/ecommerce',
            ]);
            \App\Models\Project::create([
                'title' => 'Task Management App',
                'description' => 'A mobile app for managing tasks with real-time notifications.',
                'image' => 'project2.webp',
                'technologies' => 'Kotlin, Firebase, Android',
                'url' => 'https://example.com/taskapp',
            ]);
            \App\Models\Project::create([
                'title' => 'Portfolio Website',
                'description' => 'A sleek portfolio website with modern animations.',
                'image' => 'project3.webp',
                'technologies' => 'Laravel, TailwindCSS, GSAP',
                'url' => 'https://example.com/portfolio',
            ]);
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
