<html>

<body>
    
    <?php

$name=$_POST["name"];
$mob=$_POST["mob"];
$email=$_POST["email"];
$nom=$_POST["nom"];
$room_id=$_POST["room"];
$chkin_date=$_POST["chkin_date"];
$chkout_date=$_POST["chkout_date"];
$mop=$_POST["mop"];
    
$servername="localhost";
$username="root";
$password="2201";
$database="hotel_acube";
    
$conn = new mysqli ($servername, $username, $password,$database);
  

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully\n";
    
//insert values in customer details
    $sql = "INSERT INTO `customer_details` ( `name`, `mobile_number`, `no_of_members`, `email_id`, `check_in`, `check_out`, `mode_of_payment`, `room_id`) VALUES ( '$name', '$mob', '$nom', '$email', '$chkin_date', '$chkout_date', '$mop', '$room_id')";
    if ($conn->query($sql) === TRUE) {
    echo "value";
    } 
    else {
    echo "Error" . $conn->error;
    }
    echo $room_id;
?>

</body>

</html>
