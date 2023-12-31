<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <br>
        <h3>Bienvenido, {{ $afiliado->nombre_completo }}</h3>
        <hr>
        <div class="row">
            @foreach($especialidades as $especialidad)
            <div class="col-md-3 mt-4 ">
                <div class="card" style="width: 18rem;">
                    {{-- <img class="card-img-top" src="..." alt="Card image cap">
                   --}}
                    <div class="card-body">
                        <div>
                            <h3>{{ $especialidad->nombre }}</h3>
                            <p>Médico: {{ $especialidad->medico->nombre_completo }}</p>
                            <p>Hospital: {{ $especialidad->hospital->nombre }}</p>
                            <p>Tickets disponibles: 8</p>
                            <!-- Otros detalles de la especialidad -->
                    
                            <!-- Enlace para registrar -->
                            <a class="btn btn-success" href="{{ route('afiliados.registrar', ['afiliado' => $afiliado->id, 'especialidad' => $especialidad->id, 'medico' => $medico->id, 'hospital' => $hospital->id]) }}">
                                Registrar
                            </a>
                        </div>
                        <hr>
                    </div>
            </div>
            
        </div>
        @endforeach
   
      
      </div>
    </div>

</body>
</html> 


