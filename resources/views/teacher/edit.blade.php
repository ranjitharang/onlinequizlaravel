@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Teacher</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('teacher.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
      <form method="post" action="{{ route('teacher.update', $teacher->id) }}">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="name">Teacher Name:</label>
          <input type="text" class="form-control" name="name" value={{ $teacher->name }} />
        </div>
        <div class="form-group">
          <label for="price">Subject :</label>
          <input type="text" class="form-control" name="subject" value={{ $teacher->subject }} />
        </div>
        <div class="form-group">
         <label for="Marks">Questions:</label>
          <input type="text" class="form-control" name="questions" value={{ $teacher->questions }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection