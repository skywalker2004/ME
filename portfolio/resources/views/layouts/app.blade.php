<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kelvin Kiprono - Expert full-stack developer, Android developer, web designer, and logo designer creating scalable apps and iconic brands.">
    <meta name="keywords" content="Kelvin Kiprono, full-stack developer, Android developer, web designer, logo designer, Laravel, Kotlin, Figma, portfolio">
    <title>Kelvin Kiprono - Professional Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" onerror="this.href='https://unpkg.com/aos@2.3.4/dist/aos.css';this.onerror=null;">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet" onerror="this.href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css';this.onerror=null;">
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-900 dark:to-gray-800 text-gray-900 dark:text-gray-100 font-inter antialiased transition-colors duration-300">
    <header class="sticky top-0 bg-white dark:bg-gray-800 shadow-xl z-50 py-4">
        <nav class="container mx-auto px-6 flex justify-between items-center">
            <a href="#home" class="flex items-center space-x-3">
                <img src="{{ asset('images/logo.png') }}" alt="Kelvin Kiprono Logo" class="h-8" onerror="this.src='{{ asset('images/logo.svg') }}';this.onerror=null;">
                <span class="text-2xl font-bold text-primary hover:text-blue-700 transition-colors">Kelvin Kiprono</span>
            </a>
            <div class="space-x-6 flex items-center">
                <a href="#home" class="text-lg hover:text-primary transition-colors">Home</a>
                <a href="#about" class="text-lg hover:text-primary transition-colors">About</a>
                <a href="#services" class="text-lg hover:text-primary transition-colors">Services</a>
                <a href="#projects" class="text-lg hover:text-primary transition-colors">Projects</a>
                <a href="#testimonials" class="text-lg hover:text-primary transition-colors">Testimonials</a>
                <a href="#contact" class="text-lg hover:text-primary transition-colors">Contact</a>
                <button id="theme-toggle" class="p-2 rounded-full bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors focus:outline-none focus:ring-2 focus:ring-primary">
                    <i class="fas fa-moon text-sm dark:fa-sun"></i>
                </button>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-gray-900 text-white py-10" data-aos="fade-up">
        <div class="container mx-auto px-6 text-center">
            <img src="{{ asset('images/logo.png') }}" alt="Kelvin Kiprono Logo" class="h-10 mx-auto mb-6" onerror="this.src='{{ asset('images/logo.svg') }}';this.onerror=null;">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <p class="text-gray-400">© 2025 Kelvin Kiprono. All rights reserved.</p>
                    <div class="flex justify-center space-x-6 mt-6">
                        <a href="https://github.com/skywalker2004" target="_blank" class="hover:text-primary transition-colors">
                            <i class="fab fa-github text-xl hover:scale-110 transition-transform"></i>
                        </a>
                        <a href="https://www.upwork.com/freelancers/~01936fdbc25816d7bf?mp_source=share" target="_blank" class="hover:text-primary transition-colors">
                            <i class="fab fa-upwork text-xl hover:scale-110 transition-transform"></i>
                        </a>
                        <a href="https://www.fiverr.com/s/EgpV33d" target="_blank" class="hover:text-primary transition-colors">
                            <i class="fab fa-fiverr text-xl hover:scale-110 transition-transform"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <a href="mailto:kelvinkiprono659@gmail.com" class="flex items-center space-x-2 text-lg hover:text-primary transition-colors">
                        <i class="fas fa-envelope"></i>
                        <span>kelvinkiprono659@gmail.com</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <button id="scroll-to-top" class="fixed bottom-8 right-8 p-3 bg-primary text-white rounded-full shadow-lg hover:bg-blue-700 hover:scale-110 transition-all duration-300 hidden focus:outline-none focus:ring-2 focus:ring-primary">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true, disable: 'prefers-reduced-motion' });
        const toggle = document.getElementById('theme-toggle');
        toggle.addEventListener('click', () => {
            document.documentElement.classList.toggle('dark');
            localStorage.setItem('theme', document.documentElement.classList.contains('dark') ? 'dark' : 'light');
        });
        if (localStorage.getItem('theme') === 'dark') document.documentElement.classList.add('dark');

        const scrollToTopBtn = document.getElementById('scroll-to-top');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 400) scrollToTopBtn.classList.remove('hidden');
            else scrollToTopBtn.classList.add('hidden');
        });
        scrollToTopBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

        gsap.registerPlugin(ScrollTrigger);
        gsap.utils.toArray('.hero-bg').forEach(section => {
            ScrollTrigger.create({
                trigger: section,
                start: 'top bottom',
                end: 'bottom top',
                scrub: true,
                onUpdate: self => {
                    section.style.transform = `translateY(${self.progress * -30}%)`;
                }
            });
        });
    </script>
</body>
</html>
