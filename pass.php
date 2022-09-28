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
            </div>


        </ul>

        Welcome To Your Details
        <div id="cTime">
        </div>
    </header>
    <h1 style=" text-align:center">
        Update Profile
    </h1>
    <div class="uBox">
        Update Your Name
        <div class="uName">

            <input type="text" id="uName" name="text" placeholder="Update Name">
        </div>
        Update Your Email-Id
        <div class="uEmail">
            <input type="text" id="uemail" name="text" placeholder="Update Your Email">
        </div>
        Update Your Mobile-Number
        <div class="uMobile">
        <input type="text" id="unumber" name="text" placeholder="Update Your Number">
        </div>
        
        <input type="button" class="update" align="center" id="update" onclick="update()" name="text" value="Update">
        
    </div>

    </td>
    <div class="uname" id="name"></div>
    <div id="dob"></div>
    <div id="lMobile"></div>
    <div id="button"></div>

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