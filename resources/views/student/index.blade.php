@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Student Name</td>
          <td>Subject</td>
          <td>Answers</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
       
        @foreach($student as $students)
        <tr>
            <td>{{$students->id}}</td>
            <td>{{$students->name}}</td>
           <td>{{$students->subject}}</td>
            <td>{{$students->answers}}</td>
            <td><a class="btn btn-info" href="{{ route('student.show',$students->id) }}">Show</a></td>
            <td><a class="btn btn-danger" href="{{ route('student.create',$students->id) }}">Create</a></td>
            <td><a href="{{ route('student.edit',$students->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('student.destroy', $students->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <!--{{ $student->links() }}-->
  {{ $student->links() }}
<div>
@endsection