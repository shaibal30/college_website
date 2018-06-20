<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    <head>        
       <title>bootstrap</title>
       <link rel = "stylesheet" type = "text/css" 
        href =  "http://127.0.0.1/college_website/static/css/style.css">

    </head>
    <body>
        <div>
           <h1>~ROYAL UNIVERSITY~</h1> 
        </div>

        <form method="POST" action="login_submit.php">
            <ul id= menu>
                <li><a class="active" href="#home">Home</a></li>
                <li class="courses">
                    <a class="dropbtn">Courses</a>
                    <div class="courses-content">
                        <a href="#">IT</a>
                        <a href="#">CSE</a>
                        <a href="#">ECE</a>
                        <a href="#">CIVIL</a>
                        <a href="#">MECH</a>
                    </div>
                </li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#about">About</a></li>
            </ul>
        </form>
        <form method="GET">
            <div id= container>
                username
                <input type="text" name="username"/>
                id
                <input type"text" name="id"/>
                password
                <input type="password" name="password"/>
                <br/>
                <input type="submit" value="Login"/>
            </div>
        </form>
    </body>
</html>   