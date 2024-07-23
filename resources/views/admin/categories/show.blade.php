@extends('admin.layout')

@section('content')
<h1 class="text-2xl font-bold mb-4">Category Details</h1>

<div class="bg-white p-4 rounded-lg shadow">
  <p><strong>Name:</strong> {{ $category->name }}</p>

  <a href="{{ route('admin.categories.index') }}" class="mt-4 inline-block text-blue-600 hover:underline">Back to
    List</a>
</div>
@endsection