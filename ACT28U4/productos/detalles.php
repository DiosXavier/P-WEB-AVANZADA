<?php 
  include "../app/ProdController.php";
  $prod = ProdController::getPslug($_GET['slug']);
?>

<!DOCTYPE html>
<html>
    <head>
        <?php include "../layouts/head.template.php"; ?>
    </head>
    <body>
        <!--NAVBAR-->
        <?php include "../layouts/nav.template.php"; ?>
        <!--CONTENEDOR-->
        <div id="Cuerpo" class="container">
            <div class="container-fluid">
            <div class="card mb-10" >

            <div class="row">

                <div class="col-md-4">

                <img src="<?php echo $prod->cover ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $prod->name ?></h5>
                    <p class="card-text"><?php echo $prod->description ?></p>
                    <p class="card-text"><small><?php echo $prod->features?></small></p>
                    <p class="card-text"><?php echo "Marca: ".$prod->brand->name?></p>
                    <p class="card-text">Tags:<?php  foreach($prod->tags as $tag):?> <?php echo $tag->name?>
                    <?php endforeach; ?></p>
                    <p class="card-text">Categorias:<?php  foreach($prod->categories as $tag):?><?php echo $tag->name?>
                    <?php endforeach; ?></p>

                </div>
                </div>

            </div>
            </div>
        </div>
            </div>
        </div>

        <script type="text/javascript">
            function remove(target){
                Swal.fire({
                icon: 'error',
                title: 'Eliminacion...',
                text: 'Se esta eliminando producto.'
                })
            }
            function edit(target){
                Swal.fire({
                title: 'Editar...',
                text: 'Usted selecciono editar.'
                })
            }
        </script>
        <!--SCRIPTS-->
        <?php include "../layouts/script.template.php"; ?>
        
    </body>
</html>