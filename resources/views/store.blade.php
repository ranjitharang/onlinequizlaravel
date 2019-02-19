<html>
   
   <head>
      <title>View Form</title>
   </head>
   
   <body>
      public function index() {
      $users = DB::select('select * from student');
      return view('stud_view',['users'=>$users]);
   }
   </body>
</html>