@extends('layouts.app')

@section('content')


<h2 class="mt-3">Edit email</h2>
<hr>
<br>

<form method="post" action="/emails/{{ $email->id }}">
    @csrf
    @method('PATCH')
    <div class="form-group">
      <label for="title">
        <strong>Title of Email</strong>
      </label>
      <input id="title" name="title" type="text" class="form-control {{ $errors->has('title') ? 'border border-danger' : '' }}" required value="{{ $email->title }}" />
      @if($errors->has('title'))
      <p class="text-danger">Please include a title.</p>
      @endif
    </div>
    <div class="form-group">
      <label for="from">Email is from</label>
      <input id="from" name="from" type="text" class="form-control {{ $errors->has('from') ? 'border border-danger' : '' }}" required value="{{ $email->from }}" />
      @if($errors->has('from'))
      <p class="text-danger">Please include an email value.</p>
      @endif
    </div>
    <div class="form-group">
      <label for="subject">Email Subject</label>
      <input id="subject" name="subject" type="text" class="form-control {{ $errors->has('subject') ? 'border border-danger' : '' }}" required  value="{{ $email->subject }}">
      @if($errors->has('subject'))
      <p class="text-danger">Please include a subject.</p>
      @endif
    </div>
    <div class="form-group">
      <label for="wysiwyg">Email Message</label>
      <div class="{{ $errors->has('body') ? 'border border-danger' : '' }}">
            <editor-component info="{{ $email->body }}"></editor-component>
      </div>
      @if($errors->has('body'))
      <p class="text-danger">Please include a message.</p>
      @endif
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-outline-primary" value="Update" />
    </div>
  </form>

<br>
<br>
<br>
<!-- Button trigger Delete modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#areyousureDelete">
    Delete
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="areyousureDelete" tabindex="-1" role="dialog" aria-labelledby="areyousureDeleteTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="areyousureDeleteTitle">Are you Sure you want to delete this email?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/emails/{{ $email->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>


@endsection