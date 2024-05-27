<?php
require_once("../header.php");
?>

<h3 class="text-center mb-4">Adicionar Aula</h3>

<form action="" method="POST">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="form-group">
        <label for="horario">Horário</label>
        <input type="datetime-local" class="form-control" id="horario" name="horario" required>
    </div>
    <div class="form-group">
        <label for="instrutor">Instrutor</label>
        <select class="form-control" id="instrutor" name="instrutor" required>
            <option value="">Selecione um instrutor</option>
            <?php
            $linhas = listarInstrutores();
            while ($l = $linhas->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <option value="<?= $l['ID'] ?>"><?= $l['Nome'] ?></option>
            <?php
            }
            ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>

<?php
if ($_POST) {
    $nome = $_POST['nome'];
    $horario = $_POST['horario'];
    $instrutor = $_POST['instrutor'];

    if ($nome == "" || $horario == "" || $instrutor == "") {
        echo "<div class='alert alert-danger mt-3'>Preencha todos os campos!</div>";
        return;
    }

    if (adicionarAula($nome, $horario, $instrutor)) {
        echo "<div class='alert alert-success mt-3'>Aula adicionada com sucesso!</div>";

        echo "<script>setTimeout(() => { window.location.href = 'index.php'; }, 1000);</script>";
    } else {
        echo "<div class='alert alert-danger mt-3'>Erro ao adicionar aula!</div>";
    }
}

require_once("../footer.php");
?>