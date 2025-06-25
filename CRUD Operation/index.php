<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="cointainer-fluid">
        <form action="data.php" method="POST">
            <h2 class="text-center">Registration Form</h2>
            <div class="mb-3">
                <label for="Username">UserName :</label>
                <input type="text" name="username" id="uname" placeholder="Username">
            </div>

            <div class="mb-3">
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" placeholder="email">
            </div>

            <div class="mb-3">
                <label for="Password">Password :</label>
                <input type="password" name="password" id="password" placeholder="Password">
            </div>

            <div>
                <button>Submit</button> 
                <button>Clear</button>
            </div>
        </form>
    </div>
</body>
</html>