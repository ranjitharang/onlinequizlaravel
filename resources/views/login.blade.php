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
      
   
         <form action="/validationtest" method="get">
         Username: <input type="text" name="username"><br>
         Password: <input type="text" name="password"><br>
         <input type="submit">
         </form> 
     
   
   </body>
</html>