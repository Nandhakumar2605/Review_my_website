<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Bootstrap CSS and JavaScript here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Fake review system</title>
</head>
<body>
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light text-center">
  <a class="navbar-brand mx-auto" href="#"><h1>Fake Review System</h1></a>
 </nav>
 <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light text-center">
</nav>
<div class="alert alert-secondary" role="alert">
 <a href="index5.php" class="alert-link">View Reviews</a>. click if you like.
</div>
<div class="container text-center">
  <h2>How is my website</h2>
  <p>Not to worry! If Google has not discovered your website yet, you can submit it directly to Google for indexing. You can do this using a free tool called Google Search Console. In the video below, we’ll learn even more about what Search Console can do for you. If your website is built on an e-commerce or website builder platform (like Shopify, Squarespace, Wix, Weebly, etc.), you can discover their recommended tips and ways to verify yourself on Search Console and manage other aspects of organic search on Google’s help center.</p>
</div>
<?php
$servername = "localhost";
$username = "id21129342_root";
$password = "6F3tG=_%VKz}iqZ8";
$dbname = "id21129342_localhost";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = ($_POST["name"]);
    $email = ($_POST["email"]);
    $feedback = ($_POST["feedback"]);

    if (empty($name) || empty($email) || empty($feedback)) {
        echo '<div class="alert alert-danger" role="alert">Please fill in all fields.</div>';
    } else {
        $sql = "INSERT INTO review (NAME, EMAIL, Review) VALUES ('$name', '$email', '$feedback')";
        $result = $conn->query($sql);
           header("Location:index5.php");
    }
}
$conn->close();
?>

    <div class="container mt-5">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control form-control-sm" name="name" placeholder="Enter your name">
                    <?php
                    if (isset($_POST["submit"])) {
                        $name = $_POST['name'];
                        if (empty($name)) {
                            echo '<div class="alert alert-primary" role="alert">Name is empty</div>';
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control form-control-sm" name="email" placeholder="Enter your email">
                    <?php
                    if (isset($_POST["submit"])) {
                        $email = $_POST['email'];
                        if (empty($email)) {
                            echo '<div class="alert alert-primary" role="alert">Email is empty</div>';
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="feedback">Feedback</label>
                    <textarea class="form-control form-control-sm" name="feedback" style="height: 130px;" placeholder="Enter your feedback"></textarea>
                    <?php
                    if (isset($_POST["submit"])) {
                        $feedback = $_POST["feedback"];
                        if (empty($feedback)) {
                            echo '<div class="alert alert-primary" role="alert">Feedback is empty</div>';
                        } elseif (strlen($feedback) < 10) {
                            echo '<div class="alert alert-primary" role="alert">Must have 10 characters</div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
   
        <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
    </form>
</div>

</form>
</div>
                            
</body>
 </html>
