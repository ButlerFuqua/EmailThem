@extends('layouts.head')


@section('body')

<div id="app">
<success-component
session-message="{{ session('message') }}"
session-link="{{ session('link') }}"
></success-component>
</div>



@endsection



