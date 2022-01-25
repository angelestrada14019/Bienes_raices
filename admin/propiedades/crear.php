<?php
//base de datos
require '../../includes/config/database.php';
$dB = conectarDB();
//consultar la base de datos
$consulta = "SELECT * FROM vendedores";
$resultadoConsulta=mysqli_query($dB,$consulta);
//Arreglo con mnesajes de error
$errores = [];
//ejecutar el codigo despues de envuar el formulario
$titulo = '';
$precio = '';
$descripcion = '';
//$imagen='';
$habitaciones = '';
$wc = '';
$estacionamiento = '';
$vendedor = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $titulo = mysqli_real_escape_string($dB, $_POST['titulo']);
    $precio = mysqli_real_escape_string($dB,$_POST['precio']);
    $descripcion = mysqli_real_escape_string($dB,$_POST['descripcion']);    
    $habitaciones = mysqli_real_escape_string($dB,$_POST['habitaciones']);
    $wc = mysqli_real_escape_string($dB,$_POST['wc']);
    $estacionamiento = mysqli_real_escape_string($dB,$_POST['estacionamiento']);
    $vendedor = mysqli_real_escape_string($dB,$_POST['vendedor']);
    $creado= date('Y-m-d');

    //asignar files a una variable
    $imagen=$_FILES['imagen'];
    

    if (!$titulo) {
        $errores[] = "El titulo es obligatorio, debe ingresar un titulo";
    }
    if (strlen($descripcion) < 50) {
        $errores[] = "La descripcion es obligatoria, debe ingresar al menos 50 caracteres";
    }
    if (!$precio) {
        $errores[] = "El precio es obligatorio, debe ingresar un precio";
    }
    if ($precio>99999999) {
        $errores[] = "El precio es muy grande debe ingresar un precio menor a 99999999";
    }
    if (!$habitaciones) {
        $errores[] = "El numero de habitaciones es obligatorio, debe ingresar un numero";
    }
    if (!$wc) {
        $errores[] = "El numero de baños es obligatorio, debe ingresar un numero";
    }
    if (!$estacionamiento) {
        $errores[] = "El numero de estacionamientos es obligatorio, debe ingresar un numero";
    }
    if (!$vendedor) {
        $errores[] = "El vendedor es obligatorio, debe excoger uno";
    }
    if (!$imagen['name'] || $imagen['error']){
        $errores[] = "La imagen es obligatoria, debe agregar una imagen";
    }
    $kilobytes = 2024;
    $medida=$kilobytes*1024;
    if ($imagen['size'] > $medida) {
        $errores[] = "La imagen es muy grande, debe ser menor a 1MB";
    }

    if (empty($errores)) {

        //subida de archivo
        //crear una carpeta
        $carpetaImagenes = '../../imagenesSubidadas/';
        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }
        //subir imagen
        $nombreImagen = $imagen['name'];
        //generar nombre unico
        $nombreImagen = md5(uniqid(rand(),true)).'_'.$nombreImagen;
        $rutaTemporal = $imagen['tmp_name'];
        $rutaDestino = $carpetaImagenes . $nombreImagen;
        move_uploaded_file($rutaTemporal, $rutaDestino);
        
        //insertar en la base de datos
        $query = "INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento,creado, vendedores_id)
    VALUES ('$titulo', '$precio','$nombreImagen', '$descripcion', '$habitaciones', '$wc', '$estacionamiento','$creado', '$vendedor')";
        $resultado = mysqli_query($dB, $query);
        if ($resultado) {
            //redireccionar a la pagina de inicio
            header('Location: /admin');//solo sirve cuando no hay nada de html antes de esta linea
        } 
    }
}

require '../../includes/funciones.php';
incluirTemplates('header');

?>
<main class="contenedor seccion">
    <h1>Crear</h1>
    <a href="/admin" class="boton boton-verde">Volver</a>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <p><?php echo $error; ?></p>
        </div>

    <?php endforeach; ?>

    <form action="/admin/propiedades/crear.php" method="POST" enctype="multipart/form-data" class="formulario">
        <fieldset>
            <legend>Informacion GEneral</legend>
            <div>
                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo propiedad" value="<?php echo $titulo; ?>">
            </div>
            <div>
                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio propiedad" value="<?php echo $precio; ?>">
            </div>
            <div>
                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">
            </div>
            <div>
                <label for="descripcion">Titulo:</label>
                <textarea name="descripcion" id="descripcion"><?php echo $titulo; ?></textarea>
            </div>
        </fieldset>
        <fieldset>
            <legend>Información de la propiedad</legend>
            <div>
                <label for="habitaciones">Habitaciones:</label>
                <input type="number" name="habitaciones" id="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones; ?>">
            </div>
            <div>
                <label for="wc">Baños:</label>
                <input type="number" name="wc" id="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc; ?>">
            </div>
            <div>
                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" name="estacionamiento" id="estacionamiento" placeholder="Ej: 3" min="1" max="9" value="<?php echo $estacionamiento; ?>">
            </div>
        </fieldset>
        <fieldset>
            <legend>Vendedor</legend>
            <select name="vendedor">
                <option value="">--seleccione</option>
                <?php while($row=mysqli_fetch_assoc($resultadoConsulta)): ?>
                    <option <?php echo $vendedor===$row['id']?'selected':''; ?> value="<?php echo $row['id']; ?>"><?php echo $row['nombre'] ." ".$row['apellido']; ?></option>
                <?php endwhile; ?>
            </select>
        </fieldset>
        <input class="boton boton-verde" type="submit" value="Crear Propiedad" />
    </form>

</main>

<?php
incluirTemplates('footer');
?>