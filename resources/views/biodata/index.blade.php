@extends(layouts.app);
@section('content')

<div class="container">
   <div class="row">
     <div class="col-md-10">
        <h3>List Biodata</h3>
     </div>
      <div class="col-sm-2">

      	<a class="btn btn-sm btn-success" href="{{ route ('biodata.create') }}">Create new biodata</a> 
       </div>
      </div>
   </div>

   @if ($message = Session::get('success'))
   <div class="alert alert-success">
   <p> {{ $message }} </p>
   </div>
   @endif
    <table class="table table-hover table-sm">

    	<tr>
    	 <th width="50px"><b>No.</b></th>  
    	 <th width="300px"><b>Hello</b></th>
    	</tr>

    </table>	
</div>



@endsection