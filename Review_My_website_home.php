<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Bootstrap CSS and JavaScript here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Centered Text Project Navbar</title>
</head>
<body>
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light text-center">
  <a class="navbar-brand mx-auto" href="#"><h1>Fake Review System</h1></a>
</nav>
 <div class="alert alert-light" role="alert">
  Review My <a href="index4.php" class="alert-link">Click here</a>.Website
</div>
<div class="container text-center">
  <h2>How is my website</h2>
  <p>Not to worry! If Google has not discovered your website yet, you can submit it directly to Google for indexing. You can do this using a free tool called Google Search Console. In the video below, we’ll learn even more about what Search Console can do for you. If your website is built on an e-commerce or website builder platform (like Shopify, Squarespace, Wix, Weebly, etc.), you can discover their recommended tips and ways to verify yourself on Search Console and manage other aspects of organic search on Google’s help center.</p>
</div>
<div class="container">
   <div class="row">
<?php
$servername = "localhost";
$username = "id21129342_root";
$password = "6F3tG=_%VKz}iqZ8";
$dbname = "id21129342_localhost";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}// Include your database connection configuration

$sql = "SELECT * FROM review";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
    $name = $row['NAME'];
    $email = $row['EMAIL'];
    $feedback = $row['Review'];
    ?>
  <div class="col-md-4 mb-4">
<div class="card" style="width: 19rem;">
  <img src="https://helpdeskgeek.com/wp-content/pictures/2022/05/review-google.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $name ?></h5>
    <ul class="list-group list-group-flush">
     <li class="list-group-item"><h6><?php echo $email ?></h6></li>
    </ul>
    <p class="card-text"><?php echo $feedback ?></p>
  </div></div>
</div>

<?php
}
?>
   </div></div>
</body>
        
 </html>
