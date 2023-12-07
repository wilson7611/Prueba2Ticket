@extends('layouts.app')

@section('contenido')

<div class="container">
    <h1>Listado de Tickets</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha y Hora</th>
                <th>Código</th>
                <th>Estado</th>
                <th>Observación</th>
                <th>Afiliado</th>
                <th>Médico</th>
                <th>Especialidades</th>
                <th>Hospitales</th>
                <th>Atenciones</th>
                <th>Horas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->id }}</td>
                    <td>{{ $ticket->fecha_hora }}</td>
                    <td>{{ $ticket->codigo }}</td>
                    <td>{{ $ticket->estado }}</td>
                    <td>{{ $ticket->observacion }}</td>
                    <td>{{ $ticket->afiliado->nombre_completo }}</td>
                    <td>{{ $ticket->medico->nombre_completo }}</td>
                    <td>
                        @foreach ($ticket->medico->especialidades as $especialidad)
                            {{ $especialidad->nombre }}<br>
                        @endforeach
                    </td>
                    <td>
                        @foreach ($ticket->medico->especialidades as $especialidad)
                            {{ $especialidad->hospital->nombre }}<br>
                        @endforeach
                    </td>
                    <td>
                        @foreach ($ticket->medico->atenciones as $atencion)
                            {{ $atencion->fecha }}<br>
                        @endforeach
                    </td>
                    <td>
                        @foreach ($ticket->medico->atenciones as $atencion)
                            @foreach ($atencion->horas as $hora)
                                {{ $hora->hora }}<br>
                            @endforeach
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection