<?php
require_once "../header.php";
?>

<form action="script.php" method="post">
    <div class="row">
        <div class="col">
            <label for="val1" class="form-label">Digite um número: </label>
            <input type="number" name="val1" id="val1" class="form-control" required>
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
