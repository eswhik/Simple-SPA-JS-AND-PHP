<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <?php include('app/includes/lib.php'); ?>
</head>

<body>
    <?php include('app/includes/header.php'); ?>

    <div class="add-container">
        <form class="add-form">
            <h2>Add</h2>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <button type="submit">Add</button>
        </form>
    </div>

    <?php include('app/includes/footer.php'); ?>
</body>

</html>