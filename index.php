<?php
    include_once ('helpers/conexion.php');

    // Mostrar Notas
    $sql_leer = 'SELECT * FROM notas';
    $gsent = $pdo->prepare($sql_leer);
    $gsent->execute();
    $resultado = $gsent->fetchAll();


    // Agregar Notas
    if($_POST){
        $title = $_POST['title'];
        $descripcion = $_POST['descripcion'];
        $sql_agregar = 'INSERT INTO notas (title, descripcion) VALUES (?, ?)';
        $sentencia_agregar = $pdo->prepare($sql_agregar);
        $sentencia_agregar->execute(array($title, $descripcion));

        header('location:index.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
    <!-- CSS CUSTOM -->
    <link rel="stylesheet" href="css/styles.css">
    <title>Notas</title>
</head>
<body>
    <div class="contenedor" id="contenedor">

            <div class="vista_principal">
            <h1>Notas</h1>
            <button id="button_createNote">Crear Nota</button>
            </div>
            <?php foreach($resultado as $dato):?>
            <div class="vista_notes">
                <form action="helpers/editar.php" method="GET">
                    <input type="text" hidden name="id" value="<?php echo $dato['id'] ?>">
                    <label for="">Titulo</label>
                    <input type="text" name="title" value="<?php echo $dato['title'] ?>">
                    <label for="">Descripcion</label>
                    <textarea name="descripcion" rows="10"><?php echo $dato['descripcion'] ?></textarea>
                    <button id="button_createNoteDB">Editar</button>
                    <a href="helpers/eliminar.php?id=<?php echo $dato['id'] ?>">Eliminar</a>
                </form>
            </div>
            <?php endforeach ?>

            <div id="div_createNote" class="" hidden>
                <form>
                </form>
            </div>

    </div>
    <script src="js/app.js"></script>
</body>
</html>