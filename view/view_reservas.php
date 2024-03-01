<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reservas</title>
</head>
<body>
    <h1>Listado de Reservas</h1>
    <ul>
        <?php foreach ($reservas as $reserva): ?>
            <li><?= $reserva['ID_reserva'] ?> - <?= $reserva['Fecha'] ?> - <?= $reserva['Estado'] ?> - <?= $reserva['Precio'] ?> - <?= $reserva['Habitacion'] ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Agregar Reserva</h2>
    <form method="post">
        Fecha: <input type="date" name="Fecha" required><br>
        Estado: <input type="text" name="Estado" required><br>
        Precio: <input type="number" name="Precio" step="0.01" required><br>
        Habitación: <input type="number" name="Habitacion" required><br>
        <input type="submit" value="Agregar Reserva">
    </form>
</body>
</html>