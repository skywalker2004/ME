@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center justify-center text-center hero-section overflow-hidden">
        <div class="hero-bg absolute inset-0 bg-cover bg-center opacity-70" style="background-image: url('{{ asset('images/hero-bg.png') }}');"></div>
        <div class="hero-content relative z-10 flex flex-col items-center w-full max-w-6xl px-6 py-12 bg-black bg-opacity-50 backdrop-blur-md rounded-lg shadow-xl">
            <div class="text-center mb-8">
                <h1 class="text-white text-4xl sm:text-5xl md:text-6xl font-bold leading-tight tracking-tight mb-4" data-aos="fade-up">
                    Hi, I’m Kelvin Kiprono
                </h1>
                <p class="text-xl text-gray-200 mb-6" data-aos="fade-up" data-aos-delay="200">
                    Full-Stack | Front-End & Back-End Developer | Android App Creator | Designer
                </p>
            </div>
            <div class="flex flex-row space-x-4" data-aos="fade-up" data-aos-delay="400">
                <a href="{{ asset('storage/cv/kelvin_kiprono_cv.pdf') }}" download="Kelvin_Kiprono_CV.pdf" class="cta-button bg-gray-100 text-gray-900 hover:bg-gray-200 hover:text-gray-800 px-6 py-3 rounded-lg shadow-md transition-all duration-300">
                    Download CV
                </a>
                <a href="#contact" class="cta-button bg-primary text-white hover:bg-blue-700 px-6 py-3 rounded-lg shadow-md transition-all duration-300">
                    Hire Me
                </a>
            </div>
        </div>
    </section>

    <!-- About Me Section -->
    <section id="about" class="py-16 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-900 dark:to-gray-800">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-900 dark:text-gray-100" data-aos="fade-up">About Me</h2>
            <div class="max-w-3xl mx-auto text-center text-gray-700 dark:text-gray-300" data-aos="fade-up" data-aos-delay="200">
                <p class="mb-4">
                    👋 Hey there! I’m Kelvin Kiprono, a passionate full-stack developer, Android app creator, web designer, and logo branding expert with a knack for turning ideas into impactful solutions. With a versatile skill set spanning front-end finesse to back-end brilliance, I craft seamless digital experiences that captivate and perform.
                </p>
                <p class="mb-4">
                    From building responsive websites and scalable web applications with Laravel to designing intuitive Android apps and creating standout brand identities, I blend technical expertise with creative flair. My approach is rooted in clean code, meticulous attention to detail, and a relentless drive to solve complex challenges—delivering projects that exceed expectations every time.
                </p>
                <p class="mb-4">
                    Whether you’re a startup dreaming big or an established business seeking a digital edge, I’m here to bring your vision to life with tailored, innovative solutions. My professionalism shines through in every line of code and every pixel I design, ensuring your project stands out in today’s competitive market.
                </p>
                <p class="font-semibold">
                    Ready to create something extraordinary? Let’s connect and build the future together!
                </p>
            </div>
            <div class="mt-6 text-gray-600 dark:text-gray-300 text-center" data-aos="fade-up" data-aos-delay="400">
                <p class="font-semibold">Skills Snapshot:</p>
                <ul class="list-disc list-inside">
                    <li>Full-Stack Development (Laravel, JavaScript)</li>
                    <li>Android Development (Kotlin, Firebase)</li>
                    <li>Web Design (TailwindCSS, Figma)</li>
                    <li>Branding (Logo Design, Visual Identity)</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 bg-gray-100 dark:bg-gray-900">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-900 dark:text-gray-100" data-aos="fade-up">Services</h2>
            @if($services->isEmpty())
                <p class="text-center text-gray-600 dark:text-gray-400">No services available at the moment.</p>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
                    @foreach($services as $index => $service)
                        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-200 dark:border-gray-700" data-aos="zoom-in" data-aos-delay="{{ $index * 200 }}">
                            <h3 class="text-xl font-bold text-primary">
                                @if($service->title === 'Full-Stack Web Development')
                                    💻 {{ $service->title }}
                                @elseif($service->title === 'Android App Development')
                                    📱 {{ $service->title }}
                                @elseif($service->title === 'Web Design & UI/UX')
                                    🌐 {{ $service->title }}
                                @elseif($service->title === 'Logo & Brand Identity Design')
                                    🖌️ {{ $service->title }}
                                @else
                                    {{ $service->title }}
                                @endif
                            </h3>
                            <p class="text-gray-600 dark:text-gray-300 mt-2">{{ $service->subtitle }}</p>
                            <ul class="mt-4 space-y-2 text-gray-700 dark:text-gray-300">
                                @foreach(explode(';', $service->benefits) as $benefit)
                                    <li>📌 {{ trim($benefit) }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-16 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-900 dark:to-gray-800">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-900 dark:text-gray-100" data-aos="fade-up">Projects</h2>
            @if($projects->isEmpty())
                <p class="text-center text-gray-600 dark:text-gray-400">No projects available at the moment.</p>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($projects as $project)
                        <div class="project-card bg-white dark:bg-gray-800 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-200 dark:border-gray-700" data-aos="fade-up" data-aos-delay="{{ $loop->index * 200 }}">
                            <img src="{{ asset('storage/projects/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-48 object-cover rounded-t-xl">
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mt-4">{{ $project->title }}</h3>
                                <p class="text-gray-600 dark:text-gray-300 mt-2">{{ $project->description }}</p>
                                <p class="text-gray-500 dark:text-gray-400 text-sm mt-2">Technologies: {{ $project->technologies }}</p>
                                <a href="{{ $project->url }}" class="text-primary mt-4 inline-block hover:underline">View Project</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-16 bg-gray-100 dark:bg-gray-900">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-900 dark:text-gray-100" data-aos="fade-up">Testimonials</h2>
            @if($testimonials->isEmpty())
                <p class="text-center text-gray-600 dark:text-gray-400">No testimonials available at the moment.</p>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($testimonials as $testimonial)
                        <div class="testimonial-card bg-white dark:bg-gray-800 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-200 dark:border-gray-700 p-6" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 200 }}">
                            <img src="{{ asset('storage/testimonials/' . $testimonial->image) }}" alt="{{ $testimonial->name }}" class="w-16 h-16 rounded-full mx-auto mb-4">
                            <p class="text-gray-600 dark:text-gray-300 italic text-center">"{{ $testimonial->quote }}"</p>
                            <p class="mt-4 font-semibold text-gray-900 dark:text-gray-100 text-center">{{ $testimonial->name }}</p>
                            <p class="text-gray-500 dark:text-gray-400 text-sm text-center">{{ $testimonial->position }}</p>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-900 dark:to-gray-800">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-900 dark:text-gray-100" data-aos="fade-up">Get in Touch</h2>
            <form action="{{ route('contact') }}" method="POST" class="max-w-lg mx-auto" data-aos="slide-up">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 dark:text-gray-300 mb-2">Name</label>
                    <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-100" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 dark:text-gray-300 mb-2">Email</label>
                    <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-100" required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700 dark:text-gray-300 mb-2">Message</label>
                    <textarea id="message" name="message" rows="4" class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-100" required></textarea>
                </div>
                <button type="submit" class="cta-button w-full p-3 bg-primary text-white rounded-lg hover:bg-blue-700 transition-colors duration-300">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 bg-gray-800 text-gray-300 text-center">
        <div class="container mx-auto px-6">
            <p>© {{ date('Y') }} Kelvin Kiprono. All rights reserved.</p>
            <div class="mt-4 flex justify-center space-x-4">
                <a href="https://github.com" target="_blank" class="hover:scale-110 transition-transform duration-300"><i class="fab fa-github text-2xl hover:text-primary"></i></a>
                <a href="https://linkedin.com" target="_blank" class="hover:scale-110 transition-transform duration-300"><i class="fab fa-linkedin text-2xl hover:text-primary"></i></a>
                <a href="mailto:kelvin@example.com" class="hover:scale-110 transition-transform duration-300"><i class="fas fa-envelope text-2xl hover:text-primary"></i></a>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button id="scroll-to-top" class="fixed bottom-8 right-8 p-3 bg-primary text-white rounded-full shadow-lg opacity-0 transition-all duration-300 hover:bg-blue-700">
        <i class="fas fa-chevron-up"></i>
    </button>
@endsection
