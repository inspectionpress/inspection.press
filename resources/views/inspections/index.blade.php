@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto bg-white p-6 shadow">
    <h2 class="text-2xl font-bold mb-4">All Inspections</h2>

    <table class="min-w-full table-auto border-collapse border border-gray-200">
        <thead>
            <tr class="bg-gray-100">
                <th class="p-2 border">Client</th>
                <th class="p-2 border">Address</th>
                <th class="p-2 border">Date</th>
                <th class="p-2 border">Agreement</th>
                <th class="p-2 border">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inspections as $inspection)
                <tr>
                    <td class="p-2 border">{{ $inspection->client->name ?? 'N/A' }}</td>
                    <td class="p-2 border">{{ $inspection->property_address }}</td>
                    <td class="p-2 border">{{ $inspection->inspection_date->format('M d, Y') }}</td>
                    <td class="p-2 border">
                        @if ($inspection->agreement_signed_at)
                            ✅ Signed
                        @else
                            ❌ Not Signed
                        @endif
                    </td>
                    <td class="p-2 border">
                        <a href="{{ route('inspection.public', $inspection->id) }}" class="text-blue-600 hover:underline">View</a>
                        |
                        <a href="{{ route('inspection.pdf', $inspection->id) }}" class="text-green-600 hover:underline">PDF</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
