<div class="modal fade" id="updatePositon" tabindex="-1" aria-labelledby="updatePositonLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-start">
                <h5 class="modal-title" id="updatePositonLabel">Actualizar Cargo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formUpdatePositon" action="{{ route('positions.create') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">    
                            <div>
                                <label for="id_employee" class="form-label">Nombre</label>
                                <select class="form-select" name="id_employee" id="id_employee">
                                </select>
                            </div>
                            <div>
                                <label for="document" class="form-label">Identificación</label>
                                <input type="text" required class="form-control" id="document" name="document" disabled>
                            </div>
                            <div>
                                <label for="id_rol" class="form-label">Rol</label>
                                <select class="form-select" name="id_rol" id="id_rol">
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="id_position" class="form-label">Cargo</label>
                                <select class="form-select" name="id_position" id="id_position">
                                </select>
                            </div>
                            <div>
                                <label for="id_boss" class="form-label">Jefe</label>
                                <select class="form-select" name="id_boss" id="id_boss">
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" form="formUpdatePositon" class="btn btn-primary">Guardar</button>
            </div>            
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#updatePositon').on('show.bs.modal', function (event) {
            let button = $(event.relatedTarget);
                
            let positionData = button.data('position');
            let roles = button.data('roles');
            let areas = button.data('areas');
            let employees = button.data('employees');

            let modal = $(this)
            modal.find('.modal-body #document').val(positionData.document);

            selectEmployee = modal.find('.modal-body #id_employee');
            selectEmployee.empty();
            $.each(employees, function(index, option) {
                if (positionData.id === option.id) {
                    selectEmployee.append('<option value="' + option.id + '" selected>' + option.name +' '+ option.lastname +'</option>');   
                }
            });

            selectRol = modal.find('.modal-body #id_rol');
            selectRol.empty();
            selectRol.append('<option value="">Seleccione una opción</option>');
            $.each(roles, function(index, option) {
                selectRol.append('<option value="' + option.id + '">' + option.name + '</option>');
            });

            selectPosition = modal.find('.modal-body #id_position');
            selectPosition.empty();
            selectPosition.append('<option value="">Seleccione una opción</option>');
            $.each(areas, function(index, option) {
                selectPosition.append('<option value="' + option.id + '">' + option.name + '</option>');
            });

            selectBoss = modal.find('.modal-body #id_boss');
            selectBoss.empty();
            selectBoss.append('<option value="">Seleccione una opción</option>');
            $.each(employees, function(index, option) {
                selectBoss.append('<option value="' + option.id + '">' + option.name +' '+ option.lastname + '</option>');
            });
        });
    });
</script>