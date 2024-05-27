<?php
require_once("../header.php");
?>

<h3 class="text-center mb-4">Adicionar Instrutor</h3>

<form action="" method="POST">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="form-group">
        <label for="especialidade">Especialidade</label>
        <input type="text" class="form-control" id="especialidade" name="especialidade" required>
    </div>
    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>

<?php
if ($_POST) {
    $nome = $_POST['nome'];
    $especialidade = $_POST['especialidade'];

    if ($nome == "" || $especialidade == "") {
        echo "<div class='alert alert-danger mt-3'>Preencha todos os campos!</div>";
        return;
    }

    if (adicionarInstrutor($nome, $especialidade)) {
        echo "<div class='alert alert-success mt-3'>Instrutor adicionado com sucesso!</div>";

        echo "<script>setTimeout(() => { window.location.href = 'index.php'; }, 1000);</script>";
    } else {
        echo "<div class='alert alert-danger mt-3'>Erro ao adicionar instrutor!</div>";
    }
}

require_once("../footer.php");
?>