@extends('layouts.app')

@section('content')

<h2 class="mt-3">Signup email</h2>
<hr>
<br>
<p>Email: {{ $signup->email }}</p>
<p>Added: {{ $signup->added }}</p>
<br>
<br>
<a class="btn btn-outline-dark" href="/signups/{{ $signup->id }}/edit">Edit</a>







@endsection