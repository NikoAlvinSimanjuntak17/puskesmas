@extends('layouts.admin')
@section('content')
<h1 class="text-xl font-bold mb-4">New Department</h1>
<form method="post" action="{{ route('admin.departments.store') }}" class="grid gap-3">@csrf
  <input class="border p-2" name="name" placeholder="Name" required/>
  <input class="border p-2" name="phone" placeholder="Phone"/>
  <input class="border p-2" name="contact_email" placeholder="Email"/>
  <textarea class="border p-2" name="description" placeholder="Description"></textarea>
  <button class="px-4 py-2 bg-blue-600 text-white rounded">Save</button>
</form>
@endsection
<style></style>