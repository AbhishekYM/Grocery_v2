<?php
include '/var/www/html/Grocery/database/connection.php';
include('/var/www/html/Grocery/html/master/nav.php');
?>
<!DOCTYPE html>
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
        #loading{
    position: fixed;
    width: 100%;
    height: 100vh;
    background: #fff url('/Grocery/storage/image/loader_dribble.gif') no-repeat center;
    z-index: 99999;
}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<title> An About Us Page | CoderGirl </title>-->
    <!---Custom Css File!--->
    <link rel="stylesheet" href="style.css">
</head>

<body  onload="myFunction()">
<div id="loading">
		<!-- <img src="/Grocery/storage/image/loader.gif" alt=""> -->
	</div>
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
            <div class="box" style=" border-radius: 100px;">
                <img src="/Grocery/storage/image/<?php echo $row['image'] ?>" class="pic" style="
    margin-left: -600px;
    
">
</div>

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
    <script>
			var preloader = document.getElementById('loading');
			function myFunction(){
				preloader.style.display = 'none';
			}
		</script>
</body>

</html>