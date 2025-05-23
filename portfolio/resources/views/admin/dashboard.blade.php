@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold mb-8 text-center" data-aos="fade-up">Admin Dashboard</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <a href="{{ route('projects.create') }}" class="cta-button bg-primary text-white p-6 rounded-lg text-center hover:bg-secondary transition-colors" data-aos="zoom-in">Add Project</a>
            <a href="{{ route('services.create') }}" class="cta-button bg-primary text-white p-6 rounded-lg text-center hover:bg-secondary transition-colors" data-aos="zoom-in" data-aos-delay="100">Add Service</a>
            <a href="{{ route('testimonials.create') }}" class="cta-button bg-primary text-white p-6 rounded-lg text-center hover:bg-secondary transition-colors" data-aos="zoom-in" data-aos-delay="200">Add Testimonial</a>
            <a href="{{ route('blog_posts.create') }}" class="cta-button bg-primary text-white p-6 rounded-lg text-center hover:bg-secondary transition-colors" data-aos="zoom-in" data-aos-delay="300">Add Blog Post</a>
        </div>
    </div>
@endsection
