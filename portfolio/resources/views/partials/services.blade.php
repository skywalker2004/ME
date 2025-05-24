<section id="services" class="py-20 bg-gray-100 dark:bg-gray-800">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-center mb-12" data-aos="fade-up">My Services</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach($services as $index => $service)
                <div class="service-card relative bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg hover:shadow-xl hover:-translate-y-2 transition-all duration-300 overflow-hidden" data-aos="zoom-in" data-aos-delay="{{ $index * 200 }}">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary to-secondary opacity-10"></div>
                    <div class="relative z-10">
                        <i class="fas fa-code text-4xl text-primary mb-4"></i>
                        <h3 class="text-xl sm:text-2xl font-semibold mb-4">{{ $service->title }}</h3>
                        <p class="text-gray-600 dark:text-gray-300">{{ $service->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
