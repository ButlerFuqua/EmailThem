@extends('layouts.head')


@section('body')

<div id="app">
<landing-component
session-message="{{ session('message') }}"
session-link="{{ session('link') }}"
count="{{ $count }}"
></landing-component>
</div>



@endsection



