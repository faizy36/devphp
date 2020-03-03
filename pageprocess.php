<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Create Pages</title>
  </head>
  <body>
  <br>
<div class="container"
    <h>Create a Page here</h><br>
	<form method = "post" action= "page.php"><br>
<form method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Page Title</label>
    <input type="text" class="form-control" name="pagetitle" id="exampleFormControlInput1" placeholder="Title" value="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Page Content</label>
    <input type="text" class="form-control" name="pagecontent" id="exampleFormControlInput1" placeholder="Content" value="">
  </div>
  
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
			<button class="btn btn-danger" type="submit">Save</button>
		  </div>
</form>
</div>
</html>