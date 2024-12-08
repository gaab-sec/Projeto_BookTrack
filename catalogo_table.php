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
            
            <div class="table-container">
                <table class="livros-table">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Gênero</th>
                            <th>Editora</th>
                            <th>Ano</th>
                            <th>Páginas</th>
                            <th>Idioma</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($dados = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo $dados['title']; ?></td>
                            <td><?php echo $dados['author']; ?></td>
                            <td><?php echo $dados['category']; ?></td>
                            <td><?php echo $dados['publisher']; ?></td>
                            <td><?php echo $dados['p_year']; ?></td>
                            <td><?php echo $dados['pages']; ?></td>
                            <td><?php echo $dados['language']; ?></td>
                            <td>
                                <a href="edit_livro.php?id_livro=<?php echo $dados['id']; ?>">
                                    <button class="edit">Editar</button>
                                </a>
                            </td>
                            <td>
                                <a href="delete_livro.php?id_livro=<?php echo $dados['id']; ?>">
                                    <button class="delete">Excluir</button>
                                </a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

</body>

</html>
