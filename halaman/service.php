<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Service</title>
</head>

<body>
    <div class="judul">
        <h1>
            Service Form
        </h1>

        <form action="" method="post">
            <fieldset>
                <legend>
                    User Registration
                </legend>

                <label for="username">Username</label><br>
                <input type="email" name="username" id="username" placeholder="Email Anda...">
                <br><br>
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password" placeholder="Password Email Anda...">
                <br><br>
            </fieldset>
            <br>
            <fieldset>
                <legend>
                    Service Detail
                </legend>

                <label for="detail">Detail</label><br>
                <input class="detail" type="text" name="detail" id="detail" placeholder="Keterangan Bagian...">
                <br><br>
                <input type="submit" value="Registration">
            </fieldset>
        </form>
    </div>
</body>

</html>