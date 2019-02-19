<html>
<head>
<title>Form Passing through DB</title>
</head>
<body>
<form action="/store" method="post" enctype="multipart/form-data">

	{{ csrf_field() }}
	First Name:<br>
	<input type="text" name="firstname" ><br>
	Last Name:<br>
	<input type="text" name="lastname" ><br>

	
  <input type="file" name="image">

  <input type="submit" name="submit" value="submit">
</form>
</body>
</html>
	