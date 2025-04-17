@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Inspection Template</h2>
    <form method="POST" action="{{ route('admin.templates.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Template Name" required>
        <button type="submit">Create</button>
    </form>
</div>
@endsection
