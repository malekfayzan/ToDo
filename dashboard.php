<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>DashBoard</title>
</head>

<body onload="reload()">
    <header>

        <ul>
            <div id="pName">
                <a href="login.php"> Logout Here </a>
            </div>
        </ul>
        Welcome To Details
        <div id="cTime">
        </div>
    </header>

    <div class="sidebarmenu">
        <ul>
            <li><a href="dash.php" target="_self">DashBoard</a></li>
            <li><a onclick="profile()" target="_self">Profile</a></li>
            <li><a href="pass.php" target="_self">Profile Edit</a></li>
            <li><a href="changepass.php" target="_self">Change Password </a> </li>
            <li><a href="login.php" target="_self">Logout</a></li>
        </ul>
    </div>


    <td>
        <div class="show">
            <div class="gEmail">
                <div align="center" id="email">
                </div>
            </div>
            <div align="center" id="name">
                Welcome To Profile</div>
            <div align="center" id="dob"></div>
            <div align="center" id="lMobile"></div>
            <div align="center" id="button"></div>
        </div>

    </td>
    <script src="index.js"></script>
</body>

</php>