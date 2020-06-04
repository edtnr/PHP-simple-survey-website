<?php

// Things to notice:
// You need to add code to this script to implement the admin functions and features
// Notice that the code not only checks whether the user is logged in, but also whether they are the admin, before it displays the page content
// You can implement all the admin tools functionality from this script, or...

// execute the header script:
require_once "header.php";

if (!isset($_SESSION['loggedInSkeleton']))
{
    // user isn't logged in, display a message saying they must be:
    echo "You must be logged in to view this page.<br>";
}
else
{

    // only display the page content if this is the admin account (all other users get a "you don't have permission..." message):
    if ($_SESSION['username'] == "admin")
    {
        $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

        // if the connection fails, we need to know, so allow this exit:
        if (!$connection){
            die("Connection failed: " . $mysqli_connect_error);
        }
        $query1 = "SELECT username, password FROM users;";
        // this query can return data ($result is an identifier):
        $resultNum = mysqli_query($connection, $query1);
        $number = mysqli_num_rows($resultNum);
        $oldPass = "";
        $newPass = "";
        $username = "";


        echo "
            <table border=1px >
                <tr>
                    <th>Username</th>
                    <th>Surveys</th>
                    <th>Update account?</th>
                </tr>
                <tr>";

        for ($i = $number; $i>0; $i--) {
            $row = mysqli_fetch_assoc($resultNum);
            echo" <td>$row[username]</td>

                    <td><button type = 'submit'>View Surveys</td>

                    <form action='update_admin.php' method='get'>                        
                        <td><button name='update' type='submit' value=\"$row[username]\">Update user</td>
                    </form>


                </tr>

                ";
        }
        echo "
            </table>
            <br>
            <form action='create_admin.php'>
                Create new user:<input type='submit' value='create user' > <br>
            </form>
        ";


    }
    else
    {
        echo "You don't have permission to view this page...<br>";
    }
}

// finish off the HTML for this page:
require_once "footer.php";
?>