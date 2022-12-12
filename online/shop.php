<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | المنتجات </title>
    <style>
        body{
            background: image b8 jpg;
        }
        h3{
            font-family: 'Cairo', sans-serif;
            font-weight: bold;
        }
        .card{
            float: right;
            margin-top: 20px;
            margin-left: 10px;
            margin-right: 10px;
        }
        .card img{
            width: 100%;
            height: 200px;
        }
        .main{
            box-shadow: 1px 1px 10px silver;
            width: 60%;
            
        }
        .btn {
            border:none;
            padding: 10px;
            width: 40%;
            font-weight: bold;
            font-size: 15px;
            background-color: lightcoral;
            cursor: pointer;
            font-family: 'Cairo', sans-serif;
            margin-bottom: 15px;
        }
        #aa{
            text-emphasis: none;
        }

    </style>
</head>
<body>
    <a  id="aa" class="navbar-brand" href="card.php">MY CARD|عربتي</a>
    <nav class="navbar navbar-dark bg-dark ">

    </nav>
    <center>
<h3>المنتجات المتوفرة
        </h3>
    </center>
    <?php
    include('config.php');
    $result = mysqli_query($con, "SELECT * FROM prod");
    while($row = mysqli_fetch_array($result)){
        echo "
        <center>
        <main>
            <div class='card' style='width: 15rem;'>
                <img src='$row[image]' class='card-img-top'>
                <div class='card-body'>
                    <h5 class='card-title'>$row[name]</h5>
                    <p class='card-text'>$row[price]</p>
                   
                    <a href='val.php? id=$row[id]' class='btn btn-success';>اضافة المنتج للعربة</a>
                </div>
            </div>
        </main>
        <center>
        ";
    }
    ?>
</body>
</html>