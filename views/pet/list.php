<?php if (isset($pets) && count($pets)): ?>
    <h2>Lista de Mascotas</h2>
    <table cellpadding="5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Especie</th>
                <th>Raza</th>
                <th>ID Dueño</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pets as $pet): ?>
                <tr>
                    <td><?= htmlspecialchars($pet['id']) ?></td>
                    <td><?= htmlspecialchars($pet['name']) ?></td>
                    <td><?= htmlspecialchars($pet['species']) ?></td>
                    <td><?= htmlspecialchars($pet['breed']) ?></td>
                    <td><?= htmlspecialchars($pet['owner_id']) ?></td>
                    <td>
                        <a href="?view=pet_show&id=<?= urlencode($pet['id']) ?>">Ver</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No hay mascotas registradas.</p>
<?php endif; ?>
