<?php
require_once "header.php";

// default values we show in the form:
$username = "";
$password = "";
$email = "";
$phone = "";
$DOB = "";

// strings to hold any validation error messages:
$username_val = "";
$password_val = "";
$email_val = "";
$phone_val = "";
$dob_val = "";


// message to output to user:
$message = "";

if (isset($_POST['create']))
{
    // user just tried to sign up:

    // connect directly to our database (notice 4th argument) we need the connection for sanitisation:
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    // if the connection fails, we need to know, so allow this exit:
    if (!$connection)
    {
        die("Connection failed: " . $mysqli_connect_error);
    }	

    $username = sanitise($_POST['username'], $connection);
    $password = sanitise($_POST['password'], $connection);
    $email = sanitise($_POST['email'], $connection);
    $phone = sanitise($_POST['phone'], $connection);
    $DOB = sanitise($_POST['date'], $connection);


    // try to insert the new details:
    $query = "INSERT INTO users (username, password, email, phone, date_of_birth) VALUES ('$username', '$password', '$email', '$phone', '$DOB');";
    $result = mysqli_query($connection, $query);

    // no data returned, we just test for true(success)/false(failure):
    if ($result) 
    {
        // show a successful signup message:
        $message = "User created.<br>";
    } 
    else 
    {

        $message = "failed, please try again<br>";
    }

    $message = "User $username created.";
    // we're finished with the database, close the connection:
    mysqli_close($connection);

}


echo <<<_END
<form action="create_admin.php" method="post">
  Create a new user:<br>
  Username: <input type="text" name="username" maxlength="16" value="$username" required> 
  <br>
  Password: <input type="password" name="password" maxlength="16" value="$password" required>
  <br>
  Email: <input type="email" name="email" maxlength="64" value="$email" required> 
  <br>  
  Phone Number: <input type="tel" name="phone" maxlength="64" value="$phone" required>
  <br>
   Date of Birth: <input type="date" name="date" maxlength="64" value="$DOB" required> 
  <br>
  <input type="submit" value="Submit" name="create"> <br>
</form>	
<br>
<form action="admin.php">
    <input type="submit" value="Admin Tools"><br>
</form>
_END;


// display our message to the user:
echo $message;

// finish off the HTML for this page:
require_once "footer.php";

?>