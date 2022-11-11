<?php
  $name = $_POST['name'];
  $mailFrom = $_POST['email'];
  $message = $_POST['message'];
  $subject = $_POST['subject'];

  $mailTo = "foodforallnyc@gmail.com, skai.nzeuton@gmail.com";
  $headers = "From: ".$mailFrom." (".$name.")";
  $txt = "Subject: ".$subject."\n\nMessage:\n\n".$message;

  mail($mailTo, $name, $txt, $headers);

  header("Location: index.html?MessageSent");
?>
