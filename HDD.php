<?php include_once 'assets/db.inc.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Coleman's Computers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-3.4.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Aldrich">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
  <style>
  </style>
</head>
<body style="background-color: #333; color:#000;">

<!--Navbar Start-->
<div style="background-color:#545454; margin-left:-15px;" class="container-fluid">
  <a href="index.php"><img style="float:left; width:10%; min-width:150px; height:auto;" src="assets/logo.png"/></a>
  <div style="padding-top:15px; float:right; font-family:Aldrich; color:#000;" class="content-heading"><h1 style="font-size:calc(0.5em + 1.5vw);">No, We're Not the Camping Company</h1></div>
</div>

<nav class="navbar navbar-inverse" style="font-family: Aldrich;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                     
      </button>
      <a style="font-size:calc(1em + 1vw);" class="navbar-brand" href="index.php">Coleman's</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul style="font-size:calc(0.5em + 0.75vw);" class="nav navbar-nav">
        <li><a href="CPU.php">CPUs</a></li>
        <li><a href="GPU.php">GPUs</a></li>
        <li><a href="RAM.php">RAM</a></li>
        <li><a href="MOBO.php">Motherboards</a></li>
        <li class="active"><a href="#">Storage</a></li>
        <li><a href="PWR.php">Power Supplies</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div style="background-color:#BCB8B1; border-color:#A00008;" class="panel panel-primary">
      <?php
        $result = mysqli_query($conn, "SELECT * FROM HDD WHERE itemID=1");
        if (mysqli_num_rows($result)) {
          while($row = mysqli_fetch_array($result)) {
            echo '<div style="background-color:#A00008; border-color:#A00008; font-family:Aldrich;" class="panel-heading">' . $row['itemName'] . '</div>';
            echo  '<div class="panel-body"><img src="' . $row['itemPic'] . '" class="img-responsive" style="width:100%" alt="Placeholder"></div>';
            echo '<div style="border-width:2px; border-color:#A00008; background-color:#BCB8B1; font-family:Aldrich;" class="panel-footer">' . $row['itemPrice'] . '</div>';
          }
        }
?>
        
      </div>
    </div>
    <div class="col-sm-4">
      <div style="background-color:#BCB8B1; border-color:#A00008;" class="panel panel-primary">
      <?php
        $result = mysqli_query($conn, "SELECT * FROM HDD WHERE itemID=2");
        if (mysqli_num_rows($result)) {
          while($row = mysqli_fetch_array($result)) {
            echo '<div style="background-color:#A00008; border-color:#A00008; font-family:Aldrich;" class="panel-heading">' . $row['itemName'] . '</div>';
            echo  '<div class="panel-body"><img src="' . $row['itemPic'] . '" class="img-responsive" style="width:100%" alt="Placeholder"></div>';
            echo '<div style="border-width:2px; border-color:#A00008; background-color:#BCB8B1; font-family:Aldrich;" class="panel-footer">' . $row['itemPrice'] . '</div>';
          }
        }
?>
      </div>
    </div>
    <div class="col-sm-4">
      <div style="background-color:#BCB8B1; border-color:#A00008;" class="panel panel-primary">
      <?php
        $result = mysqli_query($conn, "SELECT * FROM HDD WHERE itemID=3");
        if (mysqli_num_rows($result)) {
          while($row = mysqli_fetch_array($result)) {
            echo '<div style="background-color:#A00008; border-color:#A00008; font-family:Aldrich;" class="panel-heading">' . $row['itemName'] . '</div>';
            echo  '<div class="panel-body"><img src="' . $row['itemPic'] . '" class="img-responsive" style="width:100%" alt="Placeholder"></div>';
            echo '<div style="border-width:2px; border-color:#A00008; background-color:#BCB8B1; font-family:Aldrich;" class="panel-footer">' . $row['itemPrice'] . '</div>';
          }
        }
?>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
  <div class="col-sm-4">
      <div style="background-color:#BCB8B1; border-color:#A00008;" class="panel panel-primary">
      <?php
        $result = mysqli_query($conn, "SELECT * FROM HDD WHERE itemID=4");
        if (mysqli_num_rows($result)) {
          while($row = mysqli_fetch_array($result)) {
            echo '<div style="background-color:#A00008; border-color:#A00008; font-family:Aldrich;" class="panel-heading">' . $row['itemName'] . '</div>';
            echo  '<div class="panel-body"><img src="' . $row['itemPic'] . '" class="img-responsive" style="width:100%" alt="Placeholder"></div>';
            echo '<div style="border-width:2px; border-color:#A00008; background-color:#BCB8B1; font-family:Aldrich;" class="panel-footer">' . $row['itemPrice'] . '</div>';
          }
        }
?>
      </div>
    </div>
    <div class="col-sm-4">
      <div style="background-color:#BCB8B1; border-color:#A00008;" class="panel panel-primary">
      <?php
        $result = mysqli_query($conn, "SELECT * FROM HDD WHERE itemID=5");
        if (mysqli_num_rows($result)) {
          while($row = mysqli_fetch_array($result)) {
            echo '<div style="background-color:#A00008; border-color:#A00008; font-family:Aldrich;" class="panel-heading">' . $row['itemName'] . '</div>';
            echo  '<div class="panel-body"><img src="' . $row['itemPic'] . '" class="img-responsive" style="width:100%" alt="Placeholder"></div>';
            echo '<div style="border-width:2px; border-color:#A00008; background-color:#BCB8B1; font-family:Aldrich;" class="panel-footer">' . $row['itemPrice'] . '</div>';
          }
        }
?>
      </div>
    </div>
    <div class="col-sm-4">
      <div style="background-color:#BCB8B1; border-color:#A00008;" class="panel panel-primary">
      <?php
        $result = mysqli_query($conn, "SELECT * FROM HDD WHERE itemID=6");
        if (mysqli_num_rows($result)) {
          while($row = mysqli_fetch_array($result)) {
            echo '<div style="background-color:#A00008; border-color:#A00008; font-family:Aldrich;" class="panel-heading">' . $row['itemName'] . '</div>';
            echo  '<div class="panel-body"><img src="' . $row['itemPic'] . '" class="img-responsive" style="width:100%" alt="Placeholder"></div>';
            echo '<div style="border-width:2px; border-color:#A00008; background-color:#BCB8B1; font-family:Aldrich;" class="panel-footer">' . $row['itemPrice'] . '</div>';
          }
        }
?>
      </div>
    </div>
  </div>
</div><br><br>
</body>

<footer>

<nav class="navbar-wrapper navbar-inverse navbar-fixed-bottom">
  <div class="container-fluid">
  <p style="font-family:Aldrich; font-size:calc(0.5em + 0.75vw);" class="navbar-text pull-left">Coleman's Computers</p>
  <p style="font-family:Aldrich; font-size:calc(0.5em + 0.75vw);" class="navbar-text pull-right">Call for Purchase Options: 248-434-5508</p>
  </div>
</nav>
</footer>

</html>
