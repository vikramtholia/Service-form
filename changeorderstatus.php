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

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
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
