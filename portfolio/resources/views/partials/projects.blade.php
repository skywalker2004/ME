<section id="projects" class="py-20 bg-gradient-to-br from-gray-50 to-gray-200 dark:from-gray-800 dark:to-gray-900">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-center mb-12" data-aos="fade-up">My Projects</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            @php
                $projectsData = [
                    ['title' => 'AI-Integrated Portfolio Assistant', 'image' => 'project1.jpg', 'description' => 'A Laravel-based portfolio with OpenAI API for dynamic content generation.'],
                    ['title' => 'SaaS Dashboard UI', 'image' => 'project2.jpg', 'description' => 'A responsive dashboard for SaaS applications using Laravel and Tailwind CSS.'],
                    ['title' => 'Booking App with Livewire', 'image' => 'project3.jpg', 'description' => 'A real-time booking app built with Laravel and Livewire for seamless user experience.'],
                    ['title' => 'Real Estate Template', 'image' => 'project4.jpg', 'description' => 'A modern real estate template with advanced search and filtering features.'],
                    ['title' => 'E-commerce Platform', 'image' => 'project5.jpg', 'description' => 'A scalable e-commerce solution with Laravel, featuring payment gateways.'],
                    ['title' => 'Crypto Tracker Dashboard', 'image' => 'project6.jpg', 'description' => 'A finance dashboard tracking cryptocurrency prices in real-time.'],
                ];
            @endphp
            @foreach($projectsData as $index => $project)
                <div class="project-card relative bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-300 overflow-hidden" data-aos="fade-up" data-aos-delay="{{ $index * 200 }}">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary to-secondary opacity-10"></div>
                    <img src="{{ asset('images/' . $project['image']) }}" alt="{{ $project['title'] }}" class="w-full h-48 object-cover rounded-t-xl" loading="lazy">
                    <div class="relative z-10">
                        <h3 class="text-xl sm:text-2xl font-semibold mt-4">{{ $project['title'] }}</h3>
                        <p class="text-gray-600 dark:text-gray-300 mt-2">{{ $project['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
