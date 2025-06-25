<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <center>
            <div class = "row pt-5" >
                <form class = "col-md-6 offset-lg-3 bg-warning p-5" action="cheak-login.php" method="POST">
                    <h1>Login Form</h1>
                    <div class="mb-4 mt-5">
                        <label for="email">Enter Email :</label>
                        <input type="email" name = "login_email" id = "email">
                    </div>
                    <div class = "mb-4">
                        <label for="password">Password :</label>
                        <input type="password" name = "login_password" id = "password">
                    </div>
                    <div>
                        <button class = "btn btn-primary" type="Submit">Login</button>
                    </div>
                </form>
            </div>
        </center>
    </div>
</body>
</html>