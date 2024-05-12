<?php
require_once "../header.php";
?>

<form action="script.php" method="post">
    <div class="row">
        <div class="col">
            <label for="metros" class="form-label">Metros quadrados a serem pintados:</label>
            <input type="text" name="metros" id="metros" class="form-control" required>
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
