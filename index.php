<?php
$insert = false;
if(isset($_POST['name'])){

$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}
//echo "successfuly connect"

$name = $_POST['name'];
$name = $_POST['name'];
$DOB = $_POST['DOB'];
$Gender = $_POST['Gender'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$Address = $_POST['Address'];
$City = $_POST['City'];
$State = $_POST['State'];

$sql = "INSERT INTO `service00`.`ser01` ( `Name`, `Father Name`, `Date of Birth`, `Gender`, `Email`, `Phone No`, `Address`, `City`, `State`, `Date`) 
VALUES ('$name', '$name', '$DOB', '$Gender', '$Email', '$Phone', '$Address', '$City', '$State', current_timestamp());";

//echo $sql;

if($con->query($sql) == true){
   // echo " sussessful inserted";
    $insert = true;

}
else{
    echo "ERROR: $sql <br> $con->error";

}

$con->close();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Kind Service</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="stylesheet" href="color.css">
</head>
<body>
    <img class="bg01" src="bg001.jpg" alt="ALl Kind Service">
    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Carear</a>
        <a href="contact.php">Service</a>
        <a href="contact.php">Contact</a>

        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn" type="submit">Search</button>
          </form>
    </div><br>
    <div class="container">
        <h1>Welcome to All Kind Services</h1>
        <P1>Enter your full details</P1><br>
        <?php
        if($insert == true){
        echo "<p2 class='submitMsg'>Thanks for Submit this from, we are happy to see you joining us</p2>";
        }
        ?>

        <form action="index.php" method="post">
            
            <label for="Name" class="form-label">First Name:</label>
            <input type="text" name="name" id="name" placeholder="Enter Your First Name">
          
            
            <label for="Name" class="form-label">Father/Mather Name:</label>
            <input type="text" name="name" id="Father/Mather Name" placeholder="Enter Your Father Name"><br>
            
            <label for="Name" class="form-label">Date of Birth:</label>
            <input type="text" name="DOB" id="DOB" placeholder="Enter Your DOB"><br>

            <label for="Name" class="form-label">Gender:</label>
            <input type="Gender" name="Gender" id="Gender" placeholder="Enter Your Gender"><br>
            
            <label for="Name" class="form-label">Email:</label>
            <input type="Email" name="Email" id="Email" placeholder="Enter Your Email"><br>
            
            <label for="Name" class="form-label">Phone No:</label>
            <input type="Phone" name="Phone" id="Phone" placeholder="Enter Your Phone No"><br>

            <label for="Name" class="form-label">Permanent Address</label>
            <input type="Address" name="Address" id="Address" cols="20" rows="5" placeholder="Enter Your Permanent Address"><br>
            
            <label for="Name" class="form-label">City:</label>
            <input type="City" name="City" id="City" placeholder="Enter Your City"><br>

            <label for="Name" class="form-label">State:</label>
            <input type="State" name="State" id="State" placeholder="Enter Your State"><br>
  
            <button class="btn1">Submit</bouton>
            <button class="btn2">Reset</bouton>
        </form>
    </div>
    <script src="brain01.js"></script>

</body>
</html>