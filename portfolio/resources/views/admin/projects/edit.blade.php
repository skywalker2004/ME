@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold mb-8 text-center" data-aos="fade-up">Edit Project</h2>
        <form action="{{ route('projects.update', $project) }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto">
            @csrf
            @method('PATCH')
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium">Title</label>
                <input type="text" name="title" id="title" value="{{ $project->title }}" class="w-full p-3 rounded-md border dark:bg-gray-700" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium">Description</label>
                <textarea name="description" id="description" rows="5" class="w-full p-3 rounded-md border dark:bg-gray-700" required>{{ $project->description }}</textarea>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium">Image</label>
                <input type="file" name="image" id="image" class="w-full p-3 rounded-md border dark:bg-gray-700">
                @if($project->image)
                    <img src="{{ asset('storage/' . $project->image) }}" alt="Current Image" class="w-32 h-32 object-cover mt-2">
                @endif
            </div>
            <div class="mb-4">
                <label for="technologies" class="block text-sm font-medium">Technologies</label>
                <input type="text" name="technologies" id="technologies" value="{{ $project->technologies }}" class="w-full p-3 rounded-md border dark:bg-gray-700">
            </div>
            <div class="mb-4">
                <label for="url" class="block text-sm font-medium">URL</label>
                <input type="url" name="url" id="url" value="{{ $project->url }}" class="w-full p-3 rounded-md border dark:bg-gray-700">
            </div>
            <button type="submit" class="cta-button bg-primary text-white px-6 py-3 rounded-full hover:bg-secondary transition-colors">Update Project</button>
        </form>
    </div>
@endsection
