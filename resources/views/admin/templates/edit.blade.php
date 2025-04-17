@extends('layouts.app')

@section('content')
<h2>Edit Template: {{ $template->name }}</h2>

<h3>Sections</h3>
<ul id="sortable-sections">
    @foreach ($template->sections as $section)
        <li data-id="{{ $section->id }}">
            <strong>{{ $section->title }}</strong>
            <ul>
                @foreach ($section->findings as $finding)
                    <li>{{ $finding->title }}</li>
                @endforeach
            </ul>
        </li>
    @endforeach
</ul>

<form method="POST" action="{{ route('admin.templates.sections.store', $template) }}">
    @csrf
    <input type="text" name="title" placeholder="New Section Title" required>
    <textarea name="description" placeholder="Optional Description"></textarea>
    <button type="submit">Add Section</button>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
<script>
$(function () {
    $('#sortable-sections').sortable({
        update: function (e, ui) {
            const order = $(this).sortable('toArray', { attribute: 'data-id' });
            fetch('/admin/templates/order/sections', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ order: order.map((id, index) => ({ id, order: index })) })
            });
        }
    });
});
</script>
@endsection