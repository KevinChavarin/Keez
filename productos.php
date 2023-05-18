<?php include("template/cabecera.php"); ?>

<?php
include('./administrador/config/bd.php');

$sentenciaSQL = $conexion->prepare("SELECT * FROM juegos");
$sentenciaSQL->execute();
$listaJuegos = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach ($listaJuegos as $juego) { ?>
    <div class="col-md-3">
        <div class="card">
            <img class="card-img-top" src="./img/<?php echo $juego['imagen']; ?>" alt="">
            <div class="card-body">
                <h4 class="card-title"><?php echo $juego['nombre'],' <br>$', $juego['precio']; ?></h4>
                <a name="" id="" class="btn btn-primary" href="#" role="button">Agregar al carrito</a>
            </div>
        </div>
    </div>
<?php } ?>

<?php include("template/pie.php"); ?>