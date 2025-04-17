<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>@yield('title', 'Admin') — {{ config('app.name') }}</title>
	<link href="{{ mix('css/app.css') }}" rel="stylesheet">
	<script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="min-h-screen bg-gray-100">
	<div class="flex">
		{{-- Sidebar --}}
		<nav class="w-64 bg-white shadow-lg h-screen">
			<div class="p-4 font-bold text-xl">{{ config('app.name') }}</div>
			<ul>
				<li class="px-4 py-2 hover:bg-gray-200">
					<a href="{{ route('admin.dashboard') }}">Dashboard</a>
				</li>
				<li class="px-4 py-2 hover:bg-gray-200">
					<a href="{{ route('admin.clients.index') }}">Clients</a>
				</li>
				<li class="px-4 py-2 hover:bg-gray-200">
					<a href="{{ route('admin.agents.index') }}">Agents</a>
				</li>
				<li class="px-4 py-2 hover:bg-gray-200">
					<a href="{{ route('admin.templates.index') }}">Templates</a>
				</li>
				<li class="px-4 py-2 hover:bg-gray-200">
					<a href="{{ route('admin.services.index') }}">Services</a>
				</li>
				<li class="px-4 py-2 hover:bg-gray-200">
					<a href="{{ route('admin.settings.edit') }}">Settings</a>
				</li>
			</ul>
		</nav>

		{{-- Main Content --}}
		<main class="flex-1 p-6">
			@yield('content')
		</main>
	</div>
</body>
</html>
