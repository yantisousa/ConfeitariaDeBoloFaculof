<?php
if (isset($_GET['bolo'])) {

    include_once('configDB.php');

    $tipo1 = $_GET['tipo'];
    $andares = $_GET['andares'];
    $ingredientes = $_GET['ingredientes'];


    $go = mysqli_query($conexao, "INSERT INTO dados_inseridos(tipo_bolo, andares, ingredientes)VALUES ('$tipo1', '$andares', '$ingredientes')");
}
if (isset($_POST['edit'])){
    header('Location: editcategoria.php');
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="index.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
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
            height: 700px;
        }

        .black-f {
            background-color: #ca0029;
            text-align: center;
            height: 80px;
            padding: 15px;
            width: 1100px;
            margin: auto;
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
            border: 1px solid black;
        }

        #estado {
            position: relative;
            bottom: 150px;
            left: 30px;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 1130px;
            margin-left: 355px;
            
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
        .btn-list {
            position: relative;
            left: 250px;
            
        }
        .btn-list button {
            background-color: blue;
            color: #fafafb;
            border: 0px;
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
                <a href="home.php">Home</a>
                <a href="">Serviços</a>
                <a href="">Quem Somos</a>
                <a href="">Contatos</a>

            </div>
            <div class="login-header">
                <a href="home.php"><button>Sair</button></a>
            </div>
        </div>
    </header>
    <section>
        <div>
            <div class="mov-all">
                <div class="titulo-1">
                    <!-- div que movimenta tudo -->
                    <h1>Confeitaria de Bolos</h1>
                    <h3>100% Homemade Cakes</h3>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus luctus leo ac leo cursus, nec
                    volutpat justo accumsan. Morbi id blandit. $nome;
                </div>
                <div class="button-capa">
                    <button>Conhecer</button>
                </div>
            </div>
            <div class="capa-home">
                <img src="img/bolo.png" alt="">
            </div>

        </div>
    </section>
    <section>
        <div class="bg-all">
            <div class="black-f">
                <h1>Black Friday</h1>
            </div>
            <div class="full-prod">
                <div class="full-prod-2">
                    <div class="prod-1">
                        <div class="img-bolo">
                            <img id="troca" src="img/moran.png" alt="">
                        </div>
                        <div class="texts">
                            <form action="tipo1.php" method="GET">

                                <select id="estado" onclick="clicar()" name="tipo">
                                    <option value="Bolo de Aniversário">Bolo de Aniversário</option>
                                    <option value="Bolo Caseiro">Bolo Caseiro</option>
                                    <option value="Bolo de Casamento">Bolo de Casamento</option>
                                    <option value="Bolo de Pote">Bolo de Pote</option>
                                </select><br>
                                <h6 id="troca1">R$ 148,90</h6>
                                <h4 id="troca2">R$ 100,00</h4><br>
                                <b id="troca3">Á vista no PIX</b><br>

                                <label for="">Andares: </label>
                                <select id="" name="andares">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select><br>
                                <label for="">Ingredientes: </label>
                                <select id="" name="ingredientes">
                                    <option>Chocolate</option>
                                    <option>Morango</option>
                                    <option>Cookies</option>
                                    <option>Oreo</option>
                                </select>

                        </div>

                        <div class="btn-prod">
                            <input type="submit" name="bolo" placeholder="Adicionar">
                        </div>
                        </form>

                    </div>
                </div>


                <!-- <div>
                    <div class="prod-1">
                        <div class="img-bolo">
                            <img src="img/bolodes.png" alt="">
                        </div>
                        <div class="texts">
                            <h3>Bolo Caseiro</h3>
                            <h6>R$ 148,90</h6>
                            <h4>R$ 70,00</h4><br>
                            <b>Á vista no PIX</b><br>
                    <form action="tiposbolo/tipo2.php" method="GET">
                            <label for="">Andares: </label>
                            <select id="estado" name="andares">
                                <option>1</option>
                                <option>2</option>
                                <option value="PB">3</option>
                                <option value="PB">4</option>
                            </select><br>
                            <label for="">Ingredientes: </label>
                            <select id="estado" name="ingredientes">
                                <option>Chocolate</option>
                                <option>Morango</option>
                                <option value="PB">Cookies</option>
                                <option value="PB">Oreo</option>
                            </select>

                        </div>
                      
                            <div class="btn-prod">
                                <input type="submit" name="bolo" placeholder="Adicionar">
                            </div>
                    </form>

                    </div>
                </div>

                <div>
                    <div class="prod-1">
                        <div class="img-bolo">
                            <img src="img/bolocasa.png" alt="" height="150px">
                        </div>
                        <div class="texts">
                            <h3>Bolo de Casamento</h3>
                            <h6>R$ 200,90</h6>
                            <h4>R$ 150,00</h4><br>
                            <b>Á vista no PIX</b><br>
                    <form action="tiposbolo/tipo3.php" method="GET">
                            <label for="">Andares: </label>
                            <select id="estado" name="andares">
                                <option>1</option>
                                <option>2</option>
                                <option value="PB">3</option>
                                <option value="PB">4</option>
                            </select><br>
                            <label for="">Ingredientes: </label>
                            <select id="estado" name="ingredientes">
                                <option >Chocolate</option>
                                <option >Morango</option>
                                <option>Cookies</option>
                                <option>Oreo</option>
                            </select>

                        </div>
                        
                            <div class="btn-prod">
                                <input type="submit" name="bolo" placeholder="Adicionar">
                            </div>
                    </form>

                    </div>
                </div>

                <div>
                    <div class="prod-1">
                        <div class="img-bolo">
                            <img src="img/bolodepote.png" alt="">
                        </div>
                        <div class="texts">
                            <h3>Bolo de Pote</h3>
                            <h6>R$ 15,90</h6>
                            <h4>R$ 7,90</h4><br>
                            <b>Á vista no PIX</b><br>
                    <form action="tiposbolo/tipo4.php" method="GET">
                            <label for="">Andares: </label>
                            <select id="estado" name="andares">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select><br>
                            <label for="">Ingredientes: </label>
                            <select id="estado" name="ingredientes">
                                <option>Chocolate</option>
                                <option>Morango</option>
                                <option>Cookies</option>
                                <option>Oreo</option>
                            </select>

                        </div>
                        
                            <div class="btn-prod">
                                <input type="submit" name="bolo" placeholder="Adicionar">
                            </div>
                    </form> -->

            </div>
        </div>
        </div>
        </div>
    </section>
    <section>
        <div>
            <div>
                <table>
                    <tr>
                        <th>Tipo de Bolo</th>
                        <th>Andares</th>
                        <th>Ingredientes</th>
                    </tr>
                    <tr>
                        <td><?php print_r($tipo1); ?></td>
                        <td><?php print_r("Andares: " . $andares); ?></td>
                        <td><?php print_r($ingredientes); ?> 
                                    <form action="tipo1.php" class="btn-list" method="POST">
                                        <button name="edit">Editar</button>
                                    </form>
                    
                    
                    
                    </td>
                    </tr>

                </table>

            </div>
        </div>
    </section>
    <script>

    </script>
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