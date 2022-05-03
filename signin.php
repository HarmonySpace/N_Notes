<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Sign in</title>
</head>
<body>
    <section class="sec-container-1 backblue">
        <div class="form-container-1">
            <h1>Sign in</h1>
            <h2>Crea una cuenta con nosotros</h2>
            <form action="machine.php" method="post" enctype="multipart/form-data">
                <label for="correo">Correo</label>
                <input type="text" name="correo" placeholder="mooninthespace@gmail.com">
                <label for="contraseña">Password</label>
                <input type="password" name="contraseña" placeholder="password">
                <label class="terms" for="terms">Aceptar los <span>términos y condiciones</span></label>
                <input type="checkbox" name="terms">
                <div class="bt-con"><button type="submit"" name="crear">Crear</button></div>
            </form>
            </div>
    </section>
</body>
</html>