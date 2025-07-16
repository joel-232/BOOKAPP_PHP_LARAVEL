<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Book') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-4xl mx-auto px-4">
        @if ($errors->any())
            <div class="mb-4 text-red-600">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('books.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block font-medium">Title:</label>
                <input type="text" name="title" value="{{ old('title') }}" class="border rounded w-full px-3 py-2">
            </div>

            <div>
                <label class="block font-medium">Author:</label>
                <input type="text" name="author" value="{{ old('author') }}" class="border rounded w-full px-3 py-2">
            </div>

            <div>
                <label class="block font-medium">Published Year:</label>
                <input type="number" name="published_year" value="{{ old('published_year') }}" class="border rounded w-full px-3 py-2">
            </div>

            <div>
                <label class="block font-medium">Description (optional):</label>
                <textarea name="description" class="border rounded w-full px-3 py-2">{{ old('description') }}</textarea>
            </div>

            <div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">📚 Save Book</button>
            </div>
        </form>
    </div>
</x-app-layout>
