<?php
// views/owner/register.php
// include __DIR__ . '/../layout/header.php';
?>

<div class="container">
    <h2>Registrar Dueño</h2>
    <form action="services/.php" method="POST">
        <div class="form-group">
            <label for="owner_name">Nombre del Dueño:</label>
            <input type="text" id="owner_name" name="owner_name" required>
        </div>

        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <button type="submit">Registrar Dueño</button>
    </form>
</div>

<?php
// include __DIR__ . '/../layout/footer.php';
?>
