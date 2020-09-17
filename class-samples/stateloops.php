    <select name="state">
<?php
    $states = ['AL' => 'Alabama', 'NY' => 'New York', 'FL' => 'Florida', 'TX' => 'Texas'];

    foreach ($states as $k => $v) {
        echo "<option value= \"$k\"> $v</option> \n";
        
    };
?>
    </select>