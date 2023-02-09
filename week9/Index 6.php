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
        echo "<table style='border: solid 1px black;'>";
        echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

        class TableRows extends RecursiveIteratorIterator {
            function __construct($it) {
                parent::__construct($it, self::LEAVES_ONLY);
            }

            function current() {
                return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
            }

            function beginChildren() {
                echo "<tr>";
            }

            function endChildren() {
                echo "</tr>" . "\n";
            }
        }

        $servername = "localhost";
        $username = "webprogmi212";
        $password = "webprogmi212";
        $dbname = "webprogmi212";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT id, name, email comment FROM jgabogado_myratings");
            $stmt->execute();

            // set the resulting array to associative
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

            foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                echo $v;
            }
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
        echo "</table>";
        ?>

</body>
</html>