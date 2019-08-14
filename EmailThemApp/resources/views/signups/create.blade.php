@extends('layouts.head')


@section('body')


<div id="app" class="signupContainer">

<div class="leftSide">

</div>
<div class="rightSide">
    <div class="theContent shadow-lg">
        <form action="/signups" method="post">
            @csrf
            <div class="form-group">
                <label for="email">Enter Email</label>
                <input id="email" name="email" type="email" class="form-control" required>
                <input type="submit" class="button button-1 button-2 mt-3">
            </div>
        </form>
    </div>
</div>





</div>





@endsection



{{-- 

<form action="/signups" method="post">
    @csrf
    <div class="form-group">
        <label for="email">Enter Email</label>
        <input id="email" name="email" type="email" class="form-control" required>
        <input type="submit" class="btn btn-outline-success mt-3">
    </div>
</form> 

--}}