<h1>This echo PHP app</h1>

<?php 
  print "Running on ".$_ENV["WEBSITE_HOSTNAME"]."<BR>";
  print "Headers <BR>";
  print_r(apache_request_headers());
  print "Request <BR>";
  print_r($_REQUEST);
?>
