<?php foreach ($amigos as $amigo) { ?>
    <tr>
        <td><?= $amigo['id'] ?></td>
        <td><?= $amigo['paterno'] ?></td>
        <td><?= $amigo['materno'] ?></td>
        <td><?= $amigo['nombre'] ?></td>
        <td><a href="/controllers/eliminar.php?id=<?= $amigo['id'] ?>">Eliminar</a></td>
        <!-- Cambiar por default si causa errores -->
        <!--  default=href="/views/amigo/amigo_edit?id=<?= $amigo['id'] ?>" -->
        <td><a href="/amigo/edit?id=<?= $amigo['id'] ?>">Editar</a></td>
    </tr>
<?php } ?>