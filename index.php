<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align:center;
        }
    </style>
</head>
<body>
    <h1>Acceso</h1>
    <form id="frmAccess" action="Controlador/controladorUsuario.php" method="POST">
        <label for="email"></label>
        <input type="text" id="email" name="email"> <br>
        <label for="contrasenia"></label>
        <input type="password" id="contrasenia" name="contrasenia"> <br> <br>
        <p id="mensaje"></p>
        <input type="hidden" name="Acceder">
        <button type="button" value="Acceder" onclick=validarAccesso()> Acceder </button>
    </form>
    <script>
        function validarAccesso(){
            const $email = document.getElementById('email').value,
            $contrasenia = document.getElementById('contrasenia').value;

            if(!$email || !$contrasenia){
                document.getElementById('mensaje').innerHTML = 'Usuario y/o Contraseña no pueden estar vacios!.';
            } else {
                document.getElementById('frmAccess').submit();
            }

        }
    </script>
</body>
</html>