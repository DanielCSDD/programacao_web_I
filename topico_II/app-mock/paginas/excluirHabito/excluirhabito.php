<?php
   $servidor = "localhost";
   $usuario = "root";
   $senha = "";
   $bancodedados = "listadehabito";

    // Cria a conexão
    $conexao = new mysqli($servidor, $usuario, $senha, $bancodedados);

    // Verifica se conectou com sucesso
    if ($conexao->connect_error) {
        die("Falha na conexão: " . $conexao->connect_error);
    }

    // Atualiza o status de A - ativo para V - vencido
    $id = $_GET["id"];
    $sql = "DELETE FROM habito WHERE id=".$id;

    // Verifica se o comando foi executado com sucesso
    if (!($conexao->query($sql) === TRUE)) {
        $conexao->close();
        die("Erro ao atualizar: " . $conexao->error);
    }

    // Fecha a conexão
    $conexao->close();

    // Redireciona para index
    header("Location: ../../index.php");
?>