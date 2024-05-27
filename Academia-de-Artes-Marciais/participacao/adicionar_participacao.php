<?php
require_once("../header.php");
?>

<h3 class="text-center mb-4">Adicionar Aula</h3>

<form action="" method="POST">
    <div class="form-group">
        <label for="instrutor">Membro</label>
        <select class="form-control" id="membro" name="membro" required>
            <option value="">Selecione um membro</option>
            <?php
            $membros = listarMembros();
            while ($l = $membros->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <option value="<?= $l['ID'] ?>"><?= $l['Nome'] ?></option>
            <?php
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="instrutor">Aula</label>
        <select class="form-control" id="aula" name="aula" required>
            <option value="">Selecione uma aula</option>
            <?php
            $aulas = listarAulas();
            while ($l = $aulas->fetch(PDO::FETCH_ASSOC)) {
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
    $membro = $_POST['membro'];
    $aula = $_POST['aula'];

    if ($membro == "" || $aula == "") {
        echo "<div class='alert alert-danger mt-3'>Preencha todos os campos!</div>";
        return;
    }

    if (adicionarParticipacao($membro, $aula)) {
        echo "<div class='alert alert-success mt-3'>Participação adicionada com sucesso!</div>";

        echo "<script>setTimeout(() => { window.location.href = 'index.php'; }, 1000);</script>";
    } else {
        echo "<div class='alert alert-danger mt-3'>Erro ao adicionar participação!</div>";
    }
}

require_once("../footer.php");
?>