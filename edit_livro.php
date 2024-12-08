<?php
    include "db.php";  

    $id_livro = $_GET['id_livro'];  

    $sql_editar_id = "SELECT * FROM livro WHERE livro.id = '$id_livro'";  

    $resultado_consulta_id = mysqli_query($connection, $sql_editar_id);

    $dados_id = mysqli_fetch_assoc($resultado_consulta_id); 

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Livro - BookTrack</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <header>
        <div class="main-header">
            <div class="logo">
                <h1>BookTrack</h1>
            </div>
        </div>
        <div>
            <p>Atualize os detalhes do livro.</p>
        </div>

        <nav class="navigation">
            <ul>
                <li><a href="index.html">Início</a></li>
                <li><a href="add_livro.php">Adicionar Livro</a></li>
                <li><a href="catalogo.php">Catálogo</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="add_book" class="form-section">
            <h3>Formulário de Edição de Livro</h3>

            <form class="book-form" method="post" action="atualizar_cadastro.php">
                <input type="hidden" name="id_livro" value="<?php echo $dados_id['id']; ?>">

                <label for="title"><strong>Título: </strong></label>
                <input type="text" name="title" id="title" value="<?php echo $dados_id['title']; ?>">

                <label for="author"><strong>Autor: </strong></label>
                <input type="text" name="author" id="author" value="<?php echo $dados_id['author']; ?>">

                <label for="category"><strong>Gênero: </strong></label>
                <input type="text" name="category" id="category" value="<?php echo $dados_id['category']; ?>">

                <label for="publisher"><strong>Editora: </strong></label>
                <input type="text" name="publisher" id="publisher" value="<?php echo $dados_id['publisher']; ?>">

                <label for="p_year"><strong>Ano: </strong></label>
                <input type="text" name="p_year" id="p_year" value="<?php echo $dados_id['p_year']; ?>">

                <label for="pages"><strong>Páginas: </strong></label>
                <input type="text" name="pages" id="pages" value="<?php echo $dados_id['pages']; ?>">

                <label for="language"><strong>Idioma: </strong></label>
                <input type="text" name="language" id="language" value="<?php echo $dados_id['language']; ?>">


                <button type="submit">Atualizar</button>
            </form>
            
            <form  class="book-form" id="voltar" action="catalogo.php" >
                <input type="submit" value="Voltar ao catálogo">
            </form>
            
        </section>
    </main>

</body>
</html>
