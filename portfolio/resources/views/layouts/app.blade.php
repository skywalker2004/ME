<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kelvin Kiprono - Full-stack developer, Android developer, and designer creating scalable apps and iconic brands.">
    <meta name="keywords" content="Kelvin Kiprono, full-stack developer, Android developer, web designer, logo designer, Laravel, Kotlin, Figma">
    <title>Kelvin Kiprono - Portfolio</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100 transition-colors duration-300">
    <header class="sticky top-0 bg-white dark:bg-gray-800 shadow-md z-50">
        <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold hover:text-primary transition-colors">Kelvin Kiprono</a>
            <div class="space-x-4 flex items-center">
                <a href="#home" class="hover:text-primary transition-colors">Home</a>
                <a href="#about" class="hover:text-primary transition-colors">About</a>
                <a href="#services" class="hover:text-primary transition-colors">Services</a>
                <a href="#projects" class="hover:text-primary transition-colors">Projects</a>
                <a href="#testimonials" class="hover:text-primary transition-colors">Testimonials</a>
                <a href="#contact" class="hover:text-primary transition-colors">Contact</a>
                <button id="theme-toggle" class="p-2 rounded-full bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a8 8 0 100 16 8 8 0 000-16zm0 14a6 6 0 110-12 6 6 0 010 12z"></path></svg>
                </button>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white py-8" data-aos="fade-up">
        <div class="container mx-auto px-4 text-center">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div>
                    <p>© 2025 Kelvin Kiprono. All rights reserved.</p>
                    <div class="flex justify-center space-x-4 mt-4">
                        <a href="https://github.com/skywalker2004" target="_blank" class="hover:text-primary transition-colors">GitHub</a>
                        <a href="https://www.upwork.com/freelancers/~01936fdbc25816d7bf" target="_blank" class="hover:text-primary transition-colors">Upwork</a>
                        <a href="https://www.fiverr.com/s/EgpV33d" target="_blank" class="hover:text-primary transition-colors">Fiverr</a>
                    </div>
                </div>
                <div class="mt-4 md:mt-0">
                    <a href="mailto:kelvinkiprono659@gmail.com" class="hover:text-primary transition-colors">kelvinkiprono659@gmail.com</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
        });

        // Dark mode toggle
        const toggle = document.getElementById('theme-toggle');
        toggle.addEventListener('click', () => {
            document.documentElement.classList.toggle('dark');
            localStorage.setItem('theme', document.documentElement.classList.contains('dark') ? 'dark' : 'light');
        });

        if (localStorage.getItem('theme') === 'dark') {
            document.documentElement.classList.add('dark');
        }

        // GSAP Parallax and Micro-interactions
        gsap.registerPlugin(ScrollTrigger);

        // Parallax for hero section
        gsap.to('.hero-bg', {
            scrollTrigger: {
                trigger: '.hero-bg',
                scrub: true,
                start: 'top top',
                end: 'bottom top',
            },
            yPercent: 20,
            ease: 'none',
        });

        // Micro-interactions for buttons
        document.querySelectorAll('.cta-button').forEach(button => {
            button.addEventListener('mouseenter', () => {
                gsap.to(button, { scale: 1.05, duration: 0.3, ease: 'power2.out' });
            });
            button.addEventListener('mouseleave', () => {
                gsap.to(button, { scale: 1, duration: 0.3, ease: 'power2.out' });
            });
        });
    </script>
</body>
</html>
