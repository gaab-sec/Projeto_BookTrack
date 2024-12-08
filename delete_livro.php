<?php
    include "db.php";

    $id_livro = $_GET['id_livro'];

    $sql_excluir_id = "DELETE FROM livro WHERE livro.id = '$id_livro'";

    if (mysqli_query($connection, $sql_excluir_id))
    {
        header("Location: catalogo.php");
    } else {
        echo "Erro ao excluir cadastro.";
    }