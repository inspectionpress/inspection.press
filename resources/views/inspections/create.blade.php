@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-8">
    <h1 class="text-2xl font-bold mb-4">Create Inspection</h1>

    <form method="POST" action="{{ route('inspection.store') }}">
        @csrf

        <div class="mb-6">
            <h2 class="font-semibold text-lg mb-2">Customer Information</h2>
            <p class="text-sm text-gray-600 mb-4">This will create a new customer unless you select an existing one.</p>

            <label class="block mb-1">Search Existing Customer</label>
            <input type="text" name="search_customer" placeholder="Search by name or email..." class="w-full p-2 border mb-4">

            <label class="block mb-1">Full Name</label>
            <input type="text" name="name" class="w-full border p-2 mb-2" required>

            <label class="block mb-1">Email</label>
            <input type="email" name="email" class="w-full border p-2 mb-2">

            <label class="block mb-1">Phone</label>
            <input type="text" name="phone" class="w-full border p-2 mb-2">

            <label class="block mb-1">Address</label>
            <input type="text" name="address" class="w-full border p-2 mb-4">
        </div>

        <div class="mb-6">
            <h2 class="font-semibold text-lg mb-2">Inspection Details</h2>

            <label class="block mb-1">Property Address</label>
            <input type="text" name="property_address" class="w-full border p-2 mb-2" required>

            <label class="block mb-1">Inspection Date</label>
            <input type="datetime-local" name="inspection_date" class="w-full border p-2 mb-4" required>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Create Inspection</button>
    </form>
</div>
@endsection
