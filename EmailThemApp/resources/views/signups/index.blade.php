@extends('layouts.app')

@section('content')



<h2 class="mt-3">Signup List</h2>
<hr>
<br>

<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Email</th>
        <th>Date Added</th>
        <th>View</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
    @foreach($signups as $signup)
        <tr>
            <td>{{ $signup->id }}</td>
            <td>{{ $signup->email }}</td>
            <td>{{ $signup->added }}</td>
            <td>
                <a href="/signups/{{ $signup->id }}">View</a>
            </td>
            <td>
                <a href="/signups/{{ $signup->id }}/edit">Edit</a>
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>

  {{ $signups->links() }}



@endsection