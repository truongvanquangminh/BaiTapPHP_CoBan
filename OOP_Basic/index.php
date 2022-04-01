<?php
// include('login.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['user'] = 'admin';
    $_SESSION['pass'] = 'admin';
    if ($_POST['username'] == $_SESSION['user'] && $_POST['password'] == $_SESSION['pass']) {
        header("location: home.php");
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
    <!-- 
	 font-family: 'Montserrat', sans-serif; 
	font-family: 'Open Sans', sans-serif;
	-->

</head>

<body>

    <div class="container">
        <h1 class="text-center"> Welcome to Quiz </h1><br>

        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <h4 class="card-header text-center"> Login Form </h4>
                    <br>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="username "> Username: </label>
                            <input type="text" name="username" id="user" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password "> Password: </label>
                            <input type="password" name="password" id="pass" class="form-control">
                        </div>
                        <button class="btn btn-success d-block m-auto" type="submit"> Submit </button>
                    </form>

                </div>
            </div>

            <!-- <div class="col-lg-6">
                <div class="card">
                    <h4 class="card-header text-center"> SignUp Form </h4>
                    <br>
                    <form action="registration.php" method="post">
                        <div class="form-group">
                            <label for="user "> Username: </label>
                            <input type="text" name="user" id="user" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pass "> Password: </label>
                            <input type="text" name="pass" id="pass" class="form-control">
                        </div>
                        <button class="btn btn-success d-block m-auto" type="submit"> Submit </button>
                        <div class="duplicate"> </div>
                    </form>

                </div>
            </div> -->
        </div>
    </div>

    <!-- <script>
        $(document).ready(function() {
            $("form").submit(function() {
                var user = {
                    'username': 'admin',
                    'password': 'admin'
                };
                // sessionStorage.setItem('user', JSON.stringify(user));

                var getUser = $('.card').find('input#user').val();
                var getPass = $('.card').find('input#pass').val();

                if (getUser == user.username && getPass == user.password) {
                    // console.log(123)
                    window.location.pathname = "/InternPHP_Rikai/truongvanquangminh_baitapphpbasic/oop_basic/home.php";
                }
                return false
            })
        })
    </script> -->

</body>

</html>