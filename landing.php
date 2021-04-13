<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Zehar</title>
  </head>
  <body>
    <?php session_start() ?>
    <div class="offset-md-4 col-md-4 col-8 offset-2 " >
        <div class="row"></div>
        <form style="margin-top: 30%" class="bg-light px-4 py-4 card" action="./index.php">
          <center> <h1> <?php echo isset($_SESSION['uname'])?'Welcome '.$_SESSION['uname']:'please login'; ?> </h1> </center>
          <!-- <input type="text" name="uname" placeholder="Username" class="col-12 offset-3 offset-md-0 col-md-6 my-2 mx-auto form-control"> -->
          <h4 class = "mt-4"> Your balance is : <?php echo isset($_SESSION['balance'])?$_SESSION['balance']:'Not available please login'; ?></h4>
          <input type="submit" name="submit" class="mt-4 col-4 offset-4 btn btn-primary" value=<?php echo isset($_SESSION['uname'])?'"Logout"':'"Login"'; ?> >
        </form>
        <a href="./a.php"><button class="mt-4 col-4 offset-4 btn btn-primary">Back</button></a>

	  </div>

    <!-- </div> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>