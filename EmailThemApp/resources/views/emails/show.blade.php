@extends('layouts.app')

@section('content')

<h2 class="mt-3">View email</h2>
<hr>
<br>

<p><strong>{{ $email->title }}</strong></p>
<hr>
<p>Created: {{ $email->created }}</p>
<p>From: {{ $email->from }}</p>
<p>Subject: {{ $email->subject }}</p>

<div class="card">
    <div class="card-body">
        {{ $email->body }}
    </div>
</div>
<br>
<br>

@if(!$email->hasSent)
    <div class="d-flex">
        <a class="btn btn-outline-success mr-2" href="/emails/{{ $email->id }}/edit">Edit Email</a>
        <!-- Button trigger Delete modal -->
        <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#areyousureDelete">
            Send To list
        </button>
    </div>
@endif


      
      <!-- Modal -->
      <div class="modal fade" id="areyousureDelete" tabindex="-1" role="dialog" aria-labelledby="areyousureDeleteTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="areyousureDeleteTitle">Are you Sure you want to Send this email?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="/emails/{{ $email->id }}/sendemail" method="POST">
                    @csrf
                    <input type="submit" class="btn btn-outline-dark" value="Send Email">
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>
    




@endsection