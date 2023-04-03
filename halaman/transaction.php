<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction List</title>
</head>
<body>
    <div class="judul">
        <h1>
            Admin Confirm
        </h1>
    </div>
    <form action="/pc/halaman/transaction/transaction.php" method="post">
        <fieldset>
            <legend>
                Admin Login
            </legend>
                
            <label for="admin">Admin Username</label><br>
            <input type="email" name="admin" id="admin" placeholder="Admin Login..." required>
            <br><br>
            <label for="pass">Password</label><br>
            <input type="password" name="pass" id="pass" placeholder="Admin Password..." required>
            <br><br>
            <input type="submit" value="Login">
        </fieldset>
    </form>
</body>
</html>