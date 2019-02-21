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
          <td>Teacher Name</td>
          <td>Subject</td>
          <td>Upload Image</td>
          <td>Questions</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($teacher as $teachers)
        <tr>
            <td>{{$teachers->id}}</td>
            <td>{{$teachers->name}}</td>
           <td>{{$teachers->subject}}</td>
           <input type="hidden" name="subject" value="0">
           {!! Form::checkbox('subject',1,false) !!}
           <td>{{$students->image}}</td>
           <form action="/uploadfiletest" method="post" enctype="multipart/form-data">
        <input type="hidden"  name="_token" value="<?php echo csrf_token(); ?>" >
  <input type="file" name="image">
  <input type="submit" name="submit" value="submit">
   </form>
            <td>{{$teachers->questions}}</td>
          <td><a class="btn btn-info" href="{{ route('teacher.show',$teachers->id) }}">Show</a></td>
          <td><a class="btn btn-danger" href="{{ route('teacher.create',$teachers->id) }}">Create</a></td>
            <td><a href="{{ route('teacher.edit',$teachers->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('teacher.destroy', $teachers->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  {{ $teacher->links() }}
<div>
@endsection