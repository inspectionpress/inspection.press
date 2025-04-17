<form method="POST" action="{{ $action }}">
    @csrf
    @if ($method === 'PUT')
        @method('PUT')
    @endif

    <div class="mb-4">
        <label>Name</label>
        <input type="text" name="name" class="w-full border p-2" value="{{ old('name', $service->name ?? '') }}" required>
    </div>

    <div class="mb-4">
        <label>Price</label>
        <input type="number" step="0.01" name="price" class="w-full border p-2" value="{{ old('price', $service->price ?? '') }}" required>
    </div>

    <div class="mb-4">
        <label>Duration (minutes)</label>
        <input type="number" name="duration" class="w-full border p-2" value="{{ old('duration', $service->duration ?? '') }}" required>
    </div>

    <button type="submit" class="bg-blue-600 text-white px-4 py-2">{{ $button }}</button>
</form>
