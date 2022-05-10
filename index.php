<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <?php
    $server = 'localhost';
    $username = "euriamej_admin";
    $password = "z7q!yItDh0Ot";
    $dbname = "euriamej_euria";

    //make connection
    $conn = new mysqli($server, $username, $password, $dbname);

    //check connection
    if ($conn->connect_error) {
        die("Connectioin error: " . $conn->connect_error);
    }

    if (isset($_POST['submit'])) {



        $email = test_input($_POST['email']);



        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $validMessage = '<div class="alert alert-danger" role="alert">
            Enter a valid email!
          </div>';
        } else {
            $sql = "insert into portfolioUpdate (userID, email) values(null, '$email')";

            if ($conn->query($sql)) {

                $validMessage = '<div class="alert alert-success" role="alert">
                Form was submitted!
              </div>';

                $email = "";
                $emailError = "";
            } else {

                $validMessage = '<div class="alert alert-danger" role="alert">
            Form was not submitted!
          </div>';
            }
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kgethego Ledwaba's Portfolio</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap.js"></script>



</head>

<style>
    .social-links{font-size: 40px;}
    
    .email-input {
        background-color: transparent;
    }

    ::placeholder {
        /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: #fff !important;
        opacity: 1 !important;
        /* Firefox */
    }

    :-ms-input-placeholder {
        /* Internet Explorer 10-11 */
        color: #fff !important;
    }

    ::-ms-input-placeholder {
        /* Microsoft Edge */
        color: #fff !important;
    }

    #svg {
        position: relative;
        cursor: pointer;
    }

    #Layer_2 g {
        position: relative;
    }

    #svg:hover #letter-k {
        animation: letter-k-animation 1s ease-in-out;
    }

    #svg:hover #letter-g {
        animation: letter-g-animation 1s ease-in-out;
    }

    #svg:hover #letter-dot {

        animation: letter-dot-animation 1s ease-in-out;
    }


    @keyframes letter-k-animation {

        0% {
            transform: translateY(-50px)
        }

        100% {
            transform: translateY(0px)
        }
    }

    @keyframes letter-g-animation {

        0% {
            transform: translateY(50px)
        }

        100% {
            transform: translateY(0px)
        }
    }


    @keyframes letter-dot-animation {

        0% {
            transform: translateX(50px)
        }

        100% {
            transform: translateX(0px)
        }
    }

    @media screen and (max-width: 991px) {
  .bg {
    background: #fa8072 !important;
  }
}

</style>

<body>

    <div class="bg"></div>
    <div class="bg hidden"></div>

    <div class="container">

        <div class="row vh-100">

            <div class="col-lg-12 align-self-center switch-white text-center">
                <div id="svg" class="w-100 h-100"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.94 51.79" class="w-25 mb-4">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: #fff;
                                }
                            </style>
                        </defs>
                        <g id="Layer_2" data-name="Layer 2">
                            <g id="Layer_1-2" data-name="Layer 1">
                                <g id="letter-k">
                                    <path class="cls-1" d="M38,23.09l30.5,28H50.57L28.41,30.14,13,41.43v9.64H0V.72H13V26.83L48.84.72H68.48Z" />
                                </g>
                                <g id="letter-g">
                                    <path class="cls-1" d="M95.24,24.1h31.93v27h-9.56L117,43.16c-4.74,5.18-12.3,8.63-23,8.63-18.56,0-29.93-9.21-29.93-25.89S75.46,0,96.17,0c20.14,0,30.21,7.84,31,20.36H114c-.72-3.82-4.17-9.5-17.84-9.5C79.34,10.86,77,20.14,77,26.18s2.37,15.61,19.13,15.61c12.52,0,17.55-5.47,17.84-9.28H95.24Z" />

                                </g>
                                <g id="letter-dot">
                                    <path class="cls-1" d="M144.94,41.43v9.64h-12.3V41.43Z" />

                                </g>


                            </g>
                        </g>
                    </svg></div>
                <h1 class="mb-4">Coming soon!</h1>

                <p class="mb-4">My portfolio website is currently under construction.<br>
                    Enter you email below to be notified when it is up and running.</p>


                <?php echo $validMessage ?>

                <form method="post">
                    <div class="form-group">
                        <div class="row">

                            <div class="col-lg-8 mb-4"><input type="email" name="email" class="form-control email-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $email ?>"></div>
                            <div class="col-lg-4 mb-4"><button type="submit" name="submit" class="btn btn-primary">Notify Me</button></div>

                        </div>


                    </div>


                </form>

               
                    <h2 class="mb-4">In the mean time checkout my projects:</h2>
                    <p><a href="https://euria.co.za/euria-estate/index.php" target="_blank" class="link-light">Euria Estate facility booking system</a></p>
                    <p><a href="http://www.african-marmalade.euria.co.za/" target="_blank" class="link-light">African Maramalade</a></p>

                    <h2 class="mb-4">Socials:</h2>
                    <div class="w-100">
                    <a href="https://www.linkedin.com/in/kgethego-ledwaba-aa59a1121" target="_blank" class = "social-links mr-2"><i class="bi bi-linkedin"></i></a>
                    <a href="https://github.com/Kgethi" target="_blank" class="link-light social-links"><i class="bi bi-github"></i></a>

                </div>

            </div>

        </div>

    </div>

</body>



</html>