@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white shadow">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold">Services</h2>
        <a href="{{ route('admin.services.create') }}" class="bg-blue-600 text-white px-4 py-2">Add Service</a>
    </div>

    @if(session('success'))
        <div class="mb-4 text-green-600">{{ session('success') }}</div>
    @endif

    <table class="min-w-full table-auto border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="p-2 border">Name</th>
                <th class="p-2 border">Price</th>
                <th class="p-2 border">Duration</th>
                <th class="p-2 border">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td class="p-2 border">{{ $service->name }}</td>
                    <td class="p-2 border">${{ number_format($service->price, 2) }}</td>
                    <td class="p-2 border">{{ $service->duration }} mins</td>
                    <td class="p-2 border">
                        <a href="{{ route('admin.services.edit', $service) }}" class="text-blue-600 hover:underline">Edit</a>
                        <form action="{{ route('admin.services.destroy', $service) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-600 ml-2 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
