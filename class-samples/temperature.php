<form method="get">
The temperature in Farenheit is: <input type="text" name="temp"/><input type="submit" name="submit" value="submit"/>
</form>

<?php

if (array_key_exists('submit',$_REQUEST)) {
    $celcius = (($_REQUEST['temp']-32)*.5556);
    echo display();
?>


<p><?=$_REQUEST['temp']?> degrees Fahrenheit is equivalent to <?=$celcius?> degrees celsius.</p>


<?php
}

    function display() {
        global $celcius;

        if ($celcius < 0) {
            echo "It's freezing!";
        }
        elseif ($celcius >= 0 && $celcius <= 10){
            echo "It's cold!";
        }
        elseif ($celcius > 10 && $celcius <= 24){
            echo "It's comfortable!";
        }
        elseif ($celcius > 24){
            echo "Its hot!";
        }
    }
?>