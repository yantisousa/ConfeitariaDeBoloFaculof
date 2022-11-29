<?php
session_start();
include_once('configDB.php');


if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}

$logado = $_SESSION['email'];



if (isset($_POST['submit'])) {



    include_once('configDB.php');

    $tipo = 'Bolo de Aniversário';
    $andares = $_POST['andares'];
    $ingredientes = $_POST['ingredientes'];
    $preco = "R$ 100,00";

    $resultInsert = mysqli_query($conexao, "INSERT INTO dados_inseridos(tipo_bolo, 
        andares, ingredientes, preco)VALUES ('$tipo', '$andares', '$ingredientes', '$preco')");
}


if (isset($_POST['submit-casa'])) {

    include_once('configDB.php');

    $tipo = 'Bolo de Casamento';
    $andares = $_POST['andares-casa'];
    $ingredientes = $_POST['ingredientes-casa'];

    $preco = "R$ 190,90";

    $resultInsert = mysqli_query($conexao, "INSERT INTO dados_inseridos(tipo_bolo, 
        andares, ingredientes, preco)VALUES ('$tipo', '$andares', '$ingredientes', '$preco')");
}


if (isset($_POST['submit-case'])) {

    include_once('configDB.php');

    $tipo = 'Bolo Caseiro';
    $andares = $_POST['andares-case'];
    $ingredientes = $_POST['ingredientes-case'];

    $preco = "R$ 70,90";

    $resultInsert = mysqli_query($conexao, "INSERT INTO dados_inseridos(tipo_bolo, 
        andares, ingredientes, preco)VALUES ('$tipo', '$andares', '$ingredientes', '$preco')");
}
if (isset($_POST['submit-pote'])) {

    include_once('configDB.php');

    $tipo = 'Bolo de Pote';
    $andares = $_POST['andares-pote'];
    $ingredientes = $_POST['ingredientes-pote'];

    $preco = "R$ 7,90";

    $resultInsert = mysqli_query($conexao, "INSERT INTO dados_inseridos(tipo_bolo, 
        andares, ingredientes, preco)VALUES ('$tipo', '$andares', '$ingredientes', '$preco')");
}

if (isset($_POST['submit-coment'])) {

    $comentarios = $_POST['comentarios'];

    $selectComent = mysqli_query($conexao, "INSERT INTO dados_comentados(comentarios) VALUES ('$comentarios') ");

   
    
}
$registro = "SELECT * FROM dados_comentados ORDER BY id DESC";
$resultComentget = $conexao->query($registro);

$sql = "SELECT * FROM dados_inseridos ORDER BY id DESC";
$resultlist = $conexao->query($sql);

if (!empty($_GET['id'])) {

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM dados_inseridos WHERE id='$id'";
    $resultSelect = $conexao->query($sqlSelect);

    if($resultSelect->num_rows > 0){
        $slqDelete = "DELETE FROM dados_inseridos WHERE id='$id'";
        $resultDelete = $conexao->query($slqDelete);
    }
}








