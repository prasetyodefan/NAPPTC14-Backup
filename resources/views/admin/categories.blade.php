@extends('admin.layout')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Manage Categories</h1>

    <a href="{{ route('admin.categories.create')}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">ADD </a>

</button>
    <!-- Tambahkan konten manajemen kategori di sini -->
    <div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
            
        </thead>

        <tbody>
            @forelse ($categories as $category)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   {{ $category['name']}}
                </th>
                <td class="px-6 py-4">
                    
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail | </a>

                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit | </a>
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                </td>
            </tr>
            @empty
            <h1>null</h1>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
