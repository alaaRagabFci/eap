$(document).ready(function()
{
    //  $("#submitForm").on('click', function(e){
    //   $('#addModal').modal('hide');
    // });

///////////////////////////insert///////////////////////////////////////
    var options = {
        success:       afterSuccess,  // post-submit callback
        error:         error  // post-submit callback
    };
    $('.addForm').ajaxForm(options);

    function error()
    {
        swal({
            title: "Error ocurred",
            type: "error",
            closeOnConfirm: false,
            confirmButtonText: "Ok!",
            confirmButtonColor: "#ec6c62",
            allowOutsideClick: true
        });

    }

    function afterSuccess(res)
    {
        $('#addModal').modal('hide');
        swal({
            title: "Created successfully",
            type: "success",
            closeOnConfirm: false,
            confirmButtonText: "Ok!",
            confirmButtonColor: "#ec6c62",
            allowOutsideClick: true
        });
        $('.addForm')[0].reset();
        oTable.draw();
    }

    ///////////////////////////////////Update//////////////////////////////////////
    var options_update = {
        success:       afterSuccess_update,  // post-submit callback
        error:         error_update  // post-submit callback
    };
    $('.editForm').ajaxForm(options_update);

    function error_update()
    {
        swal({
            title: "Error ocurred",
            type: "error",
            closeOnConfirm: false,
            confirmButtonText: "Ok!",
            confirmButtonColor: "#ec6c62",
            allowOutsideClick: true
        });
        // $('#editModal').modal('hide');
    }

    function afterSuccess_update(res)
    {
        swal({
            title: "Updated successfully",
            type: "success",
            closeOnConfirm: false,
            confirmButtonText: "Ok!",
            confirmButtonColor: "#ec6c62",
            allowOutsideClick: true
        });
        $('.editForm')[0].reset();
        $('#editModal').modal('hide');
        oTable.draw();
    }

});