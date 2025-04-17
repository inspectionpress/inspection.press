@extends('layouts.app')

@section('content')
<h2>Admin Dashboard</h2>
<ul>
    <li><a href="{{ route('admin.users.index') }}">Manage Users</a></li>
    <li><a href="{{ route('admin.templates.index') }}">Manage Templates</a></li>
    <li><a href="{{ route('admin.services.index') }}">Manage Services</a></li>
    <li><a href="{{ route('admin.settings.edit') }}">Company Settings</a></li>
</ul>
@endsection
