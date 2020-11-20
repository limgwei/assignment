<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Search Results</title>

    <style>
        table, th, td {
  border: 1px solid black;
}
    </style>
</head>
<body>
    <h1>Book Search Results</h1>
    <?php
    // TODO 1: Create short variable names.


    // TODO 2: Check and filter data coming from the user.


    // TODO 3: Setup a connection to the appropriate database.


    // TODO 4: Query the database.


    // TODO 5: Retrieve the results.


    // TODO 6: Display the results back to user.


    // TODO 7: Disconnecting from the database.
    include('conn.php');
    if(isset($_POST['searchterm'])){
      $searchterm = $_POST['searchterm'];
      $searchtype = $_POST['searchtype'];
      $sql = "SELECT * from catalogs where $searchtype like '%$searchterm%'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        // output data of each row
        ?>
            <table style="border:1px solid black">
                <tr>
                <th>ISBN</th>
                <th>Author</th>
                <th>Title</th>
                <th>Price</th>
                </tr>
                
                
           
        <?php
            while($row = $result->fetch_assoc()) {
?>
<tr>

<td><?php echo $row['isbn'] ?></td>
    <td><?php echo $row['author'] ?></td>
    <td><?php echo $row['title'] ?></td>
    <td><?php echo $row['price'] ?></td>
</tr>


<?php
          
            }
?> </table>
            <?php
      } else {
        echo $sql;
      }
     
    }

    ?>
</body>
</html>