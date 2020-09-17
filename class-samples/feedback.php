


<?php
if (array_key_exists('submit',$_REQUEST)) {
    ?>
<p>Your name is: <?=$_REQUEST['fname']?> <?=$_REQUEST['lname']?></p>
<p>Your email address is: <?=$_REQUEST['email']?></p>
<p>Your country is: <?=$_REQUEST['country']?></p>
<?php
}
?>



<form method="get">
First name: <input type="text" name="fname" />
<br>
Last name: <input type="text" name="lname" />
<br>
Email address: <input type="text" name="email"/>
<br>
Country: <select name="country">
            <option value="US">United States</option>
            <option value="CA">Canada</option>
        </select>
<input type="submit" name="submit" value="Submit" />
</form>
