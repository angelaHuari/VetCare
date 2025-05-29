<?php
// views/pet/register.php
?>

<div class="container">
    <h2>Registrar Mascota</h2>

    <?php if (isset($_GET['success'])): ?>
        <p style="color:green;">Mascota registrada correctamente.</p>
    <?php endif; ?>

    <form action="index.php?view=pet" method="POST">
        <input type="hidden" name="action" value="store">
        
        <div class="form-group">
            <label for="pet_name">Nombre de la Mascota:</label>
            <input type="text" id="pet_name" name="name" required>
        </div>

        <div class="form-group">
            <label for="species">Especie:</label>
            <input type="text" id="species" name="species" required>
        </div>

        <div class="form-group">
            <label for="breed">Raza:</label>
            <input type="text" id="breed" name="breed" required>
        </div>

        <div class="form-group">
            <label for="owner_id">ID del Dueño:</label>
            <input type="number" id="owner_id" name="owner_id" required>
        </div>

        <button type="submit">Registrar Mascota</button>
    </form>
</div>

<?php
?>
