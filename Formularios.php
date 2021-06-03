<?php
    require_once './funcoes.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Title</title>
    <form class="form1" method="POST">
        <h3>Calculadora IMC</h3>
        <label class="label1">
            <input type="number" name="peso" placeholder="Informe seu peso em Kg"><br>
            <input type="number" name="altura" placeholder="informe sua altua em metros"><br>
            <button>Insert</button>
        </label>

    </form>

    <div class="form1">
    <?php
        if (isset($_POST['peso']) && !empty($_POST['peso'])){

            $peso = $_POST['peso'];
            $altura = $_POST['altura'];


            print IMC($peso,$altura);
        }
    ?>
    </div>

</head>
<body>

</body>
</html>