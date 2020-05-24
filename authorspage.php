<?php
 include 'db.php';
 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<title>Our Authors</title>
<style>

body{
 background-image: url(underwater.png);
 padding: 20px;
}
.ourauthors{
 font-family: Impact, Charcoal, serif;
 font-size: 36px;
 text-align: center;
 background: rgba(76, 175, 80, 0.3)
}

.searchbar{
 width: 80%;
 font-size: 16px;
 font-family: Impact, Charcoal, serif;
 text-align: right;
}
.author{
 width: 80%;;
 
}
.author_img{
 float: left;
}
p.author_name{
 font-family: Impact, Charcoal, serif;
 font-size: 28px;
}
p.author_dcr{
 font-family: Arial, Helvetica, sans-serif;
 font-size: 17px;
 width: 70%;
 background: rgba(120, 120, 112, 0.6);
}


</style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Book O'Clock</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="indexpage.html">Genres</a></li>
      <li><a href="authorspage.php">Authors</a></li>
      <li><a href="shprehje.html">Quotes</a></li>
      <li><a href="new.html">New</a></li>
    </ul>
    <form class="navbar-form navbar-right" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>
<div class="ourauthors">OUR AUTHORS</div>
<br>
<div >
<form method="POST" action="search.php"> <center>
<input type="text" class="searchbar" name="search" placeholder="search...">
<button class="button" type="submit" name="submit-search">
  <i class="glyphicon glyphicon-search"></i>
</button>
</center>
</form>
</div>
<br>
<center>
<div>
<div class="author">
    <?php 
    $sql = "SELECT * FROM authors";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);

    if ($queryResults > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo " <div>
            <h3>" .$row['authorsname']. "</h3>
            <p>" .$row['authorscdsc']. "</p>
            </div>";

        
        }
    }
    ?>
    </div>
</center>
</body>
</html>
