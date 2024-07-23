@extends('admin.layout')

@section('content')
<h1 class="text-2xl font-bold mb-4">News Details</h1>

<div class="bg-white p-4 rounded-lg shadow">
  <p><strong>Title:</strong> {{ $news->title }}</p>
  <p><strong>Body:</strong> {{ $news->body }}</p>
  <p><strong>Category:</strong> {{ $news->category }}</p>
  <p><strong>Image URL:</strong> {{ $news->image_url }}</p>
  <p><strong>Date:</strong> {{ $news->date }}</p>
  <p><strong>Region:</strong> {{ $news->region }}</p>

  <a href="{{ route('admin.news.index') }}" class="mt-4 inline-block text-blue-600 hover:underline">Back to List</a>
</div>
@endsection