<?php
 include 'db.php';
 ?>
<!DOCTYPE html>
<html>
<head>
<body>
<div class="author">
<?php 
 if (isset ($_POST['submit-search']) ){
    $search = mysqli_real_escape_string($conn, $_POST['search']);
    $query = mysqli_query( "SELECT * FROM authors WHERE authorsname LIKE '%$search%'");
    $queryResult = mysqli_num_rows($query);

    if ($queryResult > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div>
            <h3>".$row['authorsname']."</h3>
            <p>".$row['authorscdsc']."</p>
            </div>";
        }


    }
    else {

        echo "There are no results!";
    }
    

}
?>
</body>
</html>