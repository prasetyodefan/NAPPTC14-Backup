@extends('admin.layout')

@section('content')
<h1 class="text-2xl font-bold mb-4">Edit Category</h1>

<div class="bg-white p-4 rounded-lg shadow">
  <!-- Display validation errors -->
  @if ($errors->any())
    <div class="mb-4">
    <ul class="text-red-600">
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
  @endif

  <!-- Edit Category Form -->
  <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-4">
      <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
      <input type="text" name="name" id="name" value="{{ old('name', $category->name) }}"
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500 sm:text-sm @error('name') border-red-500 @enderror"
        placeholder="Enter category name" required>
    </div>

    <button type="submit"
      class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">
      Update Category
    </button>
  </form>
</div>
@endsection