<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editEmployeeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="editEmployeeModalLabel"><i class="fa fa-pencil"></i> Update</h4>
            </div>
            <form role="form" id="update_form" method="POST" class="editForm" data-id="" action="{{ url($modal) }}" data-toggle="validator">
                <div class="modal-body">
                    @include($modal.'.form_update')
                </div>
                <div class="modal-footer">
                    <button type="submit" id="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>