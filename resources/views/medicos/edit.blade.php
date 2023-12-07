{{-- edit employee modal start --}}
<div class="modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" id="edit_employee_form" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="emp_id" id="emp_id">
        <input type="hidden" name="emp_avatar" id="emp_avatar">
        <div class="modal-body p-4 bg-light">
          <div class="row">
            <div class="col-lg">
              <label for="fname">Nombre</label>
              <input type="text" name="nombre_completo" id="nombre_completo" class="form-control" placeholder="First Name" required>
            </div>
            <div class="col-lg">
              <label for="lname">CI</label>
              <input type="text" name="ci" id="ci" class="form-control" placeholder="Last Name" required>
            </div>
          </div>
          <div class="my-2">
            <label for="email">Matricula</label>
            <input type="text" name="matricula" id="matricula" class="form-control" placeholder="E-mail" required>
          </div>
         
          
          {{-- <div class="my-2">
            <label for="avatar">Seleccionar Imagen</label>
            <input type="file" name="avatar" class="form-control">
          </div>
          <div class="mt-2" id="avatar">

          </div> --}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" id="edit_employee_btn" class="btn btn-success">Actualizar</button>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- edit employee modal end --}}