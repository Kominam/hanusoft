function deleteState(state_id) {
$(document).ready(function() {
      $.ajaxSetup({
         headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
       });
     $('a[href="#deletestate'+state_id+'"]').click(function(){
         $.ajax({
             url:'/my/state/delete/'+ state_id,
             type: "get",
             success: function(data) {  
               $('#state'+state_id).remove();
               swal({
                  title: "Success!",
                  text: "Delete successful!",
                  type: "success",
                  timer: 1500,
                  confirmButtonText: "OK"
                });
                   },
                    error: function () {
            swal({
                title: "Whoops!",
                text: "Sorry, something went wrong!",
                type: "error",
                confirmButtonText: "OK"
              });
          }
           });
 });
 });
}