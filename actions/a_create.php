<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    
    <style>
       body{
       font-family: 'Merriweather', serif;
       }
    </style>    
</head>
<body>
    <div class="container-fluid bg-dark text-white p-5">


<?php 

require_once 'db_connect.php';

if ($_POST) {
    $image = $_POST['image'];
    $type = $_POST['type'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $description = $_POST['description'];
    $publisher = $_POST['publisher'];
    $publish_date = $_POST['publish_date'];
    $publish_address = $_POST['publish_address'];
    $ISBN_code = $_POST['ISBN_code'];

    $sql = "INSERT INTO library (image, type, title, author, description, publisher, publish_date, publish_address, ISBN_code) VALUES('$image', '$type', '$title', '$author', '$description', '$publisher', '$publish_date', '$publish_address', '$ISBN_code')";
    // $sql = "INSERT INTO library (image, type, title, author, description, publisher, publish_date, publish_address, ISBN_code) VALUES ('$image', '$type', '$title', '$author', '$description', '$publisher', '$publish_date', '$publish_address',''$ISBN_code')";
    if($connect->query($sql) === TRUE) {
        echo "<h3>New Record Successfully Created</h3>" ;
        echo "<a href='../create.php'><button type='button' class='btn btn-info m-3'>Back</button></a>";
        echo "<a href='../index.php'><button type='button' class='btn btn-info m-3'>Home</button></a>";
    } else  {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }

    $connect->close();
}

?>
</div>
</body>
</html>
