<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia de Artes Marciais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header class="text-center navbar-dark bg-dark">
        <a href="/Academia-de-Artes-Marciais/" class="text-white text-decoration-none">
            <h1 class="display-5">Academia de Artes Marciais</h1>
        </a>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/Academia-de-Artes-Marciais/membro/">Membro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Academia-de-Artes-Marciais/instrutor/">Instrutor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Academia-de-Artes-Marciais/aula/">Aula</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Academia-de-Artes-Marciais/participacao/">Participação</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container">
        <?php
        require_once("funcao.php");
        if (conectarBanco())
            echo "<script>console.log('Conectado ao banco de dados');</script>";
        else {
            echo "<div class='alert alert-danger' role='alert'>Erro ao conectar ao banco de dados</div>";
        }
