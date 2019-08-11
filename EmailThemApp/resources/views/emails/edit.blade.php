@extends('layouts.app')

@section('content')


<h2 class="mt-3">Edit email</h2>
<hr>
<br>

<form method="post" action="/emails">
    @csrf
    <div class="form-group">
      <label for="title">
        <strong>Title of Email</strong>
      </label>
      <input id="title" name="title" type="text" class="form-control" />
    </div>
    <div class="form-group">
      <label for="from">Email is from</label>
      <input id="from" name="from" type="text" class="form-control" />
    </div>
    <div class="form-group">
      <label for="subject">Email Subject</label>
      <input id="subject" name="subject" type="text" class="form-control" />
    </div>
    <div class="form-group">
      <label for="wysiwyg">Email Message</label>
      <textarea name="body" class="form-control" id="wysiwyg" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-outline-primary" value="Save" />
    </div>
  </form>

@endsection