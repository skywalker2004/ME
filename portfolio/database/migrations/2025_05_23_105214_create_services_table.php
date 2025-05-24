<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('services')) {
            Schema::create('services', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('subtitle');
                $table->text('benefits');
                $table->timestamps();
            });
        }

        // Seed the services table
        if (Schema::hasTable('services')) {
            \App\Models\Service::truncate(); // Clear existing data to avoid duplicates
            \App\Models\Service::create([
                'title' => 'Full-Stack Web Development',
                'subtitle' => 'Launch scalable apps with cutting-edge technology.',
                'benefits' => 'Custom websites & Laravel-powered platforms;RESTful APIs and dynamic dashboards;Secure database design and integration;Real-time features and payment gateways',
            ]);
            \App\Models\Service::create([
                'title' => 'Android App Development',
                'subtitle' => 'Transform ideas into powerful mobile experiences.',
                'benefits' => 'Native apps with intuitive UX design;Firebase/SQLite backend solutions;API integration and push notifications;Ready for Google Play deployment',
            ]);
            \App\Models\Service::create([
                'title' => 'Web Design & UI/UX',
                'subtitle' => 'Design pixel-perfect sites that captivate and convert.',
                'benefits' => 'Mobile-first, responsive layouts;TailwindCSS and Figma prototypes;Animated UI components;SEO-optimized performance',
            ]);
            \App\Models\Service::create([
                'title' => 'Logo & Brand Identity Design',
                'subtitle' => 'Craft memorable brands that stand out.',
                'benefits' => 'Unique, custom logo concepts;Comprehensive brand guidelines;Custom typography and icons;Scalable visual identities',
            ]);
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
