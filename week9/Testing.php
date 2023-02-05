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

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        *{
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        .mySlides {display: none;}
        img {vertical-align: middle;}
        
        }

        body.body1  {
        background: url(b4.jpg) no-repeat center center fixed; 
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

        /* Slideshow container */
        .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
        }

        /* Caption text */
        .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
        }

        .active {
        background-color: #717171;
        }

        /* Fading animation */
        .fade {
        animation-name: fade;
        animation-duration: 1.5s;
        }

        @keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
        .text {font-size: 7px}
        }
    </style>

    <script>
        let slideIndex = 0;
        showSlides();
        
        function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>
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

    <h2>Automatic Slideshow</h2>
    <p>Change image every 2 seconds:</p>

    <div class="slideshow-container">

    <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="b2.jpg" style="width:100%">
    <div class="text">Caption Text</div>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="b3.jpg" style="width:100%">
    <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="b4.jpg" style="width:100%">
    <div class="text">Caption Three</div>
    </div>

    </div>
    <br>

    <div style="text-align:center">
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
    </div>


</body>
</html>