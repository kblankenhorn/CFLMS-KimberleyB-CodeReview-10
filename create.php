<?php
ob_start();
session_start();
require_once 'actions/db_connect.php';

?>

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
   
    <title>Add Content Here</title>
<style>
  body{
    font-family: 'Merriweather', serif;
  }
</style>
</head>
<body>

<fieldset >
   <legend class="bg-info text-white">Add Content</legend>

   <form  action="actions/a_create.php" method= "post">
       <table class="table table-bordered bg-dark text-white">
           <tr>
               <th>Image</th >
               <td><input  type="text" name= "image"></td>
           </tr>    
           <tr>
               <th>Type</th>
               <td><input  type="text" name= "type"/></td>
           </tr>
           <tr>
               <th>Title</th>
               <td><input  type="text" name= "title"/></td>
           </tr>
           <tr>
               <th>Author</th>
               <td><input  type="text" name= "author"/></td>
           </tr>
           <tr>
               <th>Description</th>
               <td><input  type="text" name= "description"/></td>
           </tr>
           <tr>
               <th>Publisher</th>
               <td><input  type="text" name= "publisher"/></td>
           </tr>
           <tr>
               <th>Publisher Date</th>
               <td><input  type="text" name= "publish_date"/></td>
           </tr>
           <tr>
               <th>Publisher Address</th>
               <td><input  type="text" name= "publish_address"/></td>
           </tr>
           <tr>
               <th>ISBN_Code</th>
               <td><input  type="text" name= "ISBN_code"/></td>
           </tr>
           <tr>
                <td><a href= "index.php"><button type="button" class="btn btn-info">Back</button></a></td>
                <td><button type="submit" class="btn btn-info">Insert New</button></td>
           </tr >
       </table>
   </form>

</fieldset >

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
<?php ob_end_flush(); ?>