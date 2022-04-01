<?php include 'includes/sesion_starter.php';?>
<?php include 'includes/get_messages_User_Id_sender.php';?>
<?php include 'includes/get_messages_User_Id_reciver.php';?>
<?php 
$username_of_friend = $_SESSION["chat_with"]; ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="">
<style>

</style>
</head>
<body>
<!-- toata treaba care se intampla aici nu ii ok-->
<div id="main_window">
<div id="main_chat_window">
<?php
foreach($messages_sent as $msg_s){
	?>
	<div class='container darker'> 
  <img src='img/a1.jpg' alt='Avatar' class="right" style='width:100%;'> 
    <?php 
  echo $_SESSION["Username"] ."<hr>";
  ?>
  
  <p> <?php 
  $message= htmlspecialchars($msg_s['Message']);
  echo $message;  ?> </p>

  <span class='time-left' class="right"><?php echo $msg_s["Date"];?> </span>
</div>
<?php
}
?>


<?php


foreach($messages_recived as $msg_r){
	?>
	<div class='container'> 
  <img src='img/a2.jpg' alt='Avatar'   style='width:100%;'> 
    <?php 
  echo $username_of_friend ."<hr>";
  ?>
  
  <p> <?php 
  $message= htmlspecialchars($msg_r['Message']);
  echo $message;  ?> </p>

  <span class='time-right'><?php echo $msg_r["Date"];?> </span>
</div>
<?php
}
?>

</div>
</div>

</body>
</html>
