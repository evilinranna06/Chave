<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Enigma</title>
</head>
<body>
    <div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['codigo'])) {
                $codigo = $_POST['codigo'];
                // Verifique se o código está correto
                if ($codigo == "56") { // Substitua "56" pelo resultado correto do enigma
                    echo "<h1>Parabéns! Você desvendou o enigma.</h1>";
                    echo "<p>Agora, prepare-se para a próxima surpresa...</p>";
                } else {
                    echo "<h1>Código incorreto. Tente novamente.</h1>";
                }
            } else {
                echo "<h1>Erro: Código não recebido.</h1>";
            }
        } else {
            echo "<h1>Método não permitido. Acesse a página via formulário.</h1>";
        }
        ?>
    </div>
</body>
</html>
