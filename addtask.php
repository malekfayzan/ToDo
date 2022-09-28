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

    <div class="show">
        <div class="gEmail">
            <tr>
                <th>
                    This Is Task Details<br>
                </th>
            </tr>
        </div>
      
        <div align="center" id="name">
            </div>
        <div align="center" id="taskname"></div>
        <div align="center" id="disTask"></div>
        </div>

    <div class="uBox">
        <h1>
        Add-Task Title</h1>
        <div class="uName">
            <input type="text" id="title" name="text" placeholder="Enter Task">
        </div>

        Discribtion
        <div class="uEmail">
            <input type="text" id="textarea" name="text" placeholder="Enter Discribtion">
        </div>

        <input type="button" class="update" onclick="addtask()" name="text" value="Add Task">

    </div>

    <div class="sidebarmenu">
        <ul>
            <li><a href="dashboard.php" target="_self">Go-Back</a></li>
            <li><a href="#" onclick="showTask()">Show-Task</a></li>
            <li><a href="uptask.php" target="_self">Update-Task</a></li>
            <!-- <li><a onclick="showdetail()">Show Details</a></li> -->
            <li><a href="login.php" target="_self">Logout</a></li>
        </ul>
    </div>

            <script src="index.js"></script>
</body>

</php>