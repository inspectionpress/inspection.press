@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Inspection Details</h2>

    <p><strong>Address:</strong> {{ $inspection->property_address }}</p>

    @if($inspection->permit_pdf_url)
        <p><a href="{{ $inspection->permit_pdf_url }}" target="_blank">Download Permit Report (PDF)</a></p>
    @endif
</div>
@endsection
