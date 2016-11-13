function update_state(state_id) {
  $(document).ready(function() {
    $('#updatStateForm'+ state_id).on('submit', function(e){
        var new_content = $('#update_state_content'+ state_id).val();
        var new_duedate = $('#update_state_due_date'+ state_id).val();
        var new_status = $('#update_state_status'+ state_id).find(":selected").text();
         $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
          url:"/my/state/update/" + state_id,
          type: "put",
          data : {'_token': $('input[name=_token]').val(), 'content' : new_content, 'due_date': new_duedate,'status': new_status},
          success: function(data) {
            swal({
            title: "Success!",
            text: "This task was updated!",
            type: "success",
            timer:2000,
            confirmButtonText: "OK"
            });
            location.reload();
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