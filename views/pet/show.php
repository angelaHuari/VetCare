<?php if (isset($pet) && $pet): ?>
    <h2>Detalles de la Mascota</h2>
    <ul>
        <li><strong>ID:</strong> <?= htmlspecialchars($pet['id']) ?></li>
        <li><strong>Nombre:</strong> <?= htmlspecialchars($pet['name']) ?></li>
        <li><strong>Especie:</strong> <?= htmlspecialchars($pet['species']) ?></li>
        <li><strong>Raza:</strong> <?= htmlspecialchars($pet['breed']) ?></li>
        <li><strong>ID Dueño:</strong> <?= htmlspecialchars($pet['owner_id']) ?></li>
    </ul>
    <a href="?view=pet">Volver a la lista</a>
<?php else: ?>
    <p>Mascota no encontrada.</p>
    <a href="?view=pet">Volver a la lista</a>
<?php endif; ?>