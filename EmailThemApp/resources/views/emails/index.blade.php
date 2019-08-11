@extends('layouts.app')

@section('content')



<h2 class="mt-3">{{ $title }}</h2>
<hr>
<br>

<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Date Created</th>
        <th>View</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
    @foreach($emails as $email)
        <tr>
            <th>{{ $email->id }}</th>
            <td>{{ $email->title }}</td>
            <td>{{ $email->created }}</td>
            <td>
                <a href="/emails/{{ $email->id }}">View</a>
            </td>
            <td>
                <a href="/emails/{{ $email->id }}/edit">Edit</a>
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>

  {{ $emails->links() }}


@endsection