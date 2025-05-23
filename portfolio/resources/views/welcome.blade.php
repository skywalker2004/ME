@extends('layouts.app')

@section('content')
    <!-- Hero Section with Parallax -->
    <section id="home" class="min-h-screen flex items-center relative overflow-hidden hero-bg">
        <div class="absolute inset-0 bg-gradient-to-r from-primary to-secondary opacity-90 z-0"></div>
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center relative z-10" data-aos="fade-up">
            <div class="md:w-1/2 text-white">
                <h1 class="text-4xl md:text-6xl font-bold mb-4" data-aos="fade-right" data-aos-delay="100">Kelvin Kiprono</h1>
                <p class="text-xl mb-6" data-aos="fade-right" data-aos-delay="200">Crafting Scalable Apps, Intuitive Interfaces & Iconic Brands</p>
                <div class="space-x-4" data-aos="fade-right" data-aos-delay="300">
                    <a href="/storage/cv.pdf" class="cta-button bg-white text-primary px-6 py-3 rounded-full hover:bg-gray-200 transition-colors">Download CV</a>
                    <a href="#contact" class="cta-button bg-transparent border-2 border-white px-6 py-3 rounded-full hover:bg-white hover:text-primary transition-colors">Hire Me</a>
                    <a href="#projects" class="cta-button bg-transparent border-2 border-white px-6 py-3 rounded-full hover:bg-white hover:text-primary transition-colors">View Projects</a>
                </div>
            </div>
            <div class="md:w-1/2 mt-8 md:mt-0" data-aos="fade-left" data-aos-delay="400">
                <img src="/storage/avatar.jpg" alt="Kelvin Kiprono" class="rounded-full w-64 h-64 mx-auto object-cover shadow-lg lazy" loading="lazy">
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-white dark:bg-gray-800">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center" data-aos="fade-up">About Me</h2>
            <p class="text-lg mb-6 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">I'm Kelvin Kiprono — a passionate full-stack software developer, Android developer, web designer, and logo designer. I specialize in creating intuitive and impactful digital solutions for businesses and individuals. From sleek UIs to scalable backend systems and branding assets, I bring ideas to life with code and creativity.</p>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center hover:scale-110 transition-transform"><img src="/storage/icons/laravel.png" alt="Laravel" class="w-12 mx-auto"><p>Laravel</p></div>
                <div class="text-center hover:scale-110 transition-transform"><img src="/storage/icons/kotlin.png" alt="Kotlin" class="w-12 mx-auto"><p>Kotlin</p></div>
                <div class="text-center hover:scale-110 transition-transform"><img src="/storage/icons/java.png" alt="Java" class="w-12 mx-auto"><p>Java</p></div>
                <div class="text-center hover:scale-110 transition-transform"><img src="/storage/icons/mysql.png" alt="MySQL" class="w-12 mx-auto"><p>MySQL</p></div>
                <div class="text-center hover:scale-110 transition-transform"><img src="/storage/icons/tailwind.png" alt="TailwindCSS" class="w-12 mx-auto"><p>TailwindCSS</p></div>
                <div class="text-center hover:scale-110 transition-transform"><img src="/storage/icons/figma.png" alt="Figma" class="w-12 mx-auto"><p>Figma</p></div>
                <div class="text-center hover:scale-110 transition-transform"><img src="/storage/icons/illustrator.png" alt="Adobe Illustrator" class="w-12 mx-auto"><p>Adobe Illustrator</p></div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 bg-gray-100 dark:bg-gray-900">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center" data-aos="fade-up">Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($services as $service)
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 100 }}">
                        @if($service->icon)
                            <img src="{{ asset('storage/' . $service->icon) }}" alt="{{ $service->title }}" class="w-12 h-12 mx-auto mb-4">
                        @endif
                        <h3 class="text-xl font-semibold mb-4">{{ $service->title }}</h3>
                        <p>{{ $service->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Projects Section with Parallax -->
    <section id="projects" class="py-16 bg-white dark:bg-gray-800 relative">
        <div class="absolute inset-0 bg-gradient-to-b from-gray-100 to-transparent dark:from-gray-800 opacity-50 z-0"></div>
        <div class="container mx-auto px-4 relative z-10">
            <h2 class="text-3xl font-bold mb-8 text-center" data-aos="fade-up">Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($projects as $project)
                    <div class="bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow project-card" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-48 object-cover rounded-md mb-4 lazy" loading="lazy">
                        <h3 class="text-xl font-semibold mb-2">{{ $project->title }}</h3>
                        <p class="mb-4">{{ $project->description }}</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Technologies: {{ $project->technologies }}</p>
                        @if($project->url)
                            <a href="{{ $project->url }}" class="text-primary hover:underline">View Project</a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-16 bg-gray-100 dark:bg-gray-900">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center" data-aos="fade-up">Testimonials</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($testimonials as $testimonial)
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <img src="{{ asset('storage/' . $testimonial->avatar) }}" alt="{{ $testimonial->name }}" class="w-16 h-16 rounded-full mx-auto mb-4 lazy" loading="lazy">
                        <p class="italic mb-4">"{{ $testimonial->feedback }}"</p>
                        <p class="font-semibold text-center">{{ $testimonial->name }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-white dark:bg-gray-800">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center" data-aos="fade-up">Contact Me</h2>
            <form action="{{ route('contact.store') }}" method="POST" class="max-w-lg mx-auto" data-aos="fade-up" data-aos-delay="100">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium">Name</label>
                    <input type="text" name="name" id="name" class="w-full p-3 rounded-md border dark:bg-gray-700 focus:ring-primary focus:border-primary transition-all" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium">Email</label>
                    <input type="email" name="email" id="email" class="w-full p-3 rounded-md border dark:bg-gray-700 focus:ring-primary focus:border-primary transition-all" required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-sm font-medium">Message</label>
                    <textarea name="message" id="message" rows="5" class="w-full p-3 rounded-md border dark:bg-gray-700 focus:ring-primary focus:border-primary transition-all" required></textarea>
                </div>
                <button type="submit" class="cta-button bg-primary text-white px-6 py-3 rounded-full hover:bg-secondary transition-colors">Send Message</button>
            </form>
        </div>
    </section>
@endsection
