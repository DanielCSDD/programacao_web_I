<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodedados = "listadehabito";

    // Abre a conexão com o banco de dados listadehabito
    $conexao = new mysqli($servidor, $usuario, $senha, $bancodedados);

    // Verifica se houve erro ao abrir a conexão
    if ($conexao->connect_error) {
        die("A conexão falhou: " . $conexao->connect_error);
    }
    // Atualiza o status de A - ativo para V - vencido
    $id = $_GET["id"];
    $sql = "UPDATE habito SET status='V' WHERE id=".$id;

    // Verifica se ocorreu tudo bem. Caso houve erro, fecha a conexão e aborta o programa
    if (!($conexao->query($sql) === TRUE)) {
        $conexao->close();
        die("Erro: " . $sql . "<br>" . $conexao->error);
    }

    // Fecha a conexão com o Banco de dados
    $conexao->close();

    // Envia para a página index onde aparece a lista de hábitos já com o novo hábito cadastrado
    header("Location: ../../index.php");
?>