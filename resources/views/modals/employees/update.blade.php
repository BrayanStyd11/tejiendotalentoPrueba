<div class="modal fade" id="updateEmployee" tabindex="-1" aria-labelledby="updateEmployeeLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-start">
                <h5 class="modal-title" id="updateEmployeeLabel">Actualizar empleado</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formUpdateEmployee" action="{{ route('employees.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col">    
                            <input id="id" name="id" hidden>
                            <div>
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div>
                                <label for="document" class="form-label">Identificación</label>
                                <input type="text" class="form-control" id="document" name="document">
                            </div>
                            <div>
                                <label for="city" class="form-label">Ciudad</label>
                                <input type="text" class="form-control" id="city" name="city">
                            </div>
                            <div>
                                <label for="address" class="form-label">Dirección</label>
                                <input type="text" class="form-control" id="address" name="address">
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="lastname" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" id="lastname" name="lastname">
                            </div>
                            <div>
                                <label for="phone" class="form-label">Telefono</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                            <div>
                                <label for="department" class="form-label">Departamento</label>
                                <input type="text" class="form-control" id="department" name="department">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" form="formUpdateEmployee" class="btn btn-primary">Guardar</button>
            </div>            
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#updateEmployee').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
                
            var data = button.data('employee');
            
            var modal = $(this)
            modal.find('.modal-body #id').val(data.id);
            modal.find('.modal-body #name').val(data.name);
            modal.find('.modal-body #document').val(data.document);
            modal.find('.modal-body #city').val(data.city);
            modal.find('.modal-body #address').val(data.address);
            modal.find('.modal-body #lastname').val(data.lastname);
            modal.find('.modal-body #phone').val(data.phone);
            modal.find('.modal-body #department').val(data.department);
        });
    });
</script>