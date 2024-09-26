<div class="modal fade" id="addEmployee" tabindex="-1" aria-labelledby="addEmployeeLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-start">
                    <h5 class="modal-title" id="addEmployeeLabel">Nuevo empleado</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formEmployee" action="{{ route('employees.create') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div>
                                    <label for="name" class="form-label">Nombre</label>
                                    <input type="text" required class="form-control" id="name" name="name">
                                </div>
                                <div>
                                    <label for="document" class="form-label">Identificación</label>
                                    <input type="text" required class="form-control" id="document" name="document">
                                </div>
                                <div>
                                    <label for="city" class="form-label">Ciudad</label>
                                    <input type="text" required class="form-control" id="city" name="city">
                                </div>
                                <div>
                                    <label for="address" class="form-label">Dirección</label>
                                    <input type="text" required class="form-control" id="address" name="address">
                                </div>
                            </div>
                            <div class="col">
                                <div>
                                    <label for="lastname" class="form-label">Apellidos</label>
                                    <input type="text" required class="form-control" id="lastname" name="lastname">
                                </div>
                                <div>
                                    <label for="phone" class="form-label">Telefono</label>
                                    <input type="text" required class="form-control" id="phone" name="phone">
                                </div>
                                <div>
                                    <label for="department" class="form-label">Departamento</label>
                                    <input type="text" required class="form-control" id="department" name="department" disabled>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" form="formEmployee" class="btn btn-primary">Guardar</button>
                </div>            
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        var city = $('#city');
        var department = $('#department');

        function checkCity() {
            if (city.val().trim() !== "") {
                department.prop('disabled', false);
            } else {
                department.prop('disabled', true);
            }
        }

        checkCity();

        city.on('input', function() {
            checkCity();
        });
    });
</script>