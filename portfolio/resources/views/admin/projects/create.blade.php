@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold mb-8 text-center" data-aos="fade-up">Add New Project</h2>
        <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium">Title</label>
                <input type="text" name="title" id="title" class="w-full p-3 rounded-md border dark:bg-gray-700" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium">Description</label>
                <textarea name="description" id="description" rows="5" class="w-full p-3 rounded-md border dark:bg-gray-700" required></textarea>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium">Image</label>
                <input type="file" name="image" id="image" class="w-full p-3 rounded-md border dark:bg-gray-700">
            </div>
            <div class="mb-4">
                <label for="technologies" class="block text-sm font-medium">Technologies</label>
                <input type="text" name="technologies" id="technologies" class="w-full p-3 rounded-md border dark:bg-gray-700">
            </div>
            <div class="mb-4">
                <label for="url" class="block text-sm font-medium">URL</label>
                <input type="url" name="url" id="url" class="w-full p-3 rounded-md border dark:bg-gray-700">
            </div>
            <button type="submit" class="cta-button bg-primary text-white px-6 py-3 rounded-full hover:bg-secondary transition-colors">Save Project</button>
        </form>
    </div>
@endsection
