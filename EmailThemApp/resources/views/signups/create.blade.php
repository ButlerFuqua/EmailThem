@extends('layouts.head')


@section('body')


<div id="app" class="signupContainer female">

<div class="leftSide">
    <div class="cardLine cardLine_1"></div>
        <div class="cardBorders">
            <div class="infoCard shadow">
                <h3>Anime Dating</h3>
                <p>A dating website for true fans of Anime.</p>
                <p>Launching February 2020</p>
            </div>
        </div>
    <div class="cardLine cardLine_2"></div>
</div>
<div class="rightSide">
    <div class="theContent shadow-lg">
        <form action="/signups" method="post">
            @csrf
            <div class="form-group">
                <label for="email">Enter Email</label>
                <input id="email" name="email" type="email" class="form-control position-relative shadow-sm" required>
                <div class="btnContainer">
                    <button type="submit" class="shadow">
                        Submit
                        <span class="wave_1"></span>
                        <span class="wave_2"></span>
                        <span class="wave_3"></span>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="cardBorders mobileOnly">
        <div class="infoCard shadow">
            <h3>Anime Dating</h3>
            <p>A dating website for true fans of Anime.</p>
            <p>Launching February 2020</p>
        </div>
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