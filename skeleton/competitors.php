<?php

// Things to notice:
// You need to add your Analysis and Design element of the coursework to this script
// There are lots of web-based survey tools out there already.
// It’s a great idea to create trial accounts so that you can research these systems. 
// This will help you to shape your own designs and functionality. 
// Your analysis of competitor sites should follow an approach that you can decide for yourself. 
// Examining each site and evaluating it against a common set of criteria will make it easier for you to draw comparisons between them. 
// You should use client-side code (i.e., HTML5/JavaScript/jQuery) to help you organise and present your information and analysis 
// For example, using tables, bullet point lists, images, hyperlinking to relevant materials, etc.

// execute the header script:
require_once "header.php";

if (!isset($_SESSION['loggedInSkeleton']))
{
    // user isn't logged in, display a message saying they must be:
    echo "You must be logged in to view this page.<br>";
}
else
{
    echo "

    <h3>Name of site: <a href='http://www.surveymonkey.com'>Survey Monkey</a> </h3>
    <Table border=1px width = 100%>
    <tr>
        <th>Layout and presentation</th>
        <th>/10</th>
        <th>Ease of use</th>
        <th>/10</th>
        <th>Login process</th>
        <th>/10</th>
        <th>Types of questions</th>
        <th>/10</th>
        <th>Analysis tools</th>
        <th>/10</th>
    </tr>
    <tr>
        <td>Clever minimalist style layout, very simple and easy to navigate</td>
        <td> 9 </td>
        <td>Very easy to use, everything is clear. It points you in the right direction with bold titles and sign up options </td>
        <td> 9 </td>
        <td>Simple. Signing up took a matter of seconds and even gives you options to login with alternate social media accounts such as Google plus, facebook and Linkedin. Then a few questions about jobs which I find to be fairly pointless however they are non compulsary.</td>
        <td>8</td>
        <td>Different categories available, reccomended questions and even a 'question bank' to look for pre made questions. Overall no faults.</td>
        <td>10</td>
        <td>Ability to see trends and individual responses, seems better for large scale surveys and not smaller scale.</td>
        <td>7</td>
    </tr>
    </table>
    <br>

        <h3>Name of site: <a href='http://www.google.com/forms'>Google Forms</a> </h3>
    <Table border=1px width = 100%>
    <tr>
        <th>Layout and presentation</th>
        <th>/10</th>
        <th>Ease of use</th>
        <th>/10</th>
        <th>Login process</th>
        <th>/10</th>
        <th>Types of questions</th>
        <th>/10</th>
        <th>Analysis tools</th>
        <th>/10</th>
    </tr>
    <tr>
        <td>Very simple clean layout in typical Google fashion, puts you straight to the create form page no useless pages. Theres examples to take a look at before you start or use as a template. </td>
        <td>10</td>
        <td>Couldn't be simpler no navigation even needed, bang on the main screen are the options to start your survey.</td>
        <td>10</td>
        <td>Easy login process as it automatically logs you in using gmail.</td>
        <td>10</td>
        <td>Multiple different types of questions such as multiple choice, checkboxes, scale and dropdown. However no example questions or 'question bank'. Again simplistic and easy to use.</td>
        <td>8</td>
        <td>Ability to see both individual answers and summary of all the answers. Seems simple and compared to other websites more basic than complex. Feels better for small scale surveys.</td>
        <td>9</td>
    </tr>
    </table>

            <h3>Name of site: <a href='http://www.checkbox.com'>Checkbox</a> </h3>
    <Table border=1px width = 100%>
    <tr>
        <th>Layout and presentation</th>
        <th>/10</th>
        <th>Ease of use</th>
        <th>/10</th>
        <th>Login process</th>
        <th>/10</th>
        <th>Types of questions</th>
        <th>/10</th>
        <th>Analysis tools</th>
        <th>/10</th>
    </tr>
    <tr>
        <td>Stock photos and cluttered presentation however not too complex, fairly easy to navigate however not as simple as others.</td>
        <td>6</td>
        <td>Need a subscription to use or a 30 day free trial. Not as accessible as the other websites.</td>
        <td>5</td>
        <td>Need a 'subdomain' in order to log on, and for an account needs a business subscription </td>
        <td>N/A</td>
        <td>unable to see due to the complex subscription based sign up</td>
        <td>N/A</td>
        <td>Again unable to see due to subscription based sign up</td>
        <td>N/A</td>
    </tr>
    </table>
    ";
}

// finish off the HTML for this page:
require_once "footer.php";
?>