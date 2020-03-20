<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/HomePageStyle.css">
    <link rel="stylesheet" href="css/all.css">
    <title>Home Page</title>
</head>

<body>

    <div Class="Contaner">
        <header>

            <img class="img_logo"src="assets/D2.png" width="70" />
            <div Class="Header_Name">Home Page</div>
            <div class="div_User">
                <img class="img_User" />
                <div class="Label_User">Admin</div>

            </div>
        </header>

        <div Class="AllButton">
            <button class="button Mahmoud"  onclick="Users_Page()">
                <i class="fas fa-users fa-2x"></i>
                <span>Users</span>
            </button>
            <button class="button" >
                <i class="fas fa-desktop fa-2x"></i>
                <span>Device</span>
            </button>
            <button class="button" >
                <i class="fas fa-person-booth fa-2x"></i>
                <span>Rooms</span>
            </button>
            <button class="button" >
                <i class="fas fa-mug-hot fa-2x"></i>
                <span>Drinks</span>
            </button>
            <button class="button Playstation" >
                <i class="fab fa-playstation fa-2x"></i>
                <span>Playstation</span>
            </button>
            <button class="button" >
                <i class="far fa-id-card fa-2x"></i>
                <span>Card</span>
            </button>
            <button class="button" >
                <i class="fas fa-user-tie fa-2x"></i>
                <span>Client</span>
            </button>
            <button class="button" >
                <i class="fas fa-file-alt fa-2x"></i>
                <span>Report</span>
            </button>
            <button class="button" >
                <i class="fas fa-receipt fa-2x"></i>
                <span>receipt</span>
            </button>
            <button class="button" >
                <i class="fas fa-key fa-2x"></i>
                <span>Refrence</span>
            </button>
            <button class="button" >
                <i class="fas fa-cogs fa-2x"></i>
                <span>Setting</span>
            </button>

        </div>
        <div Class="AllButton_2">
            <button class="button Mahmoud" >
                <i class="fas fa-users fa-2x"></i>
                <span>Users</span>
            </button>
            <button class="button" >
                <i class="fas fa-desktop fa-2x"></i>
                <span>Device</span>
            </button>
            <button class="button" >
                <i class="fas fa-person-booth fa-2x"></i>
                <span>Rooms</span>
            </button>
            <button class="button" >
                <i class="fas fa-mug-hot fa-2x"></i>
                <span>Drinks</span>
            </button>
            <button class="button Playstation" >
                <i class="fab fa-playstation fa-2x"></i>
                <span>Playstation</span>
            </button>
            <button class="button" >
                <i class="far fa-id-card fa-2x"></i>
                <span>Card</span>
            </button>
            <button class="button" >
                <i class="fas fa-user-tie fa-2x"></i>
                <span>Client</span>
            </button>
            <button class="button" >
                <i class="fas fa-file-alt fa-2x"></i>
                <span>Report</span>
            </button>
            <button class="button" >
                <i class="fas fa-receipt fa-2x"></i>
                <span>receipt</span>
            </button>
            <button class="button" >
                <i class="fas fa-key fa-2x"></i>
                <span>Refrence</span>
            </button>
            <button class="button" >
                <i class="fas fa-cogs fa-2x"></i>
                <span>Setting</span>
            </button>

        </div>
        <!-- <a href="Logout.php">Logout</a> -->
    </div>
    <script src="js/script.js"></script>



</body>

</html>


<?php
session_start();
echo ($_SESSION['username_1']);
 if (isset($_SESSION['username_1'])){

//  }else{
//     header("Location: /Project_2/index.php");
//  }

    ?>