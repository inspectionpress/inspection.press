@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Inspection Documents</h2>
    <p><strong>Property:</strong> {{ $inspection->property_address }}</p>

    @if($inspection->permit_pdf_url)
        <p><a href="{{ $inspection->permit_pdf_url }}" target="_blank">Download Permit Report</a></p>
    @endif

    @if($inspection->invoice_url)
        <p><a href="{{ $inspection->invoice_url }}" target="_blank">Download Invoice</a></p>
    @endif

    @if($inspection->report_pdf_url)
        <p><a href="{{ $inspection->report_pdf_url }}" target="_blank">Download Inspection Report</a></p>
    @endif
</div>
@endsection
