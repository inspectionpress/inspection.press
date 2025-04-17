@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
	<h1 class="text-2xl font-semibold mb-4">Admin Dashboard</h1>
	<div class="grid grid-cols-3 gap-4">
		<div class="bg-white p-4 shadow rounded">Inspections: {{ \App\Models\Inspection::count() }}</div>
		<div class="bg-white p-4 shadow rounded">Clients: {{ \App\Models\Client::count() }}</div>
		<div class="bg-white p-4 shadow rounded">Agents: {{ \App\Models\Agent::count() }}</div>
	</div>
@endsection
