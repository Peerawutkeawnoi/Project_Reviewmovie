<!DOCTYPE html>
<html lang="en">
<?php include "../Connectphp/connect.php"?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="StyleMovieType/Style.css">
</head>

<?php 
    $action =$pdo->prepare("SELECT * FROM movie WHERE movie_type='Action' " );
    $action->execute();
?>
<body>


    
    <div class="topic">
        <div class="move">
                MoviesRatings
        </div>
       
        <ul class="logo">
                <li>
                    <a href="../register/register.html"><img src="../img/register.png" alt="" width="150" height="50"></a>
                </li>
                <li>
                    <a href="../login/login.html"><img src="../img/login.png" alt="" width="100" height="40"></a>
                </li>
        </ul>
    </div>
  
    <?php while($row = $action->fetch()){ ?>

    <div class="img">
        <img src="../img/poster.jfif" alt="" height="350px">
    </div>
    <div class="information">
        ชื่อเรื่อง: <?=$row["movie_name"]?><br>
        ประเภท: <?=$row["movie_type"]?><br>
        คะเเนน: <?=$row["movie_score"]?><br>
        <br>
        <hr>
    </div>
    
    <?php } ?>
    
</body>
</html>