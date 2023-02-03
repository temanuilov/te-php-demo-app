<h1>This echo PHP app</h1>

<?php 
  print "Running on ".$_ENV["WEBSITE_HOSTNAME"]."<br/>";
  print "Headers <br/>";
  print_r(apache_request_headers());
  print "Request <br/>";
  print_r($_REQUEST);
?>
