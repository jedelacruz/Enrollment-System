<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $conn = mysqli_connect("localhost", "root", "", "enrollpage-database") or die("Connection Failed:" . mysqli_connect_error());
    if (isset($_POST["firstName"]) && isset($_POST["middleName"]) && isset($_POST["lastName"]) && isset($_POST["month"]) && isset($_POST["day"]) && isset($_POST["year"]) && isset($_POST["address"]) && isset($_POST["email"]) && isset($_POST["contactNum"])) {
        $firstName = $_POST["firstName"];
        $middleName = $_POST["middleName"];
        $lastName = $_POST["lastName"];
        $month = $_POST["month"];
        $day = $_POST["day"];
        $year = $_POST["year"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $contactNum = $_POST["contactNum"];

        $sql = "INSERT INTO `enrollopageform` (`first name`, `middle name`, `last name`, `birth month`, `birth day`, `birth year`, `address`, `email`, `contact number`) VALUES ('$firstName', '$middleName', '$lastName', '$month', '$day', '$year', '$address', '$email', '$contactNum')";

        
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

                <div class="title-container">
                    <h1>Enrollment Form</h1>
                    <p>Fill out the form for registration.</p>
                </div>

                <div class="names-container">
                    <div>
                        <h3>Student Name</h3>
                    </div>
                    <div class="name-input-container">
                        <input type="text" name="firstName" placeholder="First Name">
                        <input type="text" name="middleName" placeholder="Middle Name">
                        <input type="text" name="lastName" placeholder="Last Name">
                    </div>                    
                </div>

                <div class="birthDate-container">
                    <div>
                        <h3>Birth Date</h3>
                    </div>
                    <div class="birth-input-container">
                        <input type="text" name="month" placeholder="Month">
                        <input type="text" name="day" placeholder="Day">
                        <input type="text" name="year" placeholder="Year">
                    </div>   
                </div>

                <div class="address-container">
                    <div>
                        <h3>Address</h3>
                    </div>
                    <div>
                        <input type="text" name="address" placeholder="Address">
                    </div>
                </div>

                <div class="email-container">
                    <div>
                        <h3>Email</h3>
                    </div>
                    <div>
                        <input type="email" name="email" placeholder="Email">
                    </div>
                </div>

                <div class="contactNum-container">
                    <div>
                        <h3>Contact Number</h3>
                    </div>
                    <div>
                        <input type="text" name="contactNum" placeholder="Contact Number">
                    </div>
                </div>

                <div class="submit-container">
                    <button name="submit" id="submitBtn">Submit</button>
                </div>

            </form>
        </div>
        
        <script src="app.js" async defer></script>
    </body>
</html>