<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reservas Clientes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <h1>Listado de Reservas y Clientes</h1>
    <ul>
        <?php foreach ($reservas_clientes as $rc): ?>
            <li><?= $rc['ID_reservas'] ?> - <?= $rc['ID_clientes'] ?> </li>
        <?php endforeach; ?>
    </ul>

    <h2>Agregar Reservas Clientes</h2>
    <form method="post">

    <div class="form-group">
    <label >ID Reserva:</label>
    <input type="text" class="form-control"name="ID_reservas" id="ID_reservas" required>
  </div>
    <div class="form-group">
    <label >ID Cliente:</label>
    <input type="text" class="form-control"name="ID_cliente" id="ID_cliente" required>
  </div>

       
        <input type="submit" value="Agregar Reservas Cliente">
    </form>
</body>
</html>