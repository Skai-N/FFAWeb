<?php
if(isset($_POST['submit'])) {
  $name = $POST['name'];
  $mailFrom = $POST['email'];
  $message = $POST['message'];
  $subject = $POST['subject'];

  $mailTo = "foodforallnyc@gmail.com, skai.nzeuton@gmail.com";
  $headers = "From: ".$mailFrom." (".$name.")";
  $txt = "Subject: ".$subject."\n\nMessage:\n\n".$message;

  mail($mailTo, $name, $txt, $headers);

  header("Location: index.html?MessageSent");
}
?>
