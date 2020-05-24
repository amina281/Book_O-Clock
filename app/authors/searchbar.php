
<?php
include "db.php";
$conn = new PDO("mysql:host=localhost;dbname=pw","root","Bilani99");

if (isset($_POST["submit-search"])){
    $str = $_POST["search"];
    $sth = &conn->prepare("SELECT * FROM `authors` WHERE authorsname" = '$str'");

    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth -> execute();
    if ($row = $sth->fetch())
    {
        
}
?>