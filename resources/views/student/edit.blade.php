@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Student</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('student.index') }}"> Back</a>
            </div>
        </div>
    </div>
    
   
      <form method="post" action="{{ route('student.update', $student->id) }}">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="name">Student Name:</label>
          <input type="text" class="form-control" name="name" value={{ $student->name}} />
        </div>
        <div class="form-group">
         <label for="subject">Subject:</label>
          <input type="text" class="form-control" name="subject" value={{ $student->subject }} />
        </div>
        <div class="form-group">
         <label for="Answers">Answers:</label>
          <input type="text" class="form-control" name="answers" value={{ $student->answers }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection