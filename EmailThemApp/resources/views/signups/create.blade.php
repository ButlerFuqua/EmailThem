@extends('layouts.head')


@section('body')


<div id="app" class="container mt-3">

    <form action="/signups" method="post">
        @csrf
        <div class="form-group">
            <label for="email">Enter Email</label>
            <input id="email" name="email" type="email" class="form-control" required>
            <input type="submit" class="btn btn-outline-success mt-3">
        </div>
    </form>
</div>





@endsection