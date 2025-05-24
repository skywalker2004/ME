<section id="testimonials" class="py-20 bg-gray-100 dark:bg-gray-800">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-center mb-12" data-aos="fade-up">Testimonials</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach($testimonials as $index => $testimonial)
                <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg text-center hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="{{ $index * 200 }}">
                    <img src="{{ asset('storage/testimonials/' . $testimonial->image) }}" alt="{{ $testimonial->name }}" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-4 border-primary" loading="lazy">
                    <p class="text-gray-600 dark:text-gray-300 italic">"{{ $testimonial->content }}"</p>
                    <p class="mt-2 font-semibold text-lg">{{ $testimonial->name }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
