<?php


require_once "header.php";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$connection)
{
    die("Connection failed: " . $mysqli_connect_error);
    echo "Connection failed.";
}
$message="";
$username ="";
$password ="";
$email ="";
$DOB ="";
$phone ="";
$mesaage="";
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $DOB = $_POST['date'];  

    $query1 = "UPDATE users SET password = '$password', email ='$email', phone = '$phone', date_of_birth = '$DOB' WHERE username = '$username';";
    $result1 = mysqli_query($connection, $query1);

    if ($result1) {
        $message = "User $username updated.";
    }
} else if (isset($_POST['delete'])) {
    $username = $_POST['username'];  

    $query2 = "DELETE FROM users WHERE username='$username';";
    $result2 = mysqli_query($connection, $query2);

    $username ="";
    $password ="";
    $email ="";
    $DOB ="";
    $phone ="";

    if ($result2) {
        $message = "User deleted.";
    }

} else if (isset($_GET['update'])) {
    $username = $_GET['update'];
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($connection, $query);
    $n = mysqli_num_rows($result);

    if ($n > 0) {
        $row = mysqli_fetch_assoc($result);
        $password = $row['password'];
        $email = $row['email'];
        $DOB = $row['date_of_birth'];
        $phone = $row['phone'];
    }


}





echo  "<h2>Update User: $username</h2>
    <form action='update_admin.php' method ='post'>
        Username: <input type='text' name='username' maxlength='16' value='$username' required><br>
        Password: <input type='password' name='password' maxlength='16' value='$password' required><br>
        Email: <input type='text' name='email' maxlength='16' value='$email' required><br>
        Phone Number: <input type='text' name='phone' maxlength='16' value='$phone' required><br>
        DOB: <input type='date' name='date' maxlength='20' value='$DOB' required><br>
        <input type='submit' name='submit' value='Update User'><br>
        <br>
        <input type='submit' name='delete' value='Delete User'><br>
    </form><br>
   ";
echo $message;

?>