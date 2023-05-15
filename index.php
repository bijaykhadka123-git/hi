<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login.php</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <form action="process-signup.php" method="POST">
            <div class="form-group">
                <label for="fullname">fullname</label>
                <input type="text" id="fullname" name="fullname">
            </div>

            <div class="form-group">
                <label for="email">email</label>
                <input type="email" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="password">password</label>
                <input type="password" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="repeat-password">repeat-password</label>
                <input type="password" id="repeat-password" name="repeat_password">
            </div>
            <div class="reg">
                <button type="submit">submit</button>
            </div>
        </form>
    </div>
</body>

</html>