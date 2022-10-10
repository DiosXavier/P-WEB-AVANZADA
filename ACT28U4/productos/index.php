<?php 
    include '..\app\ProdController.php';
      $p = new ProdController();
      $data = $p->getTodo();
      $objetos = json_decode($data)->data;
    include '..\app\brandController.php';
    $brands =  brandController::getMarcas();
    include_once "..\app\config.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <?php include "../layouts/head.template.php"; ?>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    </head>
    <body>
        <!--NAVBAR-->
        <?php include "../layouts/nav.template.php"; ?>
        <!--CONTENEDOR-->
        <div id="Cuerpo" class="container">

            <div class="container-fluid">

                <div class="row m-2">

                    <div div class="col">
                        
                        <h4>Productos:</h4>
                    </div> 
                    <div class="col">
                    <button onclick="addProduct()" class="btn btn-info float-end mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" name="button">Añadir producto</button>
                </div>
                </div>


                    <div class="col-lg-14 col-sm-12">
                    <div class="row">
                    <?php foreach ($objetos as $producto):?> 
                    <div class="col md-6" >
                    <div class="card mb-1" style="width: 18rem;">
                    <img src="<?php echo $producto->cover; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $producto->name; ?></h5>
                    <p class="card-text"><?php echo $producto->description; ?></p>
                    <a href="#" data-product='<?php echo json_encode($producto) ?>' onclick="edit(this)" class="btn btn-warning col-md-6" data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</a>
                    <a href="#" class="btn btn-danger col-md-6" onclick="remove(<?php echo $producto->id ?>)">Eliminar</a>
                    <a href=<?php echo "detalles.php?slug=".$producto->slug.""?> class='btn btn-primary col-6' >Ver detalles</a>
                    </div>
                    </div>
                    </div>
                    <?php endforeach;?>
                    </div>
                    </div>


            </div>
        </div>

        <!--SCRIPTS-->
        <?php include "../layouts/script.template.php"; ?>

        <script type="text/javascript">
            
        function addProduct() {
            document.getElementById('productInput').value = 'create';
            document.getElementById("name").value = "";
            document.getElementById("slug").value = "";
            document.getElementById("description").value = "";
            document.getElementById("features").value = "";
            document.getElementById("brand_id").value = 1;
        }
        async function remove(id){
        swal.fire({
          title: "¿Estás seguro?",
          text: "Una vez eliminado, ya no podrás recuperar este producto!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            swal.fire("El producto ha sido eliminado satisfactoriamente", {
              icon: "success",
            });
            var bodyFormData = new FormData();
               bodyFormData.append('id', id);
               bodyFormData.append('action', 'remove');
               bodyFormData.append('global_token', '<?php echo $_SESSION['global_token'] ?>');
               axios.post("<?=BASE_PATH?>prod", bodyFormData)
               .then(function (response){
                   console.log(response);
                   location.reload();
               })
               .catch(function (error){
                   console.log('error')
               })
          } else {
            swal("Tu producto esta a salvo!");
          }
        });
      }
            
            function edit(target) {
                document.getElementById('productInput').value = 'update';
                let product = JSON.parse(target.getAttribute('data-product'));
                document.getElementById("name").value = product.name;
                document.getElementById("slug").value = product.slug;
                document.getElementById("description").value = product.description;
                document.getElementById("features").value = product.features;
                document.getElementById("brand_id").value = product.brand_id;
                document.getElementById("id").value = product.id;
            }
            function agregar(target){
                Swal.fire({
                title: 'Agregar...',
                text: 'Usted selecciono agregar.'
                })
            }
        </script>

        

        <!--SCRIPT DE MODAL-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script> 
        
        <!---AÑADIR--->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar Producto.</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form  method="POST" action="<?=BASE_PATH?>prod" enctype="multipart/form-data" >         
            <div class="modal-body">
            <div class="input-group">
                <span class="input-group-text">Nombre del producto</span>
                <textarea id="name" name='name' class="form-control" aria-label="With textarea"></textarea>
            </div>
            <div class="input-group">
                <span class="input-group-text">Slug del producto</span>
                <textarea class="form-control" id="slug" name="slug" aria-label="With textarea"></textarea>
            </div><div class="input-group">
                <span class="input-group-text">Caracteristicas del producto</span>
                <textarea class="form-control" id="features" name="features" aria-label="With textarea"></textarea>
            </div>

            <div class="input-group">
                <span class="input-group-text">Descripcion del producto</span>
                <textarea name='description' id="description" class="form-control" aria-label="With textarea"></textarea>
            </div>

            <div class="input-group">
         <span class="input-group-text">Marca</span>
         <select class="form-select" aria-label="Default select example" name = "brand_id" id="brand_id">
        <?php foreach($brands as $brand): ?>
        <option value=<?php echo $brand->id?>><?php echo $brand->name?></option>
        <?php endforeach;?>
        </select>
        </div>
            <br>
            <div class="input-group">
         <h8>Subir imagen desde su dispositivo:</h8>
         <input name="uploadedfile" type="file" />
            </div>
            <input type="hidden" name="action" id="productInput">
            <input type="hidden" id="id" name="id">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
        </div>
        </div>
        </div>

    </body>
</html>


<!--Link de POSTMAN para las acrtividades-->

<!--https://www.postman.com/universal-flare-897758/workspace/api-store-crud/collection/821718-5a5941b7-dd31-42b8-95f7-57d7d1f0c312?action=share&creator=821718-->