
<?php
$teams = ['Rangers', 'Dolphins', 'Hurricanes'];

$states = ['NY' => 'New York', 'FL' => 'Florida', 'NJ' => 'New Jersey'];
$teams[52] = 'asdf';
$teams[]= 'asdfff';
foreach( $teams as $k => $v) {
    // echo 'We are up to key=' . $k . ', value=' . $v . '<br />';
    echo "We are up to key = <b>$k</b>, value = <b>$v</b><br>";

}

foreach( $states as $k => $v) {
    // echo 'We are up to key=' . $k . ', value=' . $v . '<br />';
    echo "We are up to key = <b>$k</b>, value = <b>$v</b><br>";
}
?>