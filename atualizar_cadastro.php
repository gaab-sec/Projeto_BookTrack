<?php
    include "db.php";

    $id_livro = $_POST['id_livro'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $publisher = $_POST['publisher'];
    $p_year = $_POST['p_year'];
    $pages = $_POST['pages'];
    $language = $_POST['language'];

    $sql_update = "UPDATE livro SET 
                    title = '$title', 
                    author = '$author', 
                    category = '$category', 
                    publisher = '$publisher', 
                    p_year = '$p_year', 
                    pages = '$pages', 
                    language = '$language' 
                    WHERE id = $id_livro;";

    if (mysqli_query($connection, $sql_update)) {
        header("Location: catalogo.php");
        exit;
    } else {
        echo "Erro ao atualizar.";
    }