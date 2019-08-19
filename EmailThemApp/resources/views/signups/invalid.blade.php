@extends('layouts.head')


@section('body')


<div id="app">
   <invalid-component
   session-message="{{ session('message') }}"
   session-link="{{ session('link') }}"
   ></invalid-component>
</div>





@endsection