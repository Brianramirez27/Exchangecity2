<?php 
include_once "/app/funciones/conexionDB.php";
include_once "/app/Includes/header.php";
include_once "/app/Includes/menulateral.php";
include_once "/app/funciones/masFunciones.php";
$publicacion=$_REQUEST["pub_codigo"];
?>
 

 <!--contenido de la pagina o aside-->
  <section id="container">
    
    <div class="titulo">
    <h1>Eliminar Publicacion</h1>
    </div>
    <section>
        <?php $desPublicacion= ConsultarDescripcionPublicacion($db,$publicacion);
                $datosPublicacion=mysqli_fetch_assoc($desPublicacion);
        ?>
        <div class="avisoEliminacion">
            <p>Esta Por eliminar la publicacion con el titulo</p>
            <h4><?php echo $datosPublicacion["pub_titulo"] ?></h4>
            <p>Esta Por eliminar la publicacion con la descripcion</p>
                <h4><?php echo $datosPublicacion["pub_descripcion"] ?></h4>
            <p>Esta Por eliminar la publicaion con el codigo </p>
                <h4><?php echo  $datosPublicacion["pub_codigo"] ?></h4>

        <div class="confirmar_cancelar">
            <a href="/backend/eliminarPublicacion.php?pub_codigo=<?php echo $publicacion;?>" class="Eliminar">Confirmar</a>
            <a  href="/Includes/misPublicaciones.php" class="Eliminar">Cancelar</a>
        </div>
       </div>
  <?php include_once "/app/Includes/acount.php" ?>
    </section>
  </section>
  <!--limpiamos los flotados del aside -->
  <div style="clear: both"></div>

 
  <?php 
  include_once "/app/Includes/footer.php";
  
  ?>
