<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        table,tr,td,th {
            border:1px solid black;
            border-collapse: collapse;
            
            padding: 10px 10px;
        }
    </style>
</head>

<body bgcolor="lightyellow">
     <div id="Table">
            <table style="border:1px solid black;">
        <tr>
            <th>Customer Id</th>
            <th>Name</th>
            <th>Mobile number</th>
            <th>No. of people</th>
            <th>Check in</th>
            <th>Check out</th>
        </tr>
                
               <?php      
$conn=mysqli_connect('localhost','root','2201','hotel_acube') or die(mysqli_error());

$select_db=mysqli_select_db($conn,'hotel_acube') or die;

$sql="SELECT * FROM customer_details";
$result=mysqli_query($conn,$sql) or die;
                 $cn=1;
if($result==true){
    while($row=mysqli_fetch_assoc($result)){

        $cust_id=$row['cust_id'];
        $name=$row['name'];
        $mob=$row['mobile_number'];
        $email=$row['email_id'];
        $nom=$row['no_of_members'];
        $chkin_date=$row['check_in'];
        $chkout_date=$row['check_out'];
    ?> 
                
        <tr>
        <td> <?php echo $cust_id ;?></td>   
        <td> <?php echo $name; ?></td>  
        <td> <?php echo $mob;     ?></td>
        <td> <?php echo $nom; ?></td>  
        <td> <?php echo $chkin_date ; ?></td>
        <td> <?php echo $chkout_date; ?></td>        
        </tr>
                
                <?php
                }
            }
    ?>
            </table>
    </div>
                
</body>
</html>

