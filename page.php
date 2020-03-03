<?php
include 'game.php';
$pagetitle = $_POST['pagetitle'];
$pagecontent = $_POST['pagecontent'];

$insert = "INSERT INTO pages(page_title, page_des) 
		   VALUES('$pagetitle', '$pagecontent')";	

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Create Page</title>
</head>

<body>
  <div class="container">
    <h1>Result Shown Page</h1>
    <?php

    if (mysqli_query($conn, $insert)) {
      echo '<h3>Record has been added successfully</h3>';
    } else {
      echo '<b>There is an error<b>';
    }



    ?>

    <div class="row">
      <div class="col"><a href="record.php" class="btn btn-success">All</a></div>
      <div class="col"><a href="pageprocess.php" class="btn btn-dark">New</a></div>
    </div>
  </div>
  </html>