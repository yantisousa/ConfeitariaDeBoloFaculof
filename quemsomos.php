<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="index.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
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

        /* Header */
        .capa-home img {
            height: 500px;
            position: relative;
            left: 54%;
            bottom: 170px;
        }

        .mov-all {
            position: relative;
            left: 20%;
            top: 150px;
            width: 300px;
        }

        .titulo-1 h1 {
            font-size: 30px;
        }

        .button-capa button {
            width: 120px;
            height: 30px;
            border: 0px;
            border-radius: 10px;
            background-color: #ca0029;
            color: white;
            position: relative;
            top: 20px;
            cursor: pointer;
        }

        /* PAGE 2 */
        .bg-all {
            background-color: #fafafb;
            width: 1130px;
            margin-left: 355px;
            height: 900px;
        }

        .black-f {
            background-color: #ca0029;
            text-align: center;
            height: 80px;
            padding: 15px;
            width: 1100px;
            margin: auto;
        }

        .black-f1 {
            background-color: #ca0029;
            text-align: center;
            height: 80px;
            padding: 15px;
            width: 1100px;
            margin-left: 355px;
        }

        .prod-1 {
            border: 0px solid black;
            width: 250px;
            height: 500px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: rgb(40 41 61 / 8%) 0px 0px 1px, rgb(96 97 112 / 16%) 0px 0.5px 2px;
            margin-left: 450px;
            margin-top: 30px;


        }


        .img-bolo img {
            width: 200px;
            position: relative;
            top: 60px;
            left: 23px;
        }

        .texts h3 {
            position: relative;
            top: 50px;
        }

        .texts h6 {
            position: relative;
            top: 25px;
            text-decoration: line-through;
        }

        .texts h4 {
            color: #ca0029;
        }

        .texts b {
            position: relative;
            bottom: 47px;
        }

        .texts {
            position: relative;
            left: 20px;
        }

        .btn-prod {
            position: relative;
            left: 10%;
            top: 30px;


        }

        .btn-prod input {
            background-color: #ca0029;
            border: 0px;
            border-radius: 5px;
            color: white;
            width: 200px;
            height: 30px;

        }

        .full-prod {
            display: flex;
            position: relative;
            right: 10px;
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
            width: 100%;
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

        .form-style {
            text-align: center;
        }
        .quemsomos{
            display: flex;
           position: relative;
           left: 38%;
           
        }
        .quemsomos-1 {
            margin-right: 20px;
        }
        .quemsomos-1 h5 {
            position: relative;
            bottom: 70px;
        }
        .quemsomos-2 {
            margin-left: 20px;
        }
        #estado {
            position: relative;
            bottom: 90px;
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
                <a href="quemsomos.php">Quem Somos</a>
                <a href="">Contatos</a>

            </div>
            <div class="login-header">
                <a href="home.php"><button>Sair</button></a>
            </div>
        </div>
    </header>
    <section>
        <div class="form-style">
            <h1>Quem somos</h1>
        </div>
        <div class="quemsomos">
            <div class="quemsomos-1">
                <img src="img/yan.jpeg" alt="" height="250px" width="200px"><br>
                <h4>Yan Emanuel de Sousa P.</h4><br>
                <h5>Matricula: 202202941875</h5>
            </div>
            <div class="quemsomos-2">
                <img src="img/andre.jpeg" alt="" height="250px" width="200px">
                <h4>André Luis Gadelha de L.</h4><br>
                <h5></h5>
            </div>
        </div>
</body>