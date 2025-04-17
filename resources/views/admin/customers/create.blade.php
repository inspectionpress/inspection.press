@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto py-8">
    <h1 class="text-2xl font-bold mb-4">Add Customer</h1>
    <form method="POST" action="{{ route('admin.customers.store') }}">
        @csrf
        <input name="name" placeholder="Name" class="w-full p-2 border mb-2" required>
        <input name="email" placeholder="Email" class="w-full p-2 border mb-2">
        <input name="phone" placeholder="Phone" class="w-full p-2 border mb-2">
        <input name="address" placeholder="Address" class="w-full p-2 border mb-2">
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Save</button>
    </form>
</div>
@endsection
