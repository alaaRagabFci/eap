  

$(document).ready(function() {

  $("#submitForm").on('click', function(e){
    $('#addModal').modal('hide');
  });

       //add siteoption
       $("#addModal form").on('submit', function(e){
        if (!e.isDefaultPrevented())
        {
          var self = $(this);
          $.ajax({
            url: self.closest('form').attr('action'),
            type: "POST",
            data: self.serialize(),
            success: function(res){
              $('.addForm')[0].reset();
              swal({
                title: "Inserted successfully", 
                type: "success",
                closeOnConfirm: false,
                confirmButtonText: "OK !",
                confirmButtonColor: "#ec6c62",
                allowOutsideClick: true
              });
              oTable.draw();
            },
            error: function(){
              $('#addModal').modal('hide');
              swal({
                title: "Inserted Failed",
                type: "error",
                closeOnConfirm: false,
                confirmButtonText: "OK !",
                confirmButtonColor: "#ff0000",
                allowOutsideClick: true
              });
            }
          });
          e.preventDefault();
        }
      });

      //Update
      $("#editModal form").validator().on('submit', function(e){
       if (!e.isDefaultPrevented())
       {
         var self = $(this);
         $.ajax({
           url: self.closest('form').attr('action') + "/" +  self.attr("data-id"),
           type: "POST",
           data: "_method=PUT&" + self.serialize(),
           success: function(res){
             $('#editModal').modal('hide');
             swal({
              title: "Updated successfully", 
              type: "success",
              closeOnConfirm: false,
              confirmButtonText: "OK !",
              confirmButtonColor: "#ec6c62",
              allowOutsideClick: true
            });
             oTable.draw();
           },
           error: function(){
             $('#editModal').modal('hide');
             swal({
              title: "Updated Failed", 
              type: "error",
              closeOnConfirm: false,
              confirmButtonText: "OK !",
              confirmButtonColor: "#ff0000",
              allowOutsideClick: true
            });
           }
         });
         e.preventDefault();
       }
     });

      

    });