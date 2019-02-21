@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Teacher
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('teacher.store') }}">
        @method('POST')
          <div class="form-group">
              @csrf
              <label for="name">Teacher Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="subject">Subject:</label>
              <input type="text" class="form-control" name="subject"/>
          <div class="form-group">
              <label for="image">Upload Image</label>
              <input type="image" class="form-control" name="image"/>
            </div>    
          </div>
          <div class="form-group">
              <label for="questions">Questions:</label>
              <input type="text" class="form-control" name="questions"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection