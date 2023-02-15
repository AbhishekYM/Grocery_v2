<?php
include 'D:\xampp\htdocs\Grocery\database\connection.php';
include('D:\xampp\htdocs\Grocery\html\master\nav.php');
if (isset($_POST['submit'])) {
    $image = $_POST['image'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $sql = "select * from feature";
    $result = mysqli_query($con, $sql);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <section class="about-us">
                <div class="about">
                    <img src="/Grocery/storage/image/<?php echo $row['image'] ?>" class="pic">
                    <div class="text">
                        <h2>Features</h2>
                        <h5>
                            <?php echo $name ?>
                        </h5>
                        <p>
                            <?php echo $description ?>
                        </p>
                        <div class="data">
                            <a href="#" class="hire"></a>
                        </div>
                    </div>
                </div>
            </section>
            <?php
        }
    }
}
?>
<!DOCTYPE html>
<!---Coding By CoderGirl!--->
<html lang="en">

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .about-us {
            height: 100vh;
            width: 100%;
            padding: 90px 0;
            background: #ddd;
        }

        .pic {
            height: auto;
            width: 302px;
        }

        .about {
            width: 1130px;
            max-width: 85%;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        .text {
            width: 540px;
        }

        .text h2 {
            font-size: 90px;
            font-weight: 600;
            margin-bottom: 10px;

        }

        .text h5 {
            font-size: 22px;
            font-weight: 500;
            margin-bottom: 20px;
        }

        span {
            color: #4070f4;
        }

        .text p {
            font-size: 18px;
            line-height: 25px;
            letter-spacing: 1px;
        }

        .data {
            margin-top: 30px;
        }

        .hire {
            font-size: 18px;
            background: #4070f4;
            color: #fff;
            text-decoration: none;
            border: none;
            padding: 8px 25px;
            border-radius: 6px;
            transition: 0.5s;
        }

        .hire:hover {
            background: #000;
            border: 1px solid #4070f4;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<title> An About Us Page | CoderGirl </title>-->
    <!---Custom Css File!--->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
   $id = $_GET['feature'];
   $sql = "select * from feature where id=$id";
   $result = mysqli_query($con, $sql);
   if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $description = $row['description'];
        $image = $row['image'];
        ?>
        <section class="about-us">
            <div class="about">
                <img src="/Grocery/storage/image/<?php echo $row['image'] ?>" class="pic">
                <div class="text">
                    <h2>Features</h2>
                    <h5> <?php echo $name ?></h5>
                    <p>
                            <?php echo $description ?></p>
                    <div class="data">
                        <a href="/Grocery/index.php" class="hire">Go Back</a>
                    </div>
                </div>
                <?php
    }}
    ?>
        </div>
    </section>
</body>

</html>