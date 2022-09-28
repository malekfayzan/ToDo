<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>

<body onload="reload()">
    <header>

        <ul>
            <div id="pName">
            </div>


        </ul>
        Welcome To Your Dashboard
        <div id="cTime">
        </div>
    </header>
    <div class="sidebarmenu">
        <ul>

            <li><a href="dashboard.php">
                    Go-Back
                </a></li>
            <li><a href="addtask.php">ToDo-List</a></li>
            <li><a onclick="weather()">weather</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>
    </div>
    <div class="boximage">


        <div class="" id="temperature"></div>
        <div class="" id="description"></div>
        Gif Two Minutes
        <img src="" id="img">
        <div align="center" class="weather">
            <div class="" id="location"></div>
        </div>
    </div>



    <script src="index.js"></script>
</body>

</php>