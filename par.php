<?php

$servername="localhost";
$username="root";
$password="";
$db="firstdb";


$connect=mysqli_connect($servername,$username,$password,$db);

if(!$connect)
{
    echo "Connection not made".mysqli_connect_error();
}
else
{
    
    //the data of the query string in get is stored in the super global
    // var_dump($_POST["Title"]);

    // array(1) { ["image"]=> array(6) { ["name"]=> string(36) "photo-1453728013993-6d66e9c9123a.jpg" ["full_path"]=> string(36) "photo-1453728013993-6d66e9c9123a.jpg" ["type"]=> string(10) "image/jpeg" ["tmp_name"]=> string(24) "C:\xampp\tmp\phpCA7A.tmp" ["error"]=> int(0) ["size"]=> int(65271) } }

    // var_dump($_FILES);
    // exit;

    
    

    if($_SERVER["REQUEST_METHOD"]==="POST")
    {
        
        $name=$_POST["username"];
        $email=$_POST["useremail"];
        $query=$_POST["userquery"];

            
            

        $query="insert into form values('$name','$email','$query')";
        
        
        mysqli_query($connect,$query);
    }
        
    
    







    
} 



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="par.css">
    <title>Harshit khanna</title>
</head>

<body>



    <!-- <div class="container"> -->
    <canvas id="matrix"></canvas>
    <div class="sidebar">
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#interests">Interests</a></li>
                <li><a href="#contactme">Contact me</a></li>
            </ul>
        </nav>
    </div>

    <div id="home">
        <div class="myinfo">
            <div class="hello">I am </div>
            <div class="name">Harshit khanna</div>
            <div class="what">Programming Enthusiast,Developer</div>
            <div class="littlemore">Pursuing B.Tech in Computer Science with, a specialization in Data Science from
                VIT, Vellore. Striving to try
                my hands out at different things and working my way out. Dedicated and committed to become a
                dependable
                and valuable team member.
            </div>
            <div class="twobutton">
                <button class="cv">Download CV</button>
                <button class="contact"><a href="#contactme">Conatct me</a></button>
            </div>
        </div>
        <div class="mypic"><img class="harshitimg" src="harshit.jpg" alt=""></div>
    </div>

    <div id="skills">
        <div class="bar">
            <div class="item"><span>Frontend(HTML CSS JS)</span></div>
            <div class="progress fr"><span></span></div>
        </div>
        <div class="bar">
            <div class="item"><span>Backend(PHP)</span></div>
            <div class="progress ba"><span></span></div>
        </div>
        <div class="bar">
            <div class="item"><span>C/C++</span></div>
            <div class="progress cpp"><span></span></div>

        </div>
        <div class="bar">
            <div class="item"><span>Java</span></div>
            <div class="progress java"><span></span></div>

        </div>
        <div class="bar">
            <div class="item"><span>Python</span></div>
            <div class="progress py"><span></span></div>
        </div>
    </div>


   

    <div id="contactme">
        <div class="formcontain">
            <form action="par.php" class="cm" method="post">

                <div>
                    <label for="name">Name</label>
                    <input type="text" name="username" id="name">
                </div>

                <div>
                    <label for="email">Email</label>
                    <input type="email" name="useremail" id="email">
                </div>

                <div>
                    <label for="query">Query/Feedbacks</label>
                    <textarea name="userquery" id="query" cols="30" rows="10"></textarea>
                </div>
                <div>
                    <button type="submit">Submit</button>
                </div>



            </form>
        </div>
    </div>

    <!-- </div> -->






    <script
        src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="par.js"></script>
</body>

</html>