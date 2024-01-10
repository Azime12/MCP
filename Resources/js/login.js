
function login() {
    var password = document.getElementById("password").value;
    var username = document.getElementById("username").value;

    if (password == "12345678" && username == "group8") {
        window.open("home2.html");
    }

    else {
        alert("invalid password or userName");
    }

}
