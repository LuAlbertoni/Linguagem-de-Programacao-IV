<?php
require_once "../header.php";
?>

<form action="script.php" method="post">
    <div class="row">
        <div class="col">
            <label for="val1" class="form-label">Digite o 1º valor:</label>
            <input type="number" name="val1" id="val1" class="form-control">
            <label for="val2" class="form-label">Digite o 2º valor:</label>
            <input type="number" name="val2" id="val2" class="form-control">
            <label for="val3" class="form-label">Digite o 3º valor:</label>
            <input type="number" name="val3" id="val3" class="form-control">
            <label for="val4" class="form-label">Digite o 4º valor:</label>
            <input type="number" name="val4" id="val4" class="form-control">
            <label for="val5" class="form-label">Digite o 5º valor:</label>
            <input type="number" name="val5" id="val5" class="form-control">
            <label for="val6" class="form-label">Digite o 6º valor:</label>
            <input type="number" name="val6" id="val6" class="form-control">
            <label for="val7" class="form-label">Digite o 7º valor:</label>
            <input type="number" name="val7" id="val7" class="form-control">
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
