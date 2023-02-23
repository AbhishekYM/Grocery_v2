<?php
include('/var/www/html/Grocery/database/connection.php');
?>

<?php
include "/var/www/html/Grocery/html/master/nav.php";
?>

<?php
if (isset($_POST['submit'])) {

  $full_name = $_POST['full_name'];
  $user_username = $_POST['user_username'];
  $user_email = $_POST['user_email'];
  $user_password = md5($_POST['user_password']);
  $user_confpassword = md5($_POST['user_confpassword']);
  $user_mobile = $_POST['user_mobile'];
  $user_type = $_POST['user_type'];
  //insert query
  $select = "select * from user where email = '$user_email' && password = '$user_password'";
  $result = mysqli_query($con, $select);
  if (mysqli_num_rows($result) > 0) {
    $error[] = 'user already';
  } else {
    if ($user_password != $user_confpassword) {
      $error[] = 'password not matched';
    } else {
      $insert = "insert into user(full_name,username,email,password,type,mobile) values('$full_name','$user_username','$user_email','$user_password','$user_type','$user_mobile')";
      mysqli_query($con, $insert);

      header('location:/Grocery/index.php');
    }
  }
  // $insert_query = "insert into user(full_name,username,email,password,type,mobile)  values ('$full_name','$user_username','$user_email','$user_password','$user_mobile','$user_type')";

  // $sql_execute = mysqli_query($con, $insert_query);
  // if ($sql_execute) {
  //   echo "<script>alert('Data inserted successfully')</script>";
  // } else {
  //   die((mysqli_error($con)));
  // }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Here</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
  <br><br><br><br><br><br><br><br>
    <section class="vh-52" >
      <div class="">
        <div class="">
          <div class="col-lg-12 col-xl-11">
            <div class="card text-black" style="border-radius: 25px;">
              <div class="card-body p-md-5">
                <div class="row justify-content-center">
                  <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                    <form class=" " action="" method="post">
                      <?php
                      if (isset($error)) {
                        foreach ($error as $error) {
                          echo '<span class="error-msg" style="font-size: 2rem; color:red">' . $error . "</span>";
                        }
                        ;
                      }
                      ?>
                     
                      <div class="">
                        <div class="  ">
                        <label  for="full_name" style="
    font-size: 2rem;
">Full Name</label>
                          <input type="text" id="full_name" name="full_name" class="form-control" />
                          
                        </div>
                      </div>
                     
                      <div class="">
                        <div class="">
                        <label class="form-label" for="user_username" style="
    font-size: 2rem;
">UserName</label>
                          <input type="text" id="user_username" name="user_username" class="form-control" />
                          
                        </div>
                      </div>
                     
                      <div class="">
                        <div class="">
                        <label class="form-label" for="user_email" style="
    font-size: 2rem;
">Your Email</label>
                          <input type="email" id="user_email" name="user_email" class="form-control" />
                         
                        </div>
                      </div>
               
                      <div class="">
                        <div class="">
                        <label class="form-label" for="user_password" style="
    font-size: 2rem;
">Password</label>
                          <input type="password" id="user_password" name="user_password" class="form-control" />
                          
                        </div>
                      </div>
                      
                      <div class="">
                        <div class="">
                        <label class="form-label" for="user_confpassword" style="
    font-size: 2rem;
"> Confirm Password</label>  
                        <input type="password" id="user_confpassword" name="user_confpassword" class="form-control" />
                          
                        </div>
                      </div>
                  
                      <div class="">
                        <div class="">
                        <label class="form-label" for="user_mobile" style="
    font-size: 2rem;
">Mobile</label>  
                        <input type="text" id="user_mobile" name="user_mobile" class="form-control" />
                          
                        </div>
                      </div>
                   
                      <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                          <select name="user_type" id="" style="width: 44rem; height: 4rem;font-size: 2rem;">
                            <option value="user">User</option>
                            <option value="admin">admin</option>
                          </select>
                        </div>
                      </div>
                  
                    
                      <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <!-- <button name="submit" type="submit" class="btn">Register </button> -->
                        <input type="submit" name="submit" class="" style="color:green;" value="Register" >
                        
                      </div>
                    </form>
                  </div>
                
                  <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                    <img src="/Grocery/storage/image/store-4315394-removebg-preview.png" class="img-fluid"
                      alt="Sample image" style="margin-top:-348px">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
                    </div>
  </section>
</body>

</html>