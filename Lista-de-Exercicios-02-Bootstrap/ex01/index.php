<?php
require_once "../header.php";
?>

<form action="script.php" method="post">
    <div class="row">
        <div class="col">
            <label for="val" class="form-label">Digite um valor:</label>
            <input type="text" class="form-control" name="val" id="val">
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
