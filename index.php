<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <center><div class="form">
    <h1 class="reg">Регистрация</h1>    
    <form action="index.php" method="post">
       <p> <input type="text" placeholder="введите имя" name="username" id="name"></p>
       <p>  <input type="password" placeholder="введите пароль" name="userpass" id="pass"></p>
       <p> <input type="email" placeholder="введите почту" name="useremail" id="email"></p>
       <p> <input type="submit" value="зарегистрироватся" id="button"></p>
    </form>
</div>
</center>
</div>
    <?php 
    $name = $_POST['username'];
    $pass = $_POST['userpass'];
    $email = $_POST['useremail'];
    if(strlen($name) <=3 && strlen($name) !==0)
    echo "введите коректное имя";
    else if(strlen($pass) <=5 && strlen($pass) !==0)
    echo "введите надежный пароль" ;
    else if($name !== "" || $pass !== ""){
        $userpass = md5($pass);
        $mysql = new mysqli ("localhost","mysql","", "reg");
        $mysql->query("SET NAMES 'utf8'");
$mysql->query("INSERT INTO `register`(`name`,`pass`, `email`) VALUES({$name}, {$userpass},{$email})");
        $mysql->close();
    }
    ?>

</body>
</html>
