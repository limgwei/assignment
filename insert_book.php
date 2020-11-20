<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Entry Results</title>
</head>
<body>
    <h1>Book Entry Results</h1>
    <?php

    include('conn.php');
    // TODO 1: Create short variable names.


    // TODO 2: Check and filter data coming from the user.


    // TODO 3: Setup a connection to the appropriate database.


    // TODO 4: Query the database.


    // TODO 5: Display the feedback back to user.


    // TODO 6: Disconnecting from the database.



    ?>
<?php
 include('conn.php');
if(isset($_POST['author'])){
  $author = $_POST['author'];
  $title = $_POST['title'];
  $price = $_POST['price'];
  $isbn = $_POST['isbn'];
  $sql = "INSERT into catalogs(isbn,author,title,price) values($isbn,$author,$title,$price)";
  if ($conn->query($sql) === TRUE) {
    echo "Add successful";
    echo "<br>Author:".$author."<br>Title:".$title."<br>Price:".$price."<br>ISBN:".$isbn;
    $conn->close();
  }
  else{

    ?>
    <script>
      alert("<?php echo $conn->error; ?>");
      window.location.href = "newbook.html";
    </script>
    <?php   
  }
 
}

?>
</body>
</html>