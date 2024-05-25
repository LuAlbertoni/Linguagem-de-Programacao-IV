<?php
require_once("../header.php");
?>

<h3 class="text-center mb-4">Alterar Membro</h3>

<form action="" method="POST">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="form-group">
        <label for="idade">Idade</label>
        <input type="number" class="form-control" id="idade" name="idade" required>
    </div>
    <div class="form-group">
        <label for="tipoPlano">Tipo de Plano</label>
        <select class="form-control" id="tipoPlano" name="tipoPlano" required>
            <option value="Mensal">Mensal</option>
            <option value="Trimestral">Trimestral</option>
            <option value="Semestral">Semestral</option>
            <option value="Anual">Anual</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Alterar</button>
</form>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    require_once '../funcao.php';
    $membro = buscarMembroPorId($id);

    if (is_array($membro)) {
        echo "<script>document.getElementById('nome').value = '$membro[Nome]';</script>";
        echo "<script>document.getElementById('idade').value = '$membro[Idade]';</script>";
        echo "<script>document.getElementById('tipoPlano').value = '$membro[TipoPlano]';</script>";
    } else {
        echo "Membro não encontrado.";
    }
} else {
    echo "ID do membro não fornecido.";
}

if ($_POST) {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $tipoPlano = $_POST['tipoPlano'];

    if (empty($nome) || empty($idade) || empty($tipoPlano)) {
        echo "<div class='alert alert-danger mt-3'>Preencha todos os campos!</div>";
    } else {
        if (atualizarMembro($id, $nome, $idade, $tipoPlano)) {
            echo "<div class='alert alert-success mt-3'>Membro alterado com sucesso!</div>";
            echo "<script>setTimeout(() => { window.location.href = 'index.php'; }, 1000);</script>";
        } else {
            echo "<div class='alert alert-danger mt-3'>Erro ao alterar membro!</div>";
        }
    }
}

require_once("../footer.php");
?>