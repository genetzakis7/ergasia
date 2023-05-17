<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Beyond 4K</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&family=Roboto+Slab:wght@100&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&family=Montserrat:wght@100&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="cinema.css">
    </head>
    <style>
    header h1 a {
        font-family:Arial, Helvetica, sans-serif;
        font-size: 40px;
        position: relative;
        color: #fcfbff;
        left: 290px;
        bottom: 140px;
       
    }
    header nav ul{
        list-style: none;
    }
    header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: #000000;
        z-index: 9999;
    }
    header nav ul li {
        display: inline;
        
    }
    header nav ul li a {
        text-decoration: none;
        font-family: 'Montserrat', sans-serif;
        font-size: 25px;
        color:#1d6199;
        justify-content: center;
        position: relative ;
        left: 400px;
        bottom: 140px;
        padding-left: 10px;
        padding-right: 160px;
              
    }
    header nav i {
        font-size: 50px;
        
    }
    header nav ul li a:hover {
        color: #533a99;
        text-decoration: underline;
    }
    header h1 a {
        text-decoration : none;
        color: #1d6199;
    }
    nav { 
        display: flex;
        position: relative;
        top: 150px;
        right: 150px;   
    }
    .icon {
        font-size: 60px;
        position: absolute;
        bottom: 180px;
        left: 210px;
    }
    header h1 a:hover {
        color: #533a99;
    }
    body {
        background-color: #1b2646;
    }
    body p {
        text-decoration: none;
        color:#000000;
        font-family: 'Delicious Handrawn', cursive;
        font-size: 35px;
        padding-top: 200px;
        padding-left: 700px;
    }
    body div {
        
        border-width: 5px;
        position: relative;
        top:  300px;
        left: 925px;
        font-family: 'Delicious Handrawn', cursive;
        font-size: 25px;
        padding-left: 15px;
    }
    body h2 {
        position: relative;
        bottom: 150px;
        left: 150px;
        font-size: 30px;
        color: #ffffff;
    
    }
    form{
        position :relative;
        left :150px;
        top: 0px;
        font-size: 30px;
        font-family: Arial, Helvetica, sans-serif;
        background-color: #39383b;
        border: 6px solid black;
    	padding: 25px;
    	width: 400px;
        height: 200px;
    }
    .tainies {
        position: relative;
        display: inline-block;
        right: 650px;
        padding: 30px;
    }
    .aithouses {
        position:relative;
        right :500px;
    }
    </style>
    <body>
        <header>
            <nav>
                <i class="fa-solid fa-video fa-bounce fa-2xl icon " style="color: #225d3c;"></i>
                <h1><a href="https://tp4852.000webhostapp.com/">Beyond 4Κ</a></h1>
                <ul>
                    <li><a href="https://tp4852.000webhostapp.com/"><b>Αρχική</b></a></li>
                    <li><a href="https://tp4852.000webhostapp.com/tainies.html"><b>Ταινίες</b></a></li>
                    <li><a href="https://tp4852.000webhostapp.com/register.html" ><b>Εγγραφή</b></a></li>
                    <li><a href="https://tp4852.000webhostapp.com/contact.html"><b>Επικοινωνία</b></a></li>
                </ul>
            </nav>
        </header>  
        <?php
    session_start();
    $host='localhost';
    $port=3306;

    $dbname = "id20465649_cinemadb";
    $dbuser = "id20465649_admin";
    $dbpass = "Kastanos7!";
    
    $username=$_POST["username"];
    $password=$_POST["pasw"];
    $email=$_POST["email"];
    $lastname=$_POST["lastname"];

    $dsn="mysql:host={$host};dbname={$dbname};port={$port}; charset=utf8mb4";
    $options=[PDO:: ATTR_ERRMODE=> PDO:: ERRMODE_EXCEPTION];
    $pdo =new PDO ($dsn, $dbuser,$dbpass,$options);

    $email=$_POST["email"];
    $password=$_POST["pasw"];

    $stmt=$pdo-> prepare('SELECT * FROM users WHERE email=:email');
    $stmt-> execute(["email"=>$_POST["email"]]);
    
    $stmt=$pdo-> prepare('SELECT * FROM users WHERE pasw=:pasw');
    $stmt-> execute(["pasw"=>$_POST["pasw"]]);

    $row=$stmt->fetch();
    if (!$row) {
        echo" Λάθος email η δεν έχεις κάνει εγγραφή!!";
    }
    else {
        $hah=$row ["pasw"];
        $ok=password_verify($p,$hash);
        $_SESSION["username"]=$row;
        session_destroy();

        if ($ok) {
            echo "Καλωσήρθες" . $row ["username"];
        }
        else {
            echo " Λάθος password!";
        }
    }
    
?>
    <i class="prosfora">
        <a href="https://tp4852.000webhostapp.com/tainies.html">>Εισητήρια</a>
    </i>
    </body>
</html
