@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto py-8">
    <h1 class="text-2xl font-bold mb-4">Customers</h1>
    <a href="{{ route('admin.customers.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Add Customer</a>
    <table class="w-full mt-4 border">
        <thead>
            <tr>
                <th>Name</th><th>Email</th><th>Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
