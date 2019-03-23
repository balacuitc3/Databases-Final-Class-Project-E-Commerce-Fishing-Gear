<?php
error_reporting(0);
session_start();
echo $_SESSION['username'];
    include 'ownerheader.php';
    if(isset($_SESSION['username']) &&  $_SESSION['loggedin'] == true)
        {
?>
<html>
<head>
    
   <!links to stylesheet> 
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
    

        
    <!banner for the homepage>
<div class="container">
<header>
    <center><h1> </h1></center>
</header>
</div>

<style>
    body{
        background-image:url(wallhaven-273685.jpg);
        opacity: 1.9;
    }
    
    </style>
    <!names under the images>
<body>
    <p class = "title">KOI'S R'US </p>
    <p class = "rodsandlines"> Fishing Poles and Lines</p>
    <p class = "baitsandhooks"> Baits and Hooks</p>
    <p class = "Apparel"> Apparel</p>
    <p class = "Books"> Books</p>
  
    <! images for homepage>
    <a href="ownerProduct1.php">
    <img src= "https://www.fieldandstream.com/sites/fieldandstream.com/files/styles/1000_1x_/public/import/2016/RealPoles.jpg?itok=22IxAoWi"
        alt ="rodsandlines" class="image1">
    </a> 
       
    <a href="ownerProduct2.php">
     <img src= "http://swimbaitcity.com/finalgraphics/2014/rwrb.jpg"
        alt ="baitsandhooks" class="image2">
    
    </a>  
     <a href="ownerProduct3.php"> 
    <img src= "https://images-na.ssl-images-amazon.com/images/I/41KILPxI9jL.jpg"
        alt ="Apparel" class="image3">
    
    </a>
          
    <a href="ownerProduct4.php">
    <img src= "https://s3media.247sports.com/Uploads/Assets/26/733/7733026.jpg"
        alt ="Books" class="image4">
    </a>
       
    
    

</body>
</html>
<?php
}
else
{
print '<script>window.location.assign("login.php");</script>'; 
}
?>