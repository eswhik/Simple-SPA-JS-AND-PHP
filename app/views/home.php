<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <meta name="description" content="Home">
    <?php include('app/includes/lib.php'); ?>
</head>

<body>
    <?php include('app/includes/header.php'); ?>

    <div class="table-container">
        <div class="card">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody id="tabla-body">
                </tbody>
            </table>
        </div>
    </div>

    <script>
        const apiUrl = 'https://jsonplaceholder.typicode.com/users';

        async function getInfo() {
            try {
                const answer = await fetch(apiUrl);

                if (answer.ok) {
                    const datos = await answer.json();
                    const tablaBody = document.getElementById('tabla-body');

                    tablaBody.innerHTML = '';

                    datos.forEach(user => {
                        const fila = document.createElement('tr');
                        fila.innerHTML = `
                            <td>${user.id}</td>
                            <td>${user.name}</td>
                            <td>${user.username}</td>
                            <td>${user.email}</td>
                        `;
                        tablaBody.appendChild(fila);
                    });
                } else {
                    console.error(answer.status);
                }
            } catch (error) {
                console.error(error);
            }
        }

        getInfo();
    </script>

    <?php include('app/includes/footer.php'); ?>
</body>

</html>