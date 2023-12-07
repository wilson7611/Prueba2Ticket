@extends('layouts.app')

@section('contenido')

<a href="" class="btn btn-primary">Nuevo</a>
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Lista de Especialidades</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>Hospital</th>
          <th>Medico</th>
          <th>Especialidad</th>
          <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
          @forelse ($especialidades as $especialidad)
        <tr>
          <td>{{$especialidad->id}}</td>
          <td>{{$especialidad->hospitales->nombre}}</td> 
          <td>{{$especialidad->medicos->nombre_completo}}</td>
          <td>{{$especialidad->nombre}}</td>
          <td><a href="#"><i class="fas fa-eye btn btn-info"></i></a>
          <a href="#"><i class="fas fa-pencil btn btn-warning"></i></a>
          <a href="#"><i class="fas fa-trash btn btn-danger"></i></a>
          </td>
          @empty
          <p>No hay datos</p>
          @endforelse
        </tr>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->


@endsection