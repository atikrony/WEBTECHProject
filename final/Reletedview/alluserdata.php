<?php
include("../Model/database.php");
$mydb=new myDb();
$results=$mydb->getAllUser();

?>



<!DOCTYPE html>
<html lang="en">
<head>
<head>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../Reletedview/reg.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
</head>
<body>
<div class="overflow">

 <a href="../Reletedview/home.php"><button class="submit adata">Home</button></a>
  <a  href="../Reletedview/alluserdata.php"><button class="submit adata">All Users</button></a>
  <a  href="###"><button class="submit adata">User</button></a>
  <a  href="###"><button class="submit adata">Sellers</button></a>
  <a  href="../Controller/logout.php"><button class="adata submit">Logout?</button></a>





</div>


<div class="container" style="margin-top: 90px;">

<table class="table">
  <thead>
    <tr>
     
      <th scope="col">name	</th>
      <th scope="col">dob	</th>
      <th scope="col">email	</th>
      <th scope="col">phone	</th>
      <th scope="col">id	</th>
      <th scope="col">username</th>	
      <th scope="col">password</th>	
      <th scope="col">gender	</th>
      <th scope="col">image</th>
    </tr>
  </thead>
  <tbody>


    <?php foreach($results as $result){ ?>
    <tr>
      
      <td><?php echo $result['name']   ?></td>
      <td><?php echo $result['dob']   ?></td>
      <td><?php echo $result['email']   ?></td>
      <td><?php echo $result['phone']   ?></td>
      <td><?php echo $result['id']   ?></td>
      <td><?php echo $result['username']   ?></td>
      <td><?php echo $result['password']   ?></td>
      <td><?php echo $result['gender']   ?></td>
      <td><?php echo $result['image']   ?></td>

    </tr>

    <?php }  ?>
  
  </tbody>
</table>

</div>
  
<footer>
  
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- <script src="./js/script.js"></script> -->
</body>

</html>