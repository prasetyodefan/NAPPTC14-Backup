@extends('admin.layout')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Dashboard</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-lg font-semibold">Total News</h2>
            <p class="text-2xl">150</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-lg font-semibold">Total Categories</h2>
            <p class="text-2xl">5</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-lg font-semibold">Active Users</h2>
            <p class="text-2xl">350</p>
        </div>
    </div>
@endsection
