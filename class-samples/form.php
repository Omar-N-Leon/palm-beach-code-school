There were
<?php
 echo sizeof( $_REQUEST );
?>
 form variables posted to the page. They are:
<?php
// Display the array of form variables that were posted:
 foreach( $_REQUEST as $k => $v ) {
 echo 'key ' . $k . ' has a value of ' . $v . '<br />';
 }
?>