<?php
    include 'db.php';
    $sql_list = "SELECT * FROM livro";
    $result = mysqli_query($connection, $sql_list);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Livros - BookTrack</title>
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
            <p>Gerencie o catálogo de livros da sua biblioteca!</p>
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
        <section id="catalog" class="livros">
            <h2>Catálogo de Livros</h2>

            <div class="view-switch">
                <a href="catalogo.php"><button >Visualização em Grid</button></a>
                <a href="catalogo_table.php"><button>Visualização em Tabela</button></a>
            </div>

            <div class="livros-grid">
                <?php
                    while ($dados = mysqli_fetch_assoc($result)): 
                ?>
                <div class="livro">
                    <h3><?php echo $dados['title']; ?></h3>
                    <p><strong>Autor:</strong> <?php echo $dados['author']; ?></p>
                    <p><strong>Gênero:</strong> <?php echo $dados['category']; ?></p>
                    <p><strong>Editora:</strong> <?php echo $dados['publisher']; ?></p>
                    <p><strong>Ano:</strong> <?php echo $dados['p_year']; ?></p>
                    <p><strong>Páginas:</strong> <?php echo $dados['pages']; ?></p>
                    <p><strong>Idioma:</strong> <?php echo $dados['language']; ?></p>
                    
                    <div class="actions">
                        <a href="edit_livro.php?id_livro=<?php echo $dados['id']; ?>">
                            <button class="edit">Editar</button></a>
                            <a href="delete_livro.php?id_livro=<?php echo $dados['id']; ?>">
                            <button class="delete">Excluir</button>
                        </a>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </section>
    </main>

</body>

</html>
