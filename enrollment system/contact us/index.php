<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $conn = mysqli_connect("localhost", "root", "", "contactus-database") or die("Connection Failed:" . mysqli_connect_error());
    if (isset($_POST["name"]) && isset($_POST["subject"]) && isset($_POST["message"])) {
        $username = $_POST["name"];
        $password = $_POST["subject"];
        $email = $_POST["message"];

        $sql = "INSERT INTO `contactusform` (`name`, `subject`, `message`) VALUES ('$username', '$password', '$email')";
        
        $query = mysqli_query($conn, $sql);
    }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ubl Daycare</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        
        <div class="header-container">
            <header>
                <div class="logo-container">
                    <img src="logo.png">
                </div>

                <i class="fa-solid fa-bars" id="open-btn"></i>
                <i class="fa-solid fa-x" id="close-btn"></i>

                <nav id="nav-page">
                    <a href="http://localhost/enrollment%20system/homepage/">Homepage</a>
                    <a href="http://localhost/enrollment%20system/about%20us/">About Us</a>
                    <a href="http://localhost/enrollment%20system/admission/">Admission</a>
                    <a href="#">Contact Us</a>
                </nav>
            </header>
        </div>

        <div class="form-wrapper">
            <form method="POST">

                <div><h1>Send us a Message!</h1></div>

                <div><label>Name</label><br>
                    <input type="text" placeholder="Name" name="name"></div>

                <div><label>Subject</label> <br>
                    <input type="text" placeholder="Subject" name="subject"></div>

                <div><label>Message</label> <br>
                    <input type="text" placeholder="Message" name="message"></div>

                <div><button id="submitBtn" name="submit">Submit</button></div>
            </form>
        </div>
        
        <script src="app.js" async defer></script>
    </body>
</html>