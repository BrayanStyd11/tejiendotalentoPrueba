<div class="modal fade" id="addPosition" tabindex="-1" aria-labelledby="addPositionLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-start">
                <h5 class="modal-title" id="addPositionLabel">Crear Cargo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formAddPosition" action="{{ route('positions.create') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">    
                            <input id="id" name="id" hidden>
                            <div>
                                <label for="name" class="form-label">Nombre</label>
                                <select class="form-select" name="id_employee" id="id_employee">
                                </select>
                            </div>
                            <div>
                                <label for="rol" class="form-label">Rol</label>
                                <select class="form-select" name="id_rol" id="id_rol">
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="position" class="form-label">Cargo</label>
                                <select class="form-select" name="id_position" id="id_position">
                                </select>
                            </div>
                            <div>
                                <label for="boss" class="form-label">Jefe</label>
                                <select class="form-select" name="id_boss" id="id_boss">
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" form="formAddPosition" class="btn btn-primary">Guardar</button>
            </div>            
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#addPosition').on('show.bs.modal', function (event) {
            let button = $(event.relatedTarget);
                
            let roles = button.data('roles');
            let areas = button.data('areas');
            let employees = button.data('employees');

            let modal = $(this);
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

            selectEmployee = modal.find('.modal-body #id_employee');
            selectEmployee.empty();
            selectEmployee.append('<option value="">Seleccione una opción</option>');
            $.each(employees, function(index, option) {
                selectEmployee.append('<option value="' + option.id + '">' + option.name +' '+ option.lastname + '</option>');
            });
        });
    });
</script>