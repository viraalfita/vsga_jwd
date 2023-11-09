document.getElementById("login-button").addEventListener("click", function() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username === "admin" && password === "bpsdmp") {
        window.location.href = "admin.php"; 
    } else {
        alert("Akun tidak terdaftar");
    }
});
