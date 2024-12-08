<?php
    include "db.php";

    $title = $_POST['title'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $publisher = $_POST['publisher'];
    $p_year = $_POST['p_year'];
    $pages = $_POST['pages'];
    $language = $_POST['language'];

    $sql = "INSERT INTO livro (title, author, category, publisher, p_year, pages, language) 
            VALUES ('$title', '$author', '$category', '$publisher', '$p_year', '$pages', '$language')";
            
    // Executa a query
    if (mysqli_query($connection, $sql)) {
        header("Location: add_livro.php");
    } else {
        echo "Erro ao adicionar livro";
    }

?>
