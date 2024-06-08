<?php
require_once('../header.php');
?>

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Lista de Aulas</h2>
        <a href="adicionar_aula.php" class="btn btn-success">Adicionar Aula</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Horário</th>
                <th>Instrutor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $linhas = listarAulas();
            $instrutores = listarInstrutores();

            while ($l = $linhas->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <tr>
                    <td><?= $l['ID'] ?></td>
                    <td><?= $l['Nome'] ?></td>
                    <td><?= date('d/m/Y H:i', strtotime($l['Horario'])) ?></td>
                    <td>
                        <?php
                        $instrutor = $instrutores->fetch(PDO::FETCH_ASSOC);
                        echo $instrutor['Nome'];
                        ?>
                    </td>

                    <td>
                        <a href="alterar_aula.php?id=<?= $l['ID'] ?>" class="btn btn-warning">
                            Alterar
                        </a>
                        <button class="btn btn-danger" onclick="if(confirm('Deseja realmente excluir esta aula?')) window.location.href = 'index.php?id=<?= $l['ID'] ?>'">
                            Excluir
                        </button>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (deletarAula($id)) {
        echo "<div class='alert alert-success mt-3'>Aula excluída com sucesso!</div>";
        echo "<script>setTimeout(() => { window.location.href = 'index.php'; }, 1000);</script>";
    } else {
        echo "<div class='alert alert-danger mt-3'>Erro ao excluir aula!</div>";
    }
}

require_once '../footer.php';
?>