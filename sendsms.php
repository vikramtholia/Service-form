if(!empty($smsmessage) && !empty($smscontact))
{
  
  $smsusername = ;
  $smspassword = ;
  $smssenderid = ;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'url');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $data = curl_exec($ch);
  if($data === "success")
  {
    echo "message sent";
  }
  else 
  {
    echo $data;
  }
}
else {
  echo "mobile number or message is empty";
}
