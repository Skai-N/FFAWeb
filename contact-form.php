<?php
  $name = $_POST['name'];
  $mailFrom = $_POST['email'];
  $message = $_POST['message'];
  $subject = $_POST['subject'];

  $mailTo = "foodforallnyc@gmail.com, skai.nzeuton@gmail.com";
  $from = "From: ".$mailFrom." (".$name.")";
  $txt = "Subject: ".$subject."\n\nMessage:\n\n".$message;

  mail($mailTo, $from, $txt);

  //header("Location: index.html?MessageSent");
  //echo("bob");
?>
