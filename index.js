function details() {


    let lname = document.getElementById('nm').value
    var email = document.getElementById('email').value
    var mobile = document.getElementById('mobile').value
    var gender = document.getElementById('gender').value
    var dob = document.getElementById('dob').value
    var pas = document.getElementById('pas').value


    var checkEmail = /^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/;

    if (checkEmail.test(email)) {
        document.getElementById('eError').innerHTML = '';

    }
    else {
        document.getElementById("eError").innerHTML = "* Email Is Required";
        return false;
    }


    var checkMobile = /^[789][0-9]{9}$/;

    if (checkMobile.test(mobile)) {
        document.getElementById('mError').innerHTML = '';
    }
    else {
        document.getElementById('mError').innerHTML = "<b>Please enter a valid mobile number</b>";
        return false;
    }

    var checkPassword = /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;

    if (checkPassword.test(pas)) {
        document.getElementById('epas').innerHTML = '';
    }
    else {
        document.getElementById('epas').innerHTML = "<b>Password must be less than 8 to 16 length</b>";
        return false;
    }


    let storeData = new Array();
    storeData = JSON.parse(localStorage.getItem("details")) ? JSON.parse(localStorage.getItem("details")) : [];


    storeData.push({
        "sEmail": email,
        "lname": lname,
        "lmobile": mobile,
        "dob": dob,
        "password": pas,
        "title": "",
        "disc": ""
    });
    localStorage.setItem("details", JSON.stringify(storeData));
    window.open('./login.php');

}




//Login Email With Validation
function login() {
    alert("This Is Login")
    let lEmail = document.getElementById('Email').value;
    let lPassword = document.getElementById('paw').value;
    let lStorage = JSON.parse(localStorage.getItem("details"));
    // Validation For Email Login

    for (let i = 0; i < lStorage.length; i++) {
        if (lStorage[i].sEmail === lEmail) {
            if (lStorage[i].password == lPassword) {
                sessionStorage.setItem("userIndex", i);

                alert("Login Success")
                window.open("./dashboard.php");
            }
            else {
                alert("Password Incorrect");
            }
        }

    }
}

function reload() {

    let obj = {};
    let rStorage = JSON.parse(localStorage.getItem("details"));
    let gIndex = sessionStorage.getItem("userIndex");

    obj = rStorage[gIndex];

    console.log(obj.sEmail);

    document.getElementById("pName").innerHTML = "Hello " + obj.lname;

}

function uPass() {

    let lEmail = localStorage.getItem("textvalue");
    console.log(lEmail);

    document.getElementById("name").innerHTML = lName;
    alert("Updating Your Password");
}

function profile() {


    let obj = {};
    let rStorage = JSON.parse(localStorage.getItem("details"));
    let gIndex = sessionStorage.getItem("userIndex");

    obj = rStorage[gIndex];
    document.getElementById('email').innerHTML = "Email Id  :" + obj.sEmail;
    document.getElementById('name').innerHTML = "Name : " + obj.lname;
    document.getElementById('dob').innerHTML = "Date Of Birth :" + obj.dob;
    document.getElementById('lMobile').innerHTML = "Contact  :" + obj.lmobile;

}
function update() {

    alert("Welcome")
    // var rStorage = []
    let obj = {};
    let rStorage = JSON.parse(localStorage.getItem("details"));
    let gIndex = sessionStorage.getItem("userIndex");
    let uName = document.getElementById("uName").value;
    let uEmail = document.getElementById("uemail").value;
    obj = rStorage[gIndex];

    console.log(obj.sEmail);
    rStorage[gIndex].sEmail = uEmail;
    rStorage[gIndex].lname = uName;
    localStorage.setItem("details", JSON.stringify(rStorage));



    window.open("./dashboard.php")
}

function changePass() {

    let obj = {};
    let rStorage = JSON.parse(localStorage.getItem("details"));
    let gIndex = sessionStorage.getItem("userIndex");
    let oldpass = document.getElementById("oldpass").value;
    let newpass = document.getElementById("newpass").value;
    let conpass = document.getElementById("conpass").value;
    obj = rStorage[gIndex];

    console.log(obj.password);


    if (obj.password == oldpass) {
        if (newpass == conpass) {

            obj.password = conpass;
            alert("Password Is Update : " + obj.lname);
            window.open('./dashboard.php')
        }
        else {
            alert("Password Is Not Confirm")
        }
    }
    else {
        alert("Old Password Is Incorrect")
    }

    localStorage.setItem("details", JSON.stringify(rStorage));


}



setInterval(() => {
    const date = new Date();
    document.getElementById("cTime").innerHTML = date.toLocaleTimeString();
}, 1000);


function gif() {
    window.open('./dash.php');
    fetch('https://api.giphy.com/v1/gifs/search?q=funny+cat&api_key=AdqSuQfxgFIDAcPaU5om8iv86DBEY3FV')

        .then(response => response.json())
        .then(json => {
            console.log(json.data);
            count = 0;
            setInterval(() => {
                document.getElementById("img").src = json.data[count].images.original.url;

                count++;
            }, 1000 * 120);
        })
}
gif();

function weather() {

    navigator.geolocation.getCurrentPosition((position) => {
        let lat = position.coords.latitude;
        let lon = position.coords.longitude;

        let api = "https://api.openweathermap.org/data/2.5/weather";
        let apiKey = "f146799a557e8ab658304c1b30cc3cfd";

        url =
            api +
            "?lat=" +
            lat +
            "&lon=" +
            lon +
            "&appid=" +
            apiKey +
            "&units=imperial";

        console.log(url);
        fetch(url)
            //api for the get request
            .then((response) => response.json())
            .then((data) => {
                document.getElementById("temperature").innerHTML =
                    "Weather " + data.main.temp + "f°";
                document.getElementById("location").innerHTML =
                    data.name + " (" + lat + "°, " + lon + "°)";
                document.getElementById("description").innerHTML = data.weather[0].main;
            });
    });
}


function addtask(){
    let obj = {};
    let rStorage = JSON.parse(localStorage.getItem("details"));
    let gIndex = sessionStorage.getItem("userIndex");
    obj = rStorage[gIndex];
    var title = document.getElementById("title").value;
    var description = document.getElementById("textarea").value;
    console.log(title, description)
    alert("Add Task");
    obj.title = title;
    obj.disc = description;
    
    var title = document.getElementById("title").value = "";
    var description = document.getElementById("textarea").value = "";
    localStorage.setItem("details", JSON.stringify(rStorage));

    return false;
}

function showTask(){
    
    let obj = {};
    let rStorage = JSON.parse(localStorage.getItem("details"));
    let gIndex = sessionStorage.getItem("userIndex");
    obj = rStorage[gIndex];

    document.getElementById('taskname').innerHTML = "Task Title : <br><br>" + obj.title;
    document.getElementById('disTask').innerHTML = "Task Discribtion : " + obj.disc;
}


function updateTask(){
    let obj = {};
    let rStorage = JSON.parse(localStorage.getItem("details"));
    let gIndex = sessionStorage.getItem("userIndex");
    obj = rStorage[gIndex];
    var title = document.getElementById("uptask").value ;
    var description = document.getElementById("updetail").value;
    console.log(title, description)
    alert("Add Task");
    obj.title = title;
    obj.disc = description;
    localStorage.setItem("details", JSON.stringify(rStorage));
    window.open('addtask.php')

    return false;
}