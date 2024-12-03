<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Member</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <header>
        <h1>Login Member</h1>
    </header>
    
    <div class="container">
    <form id="myForm" method="post" action="login_process.php">
        <label for="email">Email : </label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>
        <br>

        <label for="password">Password : </label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>
        <br>

        <input type="submit" value="Login">
    </form>
</div>
    <script>
        $(document).ready(function(){
            $("#myForm").submit(function(event){
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                if (email === "") {
                    $("#email-error").text("Email is required.")
                    valid = false;      
                } else {
                    $("#email-error").text("");
                }
                if (password.length <= 8) {
                    $("#password-error").text("Password must be at least 8 characters!");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }
                if (!valid) {
                    event.preventDefault();
// Menghentikan pengiriman form jika validasi gagal
                } else {
                    $.ajax({
                        url: 'login_process.php',
                        type: 'POST',
                        data: $("#myForm").serialize(),
                        success: function (hasil) {
                            $("#myForm")[0].reset();
                            // alert(hasil);
                        }
                    })
                }
            });
        });
    </script>
</body>
</html>