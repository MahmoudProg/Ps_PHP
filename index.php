<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/loginstyle.css">
    <title>Login Page</title>

</head>

<body>
    <div class="bg-image">
        <div id=frm>
            <div class="bg-text">
                <div class="container">
                    <img id="avatora" src="assets/img_avatar.png" alt="Avatar" width="100">
                    <form method="POST">
                        <input type="text" id="user" name="user" placeholder="Username" />
                        <input type="password" id="pass" name="pass" placeholder="Password" />
                        <input type="submit" id="btn" value="Login" />
                        <input type="hidden" id="hdnSession" value="ddd" />

                    </form>
                </div>
            </div>
        </div>
    </div>

    


    <script src="js/script.js"></script>
</body>

</html>

<?php
     if ($_SERVER['REQUEST_METHOD'] == 'POST' ){
    
        include 'Conn.php';

        session_start();

        $_SESSION['username_1']= $_POST['user'];

         $userlogin=$_POST['user'];
         $passwordlogin=$_POST['pass'];
                     
         $sql=("select * from login where username='$userlogin' and password='$passwordlogin' ") ;
         $result = $conn->query($sql);
         if ($result->num_rows > 0) {
           header("Location: /Project_2/HomePage.php");
         }
             }
     
           
?>