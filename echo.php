<h1>This echo PHP app</h1>

<?php 
  print "Running on ".$_ENV["WEBSITE_HOSTNAME"]."<br/>";
  print "Headers <br/>";
  $headers = apache_request_headers();
  foreach ($headers as $header => $value) {
      echo "$header: $value <br />\n";
  };
  print "Request <br/>";
  print_r($_REQUEST);
?>
