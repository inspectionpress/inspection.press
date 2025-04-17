@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto p-6 bg-white shadow">
    <h2 class="text-2xl font-bold mb-4">Edit Service</h2>
    @include('admin.services.form', ['action' => route('admin.services.update', $service), 'method' => 'PUT', 'button' => 'Update'])
</div>
@endsection
