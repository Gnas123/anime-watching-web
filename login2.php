<?php

    $username = null;
    $password = null;
    $email = null;

    // $_SESSION['username'] = null;
    // $_SESSION['password'] = null;
    // $_SESSION['email'] = null;

    // $user_data = check_login($conn);

    if(getAccess() == false){
        // Redirect to a different page
        header('Location: access_denied');
        exit;

        // echo "ban dang login(tesing) sua lai phan nay de nop cho thay";
    }
    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // something was posted
        if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['email'] = $_POST['email'];
            
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
    
            // // check existed username
            // if (getUser($conn, $username)) {
            //     // tro lai login2
            //     echo "<script>
            //         alert('Username already exists');
            //         window.location.href = 'index.php?page_type=login2';
            //     </script>";
            //     die;
            // } 
            // save to db
            // make sure not empty
            if (empty($username) || empty($password) || empty($email)) {
                echo "<script>
                    alert('Missing required fields');
                    window.location.href = 'login2';
                </script>";
                die;
            } 


            $error = getPassValidation($password);

            // var_dump($error);
            // check error
            if(empty($error)){
                // check username trong DB
                if(setRegister($conn, $username, $password, $email)){
                    $error=null;
                    echo "<script>
                        alert('Account created successfully');
                        window.location.href = 'login';
                    </script>";
                } else {
                    echo "<script>
                        alert('Username already exists');
                        window.location.href = 'login2';
                    </script>";
                    die;
                }
            }
        }
    }


    // login with gg
    require __DIR__ . '/vendor/autoload.php';

    
    // $client = new Google_Client();
    $client = new Google\Client();

    
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $client->setClientId($_ENV['GOOGLE_CLIENT_ID']);
    $client->setClientSecret($_ENV['GOOGLE_CLIENT_SECRET']);
    $client->setRedirectUri($_ENV['GOOGLE_REDIRECT_URI']);

    $client->addScope("email");
    $client->addScope("profile");

    $url = $client->createAuthUrl();
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dang ky</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: url('https://images.alphacoders.com/838/thumb-1920-838101.png') no-repeat center center fixed;
            background-size: cover;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100 bg-dark bg-opacity-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="bg-white bg-opacity-50 shadow-lg rounded-3 p-4">
                    <h2 class="mb-4 text-3xl fw-bold text-center text-white">Create new account</h2>
                    <form action="index.php" method="POST">
                        <!-- user name & password & email -->
                        <div class="mb-3">
                            <label class="form-label fw-bold text-white" for="username">
                                <i class="fas fa-user"></i> User name
                            </label>
                            <input class="form-control shadow-sm" id="username" name="username" type="text" 
                                placeholder="Username" required 
                                value="<?php echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : ''; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold text-white" for="password">
                                <i class="fas fa-lock"></i> Password
                                <button id="open_eye" type="button" style="border: none; background-color: transparent; color: white;">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button id="close_eye" type="button" style="border: none; background-color: transparent; color: white; display: none;">
                                    <i class="fa-solid fa-eye-slash"></i>
                                </button>
                            </label>
                            <input class="form-control shadow-sm" id="password" name="password" type="password" 
                                placeholder="********" maxlength="12" required 
                                value="<?php echo isset($_SESSION['password']) ? htmlspecialchars($_SESSION['password']) : ''; ?>">
                        </div>
                        <?php
                            if (isset($error) && !empty($error)) {
                                echo "<div class='alert alert-danger' role='alert'>";
                                foreach ($error as $err) {
                                    echo htmlspecialchars($err) . "<br>";
                                }
                                echo "</div>";
                            }
                        ?>
                        <div class="mb-3">
                            <label class="form-label fw-bold text-white" for="email">
                                <i class="fas fa-user"></i> Email
                            </label>
                            <input class="form-control shadow-sm" id="email" name="email" type="email" 
                                placeholder="name@gmail.com" required 
                                value="<?php echo isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : ''; ?>">
                        </div>

                        <!-- create button -->
                        <div class="mb-4 text-center">
                            <button class="btn btn-primary w-100 rounded-pill fw-bold" 
                                    style="background-color: #ec4899; border-color: #ec4899;" 
                                    onmouseover="this.style.backgroundColor='#db2777'" 
                                    onmouseout="this.style.backgroundColor='#ec4899'" 
                                    type="submit" name="page_type" value="login2">
                                Create
                            </button>
                        </div>
                    </form>

                                            
                    <div class="mb-3 text-center">
                        <span class="text-white">or</span>
                    </div>

                    <!-- register, fabook and gg -->
                    <div class="d-flex justify-content-center align-content-center gap-2 mb-4">
                        <a id="login-register-button" 
                            class="btn btn-primary rounded-pill fw-bold text-white d-flex align-items-center justify-content-center" 
                            href="login">
                            Back
                        </a>
                        <a class="btn rounded-pill fw-bold text-white d-flex align-items-center justify-content-center" 
                            href="#"
                            style="background-color: #1a4783; border-color: #1a4783;" 
                            type="button" onmouseover="this.style.backgroundColor='#153a6b'" onmouseout="this.style.backgroundColor='#1a4783'">
                            <i class="fab fa-facebook-f m-1"></i> Facebook
                        </a>
                        <a class="btn rounded-pill fw-bold text-white d-flex align-items-center justify-content-center" 
                            href="<?php echo $url; ?>"
                            style="background-color: #db4a39; border-color: #db4a39; color: #ffffff;" 
                            type="button" onmouseover="this.style.backgroundColor='#c13524'" onmouseout="this.style.backgroundColor='#db4a39'">
                            <i class="fab fa-google m-1"></i> Google
                            <!-- <i class="fab fa-google" style="vertical-align: middle;"></i> Google -->
                        </a>
                    </div>


                    <p class="text-center text-white small">
                        © 2025 All rights reserved. Design by Sang | MSSV: 2252711
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>