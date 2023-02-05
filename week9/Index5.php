<!DOCTYPE html>
<html lang="en">
<head>
    <title>mybio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gudea&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300&display=swap" rel="stylesheet">

    <style>
        *{
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        }

        body.body1  {
        background: url(b7.jpg) no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-color: white;
        
        }

        nav{
        display: flex;
        justify-content: space-around;
        align-items: center;
        min-width: max-content;
        font-family: 'Gudea', sans-serif;
        height: 4ch
        }

        .logo{
        
        font-size: 50px;
        padding-top: 2ch;
        
        }

        .logo a{
        color: white;
        text-decoration: none;
        letter-spacing: 20px;
        text-transform: lowercase;
        
        }

        .nav-links{
        display: flex;
        justify-content: space-around;
        width: 35%;
        padding-top: 5%;
        text-transform: lowercase;
        }

        .nav-links li{
        list-style: none;
        display:inline;
        padding: 10px 40px;
        }

        .nav-links a{
        color: white;
        text-decoration: none;
        letter-spacing: 3px;
        font-size: 25px;
        display: flex;
        padding-top: .5ch;
        }

        .nav-links a:hover {
        color: rgb(255, 102, 0);
        transition: 0.3s;
        }

        .hdr1{
        position: absolute;
        width: 1200px;
        margin-left: 0px;
        margin-top: 0px;
        }

        h1.hdrtxt1{
        color: white;
        text-transform: lowercase;
        font-size: 70px;
        text-align: center;
        margin-top: 275px;
        margin-left: 0x;
        font-family: 'Ubuntu', sans-serif;
        letter-spacing: 10px;

        }
        .container { 
        height: 100px;
        position: relative;
        }

        .center {
        margin: 0;
        position: absolute;
        top: 100%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        }

        .btn1 {
        margin: auto;
        border : 1px solid white;
        padding : 10px 30px;
        text-decoration: none;
        color: white;
        font-size: 13px;
        text-transform: lowercase;
        font-family: 'Lato', sans-serif;
        letter-spacing: 3px; 
        }

        .btn2 {
        margin: auto;
        border : 1px solid white;
        padding : 10px 30px;
        text-decoration: none;
        color: white;
        font-size: 13px;
        text-transform: lowercase;
        font-family: 'Lato', sans-serif;
        letter-spacing: 3px; 
        }

        .button a:hover{
        color: rgb(255, 102, 0);
        transition: 0.5s;
        }
        .Intro {
        
        
        width: 100%;
        padding-top: 5;
        padding-bottom: 25%;
        background-color: white;
        
        }

        h1.hdrtxt2 {
        color: orange;
        padding-top: 20px;
        display: none;
        }

        .section1{
        height: 300px;
        position: relative;
        background-color: white no-repeat center center fixed;
        }

        h2.formtitle{
        color: white;
        text-transform: lowercase;
        font-size: 20px;
        text-align: center;
        margin-left: 0x;
        font-family: 'Ubuntu', sans-serif;
        }

</style>
</head>

<body class="body1">
    <nav>
        <div class="logo">
            <h4 class="Starbikes"><a href="Index.php">daniel</a></h4>
        </div>
        <ul class="nav-links">
            <li>
                <a href="Index.php">Home</a>
            </li>
            <li>
                <a href="Index2.php">Hobbies</a>
            </li>
            <li>
                <a href="Index3.php">me</a>
            </li>
            <li>
                <a href="Index4.php">res</a>
            </li>
        </ul>
    </nav>

    

        <h1 class="hdrtxt1">rate my website!</h1>
        <br>
        <br>
        
        <?php
        // define variables and set to empty values
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
            }
        }
        
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            }
        }
            
        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
            // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "Invalid URL";
            }
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
        }

        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
        ?>

        <div class= "section1">
        <center>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        Name: <input type="text" name="name" value="<?php echo $name;?>">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email;?>">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        Website: <input type="text" name="website" value="<?php echo $website;?>">
        <span class="error"><?php echo $websiteErr;?></span>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
        <span class="error">* <?php echo $genderErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">  
        </form>
        </center>
        </div>
        <?php
        $string = "Your Input:";
        echo '<p><center><span style="color: white; font-size: 30px;"> ' . $string.  '</span></center></p>';
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $gender;
        ?>



    
</body>
</html>