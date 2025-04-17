@extends('layouts.app')
@section('content')
<div class="p-6">
  <h1 class="text-xl font-bold">Payment Settings</h1>
  <form method="POST">
    <label>Square Access Token</label>
    <input type="text" name="square_token" class="w-full border p-2 mb-2">
    <label>Stripe API Key</label>
    <input type="text" name="stripe_key" class="w-full border p-2 mb-2">
    <button type="submit" class="bg-green-600 text-white px-4 py-2">Save</button>
  </form>
</div>
@endsection
