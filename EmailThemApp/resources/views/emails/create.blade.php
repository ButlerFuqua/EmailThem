@extends('layouts.app')

@section('content')


<h2 class="mt-3">Create email</h2>
<hr>
<br>

@if($errors->any())
{{-- ($errors->all() --}}
<div class="alert alert-danger">
    <p>There were errors with creating your email. Please see below.</p>
</div>
@endif

<form  method="post" action="/emails">
    @csrf
    <div class="form-group">
      <label for="title">
        <strong>Title of Email</strong>
      </label>
      <input id="title" name="title" type="text" class="form-control {{ $errors->has('title') ? 'border border-danger' : '' }}" required value="{{ old('title') }}"/>
      @if($errors->has('title'))
      <p class="text-danger">Please include a title.</p>
      @endif
    </div>
    <div class="form-group">
      <label for="from">Email is from</label>
      <input id="from" name="from" type="text" class="form-control {{ $errors->has('from') ? 'border border-danger' : '' }}" required  value="{{ old('from') }}" />
      @if($errors->has('from'))
      <p class="text-danger">Please include an email value.</p>
      @endif
    </div>
    <div class="form-group">
      <label for="subject">Email Subject</label>
      <input id="subject" name="subject" type="text" class="form-control {{ $errors->has('subject') ? 'border border-danger' : '' }}" required  value="{{ old('subject') }}" />
      @if($errors->has('subject'))
      <p class="text-danger">Please include a subject.</p>
      @endif
    </div>
    <div class="form-group">
      <label for="wysiwyg">Email Message</label>
      <div class="{{ $errors->has('body') ? 'border border-danger' : '' }}">
          <editor-component info="{{ old('body') }}"></editor-component>
      </div>
      @if($errors->has('body'))
      <p class="text-danger">Please include a message.</p>
      @endif
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-outline-primary" value="Save" />
    </div>
  </form>






@endsection