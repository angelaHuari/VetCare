<?php
// views/appointment/create.php
// include __DIR__ . '/../layout/header.php';
?>

<div class="container">
    <h2>Crear Cita para Mascota</h2>
    <form action="process_appointment.php" method="POST">
        <div class="form-group">
            <label for="pet_name">Nombre de la Mascota:</label>
            <input type="text" id="pet_name" name="pet_name" required>
        </div>

        <div class="form-group">
            <label for="appointment_date">Fecha de la Cita:</label>
            <input type="datetime-local" id="appointment_date" name="appointment_date" required>
        </div>

        <button type="submit">Agendar Cita</button>
    </form>
</div>

<?php
// include __DIR__ . '/../layout/footer.php';
?>
