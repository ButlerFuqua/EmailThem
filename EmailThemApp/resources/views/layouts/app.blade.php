@extends('layouts.head')


@section('body')



    <div id="app">
        <header-component></header-component>
        <main>
            <sidebar-component></sidebar-component>
            <div id="pageContent" class="container-fluid">@yield('content')</div>
        </main>
    </div>









@endsection