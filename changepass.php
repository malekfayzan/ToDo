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
        Welcome To Your Details
        <div id="cTime">
        </div>
    </header>

            <div class="uBox">
                Enter Old Password
                <div class="uName">
                    <input type="password" id="oldpass" name="text" placeholder="Old Password">
                </div>

                New Password
                <div class="uEmail">
                    <input type="password" id="newpass" name="text" placeholder="Enter Password">
                </div>
                Confirm Password
                <div class="uMobile">
                    <input type="password" id="conpass" name="text" placeholder="Confirm Password">
                </div>
                <input type="button" class="update" id="update" onclick="changePass()" name="text" value="Update">
           
            </div>
            
    <div class="sidebarmenu">
        <ul>
            <li><a href="dashboard.php">Go-Back</a></li>
            <!-- <li><a onclick="showdetail()">Show Details</a></li> -->
            <li><a href="login.php">Logout</a></li>
        </ul>
    </div>
    <script src="index.js"></script>
</body>

</php>