@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white shadow">
    <h2 class="text-2xl font-bold mb-4">Inspection Agreement</h2>

    <form action="{{ route('agreement.submit', $inspection->id) }}" method="POST">
        @csrf
        <div class="mb-4">
            <p>Please read and accept the agreement below to proceed with your inspection.</p>
            <textarea class="w-full h-48 mt-2 border p-2" readonly>
                [Insert your inspection agreement terms here...]
            </textarea>
        </div>

        <div class="mb-4">
            <label class="block font-bold">Full Name</label>
            <input type="text" name="name" class="w-full border p-2" required>
        </div>

        <div class="mb-4">
            <label class="inline-flex items-center">
                <input type="checkbox" name="agree" required class="mr-2">
                I agree to the terms above.
            </label>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2">Sign & Continue</button>
    </form>
</div>
@endsection
