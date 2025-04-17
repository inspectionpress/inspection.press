@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto py-8">
    <h1 class="text-2xl font-bold mb-4">Agents</h1>
    <a href="{{ route('admin.agents.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Add Agent</a>
    <table class="w-full mt-4 border">
        <thead>
            <tr>
                <th>Name</th><th>Email</th><th>Phone</th><th>Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($agents as $agent)
                <tr>
                    <td>{{ $agent->name }}</td>
                    <td>{{ $agent->email }}</td>
                    <td>{{ $agent->phone }}</td>
                    <td>{{ ucfirst($agent->type) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
