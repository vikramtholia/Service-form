<?php
session_start();

if(!empty($_SESSION['luserid']) && !empty($_SESSION['luserid']))
{
  $orderId= $_REQUEST['orderid'];
  if(empty($orderId))
  {
    die "order is empty on page changeorderstatus";
  }
  
  include '../include/dbconn.php'
  $sql = "SELECT * from order";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 1) {
    // output data of each row
    $orderStatus = $row["orderstatus"];
    if($orderStatus == 'requistreceived')
    {
      
    }
    else if($orderStatus == 'tobepicked')
    {
      
    }
    else if ($orderStatus == 'picked')
    {
      
    }
    else if ($orderStatus == 'requistreceived')
    {
      
    }
    else {
      die "Invalid order status";
    }
  } 
  else {
    echo "0 results";
  }

  mysqli_close($conn);
  
}
else {
  echo "You are not authorized to view this page!!";
}



/*
while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
*/
