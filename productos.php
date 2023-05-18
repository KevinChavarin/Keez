<?php include("template/cabecera.php"); ?>

<?php
include('./administrador/config/bd.php');

$sentenciaSQL = $conexion->prepare("SELECT * FROM juegos");
$sentenciaSQL->execute();
$listaJuegos = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach ($listaJuegos as $juego) { ?>
    <div class="col-md-3 tarjeta">
        <div class="card">
            <img class="card-img-top" src="./img/<?php echo $juego['imagen']; ?>" alt="">
            <div class="card-body">
                <h4 class="card-title"><?php echo $juego['nombre'],' <br>USD $', $juego['precio']; ?></h4>
                <a name="" id="" class="btn btn-dark" href="#" role="button">Agregar al carrito</a>
            </div>
        </div>
    </div>
<?php } ?>

<?php include("template/pie.php"); ?>