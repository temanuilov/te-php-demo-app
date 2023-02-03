<h1>This echo PHP app</h1>

<?php 
  print "Running on ".$_ENV["WEBSITE_HOSTNAME"]."<br/>";
  print "Headers <br/>";
  foreach($_SERVER as $key => $val) echo($key . "=>" . $val . "<br/>";
  print "Request <br/>";
  print_r($_REQUEST);
?>
