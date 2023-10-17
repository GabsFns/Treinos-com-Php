<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadcss.css" type="text/css">
    
    <title>Document</title>
</head>
<body>
    <header><h1><u>Resultado do Processamento</u></h1></header>
    <main>
        <div class="ajuste">
        <?php
            if ($_SERVER["REQUEST_METHOD"] === "GET") {
                $nome = $_GET["nome"];
                $sobrenome = $_GET["sobrenome"];

                if (!empty($nome) && !empty($sobrenome)) {
                    // Verifica se ambos os campos contêm apenas letras
                    if (ctype_alpha($nome) && ctype_alpha($sobrenome)) {
                        echo "É um grande prazer receber você aqui $nome $sobrenome, este é o meu site!";
                    } else {
                        echo '<div id="erro" style="color: #2D2E47;">Por favor, insira apenas letras nos campos Nome e Sobrenome.</div>';
                    }
                } else {
                    echo '<div id="erro" style="color: #2D2E47;">Por favor, preencha todos os campos.</div>';
                }
            }
            ?>
        </div>
        <p><a href="http://localhost/petshopphp/TelaDeLogin/login.html"> Voltar para pagina anterior</a></p>
    </main>
</body>
    <script src="error.js"></script>
</html>