@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Import Template CSV</h2>
    <form method="POST" action="{{ route('admin.templates.import') }}" enctype="multipart/form-data">
        @csrf
        <input type="file" name="template_csv" required>
        <button type="submit">Import</button>
    </form>
</div>
@endsection
