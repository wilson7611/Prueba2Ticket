<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registro de Fichaje</title>
</head>

<body>
    <div class="container">
        <div class="row" style="height: 200px;">
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">


                <!-- resources/views/buscar_cliente.blade.php -->
                <form action="{{ route('buscarAfiliado') }}" method="post">
                    @csrf
                    <label for="ci" class="form-label">Ingrese CI del Afiliado:</label>
                    <input type="text" class="form-control" name="ci" required>
                    <br>
                    <button type="submit" class="btn btn-success">Buscar Afiliado</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
