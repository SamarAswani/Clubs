<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <title>Admin Page</title>
  <style>
    .sidenav {
      height: 100%;
      width: 250px;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #c3eafd;
      overflow-x: hidden;
      padding-top: 20px;
    }

    .navMain {
      margin-top: 75px;
      padding: 0px 10px;
    }
    .fontNavBar{
      color: #666;
      font-size: 14px;
      font-weight: 400;
      letter-spacing: 1px;
      text-transform: uppercase;
      line-height: 40px;
      transition: all 0.4s ease-in-out;
    }
    .fontNavBar a {
      padding: 6px 8px 6px 16px;
      text-decoration: none;
      color: #818181;
      display: block;
}
    .fontNavBar a:hover {
      color: #E3AE57;
}
    .main {
        margin-left: 270px;
        margin-top: -60px;
        padding: 0px 10px;
      }

    .tableMain{
        margin-left:250px;
        margin-top: 45px;
      }

    .formMain{
      margin-left:270px;
      margin-top: 25px;
    }
    .picMain{
      margin-left:1100px;
      margin-top: 25px;
    }

  </style>
<body>
  <div class="picMain">
    <a href="index.html">
    <img src="science-img.jpg" alt="Science" width ="100" height="100">
    </a>
  </div>
  <p>
    <div class="main">
      <strong><font color =#3badf9><font size = 50px>Admin Page</font></font></strong>
    </div>
  </p>
  <div class="sidenav">
    <div class="navMain">
      <div class="fontNavBar">
        <center><a href="index.html">Home</a></center>
        <center><a href="clubs.html">Clubs</a></center>
        <center><a href="search.html">Search</a></center>
        <center><a href="MultiSearch.html">Multi-Search</a></center>
        <center><a href="insert452345241123445.php">Insert</a></center>
        <center><a href="updateIndex.php">Update</a></center>
        <center><a href="deleteIndex.php">Delete</a></center>
        <center><a href="studentsInsert.html">Student Sign-Up</a></center>
      </div>
    </div>
  </div>
    <div class="formMain">
      <body>
        <div>
        <h2>You have successfully logged in.<h2>
        </div>
        <br>
        <div>
            <h3>(Make sure to log out before closing browser.)</h3>
        </div>
        <br>
        <br>
        <div>
           <button><a href="insert452345241123445.php">Insert</a></button>&emsp;&emsp;&emsp;&emsp;
           <button><a href="updateIndex.php">Update</a></button>&emsp;&emsp;&emsp;&emsp;
           <button><a href="deleteIndex.php">Delete</a></button>
        </div>
      </body>
    </div>
