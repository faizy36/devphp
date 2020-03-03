<?php
include 'game.php';
$pages= "SELECT * FROM pages" ;
$result= mysqli_query($conn , $pages);


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>All Pages</title>
  </head>
  <body>
    <div class="container">
	<h1>All pages</h1>
	<table class="table">
	    <tr>
		    <th>ID</th>
			<th>Page title</th>
			<th>Page Content</th>
			<th>Action</th>
			  </tr>
			<?php
			 if(mysqli_num_rows($result) > 0){
					
					while($row = mysqli_fetch_assoc($result)){
			
			?>
			
				
				<tr>
      
      <td><?php echo $row ['page_id'] ;   ?>  </td>
      <td><?php echo $row ['page_title'] ; ?>  </td>
      <td><?php echo $row [ 'page_des' ] ;  ?>  </td>
	  <td>
	  
						<a href="edit.php?page_id=<?php echo $row['page_id'] ; ?>" class="btn btn-dark">Edit</a>
						<a href="delete.php?page_id=<?php echo $row['page_id'] ; ?>" class="btn btn-danger">Delete</a>
	  </td>
    </tr>
				<?php		
					}
		
				} 

else {
					echo 'No Record Found';
				}
			?>
			
			
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>
		<div class="row">
			<div class="col"><a href="" class="btn btn-success">All Pages</a></div>
			<div class="col"><a href="pageprocess.php" class="btn btn-dark">Create New page</a></div>
		</div>
	</div>
	</html>