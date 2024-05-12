<?php
require_once "../header.php";
?>

<form action="script.php" method="post">
    <div class="row">
        <div class="col">
            <label for="ano" class="form-label">Ano de nascimento:</label>
            <input type="number" name="ano" id="ano" class="form-control" required>
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
