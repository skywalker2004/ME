<section id="contact" class="py-20 bg-gradient-to-br from-gray-50 to-gray-200 dark:from-gray-800 dark:to-gray-900">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-center mb-12" data-aos="slide-up">Contact Me</h2>
        <form action="{{ route('contact') }}" method="POST" class="max-w-lg mx-auto" data-aos="slide-up" data-aos-delay="200">
            @csrf
            <div class="mb-6">
                <label for="name" class="flex items-center space-x-2 text-lg mb-2">
                    <i class="fas fa-user text-primary"></i>
                    <span>Name</span>
                </label>
                <input type="text" name="name" id="name" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-primary" required>
            </div>
            <div class="mb-6">
                <label for="email" class="flex items-center space-x-2 text-lg mb-2">
                    <i class="fas fa-envelope text-primary"></i>
                    <span>Email</span>
                </label>
                <input type="email" name="email" id="email" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-primary" required>
            </div>
            <div class="mb-6">
                <label for="message" class="flex items-center space-x-2 text-lg mb-2">
                    <i class="fas fa-comment text-primary"></i>
                    <span>Message</span>
                </label>
                <textarea name="message" id="message" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-primary" rows="5" required></textarea>
            </div>
            <button type="submit" class="cta-button w-full bg-primary text-white px-6 py-3 rounded-full hover:bg-blue-700 hover:scale-105 transition-all duration-300 animate-pulse">Send Message</button>
        </form>
    </div>
</section>
