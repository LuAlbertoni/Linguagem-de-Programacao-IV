<?php
require_once "../header.php";
?>

<form action="script.php" method="post">
    <div class="row">
        <div class="col">
            <label for="peso" class="form-label">Peso (kg):</label>
            <input type="text" name="peso" id="peso" class="form-control" required>
            <label for="altura" class="form-label">Altura (m):</label>
            <input type="text" name="altura" id="altura" class="form-control" required>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary">
                        Calcular
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

<?php
require_once "../footer.php";
