<!DOCTYPE html>
<html>
<head>
    <title>myself</title>
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
        background: url(b3.jpg) no-repeat center center fixed; 
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
        margin-top: 300px;
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
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        }

       
        .Intro {
        width: 100%;
        padding-top: 5;
        padding-bottom: 25%;
        background-color: white;
        
        }


    .section2 {
    padding-top: 75%;
    position: relative  ;
    }
  
    .headerTxt {
        padding-top: 5%;
        text-align: center;
        color:white;
        padding-bottom: 3%;
        font-family: 'Open Sans', sans-serif;
        text-transform: lowercase;
        letter-spacing: 5px;
        font-family: 'Source Sans Pro', sans-serif;
    }


    .grid-item2 a {
        text-decoration: none;
        color: white;
        font-family: 'Raleway', sans-serif;
        text-transform: lowercase;
        font-size: 20px;
        letter-spacing: 5px;
        
    }


    .box {
			border: 1px solid white;
			width: 300px;
			margin: 0 auto;
			padding: 20px;

		}
		.circle {
			border-radius: 50%;
			width: 200px;
			height: 200px;
			overflow: hidden;
			background-color: lightgray;
			margin: 0 auto;
		}

    

    </style>
</head>
<body>

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
    
        
        <h1 class="hdrtxt1">about me</h1>

        <section class="section2" id="Home">
        <div class="IntroRes" id="About">
           <h1 class="headerTxt">about me</h1>
        </div>
        
       
    <div class="box">
		<div class="circle">
			<img src="image.png" width = "200" height="200">
		</div>
		<h1 style="color: white; font-family: Arial;"><center>Hello, my name is Jasper Abogado!</center></h1>
        <br>
		<p style="font-size: 16px; color: white;">I am Jasper Abogado, a Computer Science major with a passion for technology and programming. I have experience in graphic design and look forward to developing my skills and exploring opportunities in both fields.</p>
        <br>
		<p style="font-size: 16px; color: white;">I like to create art and play video games in my free time. Both are fun, relaxing and important to me. I find art to be a way to express myself creatively while video games provide an immersive escape and a sense of accomplishment.</p>
	</div>
</body>
</html>
