@extends('admin.layout')

@section('content')
<h1 class="text-2xl font-bold mb-4">Edit News</h1>

<form action="{{ route('admin.news.update', $news) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{ $news->title }}" required>
    </div>
    <div>
        <label for="body">Body</label>
        <textarea id="body" name="body" required>{{ $news->body }}</textarea>
    </div>
    <div class="mb-4">
        <label for="category_name" class="block text-gray-700 dark:text-gray-200">Category</label>
        <select name="category_name" id="category_name"
            class="w-full p-2 border border-gray-300 rounded dark:bg-gray-700 dark:text-gray-300" required>
            @foreach($categories as $category)
                <option value="{{ $category->name }}" {{ old('category_name', $news->category_name ?? '') == $category->name ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="image_url">Image URL</label>
        <input type="text" id="image_url" name="image_url" value="{{ $news->image_url }}">
    </div>
    <div>
        <label for="date">Date</label>
        <input type="date" id="date" name="date" value="{{ $news->date->format('Y-m-d') }}" required>
    </div>
    <div>
        <label for="region">Region</label>
        <input type="text" id="region" name="region" value="{{ $news->region }}" required>
    </div>
    <button type="submit">Update</button>
</form>
@endsection