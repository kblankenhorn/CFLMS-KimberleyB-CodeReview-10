<?php
ob_start();
session_start();
require_once 'actions/db_connect.php';?>


<!DOCTYPE html>
<html>
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
   
    <title>CR10-KimberleyB-BigLibrary</title>
<style>
  body{
    font-family: 'Merriweather', serif;
  }
</style>
</head>
<body>
<header>
  <div class="text-center bg-dark">
    <h1 class="text-info p-5">Your Library</h1>
    <h3 class="text-info p-2 pb-5">Create and edit your content here</h3>
  </div>
</header>

<div class ="container-fluid">
  

   
   <table class="table table-bordered mt-5 bg-dark text-white">
       <thead>
           <tr class="bg-info text-white">
               <th scope="col" class="text-center align-middle">image</th>
               <th scope="col" class="text-center align-middle">type</th>
               <th scope="col" class="text-center align-middle">title</th>
               <th scope="col" class="text-center align-middle">author</th>
               <th scope="col" class="text-center align-middle">description</th>
               <th scope="col" class="text-center align-middle">publisher</th>
               <th scope="col" class="text-center align-middle">publish date</th>
               <th scope="col" class="text-center align-middle">publish address</th>
               <th scope="col" class="text-center align-middle">ISBN_code</th>
               <th scope="col" class="text-center align-middle"></th>
           </tr>

       </thead>

       <tbody>

           
       <?php
           $sql = "SELECT * FROM library";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                       <td class='justify-content-center' style='width:20rem'><img src='". $row['image'] ."' alt='image' class='img-thumbnail' style='width:200px; height:200px; object-fit:cover;'></td>
                       <td>" .$row['type']."</td>
                       <td>" .$row['title']."</td>
                       <td>" .$row['author']."</td>
                       <td class='text-center' style='width: 30rem;'>" .$row['description']."</td>
                       <td>" .$row['publisher']."</td>
                       <td>" .$row['publish_date']."</td>
                       <td class='text-center' style='width: 10rem;'>" .$row['publish_address']."</td>
                       <td>" .$row['ISBN_code']."</td>

                       <td class='align-middle' >
                           <a href='update.php?id=" .$row['libraryId']."'><button type='button' class='btn btn-info align-middle m-2 w-100'>Edit</button></a>
                           <a href='delete.php?id=" .$row['libraryId']."'><button type='button' class='btn btn-info align-middle m-2 w-100'>Delete</button></a>
                       </td>
                   </tr>" ;
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
            ?>

       </tbody>
   </table>
    <a href= "create.php" class="justify-content-center"><button type="button" class="btn btn-info w-25 mb-5 justify-content-center">Add</button></a>
</div>

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
<?php ob_end_flush(); ?>