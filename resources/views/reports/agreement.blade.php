@extends('layouts.app')
@section('content')
<div class="p-6">
  <h1 class="text-xl font-bold">Inspection Agreement</h1>
  <form method="POST">
    <input type="text" name="name" placeholder="Your Name" class="border p-2">
    <input type="checkbox" name="agree" required> I agree
    <button type="submit" class="bg-blue-600 text-white px-4 py-2">Sign</button>
  </form>
</div>
@endsection
