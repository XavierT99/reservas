<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clientes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <h1>Listado de Clientes</h1>
    <ul>
        <?php foreach ($clientes as $cliente): ?>
            <li><?= $cliente['Nombre'] ?> - <?= $cliente['Email'] ?> - <?= $cliente['Telefono'] ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Agregar Cliente</h2>
    <form method="post">

    <div class="form-group">
    <label >Cedula:</label>
    <input type="text" class="form-control"name="ID_cliente" id="ID_cliente" required>
  </div>
    <div class="form-group">
    <label >Nombre:</label>
    <input type="text" class="form-control"name="Nombre" id="Nombre" required>
  </div>

        Email: <input type="email" name="Email" required><br>
        Teléfono: <input type="tel" name="Telefono" required><br>
        Dirección: <input type="text" name="Direccion" required><br>

        <input type="submit" value="Agregar Cliente">
    </form>
</body>
</html>

<!-- https://www.w3schools.com/bootstrap/bootstrap_forms.asp -->