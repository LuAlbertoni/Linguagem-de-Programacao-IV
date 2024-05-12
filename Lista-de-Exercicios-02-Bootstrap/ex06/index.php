<?php
require_once "../header.php";
?>

<form action="script.php" method="post">
    <div class="row">
        <div class="col">
            <label for="a" class="form-label">Valor A:</label>
            <input type="text" name="a" id="a" class="form-control" required>
            <label for="b" class="form-label">Valor B:</label>
            <input type="text" name="b" id="b" class="form-control" required>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary">
                        Enviar
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

<?php
require_once "../footer.php";
