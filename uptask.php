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
                <h1>
               Update-Task Details</h1>
               Update Task Title
                <div class="uName">
                    <input type="text" id="uptask" name="text" placeholder="Update Task Title">
                </div>

                Update Discribtion
                <div class="uMobile">
                    <input type="text" id="updetail" name="text" placeholder="Update Discribtion">
                </div>
                <input type="button" class="update" id="update" onclick="updateTask()" name="text" value="Update">
           
            </div>
            
    <div class="sidebarmenu">
        <ul>
            <li><a href="addtask.php" target="_self">Go-Back</a></li>
            <!-- <li><a onclick="showdetail()">Show Details</a></li> -->
            <li><a href="login.php"  target="_self" >Logout</a></li>
        </ul>
    </div>
    <script src="index.js"></script>
</body>

</php>