?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
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
        .valores button{
            background-color: #ca0029;
            color: white;
            border: 0px;
            border-radius: 10px;
            position: relative;
            width: 200px;
            left: 5px;
            top: 30px;
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

        .full-prod {
            display: flex;
            position: relative;
            left: 34px;

        }

        .full-prod-2 {
            margin-right: 20px;
        }

        .black-f1 {
            background-color: #ca0029;
            text-align: center;
            height: 80px;
            padding: 15px;
            width: 1100px;
            margin-left: 355px;
        }
        .black-f12 {
            background-color: #ca0029;
            text-align: center;
            height: 80px;
            padding: 15px;
            width: 1100px;
            
        }

        .prod-1 {
            background-color: #ffffff;
            border-radius: 10px;
            width: 250px;
            height: 500px;
            box-shadow: rgb(40 41 61 / 8%) 0px 0px 1px, rgb(96 97 112 / 16%) 0px 0.5px 2px;
        }

        .img-bolo h3 {
            text-align: center;
            position: relative;
            top: 20px;
        }

        .img-bolo img {
            position: relative;
            top: 40px;
            left: 20px;
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
        .img-serviços img{
            width: 260px;
            border-radius: 10px;
            position: relative;
            left: 35px;
            top: 190px;
        }
        html {
            scroll-behavior: smooth;
        }
        
        .form-style {
            text-align: center;
        }
        .quemsomos{
            display: flex;
           position: relative;
           left: 38%;
           width: 600px
           
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
        .finaliza input {
            background-color: green;
            color: white;
            border: 0px;
            border-radius: 10px;
            position: relative;
            left: 45%;
            cursor: pointer;
        }
        .comentarios input {
            background-color: green;
             color: white;
             border: 0px;
            border-radius: 10px;
            cursor: pointer;
        }
        .material-symbols-outlined {
            position: relative;
            left: 750px;
            bottom:35px;
        }
        #contato h4 {
            position: relative;
            left: 60%;
            width: 70px;
           
            bottom: 200px;
            
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
                <a href="#servicos">Serviços</a>
                <a href="#quemsomos1">Quem Somos</a>
                <a href="#contato">Contatos</a>

            </div>
            <div class="login-header">
            <span class="material-symbols-outlined">
person
</span> 
                <a href="home.php"><button>Sair da Conta</button></a>
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
                    volutpat justo accumsan. Morbi id blandit.
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
            <div class="black-f12">
            <h1>Serviços</h1>
            </div>
            <div class="img-serviços">
                <a href="#servicos"><img src="img/boloani2.jpg" alt=""></a>
                <a href="#servicos"><img src="img/bolocasa.jpg" alt=""></a>
                <a href="#servicos"><img src="img/bolo1.jpg" alt=""></a>
                <a href="#servicos"><img src="img/bolodepote1.jpg" alt=""></a>
            </div>
        </div>
    </section>
    <section id="servicos" >
        <div class="bg-all">
            <div class="black-f">
                <h1>Black Friday</h1>
            </div>
            <div class="full-prod">
                <div class="full-prod-2">
                    <div class="prod-1">
                        <div class="img-bolo">
                            <h3>Bolo de Aniversário</h3>
                            <img id="troca" src="img/moran.png" alt="" width="200px" height="150px">
                            <div class="texts">
                                <h6>R$ 149,90</h6>
                                <h4>R$ 100,00</h4>
                                <h5>À vista no PIX</h5>
                            </div>
                        </div>
                        <form id="formulario" action="sistema.php" method="POST">
                            <div class="valores">
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
                                <button type="submit" id="Adicionar" onclick="clickbtn()" name="submit">Adicionar</button>
                        </form>
                    </div>
                </div>
            </div>






            <div class="full-prod-2">
                <div class="prod-1">
                    <div class="img-bolo">
                        <h3>Bolo de Casamento</h3>
                        <img id="troca" src="img/bolocasa.png" alt="" width="200px" height="150px">
                        <div class="texts">
                            <h6>R$ 250,90</h6>
                            <h4>R$ 190,90</h4>
                            <h5>À vista no PIX</h5>
                        </div>
                    </div>

                    <form action="sistema.php" method="POST">
                        <div class="valores">
                            <label for="">Andares: </label>
                            <select id="" name="andares-casa">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select><br>
                            <label for="">Ingredientes: </label>
                            <select id="" name="ingredientes-casa">
                                <option>Chocolate</option>
                                <option>Morango</option>
                                <option>Cookies</option>
                                <option>Oreo</option>
                            </select>
                            <button type="submit" name="submit-casa">Adicionar</button>
                    </form>
                </div>
            </div>
        </div>






        <div class="full-prod-2">
            <div class="prod-1">
                <div class="img-bolo">
                    <h3>Bolo Caseiro </h3>
                    <img id="troca" src="img/bolodes.png" alt="" width="200px" height="150px">
                    <div class="texts">
                        <h6>R$ 100,90</h6>
                        <h4>R$ 70,90</h4>
                        <h5>À vista no PIX</h5>
                    </div>
                </div>
                <form action="sistema.php" method="POST">
                    <div class="valores">
                        <label for="">Andares: </label>
                        <select id="" name="andares-case">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select><br>
                        <label for="">Ingredientes: </label>
                        <select id="" name="ingredientes-case">
                            <option>Chocolate</option>
                            <option>Morango</option>
                            <option>Cookies</option>
                            <option>Oreo</option>
                        </select>
                        <button type="submit" name="submit-case">Adicionar</button>
                </form>
            </div>
        </div>
        </div>







        <div class="full-prod-2">
            <div class="prod-1">
                <div class="img-bolo">
                    <h3>Bolo de Pote</h3>
                    <img id="troca" src="img/bolodepote.png" alt="" width="200px" height="150px">
                    <div class="texts">
                        <h6>R$ 15,90</h6>
                        <h4>R$ 7,90</h4>
                        <h5>À vista no PIX</h5>
                    </div>
                </div>
                <form action="sistema.php" method="POST">
                    <div class="valores">
                        <label for="">Andares: </label>
                        <select id="" name="andares-pote">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select><br>
                        <label for="">Ingredientes: </label>
                        <select id="" name="ingredientes-pote">
                            <option>Chocolate</option>
                            <option>Morango</option>
                            <option>Cookies</option>
                            <option>Oreo</option>
                        </select>
                        <button type="submit" name="submit-pote">Adicionar</button>
                </form>
            </div>
        </div>
        </div>


        </div>
        </div>




    </section>
    <section>
        <div class="black-f1">
            <h1>Seus Pedidos</h1>
        </div>

        <table id="paginas">
            <tr>

                <th>Tipo de Bolo</th>
                <th>Andares</th>
                <th>Ingredientes</th>
                <th>Preço</th>

            </tr>
            <tr>

            </tr>
            <tbody>
                <?php
                    while ($user_data = mysqli_fetch_assoc($resultlist)) {
                        echo "<tr>";
                        echo "<td>" . $user_data['tipo_bolo'] . "</td>";
                        echo "<td>" . $user_data['andares'] . "</td>";
                        echo "<td>" . $user_data['ingredientes'] . "</td>";
                        echo "<td>" . $user_data['preco'] . "</td>";
                        echo "<td> <a class='btn-edit' href='editar.php?id=$user_data[id]' >
                                Editar
                         </td> ";
                         echo "<td> <td> <a class='btn-edit' href='sistema.php?id=$user_data[id]' >
                         Deletar
                  </td>
                         </td>";
                    }
                ?>
            </tbody>
        </table>
    </section>
    <section>
        <div class="finaliza">
            <form action="pedir.php" method="POST">
                <input type="hidden" name="horas" value="8">
            <input type="submit" value="Finalizar Pedido" name="horario">
            </form>
        </div>
    </section>
    <section>
        <div>
            <div class="black-f1">
                <h1>FeedBack</h1>
            </div>
            <div class="comentarios">
                <form action="sistema.php" method="POST">
                    <textarea placeholder="Comentários" name="comentarios" id="coment" cols="50" rows="4"></textarea><br><br>
                    <input type="submit" value="Enviar" class="btn-coment" name="submit-coment">
                </form>

            </div>
        </div>
        <table>
            <tr>
                <th>Comentários</th>
            </tr>
            <tbody>
                <?php
                while ($user_data = mysqli_fetch_assoc($resultComentget) ) {
                    echo "<tr>";
                   
                    echo "<td>" . $user_data['comentarios'] . "</td>";
                }

                ?>
            </tbody>
        </table>

    </section>
    <section id="quemsomos1">
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
    </section>
    <footer id="contato">
        <h3>Centro, Fortaleza-CE</h3>
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15925.516160105153!2d-38.53592916490318!3d-3.727265744241404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c749ad4b042991%3A0x4107a8237f70d84c!2sCentro%2C%20Fortaleza%20-%20CE!5e0!3m2!1spt-BR!2sbr!4v1668912565530!5m2!1spt-BR!2sbr" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <h4>Contatos<br>
        (85) XXXX-XXXX</h4>
            
            
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