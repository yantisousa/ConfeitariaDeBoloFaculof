<?php

include_once('configDB.php');

if (!empty($_GET['id'])) {

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM dados_inseridos WHERE id='$id'";
    $resultSelect = $conexao->query($sqlSelect);

    if($resultSelect->num_rows > 0){
        while($user_data = mysqli_fetch_assoc($resultSelect)){
            
            $andares = $user_data['andares'];
            $ingredientes = $user_data['ingredientes'];

        }
        
    }
    else
    {
        header('Location: sistema.php');
    }
}


?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: white;
            font-family: "Poppins";
            margin: 0px;
            padding: 0px;
        }

        /* Header */
        .logo img {
            height: 120px;
            display: inline;
        }

        .logo {
            display: inline;
            position: relative;
            left: 20%;
        }

        .link-header {
            display: inline;
        }

        .login-header {
            display: inline;
        }

        .link-header a {
            text-decoration: none;
            color: black;
            position: relative;
            left: 40%;
            bottom: 50px;
            font-size: 20px;
            margin: 20px;
        }

        .link-header a:hover {
            color: white;
        }

        .login-header button {
            position: relative;
            left: 40%;
            bottom: 51px;
            background-color: #89521e;
            height: 30px;
            width: 80px;
            border: 0px;
            border-radius: 10px;
            cursor: pointer;
        }

        .login-header a button {
            color: white;
            text-decoration: none;
        }

        .login-header button:hover {
            background-color: #552c1e;

        }

        .form-login {
            width: 100vw;
            height: 90vh;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        .form-style input {
            width: 500px;
            height: 50px;
            margin-top: 20px;
            border-radius: 10px;
        }

        .form-style h1,
        h4 {
            text-align: center;
        }

        .submit-1 {
            background-color: #552c1e;
            cursor: pointer;
            background-color: #89521e;
        }

        .btn-1 {
            background-color: #89521e;
            height: 30px;
            width: 80px;
            border: 0px;
            border-radius: 10px;
            cursor: pointer;
            position: relative;
            left: 190px;
        }
        .texts {
            position: relative;
            left: 20px;
            top: 30px;
        }

        .texts h6 {
            position: relative;
            top: 30px;
            text-decoration: line-through;
        }

        .texts h4 {
            color: #ca0029;
        }

        .texts h5 {
            position: relative;
            bottom: 25px;
        }

        .btn-prod button {
            border-radius: 10px;
            background-color: #ca0029;
            color: white;
            border: 0px;
            position: relative;
            left: 50px;
            top: 45px;
            width: 150px;
            cursor: pointer;
        }

        .valores {
            position: relative;
            left: 20px;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 1130px;
            position: relative;
            left: 355px;

        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        .pedidos button {
            position: relative;
            left: 300px;
        }

        #coment {
            position: relative;
            left: 355px;
            top: 30px;
        }

        .btn-coment {
            position: relative;
            left: 750px;
            bottom: 27px;
        }

        footer {
            background-color: #ca0029;
            height: 400px;
        }

        .map {
            position: relative;
            left: 700px;
            top: 50px;
        }

        footer h3 {
            position: relative;
            left: 800px;
            top: 30px;
            width: 200px;
        }

        #estado {
            position: relative;
            bottom: 130px;
            left: 30px;
        }
    </style>
</head>

<body>
    <header>
        <div>
            <!-- div que movimenta tudo -->
            <div class="logo">
            <a href="sistema.php"><img src="img/logo.png" alt=""></a>
            </div>
            <div class="link-header">
                <a href="sistema.php">Home</a>
                <a href="">Serviços</a>
                <a href="">Quem Somos</a>
                <a href="">Contatos</a>
                <a href="login.php"><button class="btn-1">Login</button></a>
            </div>

        </div>
    </header>
    <div class="form-login">
        <div class="form-style">
            <h1>Editar Pedido</h1>
            <p>
            <form action="saveEdit.php" method="POST">
                <input type="hidden" name="id">
                
                <input type="text" name="andares" placeholder="Andares" value="<?php echo $andares ?>"><br>
                <input type="text" name="ingredientes" placeholder="Ingredientes"value="<?php echo $ingredientes ?>"><br>
                <input type="hidden" name="id" value="<?php echo $id?>">
                <input class="submit-1" type="submit" name="update-save" value="Enviar">
                <br><br><br>
                <hr>
                
            </form>
        </div>
    </div>

</body>

</html>

                <form action="saveEdit.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input id="submit" type="text" name="update-save" value="Salvar">
                </form>
    <section>
        <div>
            <div class="black-f1">
                <h1>FeedBack</h1>
            </div>
            <div>
                <form action="" method="">
                    <textarea placeholder="Comentários" name="comentarios" id="coment" cols="50" rows="4"></textarea><br><br>
                    <input type="submit" value="Enviar" class="btn-coment">
                </form>
                
                </form>
            </div>
        </div>

               
    </section>
    <footer>
        <h3>Centro, Fortaleza-CE</h3>
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15925.516160105153!2d-38.53592916490318!3d-3.727265744241404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c749ad4b042991%3A0x4107a8237f70d84c!2sCentro%2C%20Fortaleza%20-%20CE!5e0!3m2!1spt-BR!2sbr!4v1668912565530!5m2!1spt-BR!2sbr" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </footer>


    <script>
        function clicar() {

            trocar = document.getElementById('troca');

            clicando = document.getElementById('estado');

            if (clicando.value == "Bolo Caseiro") {
                trocar.setAttribute('src', 'img/bolodes.png');

            }
            if (clicando.value == "Bolo de Aniversário") {
                trocar.setAttribute('src', 'img/moran.png');

            }
            if (clicando.value == "Bolo de Casamento") {
                trocar.setAttribute('src', 'img/bolocasa.png');
                trocar.setAttribute('style', 'height: 150px;')
            }
            if (clicando.value == "Bolo de Pote") {
                trocar.setAttribute('src', 'img/bolodepote.png');
            }


        }
    </script>

</body>

</html>