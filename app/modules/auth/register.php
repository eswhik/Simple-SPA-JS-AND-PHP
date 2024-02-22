<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <?php include('app/includes/lib.php'); ?>
</head>

<body>
    <?php include('app/includes/header.php'); ?>

    <div class="register-container">
        <form class="register-form">
            <h2>Register</h2>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirm-password" required>

            <button type="submit">Check in</button>
        </form>
    </div>

    <?php include('app/includes/footer.php'); ?>
</body>

</html>