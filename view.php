<html>

<head>
    <style>
        body {
            background-color: lightyellow;
            margin: 0 auto;
            padding: 0;
            box-sizing: border-box;
            display: block;
        }

        .details {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            padding: 20px;
            border: 1px solid black;
            height: 500px;
            background: #fff;
        }

        .details h2 {
            padding: 0px;
            margin: 0px;
        }

        .bottom {
            margin-top: 45px;
    

        }
        .details span{
            padding: 5px;
        
        }

    </style>
</head>

<body>
    <?php
$id=$_POST["id_srch"];

$servername="localhost";
$username="root";
$password="2201";
$database="hotel_acube";
$date=date("d-m-y");
$conn = new mysqli ($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully\n";
//insert values in customer details

    $sql ="select * from customer_details where cust_id='$id' ";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    
        $cust_id=$row['cust_id'];
        $name=$row['name'];
        $mob=$row['mobile_number'];
        $email=$row['email_id'];
        $nom=$row['no_of_members'];
        $chkin_date=$row['check_in'];
        $chkout_date=$row['check_out'];
        $room_id=$row['room_id'];

 
    
   }
}
  $sql ="select * from room where room_id='$room_id' ";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    
        $rent=$row['room_rent'];
        $room_type=$row['room_type'];

 
    
   }
}
    $diff = (strtotime($chkout_date) - strtotime($chkin_date))/86400;
    $final_amt=($diff*$rent);
?>

    <div class="details" id="det">
        <center>
            <h2>Hotel A-cube</h2><br>Invoice
        </center>
        <hr>
        <P> <b>Name : </b><span><?php echo $name ?></span></P>
        <P> <b>Mobile number : </b><span><?php echo $mob ?></span></P>
        <P> <b>Email-id : </b><span><?php echo $email ?></span></P>
        <P> <b>No. of people : </b><span><?php echo $nom ?></span></P>
        <P> <b>Check-in Date : </b><span><?php echo $chkin_date ?></span></P>
        <P> <b>Check-out Date : </b><span><?php echo $chkout_date ?></span></P>
        <!--<P> <b>Total no. of days : </b><span><?php echo $diff ?></span></P> -->       
        <P> <b>Room Type : </b><span><?php echo $room_type ?></span></P>
        <P> <b>Basic Room rent : </b><span><?php echo $rent."/-" ?></span></P>
        <P> <b>Billed Amount : </b><span><?php echo $final_amt."/-" ?>(Including GST)</span></P>
        <div class="bottom">
            <u>Signature</u><br>
            Date : <?php echo $date ?>
        </div>
    
    </div>
    <center><input style="position:absolute; bottom:2%;" type="button" value="Print" onclick="printDiv(det)" ></center>
</body>

<script>
		 function printDiv() { 
            var divContents = document.getElementById("det").innerHTML; 
            var a = window.open('', '', 'height=1000, width=1000'); 
            a.document.write(divContents);  
            a.document.close(); 
            a.print(); 
        }
	</script>


</html>
