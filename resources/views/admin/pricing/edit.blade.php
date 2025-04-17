@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Pricing Configuration</h2>
    <form method="POST" action="{{ route('admin.pricing.update') }}">
        @csrf
        @method('PATCH')

        <label>Mileage Rate ($ per mile)</label>
        <input type="text" name="base_mileage_rate" value="{{ $company->base_mileage_rate }}"><br><br>

        <label>Square Footage Tiers (JSON)</label>
        <textarea name="square_footage_tiers">{{ $company->square_footage_tiers }}</textarea><br><br>

        <label>Age Surcharge Rules (JSON)</label>
        <textarea name="age_surcharge_rules">{{ $company->age_surcharge_rules }}</textarea><br><br>

        <button type="submit">Save</button>
    </form>
</div>
@endsection
