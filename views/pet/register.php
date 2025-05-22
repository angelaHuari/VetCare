<?php
// views/pet/register.php
include 'layout/header.php';
?>

<div class="container">
    <h2>Registrar Mascota</h2>
    <form action="process_pet.php" method="POST">
        <div class="form-group">
            <label for="pet_name">Nombre de la Mascota:</label>
            <input type="text" id="pet_name" name="pet_name" required>
        </div>

        <div class="form-group">
            <label for="species">Especie:</label>
            <input type="text" id="species" name="species" required>
        </div>

        <button type="submit">Registrar Mascota</button>
    </form>
</div>

<?php
include 'layout/footer.php';
?>
