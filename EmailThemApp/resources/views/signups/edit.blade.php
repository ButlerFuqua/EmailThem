@extends('layouts.head')


@section('body')


<div id="app" class="container mt-3">

    <form action="/signups/{{ $signup->id }}" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="email">Enter Email</label>
            <input id="email" name="email" type="email" class="form-control" value="{{ $signup->email }}" required>
            <input type="submit" class="btn btn-outline-success mt-3" value="update">
        </div>
    </form>
<br>
<br>
<br>
<br>

        <!-- Button trigger Delete modal -->
        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#areyousureDelete">
                Delete
            </button>
    
    
        </div>
          <!-- Modal -->
          <div class="modal fade" id="areyousureDelete" tabindex="-1" role="dialog" aria-labelledby="areyousureDeleteTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="areyousureDeleteTitle">Are you Sure you want to Delete this signup?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form action="/signups/{{ $signup->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Permanently Delete">
                    </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
          </div>
        
    



@endsection