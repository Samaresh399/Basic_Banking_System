<?php 

    include 'MetaData.php';
   $jsonData = json_decode($_POST['dataarr'],true);
   $sender = $jsonData['sender'];
   $receiver = $jsonData['receiver'];
   $amount = $jsonData['amount'];

   mysqli_query($conn, "UPDATE customers SET Current_Balance = Current_Balance - '$amount' WHERE Email = '$sender'");
   mysqli_query($conn, "UPDATE customers SET Current_Balance = Current_Balance + '$amount' WHERE Email = '$receiver'");

   mysqli_query($conn, "INSERT INTO transfers (Sender_ID,Receiver_ID,Transfer_amount) VALUES ('$sender', '$receiver','$amount')");

?> 