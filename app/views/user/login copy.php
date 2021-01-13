<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>
<body>
    <div>
        <form action="postlogin" method="post">
            <p>UserName</p>
            <input type="email" name="email" placeholder="Enter email">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="" value="Login">
        </form>
    </div>
</body>
</html>