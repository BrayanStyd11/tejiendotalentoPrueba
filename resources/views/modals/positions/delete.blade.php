<!-- Modal de confirmación -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmar Eliminación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que deseas eliminar los registros de <span id="itemName"></span>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger" id="confirmDelete">Eliminar</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        let id = null;
        $('#confirmDeleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);  
            var data = button.data('employee');
            id = data.id;
            var modal = $(this)
            modal.find('#itemName').text(data.name+' '+data.lastname);
        });

        // Acción de eliminación confirmada
        $('#confirmDelete').on('click', function(event) {
            window.location.href = "http://localhost:8000/employees/delete/"+id
            $('#confirmDeleteModal').modal('hide'); // Cierra el modal
        });
    });
</script>