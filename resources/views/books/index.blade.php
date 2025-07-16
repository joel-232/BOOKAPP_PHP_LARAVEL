<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Books') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-6">
        @if(session('success'))
            <div style="color: green;">{{ session('success') }}</div>
        @endif

        <a href="{{ route('books.create') }}" class="text-blue-500 underline mb-4 inline-block">➕ Add Book</a>

        @if($books->count())
            <table cellpadding="8" cellspacing="0" class="mt-4 w-full border">
                <thead>
                    <tr class="bg-gray-100 text-left">
                        <th class="px-4 py-2 border border-gray-300">Title</th>
                        <th class="px-4 py-2 border border-gray-300">Author</th>
                        <th class="px-4 py-2 border border-gray-300">Published</th>
                        <th class="px-4 py-2 border border-gray-300">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr class="border-t text-left">
                            <td class="px-4 py-2 border border-gray-300">{{ $book->title }}</td>
                            <td class="px-4 py-2 border border-gray-300">{{ $book->author }}</td>
                            <td class="px-4 py-2 border border-gray-300">{{ $book->published_year }}</td>
                            <td class="px-4 py-2 border border-gray-300">
                                <a href="{{ route('books.edit', $book->id) }}" class="text-indigo-600">✏️ Edit</a>
                                <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')" class="text-red-600 ml-2">🗑 Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-4">
                {{ $books->links() }}
            </div>
        @else
            <p>No books yet.</p>
        @endif
    </div>
</x-app-layout>
