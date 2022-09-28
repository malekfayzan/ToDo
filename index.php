<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: #ABC9FF;
        }

        form {
            height: 100px;
            margin: auto;
            width: 600px;
        }

        .title {
            height: 100%;
            width: 550px;
            background-color: #ffffff;
            margin: 15px;
            border-radius: 8px;
            border-top: 8px solid #06283D;
            padding: 25px;
        }

        .box {
            height: 90px;
            width: 600px;
            border-radius: 10px;
            background-color: #ffffff;
        }

        .details {
            height: 90px;
            width: 600px;
            background-color: #ffffff;
            margin: 15px;
        }

        .input {
            height: 40px;
            width: 30%;
            margin: auto;
            border: 0;
            outline: 0;
            border-bottom: 1px solid black;
            margin-left: 100px;
            margin-bottom: auto;
        }

        h3 {
            margin-left: 20px;
        }

        h6 {
            margin-left: 20px;
        }

        marquee {
            margin-bottom: 10px;
            background-color: aliceblue;
            margin-top: auto;
        }

        .radio {
            margin-left: 100px;

        }

        .date {
            margin-left: 100px;

        }

        .submit {
            height: 30%;
            width: 30vh;
            background-color: aliceblue;
        }

        .submit:hover {
            background: #ABC9FF;
        }
    </style>
    <title>Registration Form</title>

</head>

<body>
    <form action="login.php" method="POST">
        <marquee direction="left" scrollamount="5" onmouseover="this.stop()" onmouseout="this.start()">

            <span style="color: White">
                | Login If You Registered
                -&nbsp;</span><a href="./login.php" rel="noreferrer" target="_blank">Login Here</a>
        </marquee>


        <div class="title">
            <h1> Register Detail </h1>
        </div>
        <div class="details">
            <div class="box">
                <h3> Name
                    <span style="color:red " id="nError">*</span>
                </h3>
                <input type="text" class="input" required placeholder="Name" id="nm">
            </div>
            <br>
            <div class="box">
                <h3> Email <span style="color:red" id="eError" font-size="13px" ;>*</span>
                </h3>
                <input type="text" class="input" required placeholder="email" id="email">
            </div>
            <br>

            <div class="box">
                <h3> Mobile <span style="color:red" id="mError" font-size="13px" ;>*</span>
                </h3>
                <input type="text" class="input" placeholder="mobile" id="mobile">
            </div>
            <br>
            <div class="box">

                <h3>Gender</span>
                </h3>
                <input type="radio" class="radio" name="gender" id="gender">Male
                <input type="radio" class="radio" name="gender" id="gender">Female
            </div>
            <br>
            <div class="box">
                <h3>Date Of Birth <span style="color:red" id="dError" font-size="13px" ;>*</span>
                </h3>
                <input type="date" class="date" placeholder="Date-Of-Birth" id="dob">
            </div>
            <br>
            <div class="box">
                <h3> Password <span style="color:red" id="epas" font-size="13px" ;>*</span>
                </h3>
                <input type="password" class="input" placeholder="password" id="pas">
            </div>
            <br>
            <input type="button" class="submit" target="_self" value="submit" onclick="details()">
        </div>
    </form>
    <!-- <a href="login.php">Sign-Here</a> -->
    <script src="index.js"></script>
</body>

</php>