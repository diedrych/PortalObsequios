<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <meta charset="UTF-8">
        <title></title>

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
        <link rel="stylesheet" href="estilosC.css">

    </head>
    <body class="transparencia fondo2 ">


        <div class="container">
            <header>
                <div class="container">
                    <div class="row fondotitulo">
                        <a href="../server/destroy.php">Cerrar Sesión</a>
                        <div class="col-md-6 col-md-offset-4">
                            <h1>Aplicacion de Obsequios</h1>
                        </div>
                    </div>
                </div>        
            </header>
            <br>
            <div class="container">
                <form action="" method="POST" name="formulario1"> 
                    <div class="row">
                        <div class="col-md-5 col-md-offset-1">
                            <div class="form-group tipof">
                                <br>
                                <LABEL for="producto">id del producto: </LABEL>
                                <input type="number" class="form-control" id="producto" name="id_producto" placeholder="id del producto" required/>
                                <br> 
                                <button type="submit" class="btn btn-primary btn-group-center tipof">Consultar</button>
                                <br>
                                <br>
                            </div>            
                        </div>    
                    </div>  
                </form>
            </div>
            <div class="container">
                <div class="table ">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-1">
                            <table class="table table-bordered" id="myTable" >
                                <thead>
                                    <tr class="tipof">
                                        <th>id producto</th>
                                        <th>nombre producto</th>
                                        <th>descripcion</th>
                                        <th>costo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr >
                                        <td id="id_producto" class="info"></td>
                                        <td id="id_nombre" class="info"></td>
                                        <td id="descripcion" class="info"></td>
                                        <td id="costo" class="info"></td>
                                    </tr>
                                </tbody>
                        </div>
                    </div> 
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-offset-2">              
                    <a href="Registro_productos.php" class="btn btn-primary btn-group-center tipof">Crear Producto</a>
                    <button class="btn btn-primary btn-group-center tipof"  id="eliminar">Eliminar</button></td>
                    <a href="actualizar.php" class="btn btn-primary btn-group-center tipof" id="actual">Actualizar</a>

                </div> 
            </div>
        </div>

        <div class="container">
            <footer class="footer">
                <div class="row fondotitulo">
                    <div class="col-md-6 col-md-offset-4">
                        <p class="text-muted">&copy; Copyright Solange Jimenez Angel 2017</p>
                    </div>
                </div>
            </footer>
        </div>

        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="javascript/consulta.js"></script>
        <script src="javascript/eliminar.js"></script>
    </body>
</html>

