<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include('app/includes/lib.php'); ?>
</head>

<body>
    <?php include('app/includes/header.php'); ?>

    <div class="login-container">
        <form class="login-form">
            <h2>Login</h2>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Log In</button>
        </form>
    </div>

    <?php include('app/includes/footer.php'); ?>
</body>

</html>