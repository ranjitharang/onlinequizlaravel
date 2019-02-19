<html>
   
   <head>
      <title>Login Form</title>
   </head>

   <body>
      
      @if (count($errors) > 0)
         <div class = "alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
      @endif
      
   
         <form method = "post" action="/getmessage">
   {{ csrf_field() }}
   <label> Email </label>
   <input type = "text" name = "email"/>
   <br/>
   <label> Message </label>
   <input type = "text" name = "message"/>
   <br/>
   <input type = "submit" name = "submitButton" value = "submit">
   <br/>
</form> 
     
   
   </body>
</html>