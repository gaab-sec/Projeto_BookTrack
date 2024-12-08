<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Livro - BookTrack</title>
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
            <p>Adicione novos livros à sua biblioteca.</p>
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
        <section id="add-book" class="form-section">
            <h2>Adicionar Novo Livro</h2>
            <form class="book-form" action="cadastrar_livro.php" method="POST">
                <label for="title">Título:</label>
                <input type="text" id="title" name="title" placeholder="Digite o título do livro" required>

                <label for="author">Autor:</label>
                <input type="text" id="author" name="author" placeholder="Digite o autor do livro" required>

                <label for="category">Gênero:</label>
                <input type="text" id="category" name="category" placeholder="Digite a(s) categoria(s)" required>

                <label for="publisher">Editora:</label>
                <input type="text" id="publisher" name="publisher" placeholder="Digite a editora" required>

                <label for="p_year">Ano de Publicação:</label>
                <input type="number" id="p_year" name="p_year" max="2024" placeholder="Digite o ano" required>

                <label for="pages">Número de Páginas:</label>
                <input type="number" id="pages" name="pages" min="1" placeholder="Digite o número de páginas" required>

                <label for="language">Idioma:</label>
                <input type="text" id="language" name="language" placeholder="Digite o idioma do livro" required>

                <button type="submit">Adicionar Livro</button>
            </form>
        </section>
    </main>

</body>

</html>
