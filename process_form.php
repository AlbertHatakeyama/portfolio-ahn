<?php
    // Verifica se o formulário foi enviado e se os dados estão preenchidos
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["name"]) && !empty($_POST["genero"])) {
        $primeiro_nome = htmlspecialchars($_POST["name"]);
        $genero = $_POST["genero"];

        // Define saudação com base na hora do dia
        $hour = date('H');
        if ($hour < 12) {
            $saudacao = 'bom dia';
        } elseif ($hour < 18) {
            $saudacao = 'boa tarde';
        } else {
            $saudacao = 'boa noite';
        }

        // Define o tratamento baseado no gênero
        if ($genero == 'o') {
            $tratamento = "Sr. $primeiro_nome";
        } elseif ($genero == 'a') {
            $tratamento = "Sra. $primeiro_nome";
        } else {
            $tratamento = "Sr(a). $primeiro_nome";
        }

        // Redireciona para a página de boas-vindas com a saudação e tratamento
        header("Location: index.php?saudacao=" . urlencode($saudacao) . "&tratamento=" . urlencode($tratamento));
        exit();
    } else {
        // Redireciona de volta para o formulário se os dados não estiverem preenchidos
        header("Location: index.php");
        exit();
    }
?>